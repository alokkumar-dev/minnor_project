<?php 
 
  $id=$_GET['id'];

include 'config.php';
 
$sql="delete from students where sid={$id}";
 
 $r=mysqli_query($conn,$sql) or die("query unsuccessfull");

 header("Location: http://localhost/crud_html/index.php");

 mysqli_close($conn);


 ?>