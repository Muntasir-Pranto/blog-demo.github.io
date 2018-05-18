<?php
require 'classes/db.php';
$query="SELECT * FROM addpost2";
$result= mysqli_query($connection, $query);

?>

<?php
require 'classes/db.php';
$query2="SELECT * FROM catagory";
$result2= mysqli_query($connection, $query2);

?>



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
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="index.html" class="logo">Vali</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
			 

              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
			  
			  
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/a.png" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p>Muntasir Pranto</p>
              <p class="designation">Frontend Developer</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          
              <?php while ($value2= mysqli_fetch_assoc($result2)) {?>
              
           <ul class="sidebar-menu">
               <li class="active"><a href=""><i class="fa fa-dashboard"></i><span><?php echo $value2['catagory'];?></span></a></li>
          

          </ul>
                  
              <?php }?>


		  
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img src="images/a.png" class="user-img">
                <h4>Muntasir Pranto</h4>
                <p>FrontEnd Developer</p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#user-timeline" data-toggle="tab">Timeline</a></li>
                <li><a href="#user-settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div id="user-timeline" class="tab-pane active">
                <div class="timeline">
                    

                    <?php
                    
                    while ($value= mysqli_fetch_assoc($result)) {?>
                       
                     <div class="post">
                    <div class="post-media"><a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                      <div class="content">
                        <h5><a href="#"><?php echo $value['post_title'];?></a></h5>
                        <p class="text-muted"><small>2 January at 9:30</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p><?php echo $value['post_desc'];?></p>
                    </div>
                    <ul class="post-utility">
                      <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                      <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                  </div>
                    
                   <?php }?>
                    
                    
                    

                    
                </div>
              </div>
              <div id="user-settings" class="tab-pane fade">
                <div class="card user-settings">
                  <h4 class="line-head">Settings</h4>
                  <form>
                    <div class="row mb-20">
                      <div class="col-md-4">
                        <label>First Name</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 mb-20">
                        <label>Email</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Mobile No</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Office Phone</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Home Phone</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>