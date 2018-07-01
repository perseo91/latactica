<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      <title>Login</title>
      <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
      <script type="text/javascript" src="login.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
	  
	    <style>
   body {
     background:#990000 url(imagenes/subte.jpg) no-repeat center top;
	-webkit-background-size: cover;
    }
   </style>
   
	  
	  
	  
   </head>
   <body>
 
     <form class="form-4">
   
         <label for="user">Usuario:</label>
		 <input type="text" name="user" id="user" placeholder="Nombre" required /><br/>
         <label for="password">Password:</label>
		 <input type="password" name="password" id="password" placeholder="Clave" required/><br/>
         <input type="checkbox" id="show"/> <label for="show" name="show">Mostrar password.</label><br/>
         <input type="submit" value="login"/> 
		 <p>
		 <a href="actualizar_password.php"> Olvidaste tu clave !!    </a> 
		 <a href="registrar.php" align="right"> Registrate </a>
		  <a href="login.php" align="right"> Login </a>
		 </p>
      </form>
   </body>
</html>