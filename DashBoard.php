<?php
require 'config.php';

// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'navbarAdmin.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>DashBoard</title>
</head>
<style>
.table td, .table th{
	text-align:center;
}
</style>
<body>

<div class="container">
<h4>welcome back Mr . <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h4>
<h6>
<?php echo(strftime("Today is "."%m/%d/%Y "." and it's "."%H:%M")); ?>
</h6>
<h5 style='text-align:center;'>Our Traines</h5>
<hr/>
<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Train Id </th>
				<th>Train Name</th>
				<th>From</th>
				<th>To</th>
				<th>Total Distance</th>
                <th>Business Seats Price</th>
				<th>Economical Seats Price</th>
				<th>Standard Seats Price</th>

				
			</tr>
		</thead>
		<tbody>
			<?php
				
				$query = $pdo->prepare("SELECT * FROM `train` ");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
			
				<td><?php echo $row['train_id']?></td>
				<td><?php echo $row['TrainName']?></td>
				<td><?php echo $row['from']?></td>
				<td ><?php echo $row['to']?></td>
				<td><?php echo $row['TotalDistance']?> <em>Km</em></td>
				<td><?php echo $row['BusinessSeatsPr']?></td>
                <td><?php echo $row['EconomicalSeatsPr']?></td>
				<td><?php echo $row['StandardSeatsPr']?></td>


			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>

</div>





</body>
</html>