<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <h1 id="titulo">Sistema de Ingreso de Empleados</h1>
        <br>
        <hr>
        <h1>Empleado 1</h1>
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad1" placeholder="Edad">
        <select name="sexo1">
            <option>- Sexo -</option>
            <option value="fem">Femenino</option>
            <option value="mas">Masculino</option>
        </select>
        <select name="civil1">
            <option>- Estado Civil -</option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="viu">Viudo(a)</option>
        </select>
        <select name="sueldo1">
            <option>- Sueldo -</option>
            <option value="menos">Menos de 1000 Bs</option>
            <option value="entre">Entre 1000 y 2500 Bs</option>
            <option value="mas">Mas de 2500 Bs</option>
        </select>

        <br><br>
        <h1>Empleado 2</h1>
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad2" placeholder="Edad">
        <select name="sexo2">
            <option>- Sexo -</option>
            <option value="fem">Femenino</option>
            <option value="mas">Masculino</option>
        </select>
        <select name="civil2">
            <option>- Estado Civil -</option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="viu">Viudo(a)</option>
        </select>
        <select name="sueldo2">
            <option>- Sueldo -</option>
            <option value="menos">Menos de 1000 Bs</option>
            <option value="entre">Entre 1000 y 2500 Bs</option>
            <option value="mas">Mas de 2500 Bs</option>
        </select>

        <br><br>
        <h1>Empleado 3</h1>
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad3" placeholder="Edad">
        <select name="sexo3">
            <option>- Sexo -</option>
            <option value="fem">Femenino</option>
            <option value="mas">Masculino</option>
        </select>
        <select name="civil3">
            <option>- Estado Civil -</option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="viu">Viudo(a)</option>
        </select>
        <select name="sueldo3">
            <option>- Sueldo -</option>
            <option value="menos">Menos de 1000 Bs</option>
            <option value="entre">Entre 1000 y 2500 Bs</option>
            <option value="mas">Mas de 2500 Bs</option>
        </select>

        <br><br>
        <h1>Empleado 4</h1>
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad4" placeholder="Edad">
        <select name="sexo4">
            <option>- Sexo -</option>
            <option value="fem">Femenino</option>
            <option value="mas">Masculino</option>
        </select>
        <select name="civil4">
            <option>- Estado Civil -</option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="viu">Viudo(a)</option>
        </select>
        <select name="sueldo4">
            <option>- Sueldo -</option>
            <option value="menos">Menos de 1000 Bs</option>
            <option value="entre">Entre 1000 y 2500 Bs</option>
            <option value="mas">Mas de 2500 Bs</option>
        </select>

        <br><br>
        <h1>Empleado 5</h1>
        <input type="text" name="nombre" placeholder="Nombre y Apellido">
        <input type="number" name="edad5" placeholder="Edad">
        <select name="sexo5">
            <option>- Sexo -</option>
            <option value="fem">Femenino</option>
            <option value="mas">Masculino</option>
        </select>
        <select name="civil5">
            <option>- Estado Civil -</option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="viu">Viudo(a)</option>
        </select>
        <select name="sueldo5">
            <option>- Sueldo -</option>
            <option value="menos">Menos de 1000 Bs</option>
            <option value="entre">Entre 1000 y 2500 Bs</option>
            <option value="mas">Mas de 2500 Bs</option>
        </select>

        <input type="submit" name="btn" value="Enviar">
    </form>


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
    // Ciclo for para contar cuantas mujeres hay
    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "fem") {
            $femtotal = $femtotal + 1;
        }
    }
    echo "<h3>Total de mujeres: " . $femtotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "mas" && $civiles[$var] == "cas" && $sueldos[$var] == "mas") {
            $homcastotal = $homcastotal + 1;
        }
    }
    echo "<h3>Total de hombres casados que ganan mas de 2500 Bs: " . $homcastotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    for ($var = 0; $var <= 4; $var++) {
        if ($sexos[$var] == "fem" && $civiles[$var] == "viu" && ($sueldos[$var] == "entre" || "mas")) {
            $femviutotal = $femviutotal + 1;
        }
    }
    echo "<h3>Total de mujeres viudas que ganan mas de 1000 Bs: " . $femviutotal . "</h3>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";

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