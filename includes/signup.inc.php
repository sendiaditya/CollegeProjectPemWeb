<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// echo htmlspecialchars($username);

	try{
		require_once "db.inc.php";
		require_once 'signup_model.inc.php';
		require_once 'signup_contr.inc.php';

		$errors = [];

		if(is_input_empty($username, $email, $password)){
			$errors["empty_input"] = "Isi semua field!";
		}
		if(is_email_invalid($email)){
			$errors["invalid_email"] = "Format email salah!";			
		}
		if(is_username_taken($pdo, $username)){
			$errors["username_taken"] = "Username sudah dipakai!";
		}
		if(is_email_registered($pdo, $email)){
			$errors["email_used"] = "Email sudah terdaftar!";
		}

		require_once 'session.inc.php';

		if($errors){
			$_SESSION['errors_signup'] = $errors;
			header("Location: ../register.php");
		}

		// create_user($pdo, $username, $email, $password);

		// header("Location: ../login.php");	

		// die();
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
		
		$stmt = $pdo->prepare($query);

		$stmt->execute([$username, $email, $hashedPassword]);

		$pdo = null;
		$stmt = null;

		header("Location: ../login.php?signup=success");

		die();
	} catch(PDOException) {
		die("Query failed : ". $e->getMessage());
	}
}
else{
	header("Location: ../register.php");
}