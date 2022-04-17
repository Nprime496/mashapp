  
# This function returns true if  
# woman 'w' prefers man 'm1' over man 'm' 
def wPrefersM1OverM(prefer, w, m, m1):
    N=len(prefer[0])#number of men
    # Check if w prefers m over her  
    # current engagment m1 
    for i in range(N): 
          
        # If m1 comes before m in lisr of w,  
        # then w prefers her current engagement, 
        # don't do anything 
        if (prefer[w][i] == m1): 
            return True
  
        # If m cmes before m1 in w's list,  
        # then free her current engagement  
        # and engage her with m 
        if (prefer[w][i] == m): 
            return False
  

# Prints stable matching for N boys and N girls.  
# Boys are numbered as 0 to Nm.  
# Girls are numbered as Nm to Nw+Nm. 
def stableMarriage(mprefer,wprefer):
    """
        This function return a dict representing a stable mariage using Gale-Shapley algorithm.

        :mprefer: preferences of propo 
                Ex: mprefer=[[0,1],[1,0]]
        :wprefer: preferences of women
                Ex: wprefer=[[0,1],[1,0]]

        returns:
                A dict representing stable mariage. ie: keys are women and values men.

    """
    alreadyTaken=[]
    Nm=len(mprefer)
    Nw=len(wprefer)
    result={i:[] for i in range(Nw)}
    # Stores partner of women. This is our output  
    # array that stores paing information.  
    # The value of wPartner[i] indicates the partner  
    # assigned to woman N+i. Note that the woman numbers  
    # between N and 2*N-1. The value -1 indicates  
    # that (N+i)'th woman is free 
    
  
    # An array to store availability of men.  
    # If mFree[i] is false, then man 'i' is free, 
    # otherwise engaged. 


    #print(alreadyTaken)
    tmpwPartner=[]
    
    while len(alreadyTaken)<Nm:#while men with no women yet
    
        mFree = [i in alreadyTaken for i in range(Nm)] 
        wPartner = [-1 for i in range(Nw)] 
      
        freeCount = Nm-len(alreadyTaken)
        
        c=0
        # While there are free men 
        while (freeCount > 0):
            if tmpwPartner==wPartner:
                c+=1
            else:
                c=0
            if c>=Nm:
                break
                
            tmpwPartner=wPartner.copy()
            # Pick the first free man (we could pick any) 
            m = 0
            while (m < Nm): 
                if (mFree[m] == False): 
                    break
                m += 1
      
            # One by one go to all women according to  
            # m's preferences. Here m is the picked free man 
            i = 0
            
            while i < Nw and mFree[m] == False: 
                w = mprefer[m][i] 
      
                # The woman of preference is free,  
                # w and m become partners (Note that  
                # the partnership maybe changed later).  
                # So we can say they are engaged not married 
                #print("w",w)
                #print("Nw",Nw)
                
                if (wPartner[w] == -1):
                    
                    wPartner[w] = m 
                    mFree[m] = True
                    freeCount -= 1
      
                else:  
                      
                    # If w is not free 
                    # Find current engagement of w 
                    m1 = wPartner[w] 
      
                    # If w prefers m over her current engagement m1, 
                    # then break the engagement between w and m1 and 
                    # engage m with w. 
                    if (wPrefersM1OverM(wprefer, w, m, m1) == False): 
                        wPartner[w] = m 
                        mFree[m] = True
                        mFree[m1] = False
                i += 1
                #a=input()
                #input()
                # End of Else 
            # End of the for loop that goes  
            # to all women in m's list 
        # End of main while loop 
        # Prthe solution 
        
        for i in range(Nw):
            if(wPartner[i]!=-1):
                result[i].append(wPartner[i])
        tmpalreadytaken=wPartner.copy()
        wprefer=removeAlreadyTaken(wprefer,tmpalreadytaken)
        alreadyTaken+=tmpalreadytaken
    #print("result ",result)
    return result

def removeAlreadyTaken(prefer,alreadyTaken):
    #change order in preference list to make already taken elements less important than those wich need to be chosen
    for preference in prefer:
        i=0
        for j in range(len(preference)):
            if preference[j] not in alreadyTaken:
                tmp=preference[j]
                preference[j]=preference[i]
                preference[i]=tmp
                i+=1
    return prefer
    