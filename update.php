<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 
    if(isset($_POST['showbtn'])){
       $conn=mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");
     
       $stu_id=$_POST['sid'];
       $str="select * from students where sid = {$stu_id}";

        $result= mysqli_query($conn,$str) or die("Query unsuccessfull");

        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){

     ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" id="name" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="saddress" id="address" value="<?php echo $row['saddress']; ?>" />
        </div>
        <div class="form-group">
        <label for="class">Class</label>
         <?php 
          $sql1="select * from studentclass";

           $result1= mysqli_query($conn,$sql1) or die("Query unsuccessfull");

        if(mysqli_num_rows($result1)>0){
          echo ' <select name="sclass">';
          while($row1=mysqli_fetch_assoc($result1)){

            if($row['sclass']==$row1['cid']){
              $select="selected";

            }else{
              $select="";

            }

            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
          }
         echo  '</select>';
       }
      ?>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="sphone" id="phone" value="<?php echo $row['sphone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php 
   }
  }
}

     ?>
</div>
</div>
</body>
</html>
