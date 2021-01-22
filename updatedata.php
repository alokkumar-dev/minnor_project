<?php 

  $id=$_POST['sid'];
  $name=$_POST['sname'];
  $address=$_POST['saddress'];
  $class=$_POST['sclass'];
  $phone=$_POST['sphone'];



 $conn1=mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");

$sql="update students set sname='{$name}',saddress='{$address}',sclass='{$class}', sphone='{$phone}' where sid={$id}";
 
 $r=mysqli_query($conn1,$sql) or die("query unsuccessfull");

 header("Location: http://localhost/crud_html/index.php");

 mysqli_close($conn1);

 ?>