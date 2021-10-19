<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'send') {

    $valores = ['name','lastname','id','salary','dep','place'];

    $empl1 = array();
    $empl2 = array();
    $empl3 = array();


    foreach($valores as $key){

        $empl1[$key] = $_POST[$key . '1'];
        $empl2[$key] = $_POST[$key . '2'];
        $empl3[$key] = $_POST[$key . '3'];

    }

    $empleados = array(
        'Empleado #1' => $empl1,
        'Empleado #2' => $empl2,
        'Empleado #3' => $empl3
    );


    print json_encode($empleados);

}else{
    header('location: index.html');

}

?>
    
</body>
</html>