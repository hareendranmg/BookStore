<?php
	require_once "./functions/database_functions.php";
	$con = db_connect();
  $name = null;
  $email = null;
  $password = null;

  $name=$_POST['username'];
  $email=$_POST['email'];
  $password=($_POST['password']);
  if($name==null || $email==null || $password==null){
    echo "<script>alert('Not register something went worng');</script>";
    header("Location: signup.php");
  }
  else {
    $query=mysqli_query($con,"insert into users(name,email,password) values('$name','$email','$password')");
    header("Location: login.php");
  }
?>
