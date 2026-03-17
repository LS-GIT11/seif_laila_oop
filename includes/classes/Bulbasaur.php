<?php

class Bulbasaur extends GrassStarter
{
    public function __construct()
    {
        parent::__construct('Bulbasaur', 'Kanto', 'Grass');
    }
}

// for each pokemon i made a file (so index.php is not too long) and then i made a class for each pokemon that extends the grass starter class and then i called the parent constructor to set the name, region and type of the pokemon. this way we can easily create new pokemon by just creating a new class that extends the grass starter class and then calling the parent constructor with the appropriate values.