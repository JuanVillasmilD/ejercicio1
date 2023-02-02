<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Resultados</title>
</head>
<body background="./img/wallpaper.jpg">
    
</body>
</html>

<?php

if (isset($_POST['btn'])) {
    $nombre = $_POST['nombre'];

    // Variables para los totales
    $femtotal = 0;
    $homcastotal = 0;
    $femviutotal = 0;
    $cantedades = 0;
    $masedades = array();
    $promediomas = 0;

    // Iniciar los arreglos donde se van a almacenar los datos
    $sexos = array();
    array_push($sexos, $_POST['sexo1'], $_POST['sexo2'], $_POST['sexo3'], $_POST['sexo4'], $_POST['sexo5']);
    $civiles = array();
    array_push($civiles, $_POST['civil1'], $_POST['civil2'], $_POST['civil3'], $_POST['civil4'], $_POST['civil5']);
    $sueldos = array();
    array_push($sueldos, $_POST['sueldo1'], $_POST['sueldo2'], $_POST['sueldo3'], $_POST['sueldo4'], $_POST['sueldo5']);
    $edades = array();
    array_push($edades, $_POST['edad1'], $_POST['edad2'], $_POST['edad3'], $_POST['edad4'], $_POST['edad5']);

    echo "<form>";
    echo "<br>";
    // Ciclo for para contar cuantas mujeres hay.
    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "fem") {
            $femtotal = $femtotal + 1;
        }
    }
    echo "<h3>Total de mujeres: " . $femtotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // Ciclo for para contar cuantos hombres casados que ganen mas de 2500 Bs hay.
    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "mas" && $civiles[$var] == "cas" && $sueldos[$var] == "mas") {
            $homcastotal = $homcastotal + 1;
        }
    }
    echo "<h3>Total de hombres casados que ganan mas de 2500 Bs: " . $homcastotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // Ciclo for para contar cuantas mujeres viudas que ganen mas de 1000 Bs hay.
    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "fem" && $civiles[$var] == "viu" && ($sueldos[$var] == "entre" || "mas")) {
            $femviutotal = $femviutotal + 1;
        }
    }
    echo "<h3>Total de mujeres viudas que ganan mas de 1000 Bs: " . $femviutotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // Ciclo for para sacar promedio de la edad de los hombres.
    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "mas") {
            $suma = 0;
            array_push($masedades, $edades[$var]);
            $cantedades = count($masedades);
            foreach ($masedades as $masedad) {
                $suma += $masedad;
            }
            $promediomas = $suma / $cantedades;
        }
    }
    echo "<h3>Edad promedio de los hombres: " . $promediomas . "</h3>";
    echo "</form>";
}


?>