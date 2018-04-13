<!DOCTYPE html>
<html>
<head>
	<title>Criminal Info</title>
<style>

	.add form
	{
		height: 100px;
		width: 200px;
		float: right;
		border-radius: 2px;

	}

	table thead th
	{
		border: 2px solid black;
	}

	table thead th h3
	{
		padding-left: 10px;
		padding-right: 10px;
		font-size: 2em;
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

	<h1>List of Most Wanted Criminals</h1>
	<hr>
	
	<table>
		<thead>
			<th><h3>Name</h3></th>
			<th><h3>Age</h3></th>
			<th><h3>Area</h3></th>
		</thead>

		<tbody>

			<?php foreach ($criminalInfo_list as $row) { ?>
				<tr> 
					<td> <?php echo $row['Name'];?> </td>
					<td> <?php echo $row['Age'];?> </td>
					<td> <?php echo $row['Area'];?> </td>	
				 </tr>
		<?php	} ?>


		</tbody>
	</table>



</body>
</html>