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

		<h1>Dashboard Page</h1>

				</div>
			</div>
			</div>
			</div>

<?php
include "footer.php";
?>