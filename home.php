<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <div id="signin-form" class="container">
        <!-- signin form -->
        <form action="signup.php" method="POST">
            <h1>Signin form</h1>
            <label>Enter your email</label><br>
            <input type="email" name="email" placeholder="Enter your email.." Required><br>

            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter your password.." Required><br>

            <button type="submit">Signin</button>
        </form>
        <!-- login form -->
    </div>
    <div id="login-form">
        <form action="login.php " method="POST">
            <h1>Login form</h1>
            <label for="email">Enter your email</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email.." Required><br>

            <label for="password">Enter your password</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password.." Required><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>