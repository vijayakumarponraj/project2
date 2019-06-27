
<html>
<?php
$con=mysqli_connect("localhost","root","","News");
 session_start();
  ?>
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
if(isset($_POST['SignIn'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query1= "select * from admin where username='$username' AND password='$password'";
	$runquery1=mysqli_query($con,$query1);
	if(mysqli_num_rows($runquery1)>0){
		header('location:dashboard.php');
		$_SESSION['username']=$username;
		
	}
	else{
		echo'<script>alert("Invalid username and password")</script>';
	}
}

?>