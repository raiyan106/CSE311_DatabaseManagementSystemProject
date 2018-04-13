<!DOCTYPE html>	
<html>
<head>
	<title>Priviledge Results</title>
	<style>
body
{
	background-color:#FFFFF0;
}

	</style>
</head>
<body>
	<h1> Search Results For Priviledges</h1>

	<table>
		<thead>
			<th>Name</th>
			<th>Id</th>
			<th>Name</th>
			<th>Id</th>
			<th>Name</th>
			<th>Id</th>
		</thead>

		<tbody>
			<?php var_dump($priviledge_list); ?>

		<?php foreach ($priviledge_list as $row) { ?>
			<tr>
				<td> <?php echo $row['SIN'];?> </td>
				<td> <?php echo $row['SII'];?> </td>
				<td> <?php echo $row['SRGN'];?> </td>
				<td> <?php echo $row['SRGI'];?> </td>
				<td> <?php echo $row['EN'];?> </td>
				<td> <?php echo $row['EI'];?> </td>
		<?php } ?>

<!--				
-->
			</tr>

		

		</tbody>

	</table>

</body>
</html>