<?php
	include 'session.php';	
?>

<!doctype html>
<html lang="en">


<?php include 'layouts/css/css-layout.php';?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<?php include 'layouts/navbar.php' ?>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a>
						</li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i>
								<span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="active"><i class="lnr lnr-file-empty"></i>
								<span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse in">
								<ul class="nav">
									<li><a href="page-profile.html" class="active">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i>
								<span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="col-md-12 col-md-offset-10">


									<div class="profile-header">
										<div class="overlay"></div>
										<div class="profile-main">
											<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
											<h3 class="name"><?=$row['name'];?></h3>
											<span class="online-status status-available">Available</span>
										</div>
									</div>
									<!-- END PROFILE HEADER -->
									<!-- PROFILE DETAIL -->
									<div class="profile-detail">
										<div class="profile-info">
											<h4 class="heading">Basic Info</h4>
											<ul class="list-unstyled list-justify">
												<li>Mobile <span><?=$row['mobile'];?></span></li>
												<li>Email <span><?=$row['email'];?></span></li>
												<li>University <span><a
													href="http://www.uap-bd.edu/" target="_blank"><?=$row['university'];?></a></span>
												</li>
											</ul>
										</div>
										<div class="profile-info">
											<h4 class="heading">Social</h4>
											<ul class="list-inline social-icons">
												<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#" class="google-plus-bg"><i
															class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
											</ul>
										</div>
										<div class="profile-info">
											<h4 class="heading">About</h4>
											<p>Interactively fashion excellent information after distinctive
												outsourcing.</p>
										</div>
										<div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a>
										</div>
									</div>
									<!-- END PROFILE DETAIL -->
								</div>
							</div>
							<!-- END LEFT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I
						Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>