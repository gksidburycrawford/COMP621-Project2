<?php
session_start();
require 'security.php';
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<!-- Create back color navy blue -->
<body style="background-color:#2c3e50 ">

	<div id="main-wrapper"> 
		<center>
			<h2>NCAT HEALTH CENTER</h2>
			<img src="imgs/logo.png" class="avatar"/>
			<h4> Wel <?php echo $_SESSION['username'];        ?> </h4>
		

		<form class="myform" action="Patient.php" method="post">
			<table>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Bill</th>
				</tr>
				<tr>
					<th>Jordan Best</th>
					<th>401 S Booker St</th>
					<th>919-358-4829</th>
					<th>$12000</th>
				</tr>


				
			</table>	
			<input name ="logout" type="submit" id="back_btn" value="Log Out"/>
	</form>
	<?php
	if (isset($_POST["logout"])) {
	session_start();
    session_destroy();
    unset($_SESSION["username"]);

    header('Location: index.php');
    exit;

    echo '<script type="text/javascript"> alert("Error! User Name is Taken") </script>';
	
	}


	?>
	</center>


	</div>



</body>
</html>