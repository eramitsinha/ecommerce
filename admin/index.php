<!-- Login Page for Administrator (localhost/ecommerce/admin)-->
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>

<link rel="stylesheet" href="css/style.css" />

</head>

<body>

<form action="" method="post">

	<h2>Admin Login</h2>

	<input type="text" name="username" class="text-field" placeholder="Username" />
    <input type="password" name="password" class="text-field" placeholder="Password" />
    
  <input type="submit"  class="button" value="Log In" />

</form>

<?php
// check if button is clicked
if($_POST)
{
	// fetch username and password
	extract($_POST);

	// db connection
	include "config.php";

	// match username and password
	$q = mysqli_query($connection,"SELECT * from admin where username='$username' and password='$password'");

	if(mysqli_num_rows($q)==0)
	{
		echo "<script>alert('Invalid Username or Password');</script>";
	}
	else
	{
		session_start();
		$_SESSION['mysession'] = $username;
		header("location:dashboard.php");
	}
}

?>

</body>
</html>