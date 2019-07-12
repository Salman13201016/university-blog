<?php
    include 'database/connection.php';
    $error = '';
    $invalid = '';
    session_start();
    if(isset($_SESSION['login_user'])){
        header('location:index.php');
    }
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if(empty($email) || empty($password)){
            $error = "<span>The field is required</span>";
        }
        else{
            $password = md5($password);
            $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
            $query = mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)>=1){
                $_SESSION['login_user']=$email;
                header('location:index.php');
            }
            else{
               $invalid = "Invalid Email & Password";
            }
        }
    }
?>



<!doctype html>
<html lang="en" class="fullscreen-bg">

<?php include 'layouts/css/css-layout.php';?>

<body>
	<!-- WRAPPER -->
<div id="wrapper">
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box ">
				<div class="left">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
							<p class="lead">Login to your account</p>
						</div>
						<form class="form-auth-small" action="#" method="POST">
							<div class="form-group">
								<label for="email" class="control-label sr-only">Email</label>
								<input type="email" class="form-control" name="email" value="" placeholder="Enter Your Email"  id="email">
                                <?=$error;?>
                                <?=$invalid;?>
                            </div>
							<div class="form-group">
								<label for="password" class="control-label sr-only">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password"  id="password">
                                <?=$error;?>
                                <?=$invalid;?>
                            </div>
							<div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
									<input type="checkbox" name="remember" id="remember">
									<span>Remember me</span>
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
							<div class="bottom">
								<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
							</div>
						</form>
					</div>
				</div>
				<div class="right">
					<div class="overlay"></div>
					<div class="content text">
						<h1 class="heading">Free Bootstrap dashboard template</h1>
						<p>by The Develovers</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
	<!-- END WRAPPER -->
</body>

</html>
