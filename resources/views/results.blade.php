<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results</title>
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

    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-green.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="hold-transition skin-green layout-top-nav">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
                  
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
	          <a href="index2.html" class="logo">
          <span class="logo"><b>CX</b>RESULTS</span>
        </a>
	        <ul class="nav navbar-nav">
		        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">RACERS</a></li>
			        <ul class="dropdown-menu">
			            <li><a href="#">Race Predictor</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
	          		</ul>
		        <li><a href="#">EVENTS</a></li>
		        <li><a href="#">ABOUT</a></li>
	        </ul>
	        
	        <form action="#" method="get" class="navbar-form navbar-right" role="search">
	        <div class="input-group form-group">
	          <input type="text" class="form-control" placeholder="Search...">
	        </div>
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
	      	</form>
	      	
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              
               <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  
                  <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">C. X. Racer</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image" />
                    <p>
                      Chris X. Racer
                      <small>Member since Nov. 2006</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
	        	        
	        <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Course Datas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
	                      	<th>Race Name</th>
							<th>Moisture</th>
							<th>Elevation</th>
							<th>Technicality</th>
							<th>Acceleration</th>
                        </tr>
                      </thead>
                      <tbody>
	                      
					<?php
				    $host_name  = "db581477570.db.1and1.com";
				    $database   = "db581477570";
				    $user_name  = "dbo581477570";
				    $password   = "cxrCXRcxr321!!!";
				    
				    // mysqli, object oriented way
					$connect = new mysqli($host_name, $user_name, $password, $database);
				    
				    if (mysqli_connect_error()) {
				    echo "NOT Connected! " . mysqli_connect_error();
					} 
			
					$sql = 'SELECT RaceName, Moisture, Elevation, Technicality, Acceleration
					        FROM race
					        WHERE Moisture IS NOT NULL
					        LIMIT 20';
				        
					$result = mysqli_query($connect,$sql);
							
					while($row = mysqli_fetch_array($result)) {
					    echo "<tr>";
					    echo "<td>" . $row['RaceName'] . "</td>";
					    echo "<td>" . $row['Moisture'] . "</td>";
					    echo "<td>" . $row['Elevation'] . "</td>";
					    echo "<td>" . $row['Technicality'] . "</td>";
					    echo "<td>" . $row['Acceleration'] . "</td>";
					    echo "</tr>";
					}
					mysqli_close($connect);
					?> 
		            </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
		
		</section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
		The good stuff 
		</div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="http://ctodd.com">C. Todd Lombardo</a>.</strong> All rights reserved.
      </footer>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
	<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>


  </body>
</html>
