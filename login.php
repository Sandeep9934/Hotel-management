
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce5ba257be.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="slide">
        <img src="image\8.jpg">
    </div>
    <form method="POST" class="form" action="log.php">
        <div class="welcome">
            <label>Welcome to my Hotel</label>
        </div>
        <fieldset class="fieldset">
            <div class="login">
                <div class="username">
                    <i class="fa-solid fa-user fa-2x"></i>
                    <label>EMAIL</label>
                    <input type="email" name="email" placeholder="enter your email" required="required">
                </div>
                <div class="password">
                    <i class="fa-solid fa-key fa-2x"></i>
                    <label>Password</label>
                    <input type="password" name="password" required="required" placeholder="enter your password">
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="login">
                </div>
            </div>
            <div class="reg">
                <button><a href="registration.php">Register here</a></button>
                <button><a href="registration.php">Forgot password</a></button>
            </div>
        </fieldset>
    </form>

</body>

</html>