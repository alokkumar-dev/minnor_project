<?php
include 'header.php';
session_start();

?>
<div id="main-content">
    <h2>All Records</h2>

        <?php 
         $conn=mysqli_connect("localhost","root","","phpcrud") or die("Connection failed");

         $str="select * from students JOIN studentclass where students.sclass=studentclass.cid";

        $result= mysqli_query($conn,$str) or die("Query unsuccessfull");

        if(mysqli_num_rows($result)>0){
        ?>
<body>
    <dev class="container">
<?php echo $_SESSION['username']; ?>

    </dev>    
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        </thead>
        <tbody>
            <?php
              while($row=mysqli_fetch_assoc($result)){ 

             ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php  echo $row['cname'];?></td>
                <td><?php  echo $row['sphone'];?></td>
               
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php }else{
    echo "<h2>No Record Found</h2>";
}

mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
