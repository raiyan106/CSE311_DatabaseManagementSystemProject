<!DOCTYPE html>
<html>
<head>
	<title>Lost and Found</title>
<style>

body
{
	background-color: #FFFFF0;
}
	.update
	{
		float: right;
		border-radius: 2px;
		border:2px solid black;
		background-color: #EECF88;
		padding: 2%;

	}

	table thead th
	{
		border: 2px solid black;
		background-color: black;
	}

	table thead th h3
	{
		color:white;
		padding-left: 30px;
		padding-right: 30px;
		text-align: center;
	}

	table tbody tr td
	{
		margin: 1%;
		border:1px solid black;
		text-align: center;
	}

	.add
	{
		background-color: #FDF2E9;
		position: relative;
		border: 3px solid black;
		display: inline-block;
		padding: 2%;
		top:10px;
	}
	
</style>
</head>
<body>

	<h1>List of people lost or found</h1>
	<hr>
	<table>
		<thead>
			<th><h3>Name</h3></th>
			<th><h3>Age</h3></th>
			<th><h3>ID</h3></th>
			<th><h3>Gender</h3></th>
			<th><h3>Status</h3></th>
		</thead>

		<tbody>

			<?php foreach ($lostAndFound_list as $row) { ?>
				<tr> 
					<td> <?php echo $row['Name'];?> </td>
					<td> <?php echo $row['Age'];?> </td>
					<td> <?php echo $row['ID'];?> </td>
					<td> <?php
						if($row['Gender']==0) echo "MALE";
						else echo "FEMALE";
					?>
					</td>

					<td><strong> <?php
						if($row['Status']==0) echo "LOST";
						else echo "FOUND";
					?> </strong>
					</td>

				 </tr>
		<?php	} ?>


		</tbody>
	</table>
<div class="add">
	<form action="<?php echo site_url('Police_Controller/new_lostAndFound'); ?>" method="post">
		<h3>New Lost Entry</h3>
	<p>
		<strong>Name</strong>
		<input type="text" name="name" required="required">
	</p>
	<p>
		<strong>Age</strong>
		<input type="text" name="age" required="required">
	</p>
	<p>
		<strong>Gender</strong>
		<select name="gender">
					<option value="0">MALE</option>
					<option value="1">FEMALE</option>
				</select>
	</p>

	<p>
		<input type="submit" name="submit"  value="Add">

	</p>
	</form>
</div>

<div class="update">

<form action="<?php echo site_url('Police_Controller/change_lostAndFound'); ?>" method="post">
<h3>Update Information of missing person</h3>
<p>
<strong>ID: </strong>
<input type="text" name="id" required="required">
</p>

<p>
<strong>Change Status To</strong>

				<select name="status">
					<option value="0">LOST</option>
					<option value="1">FOUND</option>
				</select>
</p>

<p>
<input type="submit" value="Change" name="submit">
</p>

</form>

</div>

</body>
</html>