<?php 

session_start();


  $conn = mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  $str = "select * from login where email = '$email' && password = '$password' ";

  $result = mysqli_query($conn , $str);
  $num = mysqli_num_rows($result);
  if($num == 1){
       $_SESSION['username'] = $name;
      header('location: index.php');
    
  }
  else{
     header('location: home.php?error=true');
 

 }
?>
