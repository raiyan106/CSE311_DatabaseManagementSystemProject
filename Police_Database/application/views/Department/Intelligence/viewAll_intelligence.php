<!DOCTYPE html>
<html>
<head>
	<title>Intelligence Employees</title>
<style>

	.add form
	{
		height: 100px;
		width: 200px;
		float: right;
		border-radius: 2px;

	}
	
	.below
	{
		display: inline-block;
		border:1px solid black;

	}

	table thead th
	{
		border: 2px solid black;
	}

	table thead th h3
	{
		padding-left: 10px;
		padding-right: 10px;
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

	<h1>List of Intelligence Employees</h1>
	<hr>
<table>
		<thead>
			<th><h3>Name</h3></th>
			<th><h3>ID</h3></th>
			<th><h3>Salary</h3></th>
			
		</thead>

		<tbody>

			<?php foreach ($intelligence_list as $row) { ?>
				<tr> 
					<td> <?php echo $row['Name'];?> </td>
					<td> <?php echo $row['ID'];?> </td>
					<td> <?php echo $row['Salary'];?> </td>
				 </tr>
		<?php	} ?>


		</tbody>
	</table>
</body>
</html>