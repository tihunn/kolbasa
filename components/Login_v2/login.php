<?php
session_start();
// Define the admin username and password
$adminUsername = "admin";
$adminPassword = "admin123"; // Change this to your desired password
$hashedAdminPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the submitted username and password
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["pass"];

    // Verify if the entered username exists and validate the password
    if ($enteredUsername === $adminUsername && password_verify($enteredPassword, $hashedAdminPassword)) {
        // Authentication successful, redirect to a protected page
        $_SESSION['username'] = 'admin';
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, display an error message
        $errorMessage = "Не правильный логин или пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="components/Login_v2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="components/Login_v2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="components/Login_v2/css/util.css">
	<link rel="stylesheet" type="text/css" href="components/Login_v2/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26">
						Авторизация для редактирования таблиц
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <?php if (isset($errorMessage)) : ?>
                        <p style="color: red; margin-bottom: 5px;"><?php echo $errorMessage; ?></p>
                    <?php endif; ?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Войти
							</button>
						</div>
					</div>

				</form>
				<a class="container-login100-form-btn btn btn-danger m-2 " href="Колбаса.php">
					Назад
				</a>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/bootstrap/js/popper.js"></script>
	<script src="components/Login_v2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/daterangepicker/moment.min.js"></script>
	<script src="components/Login_v2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="components/Login_v2/js/main.js"></script>

</body>
</html>