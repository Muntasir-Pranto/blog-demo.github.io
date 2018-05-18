<?php
$page='addcatagory';

include 'afterlogin.php';


require 'classes/db.php';

if(isset($_POST['submit'])){
    
$catagory=$_POST['catagory'];
$status=$_POST['status'];

$query="INSERT INTO catagory (catagory,Publication) values('$catagory','$status')";
$result= mysqli_query($connection, $query);


header("location:manage_catagory.php");


}



?>
