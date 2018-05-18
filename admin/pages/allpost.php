<?php

require 'classes/db.php';

$query="SELECT * FROM addpost2";
$result= mysqli_query($connection, $query);

$del=$_GET['delete'];

if(isset($del)){
    $query="DELETE FROM addpost2 WHERE ID =$del";
    $result= mysqli_query($connection, $query);
    
    if( $result){
        header("location:allpost.php");
    }
    else{
        echo 'Query Error!!';
    }
}



?>

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> All Post are here</h1>
           
          </div>

        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="card">
            
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Post Title</th>
                    <th>Post Description</th>
                    <th>Post Catagory</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                
                <?php
                while ($value= mysqli_fetch_assoc($result)) {?>
                    
                
                <tbody>
                  <tr>
                    <td><?php echo $value['ID'];?></td>
                    <td><?php echo $value['post_title'];?></td>
                    <td><?php echo $value['post_desc'];?></td>
                    <td><?php echo $value['post_catagory'];?></td>
                    <td><a href="editpost.php?id=<?php echo $value['ID']; ?>" class="btn btn-info btn btn-sm">Edit</a></td>
                    <td><a href="?delete=<?php echo $value['ID']; ?>"class="btn btn-danger btn btn-sm">Delete</a></td>
                  </tr>
                
                </tbody>
                
               <?php }?>
                
                

              </table>
            </div>
          </div>

            </div>
          </div>
          