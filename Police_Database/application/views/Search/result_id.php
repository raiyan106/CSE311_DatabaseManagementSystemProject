<!DOCTYPE html>	
<html>
<head>
	<title>ID Results</title>
	<style>
body
{
	background-color:#FFFFF0;
}



table thead th h2
	{
		padding-left: 20px;
		padding-right: 20px;
		text-align: center;
	}

	table tbody tr td
	{
		margin: 1%;
		border:1px solid black;
		text-align: center;
		font-family: sans-serif;
		font-size: 1.2em;
	}

	</style>
</head>
<body>
	<h1> Search Results For ID</h1>
	<hr>
	<table>
		<thead>
			<th><h2>Name</h2></th>
			<th><h2>ID</h2></th>
			<th><h2>Salary</h2></th>
			<th><h2>Department</h2></th>
		</thead>

		<tbody>

			<?php foreach ($search_list2 as $row) { ?>
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