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

        $waterStarter = new Squirtle();
        $fireStarter = new Charmander();
        $grassStarter = new Chikorita();
        $bulbasaur = new Bulbasaur();

        showPokemon($waterStarter);
        showPokemon($fireStarter);
        showPokemon($grassStarter);
        showPokemon($bulbasaur);

        // var_dump($waterStarter);
        // var_dump($fireStarter);
        // var_dump($grassStarter);
        // var_dump($bulbasaur);

// comment this out so it looks cleaner and we can see the evolve function working without the var_dumps getting in the way
        
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