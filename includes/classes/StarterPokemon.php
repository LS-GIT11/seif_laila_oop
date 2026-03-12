<?php

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