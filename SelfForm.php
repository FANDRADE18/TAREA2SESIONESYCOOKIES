<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body >
    <center>
    <h3 style="color:#2980B9">PRACTICA SESIONES Y COOKIES</h3>
    <form  method="post">
    <div class="logo">
      <img src="login.png"width="200" height="200" />   
    </div>
    <br><br><br>
    <div class="entradas">
     <input type="text" id="user" name="user"  placeholder="INGRESE SU USUARIO" style="color:#2980B9;width:20%; font-size:16px "/> <br><br>    
     <input type="text" id="pass" name="pass"  placeholder="INGRESE SU CONTRASEÑA" style="color:#2980B9;width:20%; font-size:16px " />     
    </div>
    <br><br>
    <div class="boton">
        <input type="submit" style="background-color:#2980B9; color:white;width:20%; font-size:16px " name="ValidaForm" value="Enviar Datos"/>
    </div>
 </form> 

 <?php 
   
   if(isset($_POST['ValidaForm'])){
       $nombre=$_POST['user'];
       $password=$_POST['pass'];
       if($nombre=="fandrade" && $password=="1997")
          {echo "Logueado correctamente";
            array_push($_SESSION['json'],'{"Nombre":"'.$nombre.'","Password":"'.$password.'","Logueado":"si"}');
            
            header('location:Menu.php');
           }
          else{
            array_push($_SESSION['json'],'{"Nombre":"'.$nombre.'","Password":"'.$password.'","Logueado":"no"}');
            echo "Los datos introducidos son incorrectos";
       
   }    }
 
 ?>
 </center>
</body>
</html>


