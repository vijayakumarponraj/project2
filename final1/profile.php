<html>
<head>
<title> Admin Panel </title>
<meta charset="UTF-8">
   <meta name="Author" content="Kasirajapandian">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/admin.css" type="text/css">
<body>
 <div class="row">
  <div class=col-md-3>
  <div class="heading">
   <h3 style="text-align: center; font-weight: bold; color: white; line-height: 60px;"> Admin Panel </h3>
   </div>
      <div class="pro">
  <center> <img src="img/avatar.png" class="img img-circle"> </center>
   </div>
   <div class="menu">
    <ul>
	<li> <a href="dashboard.php">Dashboard </a> </li>
	
	<li> <a href="view.php"> Insert/View</a> </li>
	<li> <a href="analytics.php"> Analytics </a> </li>
	<li  class="active"> <a href="profile.php"> Profile</a> </li>
	</ul>
   </div>
   </div>
   <div class=col-md-9 style="background: #f5f5f5;">
   <div class="container-fluid">
   <form>
   <button class="btn btn-danger" style="float: right; margin-right: 20px"> 
   Logout
   </button>
   </form>
   </div>
   <div class="container" style="background: white ; border:0px solid; position: absolute; width: 650px ;height:500px;">
   
   <h2 style="font-weight: bold"> View </h2>
   <h3> Change password </h3>
   <hr>
   <form action=insertnews.php" method="post">
   <label for=name> Write a Old Password </label>
   <input required type="text" name="name" id=name class="form-control">
   <label for=name> Write a New Password </label>
   <input required type="text" name="name" id=name class="form-control">
   <label for=name> Confirm Password </label>
   <input required type="text" name="name" id=name class="form-control">
   
   
   <br>
   
   <br>
   <button class="btn btn-success" style="float: right"> Update </button>
   </form>
   
   
   
   <br>
   <br>
	
	
	
   </div>
  
   
   </div>
</head> 
</html>