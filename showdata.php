<?php 
	include 'header.php'
?>
	
	<h2>Search Results</h2>
	<hr>
	<div class="well">
		<?php 
			//$ownername = mysqli_real_escape_string($conn, $_GET['boc_name']);
			$bldgPermit = mysqli_real_escape_string($conn, $_GET['BuildingPermit']);

			$sql = "SELECT * FROM list WHERE  BuildingPermit = '$bldgPermit'";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);

			if ($queryResults > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<div>
							<p>Building Permit Number: ".$row['BuildingPermit']."</p>
							<p>Date Issued: ".$row['BPDate']."</p>
							<p>Occupation Permit: ".$row['OCPermit']."</p>
							<p>Date Issued: ".$row['OCDate']."</p>
							<p>Owner Name: ".$row['boc_name']."</p>
							<p>Location: ".$row['boc_location']."</p>
							<p>District: ".$row['district']."</p>
							<p>Actual use: ".$row['type_of_occupancy']."
							 / ".$row['scope_work']."</p>
							<p>Bldg. Storey: ".$row['storey']."</p>
							<p>Floor Area: ".$row['floor_area']."</p>
							<p>Cost: ".$row['estimated_cost']."</p>
						</div>";
				}
			}
		 ?>
	</div>

</div> <!--End of container -->
</body>
</html>