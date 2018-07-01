<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8" />
		 </head>
   <body>
<?php   
   if (!isset ($_SESSION['id']))
   {
   if(isset($_POST['login']))
   {
   if(verificar_login($_POSR['user'],$_POST['password'],$result)==1)
   {
   $_SESSION['id'] = $result ->id;
   header("location:http://localhost/primeraweb");
   }
   else
   {
   echo '<div class="error"> Su usuario es incorrecto ,intente nuevamente.</div>';
   }
   }
   ?>
     <form action="login.php" method="post" class="login">
   <h2> Formulario de registro </h2>
         <label for="user"> Ingrese nombre de usuario:</label>
		 <input type="text" name="user" id="user" placeholder="Nombre" required /><br/>
		  <label for="password">Password:</label>
		 <input type="password" name="password" id="password" placeholder="Clave" required/><br/>
		    <input type="submit" value="login"/> 
           </form>
		   <?php
		   }else {
		   echo 'Su usuario ingreso correctamento.';
		 }
		 ?>
		   
		
   </body>
</html>