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

		                    <h1>Categories List</h1>

                            <br>

                            <?php
                                include "config.php";

                                $q = mysqli_query($connection,"SELECT * from categories");

                                echo "<table class='table'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>Category Name</th>";
                                            echo "<th>Image</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    while($k = mysqli_fetch_array($q))
                                    {
                                        echo "<tr>";
                                            echo "<td>".$k['name']."</td>";
                                            echo "<td>";    
                                            ?>
                                            <img src="<?php echo $k['image']; ?>" width="150">
                                            <?php

                                            echo "</td>";

                                            echo "<td>";

                                            ?>
                                            <a href="delete.php?id=<?php echo $k['id']; ?>&type=category" class="btn btn-danger">Delete</a>
                                            <?php
                                            echo "</td>";

                                        echo "</tr>";
                                    }

                                echo "</table>";

                            ?>

				</div>
			</div>
			</div>
			</div>

<?php
include "footer.php";
?>