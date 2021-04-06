<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="sname" />
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="saddress" />
        </div>
        <div class="form-group" id="class_drop">
            <label for="class">Class</label>
            <select name="sclass" id="class">
                <option value="" selected disabled>Select Class</option>
                <?php 
             $conn=mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");

                    $str="select * from studentclass";

                    $result= mysqli_query($conn,$str) or die("Query unsuccessfull");

                    while($row=mysqli_fetch_assoc($result)){
                 ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

            <?php } ?>
               </select>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>
</div>
</body>
</html>
