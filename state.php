<?php 

include('config.php');
 if(isset($_POST['id'])){
    $id=$_POST['id'];
    include('config.php');


$sql= "SELECT * FROM state WHERE country_id = '$id'";

$result= mysqli_query($conn,$sql) or die("connection failed111");
 
while ($row= mysqli_fetch_assoc($result)) {
    $id1=$row['id'];
    $state1=$row['state'];
    echo "<option value='$id1'>$state1</option>";
 } 
}

