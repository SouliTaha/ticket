<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbar.php'
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1> Find your next destination</h1>
	<div class="container">
    <div class="col-md-12 well">
		<h3 class="text-primary"></h3>
		<hr/>
		<div class="col-md-8">
			<form method="POST" action="">
				<div class="form-inline">
					<input type="search" class="form-control" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" placeholder="Search here..." />
					<button class="btn btn-success" name="search">Search</button>
					
				</div>
			</form></div>
	
			
			<?php include'search.php'?>
		</div>
	</div>
</body>
</html>
