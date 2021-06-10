<?php
	// include database connection file

	include "dbConfig.php";

	// fetch data from student table..

	$output = "";
	if (isset($_POST['query'])) {
		$search = mysqli_real_escape_string($con, $_POST['query']);
		$sql = "SELECT * FROM dn_errmap WHERE error_code LIKE '%$search%' LIMIT 0, 10";
	}else{
		$sql = "SELECT * FROM dn_errmap ORDER BY error_code DESC LIMIT 0, 0";
	}
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		$output .= "
		<table class='table table-hover table-striped'>
		<thead>
			<tr class='table-active'>
				<th>Kode Error</th>
				<th>Keterangan</th>
			</tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($query)) {
		$output .= "
		<tbody>
			
			<tr >
				<td><p class='h6'>{$row['error_code']}</p></td>
				<td>{$row['deskripsi']}</td>
			</tr>
			
			</tbody>
			";
		}
	$output .="</table>";
		echo $output;
	}else{
		echo "";
	}
	
?>