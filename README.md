# MASHAPP

![](/ressources/groups.jpg)

## Description

This project aims to create pairs of people using the [Gale-Shapley Algorithm](https://en.wikipedia.org/wiki/Gale%E2%80%93Shapley_algorithm). Ultimate goal being to make an algorithm for the sponsorship of [ENSPY](https://polytechnique.cm/) students.

_"In mathematics, economics, and computer science, the Gale–Shapley algorithm (also known as the deferred acceptance algorithm or propose-and-reject algorithm) is an algorithm for finding a solution to the stable matching problem, named for David Gale and Lloyd Shapley who had described it as solving both the college admission problem and the stable marriage problem. It takes polynomial time, and the time is linear in the size of the input to the algorithm. It is a truthful mechanism from the point of view of the proposing participants, for whom the solution will always be optimal."_ from [wikpedia](https://en.wikipedia.org/wiki/Gale%E2%80%93Shapley_algorithm)

The major difference of this repo compared to the classic Gale Shapley algorithm is the implementation of a particular solution in the case where the number of males and females is different. Indeed, after a first passage in the algorithm, the men without women are again proposed to the women, which gives possibilities of polygamous marriage. Similarly, in the case where the number of men is lower than the number of women, the procedure stops as soon as there is a stable configuration with a subset of women.


The base code is inspired from [GeeksForGeeks](https://www.geeksforgeeks.org/stable-marriage-problem/?ref=gcse)

_Une magnifique [vidéo de "Science étonnante"](https://www.youtube.com/watch?v=dO1pLi2Dedw) qui présente le principe dans le cas de l'affectation des parcours supérieurs en France._

## How does it work ?
The project in its current version comes in the form of a python package that allows you to use the custom matching function. 

```python
# We load the function from our package
from mashapp import stableMarriage


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


```


## Improvements coming

The basic project being intended for the [ENSPY](https://polytechnique.cm/) for the association of godfathers-godchildren within the framework of school activities, modules will be added to facilitate the use of common files such as excel or csv files.


## Download:
`git clone https://github.com/nprime496/mashapp.git `

## Running:

- Make sure you have a python version >= 3.7.1 installed
- In the repo folder, run `python setup.py install` to install dependencies


## TODO

* add a `is_stable` function for testing purposes