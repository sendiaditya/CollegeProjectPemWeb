<?php

declare(strict_types=1);

function check_login_errors(){
	if(isset($_SESSION['errors_login'])){
		$errors = $_SESSION['errors_login'];
		
		foreach ($errors as $error) {
			echo '<p class="form-error">' . $errror . '</p>';
		}

		unset($_SESSION['errors_login']);
	}
}