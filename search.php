<?php 
	include 'header.php'
?>
<h3>Search Results</h3>

	<?php 
		if (isset($_POST['submit-search'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM list WHERE 
				boc_id LIKE '%$search%' OR 
				BuildingPermit LIKE '%$search%' OR 
				BPdate LIKE '%$search%' OR 
				OCPermit LIKE '%$search%' OR
				OCDate LIKE '%$search%' OR
				boc_name LIKE '%$search%' OR
				boc_location LIKE '%$search%' OR
				district LIKE '%$search%' OR
				type_of_occupancy LIKE '%$search%' OR
				scope_work LIKE '%$search%' OR
				remarks LIKE '%$search%' OR
				storey LIKE '%$search%' OR
				floor_area LIKE '%$search%' OR
				estimated_cost LIKE '%$search%'
				";

			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);
			
			

			if ($queryResults > 0) {
				echo "<div class='alert alert-success'>There are <strong>".$queryResults."</strong> Results!</div>";
				while ($row = mysqli_fetch_assoc($result)){
					?>
					
						<?php	
								echo "

									<div class='col-md-6 col-md-offset-3'>
										
										<p>Occupancy Permit Number: <strong>".$row['OCPermit']."</strong></p>
										<p>Owner Name: ".$row['boc_name']."</p>
										<p>Location: ".$row['boc_location']."</p>
										<p>Estimated Cost: ".number_format($row['estimated_cost'])."</p>
										<a class='btn btn-primary' href='showdata_table.php?BuildingPermit=".$row['BuildingPermit']."'>Show Data</a>
									<hr>
									</div> ";
							}
						?>
					
						<?php	
						} else{
							echo "<div class='alert alert-danger'><p>Aw snap! There are <strong>".$queryResults."</strong> result(s) on your search query. <a href='".ROOT_URL."'>Click here if you like to search again?</a><p></div>";
								}
							}
				 		?>
	
<?php include 'footer.php'; ?>