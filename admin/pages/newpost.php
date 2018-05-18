<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add New Post Here</h1>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-10">
                  <div class="well bs-component">
                    <form action="addpost.php" method="post" class="form-horizontal">
                      <fieldset>
                       
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Post title</label>
                          <div class="col-lg-10">
                            <input id="inputEmail" name="title" type="text" placeholder="Your Title" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">Description</label>
                          <div class="col-lg-10">
                            <textarea id="textArea" name="desc" rows="3" class="form-control"></textarea><span class="help-block"></span>
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
							<option value="knowledge">knowledge</option>
							</select>
                          </div>
                        </div>
						
						

                        
                        
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <input type="submit" name="submit"class="btn btn-primary" value="Submit">
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