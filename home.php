<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
    <div class="container">
        <div class="form-div">
            <h1>Login</h1>
            <form action="login.php" method="post">
              <div class="error">
                    <?php

                        if(isset($_GET['error'])){
                            echo '<span>Invalid Login email or Password !</span><br>';
                        }
                    ?>
              </div>



                <label for="email">Enter your email</label><br>
                <input type="email" id="name" name="email" placeholder="Enter your email.." Required><br>

                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Enter your password.." Required /><br>

                <section id="btn-style">
                    <input type="submit" id="submit" name="Submit" value="Login" />
                    
                </section>
            </form>
        </div>
    </div>
</body>
</html>
