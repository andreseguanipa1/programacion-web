<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuación de 2do Grado</title>
</head>
<body>
 <?php

    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $lado = $_POST['lado'];
        $ap = null;
        $area = null;

        if(isset($_POST['lado']) && !empty($_POST['lado'])) {

        if(is_numeric($lado)){

            $ap = ($lado/(2 * (tan(deg2rad(22.5)))));
            $area = 4 * $lado * $ap;

            echo "<h3 align='center'>Datos del calculo del area del Octagono</h3>";
            echo "<h3 align='center'>Lado: " . $lado ."</h3>";
            echo "<h3 align='center'>Apotema: " . $ap ."</h3>";

            echo '<br />';
            echo "<h2 align='center'>El area es de " . $area ."</h2>";
            echo "<br/><br/>";
            unset($_POST['btn']);
            unset($_POST['lado']);
            echo "<a href='index.html'>Volver</a>";

        }else{
            echo "<br><h2>El dato ingresado no es numerico o esta vacio. Intente nuevamente</h2>";
            echo "<br/><br/>";
            unset($_POST['btn']);
            unset($_POST['lado']);
            echo "<a href='index.html'>Volver al atrás</a>";
        }

    }else{
        echo "<br><h2>El dato ingresado no es numerico o esta vacio. Intente nuevamente</h2>";
        echo "<br/><br/>";
        unset($_POST['btn']);
        unset($_POST['lado']);
        echo "<a href='index.html'>Volver al atrás</a>";
    }
    
 }else{
    header('location: index.html');
 }

?>
</body>

</html>