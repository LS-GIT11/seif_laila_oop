<?php

interface StarterInterface {

// below just gets the name and type of the pokemon and the attack function that will be used in the starter pokemon class and then inherited by the specific types of starter pokemon classes... straight forward...
    public function getName();
    public function getType();
    public function attack();
}

?>