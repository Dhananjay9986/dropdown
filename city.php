<?php 
include('config.php');
 
if(isset($_POST['sid'])){
    $sid=$_POST['sid'];
    
$sql= "SELECT * FROM city WHERE state_id='$sid'";
$result= mysqli_query($conn,$sql);
 
while ($row= mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $city=$row['city'];
    echo "<option value='$id'>$city</option>";
 } 
}