<?php
	session_start();

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$name = trim($_POST['username']);
	$pass = trim($_POST['password']);

	if($name == "" || $pass == ""){
		echo "Name or Pass is empty!";
		exit;
	}

	$name = mysqli_real_escape_string($conn, $name);
	$pass = mysqli_real_escape_string($conn, $pass);

	// get from db
	$query = "SELECT * from users where name='$name' and password='$$pass'";
	$result = mysqli_query($conn, $query);
	if($result){
	$_SESSION['login'] = true;
  mysqli_close($conn);
	header("Location: books.php");
	}
	else{
		echo "Name or password is wrong. Check again!";
		$_SESSION['login'] = false;
    mysqli_close($conn);
		exit;
	}
?>
