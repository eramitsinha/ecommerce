<?php
include "config.php";
session_start();
// fetch session
$username = $_SESSION['mysession'];
include "header.php"
?>

<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">

							<h1>Upload Category</h1>

							<hr>

							<form action="" method="post" enctype="multipart/form-data">
								Category Name :
								<input type="text" name="c1" required class="form-control">
								<Br>
								Upload Image :
								<input type="file" name="image" class="form-control">
								<br>
								<input type="submit" class="btn-primary">
							</form>

							<?php
								if($_POST)
								{
									extract($_POST);

									// logic to upload image
									$temp = $_FILES['image']['tmp_name'];
									$perm = $_FILES['image']['name'];
									$folder = "uploads/";
									$merge = $folder.$perm;
									move_uploaded_file($temp,$merge);

									include "config.php";

									// insert query
									mysqli_query($connection,"INSERT into categories values('','$c1','$merge')");
									
									echo "<p class='alert alert-success'>Category has been uploaded.</p>";
								}

							?>

				</div>
			</div>
			</div>
			</div>

<?php
include "footer.php";
?>