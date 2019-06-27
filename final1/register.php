<?php
 $con=mysqli_connect("localhost","root","","News");
session_start();
  ?>
<html>
<head>
<meta charset="UTF-8">
   <meta name="Author" content="viji">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">
<title> Login </title>
<body>
<div class="box">
	<h2>Login</h2>
	<form method="post" enctype="multipart/form-data">

		<div class="inputbox">
			<input type="text"  placeholder="User name">
		</div>
		<div class="inputbox">
			<input type="password"   placeholder="Password">
		</div>
		<input type="submit" name="" value="submit">
		<a href="register.php"><input type="button" name="Register" value="Register" /></a>
	</form>
</div>
</body>
</html>
<?php
if(isset($_POST['Register'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query2="insert into admin (username,password) values('$username','$password')";
	$runquery2=mysqli_query($con,$query2);
	if($runquery2){
		echo'<script>alert("Account has been register")</script>';
		header('location:login.php');
		$_SESSION['username']=$username;
		
	}
}


?>