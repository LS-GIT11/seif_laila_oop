# Object oriented programming

## What is it?
Programming approach where we take concepts, data, functions etc.
and group them into "object"

classes
interfaces
traits
(abstract) classes

## Why OOP?
- Resusability
    - splitting our code into "objects" allows us to group similar concepts, data, functions etc. together
    - ie. Animals have animal-related functions, Plants have plant related functions
- Organization
    - by splitting our code into "objects" that each represent some concept, we're able to more easily find related functionality and concepts based on what "object" they are inside of
- Maintainability


## How OOP?
- Modularity
    - the ability to break our code into "objects" / components allows the above ^ benefits (like puzzle pieces)
- Inheritance
    - Animal (functionality defined here)
        - Dog (is also available here)
            - Golden Retriever
            - Pug
        - Cat (and here)
        - Bird (and here)
- Polymorphism
    - Poly = Many, morph = form(s)
    - each unit of code / each sub-concept (i.e. Dog, Cat, Bird) works the same as and in place of the superclass (ie. Animal)

    function (Animal) {

    }
- Encapsulation
    function () {
        $myVar = true;
    }

    echo $myVar;

API = Application Programming Interface
    Appliation  = anything

public vs. private is kind of like saying something out loud
    vs. thinking it in your head