<?php 

include('config.php');
 if(isset($_POST['id'])){
    $id=$_POST['id'];

$sql= "SELECT * FROM state WHERE country_id='$id' ";
$result= mysqli_query($conn,$sql);
 
while ($row= mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $state=$row['state'];
    echo "<option value='$id'>$state</option>";
 } 
}

if(isset($_POST['sid'])){
    $id1=$_POST['sid'];
    
$sql1= "SELECT * from city where state_id='$id1'";
$result= mysqli_query($conn,$sql1);
 
while ($row= mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $city=$row['city'];
    echo "<option value='$id'>$city</option>";
 } 
}

