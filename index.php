<?php
spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    require_once $filepath;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

    <?php
// i like adding functions to make the sentences look better and to show the attack and evolve functions!! :) seprating with the "." makes it easier for me to read personally.

        function showPokemon(StarterInterface $pokemon){
            echo "<p>" . $pokemon->getName() . " - " . $pokemon->getType() . " type! " . " " . $pokemon->attack() . "</p>";
        }
// i’m testing the four type classes now here replacing the previous three so i can see the override working

// i also added bulbasaur to show that we can easily add new pokemon by just creating a new class that extends the grass starter class and then calling the parent constructor with the appropriate values. this way we can easily create new pokemon without having to change the existing code and we can also see the evolve function working for all the pokemon without having to change the existing code.

        $waterStarter = new Squirtle();
        $fireStarter = new Charmander();
        $grassStarter = new Chikorita();
        $bulbasaur = new Bulbasaur();

// using the function to display the pokemon info!

        showPokemon($waterStarter);
        showPokemon($fireStarter);
        showPokemon($grassStarter);
        showPokemon($bulbasaur);

        // var_dump($waterStarter);
        // var_dump($fireStarter);
        // var_dump($grassStarter);
        // var_dump($bulbasaur);

// comment this out so it looks cleaner and we can see the evolve function working without the var_dumps getting in the way

// below is the same as what i did for the showPokemon function but for the evolve function ...
        
        function evolvePokemon(StarterPokemon $pokemon){
            echo "<p>" . $pokemon->getName() . " " . $pokemon->evolve() . "</p>";
        }
 
        evolvePokemon($waterStarter);
        evolvePokemon($fireStarter);
        evolvePokemon($grassStarter);
        evolvePokemon($bulbasaur);
    ?>

    

</body>
</html>