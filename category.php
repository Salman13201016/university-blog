<?php
    $error ='';
    $alert ='';
    include 'database/connection.php';
    if(isset($_POST['category'])){
        $name = mysqli_escape_string($conn,$_POST['name']);
        $details = mysqli_escape_string($conn,$_POST['details']);

        if(empty($name) || empty($details)){
            $error = "This filled can not be empty";
        }
        else{
            $sql = "INSERT INTO categories (name,details) VALUES ('$name','$details')";
            $query = mysqli_query($conn,$sql);
            if($query){
                $alert = "Your Category is Successfuly Inserted";
            }
            else{
                $alert = "SOMETHING WENT WRONG".mysqli_error($query);
            }
        }
    }
?>


<?php include 'session.php' ?>


<!doctype html>
<html lang="en">

<?php include 'layouts/css/css-layout.php'; ?>
<?php include 'layouts/js-layout.php'; ?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
    <?php include 'layouts/navbar.php'; ?>
    <?php include 'layouts/sidenavbar.php'; ?>
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content ml-3">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
                                <div class="alert alert-danger alert-right">
                                    <h3 ><?=$alert;?></h3>
                                </div>
								<div class="panel-heading">
									<h3 class="panel-title">Add a New Category</h3>
								</div>
								<div class="panel-body col-md-offset-3">
                                    <form class="form-auth-small" action="category.php" method="POST">
                                        <div class="form-group">
                                            <label for="name" class="control-label ">Name</label>
                                            <input style="width:50%;" type="text" class="form-control" name="name" value="" placeholder="Enter Your Category"  id="name">
                                            <span class="text-danger"><?=$error;?></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="details" class="control-label">Details</label>
                                            <textarea id="details" rows="4" cols="50" class="form-control" style="width:50%;" name="details" placeholder="add details">
                                            </textarea>
                                            <span class="text-danger"><?=$error;?></span>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-lg btn-block" style="width:50%;" name="category">Add New Category</button>
						            </form>
								</div>
							</div>
							<!-- END INPUTS -->
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
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
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
