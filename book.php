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
include 'navbar.php';
include 'config.php';

?>

<?php
                $id = $_GET['id'];
                $_SESSION['id']=$id;
           
				$query = $pdo->prepare("SELECT * FROM `train` where train_id='$id' ");
				$query->execute();
				while($row = $query->fetch()){
			?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a train</title>
</head>
<body>

                    <div class="container">
    <table class="table table-bordered">
		<thead class="alert-info">
		<tr>
				<th>Business Seats price </th>
				<th>Economical seats price</th>
				<th>Standard Seats price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			    <td><?php echo $row['BusinessSeatsPr']?> </td>
				<td><?php echo $row['EconomicalSeatsPr']?></td>
				<td><?php echo $row['StandardSeatsPr']?></td>
			

			</tr>
 </tbody>
 </table>
			


<h3>Make a resarvation</h3>

<form action="book.php" method="post">
                <input type="text" name="user" id="" >
                <input type="text" name="from" id="">
                <input type="text" name="to" id="">
                <input type="number" name="N_business" id="">
                <input type="number" name="N_stabndard" id="">
                <input type="number" name="N_economic" id="">
                <input type="submit" value="submit">
</form>

</div>
<?php
				}
			?>

</body>
</html>
<?php

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $N_business = $_POST['N_business'];
    $N_stabndard= $_POST['N_stabndard'];
    $N_economic=$_POST['N_economic'];


    $sql = "INSERT INTO `reservation`(`user`, `fromdes`, `todes`, `N_business`, `N_stabndard`, `N_economic`) 
    VALUES ('$user', '$from', '$to', '$N_business', '$N_stabndard', '$N_economic');";

    $pdo->exec($sql);
    try{

    echo "Records inserted successfully.";
    } catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}



}
?>