

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="login-box">
	  
	  
        <form action="addcatagory.php" method="post" class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Add catagory</h3>
          <div class="form-group">
            <label class="control-label">Catagory name</label>
            <input type="text"name="catagory" placeholder="Catagory" autofocus class="form-control">
          </div>
		  
		  <div class="form-group">
            <label class="control-label">Catagory status</label>
				<select name="status" class="form-control" id="">
				<option value="1">Published</option>
				<option value="0">Unpublished</option>
				</select>
          </div>
 

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="submit">Submit <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
        </form>
		
		
		
        <form action="index.html" class="forget-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" placeholder="Email" class="form-control">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET <i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a id="noFlip" href="#"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>

</div>