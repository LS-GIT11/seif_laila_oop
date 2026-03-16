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
    <!--i’m testing the three type classes here so i can see the override working-->
    <?php
        $grassStarter = new GrassStarter('Bulbasaur', 'Kanto', 'Grass');
        var_dump($grassStarter);

        $fireStarter = new FireStarter('Charmander', 'Kanto', 'Fire');
        var_dump($fireStarter);

        $waterStarter = new WaterStarter('Squirtle', 'Kanto', 'Water');
        var_dump($waterStarter);
    ?>

</body>
</html>