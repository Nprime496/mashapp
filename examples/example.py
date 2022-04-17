# We load the function from our package
from mashapp import stableMarriage

if __name__ == "__main__":

    # Let's specify men's preferences 
    # Man 0 prefers Woman 3,1,2,0 in this order
    # Man 1 prefers Woman 1, 0, 2, 3 in this order
    # etc
    preferences_men = [[3, 1, 2, 0], [1, 0, 2, 3],
            [0, 1, 2, 3], [0, 1, 2, 3]]


    # Let's specify Women's preferences 
    # Woman 0 prefers Woman 0, 1, 2, 3 in this order
    # Woman 1 prefers Woman 0, 1, 2, 3 in this order
    # etc
    
    preferences_women=[[0, 1, 2, 3], [0, 1, 2, 3],
            [0, 1, 2, 3], [0, 1, 2, 3]]
    
    print(stableMarriage(preferences_men,preferences_women))
