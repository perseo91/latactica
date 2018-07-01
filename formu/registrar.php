<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8" />
		 </head>
   <body>
 
     <form action="insertar.php" method="post">
   <h2> Formulario de registro </h2>
         <label for="user"> Ingrese nombre de usuario:</label>
		 <input type="text" name="user" id="user" placeholder="Nombre" required /><br/>
		   <label for="user"> Ingrese dirección:</label>
		 <input type="text" name="direccion" id="direccion" placeholder="direccion" required /><br/>
		   <label for="correo"> Ingrese correo:</label>
		 <input type="email" name="correo" id="correo" placeholder="direccion" required /><br/>
		  <label for="password">Password:</label>
		 <input type="password" name="password" id="password" placeholder="Clave" required/><br/>
		    <input type="submit" value="login"/> 
           </form>
		
   </body>
</html>