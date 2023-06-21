<?php       
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect.php"); 
	$name = $_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
try{
    $query="insert into feedback(name, email, message)    
values('$name','$email','$message')";
$dbname->exec($query);
header("location: index.php");
}
catch(PDOException $e) {
 echo '<div class="alert-warning" > ';
  echo $e->getMessage();
    }}
?>