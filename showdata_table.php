<?php 
	include 'header.php'
?>
	
	
	<div class="col-md-6 col-md-offset-3">
		<h2>Search Result</h2>
		<hr>
		<table class="table table-bordered">
		<?php 
			/*$ownername = mysqli_real_escape_string($conn, $_GET['boc_name']);*/
			$bldgPermit = mysqli_real_escape_string($conn, $_GET['BuildingPermit']);

			$sql = "SELECT BuildingPermit
			,DATE_FORMAT(BPDate, '%m - %d - %Y') as BPDate
			,OCPermit
			,DATE_FORMAT(OCDate, '%m - %d - %Y') as OCDate
			,boc_name
			,boc_location
			,type_of_occupancy
			,storey
			,floor_area
			,estimated_cost
			FROM list WHERE BuildingPermit='$bldgPermit'";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);
			
			if ($queryResults > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "

						
						<tr>
							<td>Building Permit Number:</td>
							<td>".$row['BuildingPermit']."</td>
						</tr>
						<tr>
							<td>Date Issued: </td>
							<td>".$row['BPDate']."</td>
						</tr>
						<tr>
							<td>Occupation Permit: </td>
							<td>".$row['OCPermit']."</td>
						</tr>
						<tr>
							<td>Date Issued: </td>
							<td>".$row['OCDate']."</td>
						</tr>
						<tr>
							<td>Owner Name: </td>
							<td>".$row['boc_name']."</td>
						</tr>
						<tr>
							<td>Location: </td>
							<td>".$row['boc_location']."</td>
						</tr>
						<tr>
							<td>Actual use: </td>
							<td>".$row['type_of_occupancy']."</td>
						</tr>
						<tr>
							<td>Bldg. Storey: </td>
							<td>".$row['storey']."</td>
						</tr>
						<tr>
							<td>Floor Area (in sqm): </td>
							<td>".$row['floor_area']."</td>
						</tr>
						<tr>
							<td>Cost: </td>
							<td>".number_format($row['estimated_cost'])."</td>
						</tr>

						";
				}
			}
		 ?>
		 </table>
		 <button onclick="myFunction()" class="btn btn-default">Print this Record</button>
		 <a href="<?php echo ROOT_URL;  ?>">Search again?</a>
	</div>

<?php include 'footer.php'; ?>