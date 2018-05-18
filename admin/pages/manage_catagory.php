<?php

require 'classes/db.php';

$query="SELECT * FROM catagory";
$result= mysqli_query($connection, $query);


$del=$_GET['delete'];

if(isset($del)){
    $query="DELETE FROM catagory WHERE ID =$del";
    $result= mysqli_query($connection, $query);
    
    if( $result){
        header("location:manage_catagory.php");
    }
    else{
        echo 'Query Error!!';
    }
}



?>

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> All catagory are here</h1>
           
          </div>

        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="card">
            
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Post catagory</th>
                    <th>Post status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                
             
                   <?php
                   while ($value= mysqli_fetch_assoc($result)) {?>
                
                  <tbody>
                  <tr>
                      <td><?php echo $value['ID'];?></td>
                      <td><?php echo $value['catagory'];?></td>
                      <td><?php
					  if($value['Publication']==1){
						  echo 'Published';
					  }
					  else{
						  echo 'Unpublished';
					  }
					  
					  ?></td>
                      <td><a href="" class="btn btn-info btn btn-sm">Edit</a></td>
                      <td><a href="?delete=<?php echo $value['ID']?>"class="btn btn-danger btn btn-sm">Delete</a></td>
                  </tr>
                
                </tbody>
                       
                
                
                
                   <?php }?>
                   
                   
                

                
             
                
                

              </table>
            </div>
          </div>

            </div>
          </div>
          