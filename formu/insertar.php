<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8" />
		 </head>
   <body>
   
      <?php     
	        #insertar datos de usario para conectar con mysql
		$user=$_POST['user'];
		$direccion=$_POST['direccion'];
		$correo=$_POST['correo'];
		$password=$_POST['password'];
		 mysql_connect("localhost","root","");
		 
		 mysql_select_db("primeraweb");
		 mysql_query("insert into personas (user,direccion,correo,password) values ('$user','$direccion','$correo','$password')");
		       header('location:http://localhost/primeraweb/sitio_enconstruccion.php');
		 
 
		?>
           
   
   
    </body>
</html>
