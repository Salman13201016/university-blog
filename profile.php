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
		<?php include 'layouts/sidenavbar.php'; ?>
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