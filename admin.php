
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./css/login.css?a">

</head>
<body>
    <div class="container">
        <div class="form-div">
        <button class="btn_back"><a href="index.php" >Back</a></button>

            <h1>New admin</h1>
            <form action="adminDB.php" method="post">
                <?php
                if(isset($_GET['error']) && $_GET['error']=="true"){
                    echo '<div class="error"><span>Could\'t Register Admin !</span></div><br>';
                }
                if(isset($_GET['error']) && $_GET['error']=="false"){
                    echo '<div class="success"><span>Registration Success</span></div><br>';
                }
                ?>
                <label>Enter your email</label><br>
                <input type="email" name="email" placeholder="Enter your email.." Required><br>

                <label>Password</label><br>
                <input type="password" name="password" placeholder="Enter your password.." Required><br>

                <section id="btn-style">
                    <input type="submit" id="submit" name="Submit" value="Submit">
                    
                </section>
            </form>
        </div>
    </div>
</body>
</html>