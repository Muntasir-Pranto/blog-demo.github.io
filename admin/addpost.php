<?php

$page="addpost";
include 'afterlogin.php';

require 'classes/db.php';

if(isset($_POST['submit'])){
    
$post_title=$_POST['title'];
$post_desc=$_POST['desc'];
$post_catagory=$_POST['catagory'];

$query="INSERT INTO addpost2(post_title,post_desc,post_catagory) values('$post_title','$post_desc','$post_catagory')";
$result= mysqli_query($connection, $query);

header("location:allpost.php");

}



?>