<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Hipotenusa</title>

    <style>
        div {
            text-align:center
        }
    </style>
</head>
<body>

    <?php

        $a = 3;
        $b = 4;

        $c = sqrt(pow($a,2) + pow($b,2));

    ?>

    <div class="container">
    
        <h2>Cálculo de la hipotenusa de un Triángulo Rectángulo</h2>

        <div>
            <h3>Formula: c&sup2 = a&sup2 + b&sup2</h3>
            <h3>a = 3</h3>
            <h3>b = 4</h3>
            <br>
            <h3>La hipotenusa (c) es igual a <?php echo $c; ?></h3>
        </div>

    </div>

</body>

</html>