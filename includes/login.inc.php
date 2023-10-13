<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];
	// $password = password_hash($password, PASSWORD_DEFAULT);
	// echo htmlspecialchars($username);

	try{
		require_once "db.inc.php";
		require_once 'login_model.inc.php';
		require_once 'login_contr.inc.php';

		$errors = [];

		$result = get_user($pdo, $username);		

		if(is_username_wrong($result)){
			$errors["login_incorrect"] = "Username salah!";
		}

		if(!is_username_wrong($result) && is_password_wrong($password,$result["password"])){
			$errors["login_incorrect"] = "Password salah!";
		}

		require_once 'session.inc.php';

		if($errors){
			$_SESSION['errors_signup'] = $errors;

			header("Location: ../login.php");
			die();
		}



		$pdo = null;
		$stmt = null;

		header("Location: ../Basic.html?login=success");

		die();
	} catch(PDOException) {
		die("Query failed : ". $e->getMessage());
	}
}
else{
	header("Location: ../login.php");
	die();
}