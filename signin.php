<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
	$password=md5($_POST['password']);
	
    $query=mysqli_query($con,"select ID from tbluser where  Email='$email' && Password='$password' ");
	$ret=mysqli_fetch_array($query);
	
    if($ret>0){
      $_SESSION['detsuid']=$ret['ID'];
     header('location:summary.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="signin.css">
	
</head>
<body>
	  
	
	<div class="row">
		<a href="index.php">
            <h1><img src="home.png" height="30px" style="margin-left:675px;"></h1>
    	</a>
			<h2 align="center"><b>Expense Tracker</b></h2>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<center>
				<div class="panel-heading" style="color: rgb(29, 179, 31); font-size:30px">Sign in</div>
				</center>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">Sign In</button><span style="padding-left:250px">
								<a href="signup.php" class="btn btn-primary">Sign Up</a></span>
							</div>
							</fieldset>
					</form>
				</div>
		</div>
	</div>	
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
