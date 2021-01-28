<?php 

session_start();
  $conn = mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  $str = "select * from login where email = '$email' ";

  $result = mysqli_query($conn , $str);
  $num = mysqli_num_rows($result);
  if($num == 1){
  echo"Email id already exiest in our databases.";
  header('location: admin.php?error=true');
  }
  else{
    $reg = "insert into login(email , password) values ('$email' , '$password')";
    mysqli_query($conn ,$reg);
    echo"Registration Successfully";   
    header('location: admin.php?error=false');
 }

?>
