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
     background:#990000 url(img/subte.jpg) no-repeat center top;
	-webkit-background-size: cover;
    }
   </style>
   
	  
	  
	  
   </head>
   <body>

<?php


function verificar_login($user,$password,&$result) {

$user=$_POST['user'];
$password=$_POST['password'];
 mysql_connect("localhost","root","");
		 
		 mysql_select_db("primeraweb");
		$sql="SELECT * FROM personas WHERE user = '$user' and password = '$password'";
		  $rec = mysql_query($sql);
		  $count=0;
		     while($row = mysql_fetch_object($rec))
			 {
			  $count++;
        $result = $row;
			 
		 }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['id']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
		echo "usuario registrado en la bd"; 
		
            $_SESSION['id'] = $result->id;
            header('location:http://localhost/primeraweb');
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente ,jajajaja aweonao ella jajajja.</div>';
        }
    }
	?>
	
	<form action="" method="post" class="form-4">
	<div><label>Username</label><input name="user" type="text" ></div>
	<div><label>Password</label><input name="password" type="password"></div>
	<div><input name="login" type="submit" value="login"></div>
	 <a href="actualizar_password.php"> Olvidaste tu clave !!    </a> 
		 <a href="registrar.php" align="right"> Registrate </a>
		  <a href="login.php" align="right"> Login </a>
</form>
 </body>
</html>
<?php
} else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Logout</a>';
}
?>