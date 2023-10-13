<?php
require_once 'includes/session.inc.php';
require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Login Page</title>
</head>
<body>
    <div class="form-page">
        <form action="includes/login.inc.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="username" required />
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
            </div>
            <center>
                <p>Belum punya akun? <a href="register.php">Sign Up</a></p>
            </center>
         
            <button type="submit" name="register" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>