  <html> 
  <head>
  </head>
  <body>

		   
		   <?php
		   
		
		    mysql_connect("localhost","root","");
		 
		 mysql_select_db("primeraweb");
		 		 
			$correo=$_POST['correo'];	   
				   ?>
				      <form>
   <label for="user"> Ingrese correo:</label>
		 <input type="text" name="correo" id="correo" placeholder="direccion" required /><br/>
		  <input type="submit" value="login"/> 
           </form>
		   <?php
$sql =mysql_query ("select * from personas where correo ='.$correo.'");


if (mysql_num_rows($sql) !=0)
{
echo "correo existe en la base de datos";



} else {
echo "correo no registrado ";

}

?>

</body>
</html>
