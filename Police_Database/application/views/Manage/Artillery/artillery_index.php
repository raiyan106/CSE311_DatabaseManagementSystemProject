<!DOCTYPE html>
<html>
<head>
	<title>Artillery</title>
<style>

.add
{
	border: 2px solid black;
}
	.add form
	{
		height: 100px;
		width: 200px;
		float: right;
		border-radius: 2px;

	}
	
	.below
	{
		position: relative;
		display: inline-block;
		border:1px solid black;
		top:15px;
		padding: 2%;

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

	<h1>List of Artillery</h1>
	<hr>
<table>
		<thead>
			<th><h3>Name</h3></th>
			<th><h3>Model</h3></th>
			<th><h3>Date</h3></th>
			<th><h3>Rounds</h3></th>
		</thead>

		<tbody>

			<?php foreach ($artillery_list as $row) { ?>
				<tr> 
					<td> <?php echo $row['Name'];?> </td>
					<td> <?php echo $row['Model'];?> </td>
					<td> <?php echo $row['Date'];?> </td>
					<td> <?php echo $row['Total_Rounds'];?> </td>	

				 </tr>
		<?php	} ?>


		</tbody>
	</table>

<div class="add">
	<form action="<?php echo site_url('Police_Controller/new_artillery'); ?>" method="post">
		<h3>New Artillery</h3>
	<p>
		<strong>Name</strong>
		<p><input type="text" name="name" required="required"></p>
	</p>
	<p>
		<strong>Model</strong>
		<p><input type="text" name="model" required="required"><p>
	</p>

	<p>
		<strong>Total Rounds</strong>
		<p><input type="text" name="total_rounds" required="required"></p>
	</p>
	
	<p>
		<strong>Year of Manufacture</strong>
		<p><input type="text" name="date" required="required"></p>
	</p>

	<p>
		<input type="submit" name="submit"  value="Add">

	</p>
	</form>
</div>
<div class="below">
	<form action="<?php echo site_url('Police_Controller/change_artillery'); ?>" method="post">
		<h3> Update Artillery Rounds By Name </h3>
		<strong> Name </strong>
		<p>
			<input type="text" name="name" required="required">
		</p>
		<strong>Updated number of Rounds </strong>
		<p><input type="text" name="total_rounds" required="required"></p>

		<p>
		<input type="submit" name="submit"  value="Update">

	</p>

	</form>
</div>

</body>
</html>