<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

include 'config.php';
$id=$_POST['sid'];

$sql="delete from students where sid={$id}";
 
 $r=mysqli_query($conn,$sql) or die("query unsuccessfull");

 header("Location: http://localhost/crud_html/index.php");

 mysqli_close($conn);

}

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
