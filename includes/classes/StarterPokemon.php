<?php

// this is the parent class for all the starter pokemon. it adds the name, region and type properties to the pokemon and also adds the attack function that will be used by all the starter pokemon. it also uses the evolve trait to add the evolve function to all the starter pokemon.

class StarterPokemon implements StarterInterface
{
    use Evolve;
    
    protected $name;
    protected $region;
    protected $type;

    public function __construct(string $name, string $region, string $type)
    {
        $this->name = $name;
        $this->region = $region;
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function attack()
    {
        return 'uses a move';
    }
}

?>
