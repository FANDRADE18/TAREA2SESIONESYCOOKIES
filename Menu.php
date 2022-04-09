

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css"> 
    <style>
        h1,h2{
            color:#2980B9;
        }
        h3{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php 
session_start();

if(!empty($_SESSION['json'])){
    foreach ($_SESSION['json'] as $item) {
        $josn=json_decode($item,true);
        if($josn['Logueado']=="si")
        echo '<div class="uno"><h1>El usuario '.$josn['Nombre'].'</h1><br> <h2> se logueo correctamente con el pass: '.$josn['Password'].'</h2><br></div>';
        else
        echo '<div class="uno"><h3>El usuario '.$josn['Nombre']." fallo el loguin con el pass: ".$josn['Password'].'</h3><br></div>';

    }
     
}
//$_SESSION['json']=array();
?>
</body>
</html>
