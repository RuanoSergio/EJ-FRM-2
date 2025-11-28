<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo desde php</h1>
    <?php
        echo "<h1>Este es un párrafo generado por PHP.</h1>";
    ?>

    <?php
        $a = 100;
        $b = 2;
        $c = $a * $b;
        for ($i = 0; $i < $c; $i++) {
            echo "<h1> Hola mundo desde PhP" .$i."</h1>";
        }
    ?>

</body>
</html>