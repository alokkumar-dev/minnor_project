<?php 

 $name=$_POST['sname'];
 $address=$_POST['saddress'];
  $class=$_POST['sclass'];
 $phone=$_POST['sphone'];


 $conn=mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");

 $str="insert into students(sname,saddress,sclass,sphone) values ('{$name}','{$address}','{$class}','{$phone}')";

 $r=mysqli_query($conn,$str) or die("query unsuccessfull");

 header("Location: http://localhost/crud_html/index.php");

 mysqli_close($conn);
 ?>