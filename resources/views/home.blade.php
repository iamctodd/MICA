<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CX|Results</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/main.css")}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
	<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="welcome" class="navbar-brand"><b>CX</b>RESULTS</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

			 <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Racers</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Events</a>
                	<ul class="dropdown-menu" role="menu">
					    <li><a href="/allraces">View All Races</a></li>
					    <li><a href="/upgrade">Upgrade Points</a></li>
					    <li><a href="/toprated">Top Rated</a></li>
					    <li><a href="/points">Points List</a></li>
					    <li><a href="/upload">Upload Results</a></li>
					</ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All Results</a></li>
                    <li><a href="#">Upgrade Points</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Points List</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Upload Results</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
	           <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="" data-toggle="dropdown">Login</a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							 <div class="row">
									<div class="col-lg-12">
										<div class="social-buttons">
											<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
											<a href="#" class="btn btn-st"><img src="https://www.strava.com/favicon-16x16.png"> Strava</a>
										</div>
		                                OR
										 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													 <label class="sr-only" for="exampleInputEmail2">Email address</label>
													 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
												</div>
												<div class="form-group">
													 <label class="sr-only" for="exampleInputPassword2">Password</label>
													 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
		                                             <div class="help-block text-right"><a href="">Forget password ?</a></div>
												</div>
												<div class="form-group">
													 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
												</div>
												<div class="checkbox">
													 <label>
													 <input type="checkbox"> keep me logged-in
													 </label>
												</div>
										 </form>
									</div>
									<div class="bottom text-center">
										New here ? <a href="#"><b>Join Us</b></a>
									</div>
							 </div>
						</li>
					</ul>
		        </li>
		      </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper" style="background-image: url(http://www.crossresults.com/img/fma7.jpg); background-repeat: no-repeat; background-position: center center; background-size: cover;" >
        <div class="container" style="padding: 200px;">
          <!-- Content Header (Page header) -->
            
            
            <h1 class="hero pull-left" style="color: white;">We wrangle data so you don't have to</h1>


        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      
          <!-- Recent Results -->
          <section class="top-results" style="background-color: white; padding-top: 25px;">
            <div class="row ">
            <div class="container">    
            
            
            <div class="col-md-3">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Elite Men</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed table-hover table-striped">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Team</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jeremy Powers</td>
                      <td>Aspire Racing</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Dan Timmerman</td>
                      <td>HOUSE INDUSTRIES/ SIMPLEHUMAN/RICHAR</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ben Berden</td>
                      <td>Raleigh/Clement</td>
					</tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
             <div class="col-md-3">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Elite Men</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed table-hover table-striped">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Team</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jeremy Powers</td>
                      <td>Aspire Racing</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Dan Timmerman</td>
                      <td>HOUSE INDUSTRIES/ SIMPLEHUMAN/RICHAR</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ben Berden</td>
                      <td>Raleigh/Clement</td>
					</tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
           <div class="col-md-3">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Elite Men</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed table-hover table-striped">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Team</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jeremy Powers</td>
                      <td>Aspire Racing</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Dan Timmerman</td>
                      <td>HOUSE INDUSTRIES/ SIMPLEHUMAN/RICHAR</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ben Berden</td>
                      <td>Raleigh/Clement</td>
					</tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
			<div class="col-md-3">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Elite Men</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed table-hover table-striped">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Team</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jeremy Powers</td>
                      <td>Aspire Racing</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Dan Timmerman</td>
                      <td>HOUSE INDUSTRIES/ SIMPLEHUMAN/RICHAR</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ben Berden</td>
                      <td>Raleigh/Clement</td>
					</tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            
            
            </div><!-- /.row -->
      		</div>

          
       <div class="container-fluid" id="images">
	   	
          <div class="row">
            <div class="col-md-3">
             <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/130928_gloucester/content/bin/images/large/RCP-130928-0435.jpg" alt="">
	         </a>
            </div>
            <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/130928_gloucester/content/bin/images/large/RCP-130928-0369.jpg" alt="">
	         </a>
	        </div>
            <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/130928_gloucester/content/bin/images/large/RCP-130928-0388.jpg" alt="">
	         </a>
	        </div>
	        <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/130928_gloucester/content/bin/images/large/RCP-130928-0308.jpg" alt="">
	         </a>
	        </div>
	        <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/150923_midnightride/content/bin/images/large/RCP-150923-0136.jpg" alt="">
	         </a>
	        </div>
	        <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/150923_midnightride/content/bin/images/large/RCP-150923-0181.jpg" alt="">
	         </a>
	        </div>
	        <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/130928_gloucester/content/bin/images/large/RCP-130928-0384.jpg" alt="">
	         </a>
	        </div>
	        <div class="col-md-3">
	        <a href="#">
	          <img class="img-responsive " src="http://russcam.com/cycling/150923_midnightride/content/bin/images/large/RCP-150923-0276.jpg" alt="">
	         </a>
	        </div>
          </div>
        </div>
        
        
        
        <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
	<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
  </body>
</html>
