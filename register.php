<?php
require_once 'includes/session.inc.php';
require_once 'includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Register Page</title>
</head>
<body>
    <div class="form-page">
        <form action="includes/signup.inc.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="username" required />
                <!-- <input type="text" name="username" id="username" required> -->
                <div id="emailHelp" class="form-text">
                    We'll never share your email  and password with anyone else.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail" required />
                <!-- <input type="password" name="password" id="password" required> -->
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                <!-- <input type="password" name="password2" id="password2" required> -->
            </div>
            <?php
            check_signup_errors();
            ?>
            <center>
                <p>Sudah punya akun? <a href="login.php">Log In</a></p>
            </center>
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
            
            
            
        </form>
    </div>
   <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> -->
</body>

</html>