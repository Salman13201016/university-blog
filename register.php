
<?php
	include 'database/connection.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$error ='';
	$length ='';
	$pwd='';
	$email_check='';
	if(isset($_POST['login'])){
		$name = mysqli_escape_string($conn,$_POST['name']);
		$email = mysqli_escape_string($conn,$_POST['email']);
		$password = mysqli_escape_string($conn,$_POST['password']);
		$confirmPassword = mysqli_escape_string($conn,$_POST['confirmpassword']);
		$mobile = mysqli_escape_string($conn,$_POST['mobile']);
		$university = mysqli_escape_string($conn,$_POST['university']);
		$email_exist = "SELECT email FROM user WHERE email ='$email'";
		$query = mysqli_query($conn,$email_exist);
		if(mysqli_num_rows($query)>0){
			$email_check = "You email is already existed";
		}
		
		else if(empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($mobile) || empty($university)){
			$error = "This field is required";
		}
		else if(strlen($name)<5){
			$length = "Length must be greater than 4";
		}
		else if($password!=$confirmPassword){
			$pwd="Your Password Does Not Match";
		}
		else{
			$password = md5($password);
			$vkey = md5(time().$email);
			$sql = "INSERT INTO user (name,email,password,mobile,university,v_key,v_status) VALUES ('$name','$email','$password','$mobile','$university','$vkey',0)";
			$query = mysqli_query($conn,$sql);

			if($query){
				$mail = new PHPMailer;
				//* set phpmailer to use SMTP */
				$mail->isSMTP();
				/* smtp host */
				$mail->Host = "smtp.gmail.com";

				$mail->SMTPAuth = true;
				
				$mail->Username = "salmanmdsultan@gmail.com";

				$mail->Password = "Allahisone244343244343";

				$mail->SMTPSecure ="tls";

				$mail->Port= 587;

				$mail->From = "salmanmdsultan@gmail.com";

				$mail->FromName = "Salman";

				$mail->addAddress($email,"Salman");

				$mail->isHTML(true);

				$mail->Subject = "Email Verification From eshikhonBlog";

				$mail->Body = "<a href='http://localhost/wdev-N191-2/Blog/verify.php?vkey=$vkey'>Click This Activation Link</a>";

				if(!$mail->send()){
					echo "Mailer Error". $mail->ErrorInfo;
				}
				else{
					echo "<script>alert('Verification Has been Sent Successfully')</script>";
				}

				header('location:success.php');
			}
			else{
				echo mysqli_error($conn);
			}	

		}
	}
	
?>




<!doctype html>
<html lang="en" class="fullscreen-bg">
 <!-- css link layout -->
<?php include 'layouts/css/css-layout.php';?>
<!-- css link layout ends -->
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box " style="height:540px;">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo">
								</div>
								<p class="lead">Register to your account</p>
							</div>
							<form class="form-auth-small" action="?" method="POST">
								<div class="form-group">
									<label for="name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" name="name" value=""
										placeholder="Enter Your Name"  id="name">
									<span class="text-danger"><?=$error;?><?=$length;?></span>	
								</div>
								<div class="form-group">
									<label for="email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" name="email" value=""
										placeholder="Please Enter Your Email"   id="email">
									<span class="text-danger"><?=$error;?><?=$email_check;?></span>
								</div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password"
									id="password">
									<span class="text-danger"><?=$error;?></span>
								</div>
								<div class="form-group">
									<label for="confirmpassword" class="control-label sr-only">Confirm Password</label>
									<input type="password" class="form-control" name="confirmpassword"
										placeholder="Confirm Password"  id="confirmpassword">
									<span class="text-danger"><?=$error;?> <?=$pwd;?></span>
								</div>
								<div class="form-group">
									<label for="mobile" class="control-label sr-only">Mobile</label>
									<input type="mobile" class="form-control" name="mobile" value=""
										placeholder="Mobile Number"   id="mobile">
									<span class="text-danger"><?=$error;?></span>
								</div>
								<div class="form-group">
									<label for="university" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" name="university" value=""
										placeholder="University Name"   id="university">
									<span class="text-danger"><?=$error;?></span>
								</div>

								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox" name="remember" id="remember">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot
											password?</a></span>
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