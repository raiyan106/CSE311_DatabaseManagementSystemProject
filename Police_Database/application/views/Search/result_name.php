<!DOCTYPE html>	
<html>
<head>
	<title>Name Results</title>
	<style>
body
{
	background-color:#FFFFF0;
}



	table thead th h3
	{
		padding-left: 10px;
		padding-right: 10px;
		text-align: center;
	}

	table tbody tr td
	{
		margin: 1%;
		border:1px solid black;
		text-align: center;
	}

	</style>
</head>
<body>
	<h1> Search Results By Name</h1>
	<hr>
	<table>

		<thead>
			<th><h3>Name</h3></th>
			<th><h3>ID</h3></th>
			<th><h3>Salary</h3></th>
			<th><h3>Department</h3></th>
		</thead>

		<tbody>

			<?php foreach ($search_list as $row) { ?>
				<tr> 
					<td> <?php echo $row['Name'];?> </td>
					<td> <?php echo $row['ID'];?> </td>
					<td> <?php echo $row['Salary'];?> </td>
					<td> <?php
						if($row['Dept_Title']==0) echo "LOG";
						if($row['Dept_Title']==1) echo "INTEL";
						if($row['Dept_Title']==2) echo "CD";
					?> 
					</td>

				 </tr>
		<?php	} ?>


		</tbody>

	</table>

</body>
</html>