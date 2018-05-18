<?php

require'classes/db.php';

$id=$_GET['id'];

if($id){
	$query="SELECT * FROM addpost2 WHERE id='$id'";
	$result= mysqli_query($connection, $query);
        
        $value= mysqli_fetch_assoc($result);
}
if(isset($_POST['submit'])){
   $query = "UPDATE addpost2 "
           . "SET post_title='$_POST[title]', post_desc='$_POST[desc]',post_catagory='$_POST[catagory]' WHERE ID='$_POST[id]'";
   $result= mysqli_query($connection, $query);
   
   if( $result){
       header("location:allpost.php");
   }
   
}


?>


<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Edit Post Here</h1>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-10">
                  <div class="well bs-component">
                    <form action="" method="post" class="form-horizontal">
                      <fieldset>
                       
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Post Title</label>
                          <div class="col-lg-10">
                              <input id="inputEmail" name="title" value="<?php echo $value['post_title']; ?>"type="text" placeholder="Your Title" class="form-control">
                             
                          </div>
                             
                          <div class="col-lg-10">
                              <input id="inputEmail" name="id" value="<?php echo $value['ID']; ?>"type="hidden" placeholder="Your Title" class="form-control">
                             
                          </div>
                            
                        </div>
                        
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">Description</label>
                          <div class="col-lg-10">
                            <textarea id="textArea" name="desc"rows="3" class="form-control"><?php echo $value['post_desc']; ?></textarea><span class="help-block"></span>
                          </div>
                        </div>
						
			           <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Post catagory</label>
                          <div class="col-lg-10">
                            <select name="catagory" class="form-control" id="">
							<option value="Biography">Biography</option>
							<option value="Food">Food</option>
							<option value="Clothes">Clothes</option>
							<option value="Music">Music</option>
							<option value="Hunting">Hunting</option>
							<option value="Knowledge">Knowledge</option>
							</select>
							  
                          </div>
                        </div>
						
						

                        
                        
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <input type="submit" name="submit"class="btn btn-primary" value="Update">
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>