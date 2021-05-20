<?php
	require 'config.php';
	if(ISSET($_POST['search'])){
?>
<style>
.table td, .table th{
	text-align:center;
}

</style>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Train Id </th>
				<th>Train Name</th>
				<th>From</th>
				<th>To</th>
				<th>Total Distance</th>
				<th>Book</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $pdo->prepare("SELECT * FROM `train` WHERE `from` LIKE '%$keyword%' or `to` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
			
				<td><?php echo $row['train_id']?></td>
				<td><?php echo $row['TrainName']?></td>
				<td><?php echo $row['from']?></td>
				<td ><?php echo $row['to']?></td>
				<td><?php echo $row['TotalDistance']?> <em>Km</em></td>
				<td> <?php echo "<a  href='book.php?id=".$row['train_id']."'>" . "Book Now" . "</a> "; ?></td>

			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
		<tr>
				<th>Train Id </th>
				<th>Train Name</th>
				<th>From</th>
				<th>To</th>
				<th>Total Distance</th>
				<th>Book</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $pdo->prepare("SELECT * FROM `train`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
			<td><?php echo $row['train_id']?></td>
				<td><?php echo $row['TrainName']?></td>
				<td><?php echo $row['from']?></td>
				<td ><?php echo $row['to']?></td>
				<td><?php echo $row['TotalDistance']?> <em>Km</em></td>
				<td> <?php echo "<a  href='book.php?id=".$row['train_id']."'>" . "Book Now" . "</a> "; ?></td>

			</tr>
 
			<?php
				}
			?>
		</tbody>
	</table>

	
<?php
	}
?>
