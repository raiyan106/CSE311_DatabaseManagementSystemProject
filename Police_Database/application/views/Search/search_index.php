<!DOCTYPE html>
<html>
<head>
	<title>Search Section</title>
	<style>
	body
	{
		background-color: #FFFFF0;
	}	

	div
	{
		position: relative;
		top:50px;
		width: 30%;
		height: 300px;
		display: inline-block;
		background-color: #F3EEAA;
		box-shadow: 2px 4px 4px grey;
		margin: 1%;
		padding: .1%
	}
	
	p
	{
		font-size: 1.5em;
		font-family: Verdana;
	}

	input[type="text"]
	{
		border-radius: 2px;
		height: 20px;
	}
	input[type="submit"]
	{
		height: 25px;
		width: 70px;
		cursor: pointer;
	}

	input[type="submit"]:hover
	{
		transition:.4s;
		background-color: grey;
		font-family: sans-serif;
	}

	.right
	{
		border-right: 1px solid #FFFFF0;
	}
	.below
	{
		position: relative;
		left: 40px;
		top:300px;
		background: #FCF266;
		padding: .5%;
	}

	select
	{
		padding: 1.5%;
	}
	option
	{
		font-size: 1em;
		font-family: verdana;
	}

	</style>

<body>
	<div>
		<form action="<?php echo site_url('Police_Controller/searchByName') ?>" method="post">
			<p>Search By Name</p>
			<input type="text" name="name" required="required" placeholder="name">
			<input type="submit" value="Search" name="submit" required="required">
		</form>
	</div>

	<div>
		<form action="<?php echo site_url('Police_Controller/searchById') ?>" method="post">
			<p>Search By ID</p>
			<input type="text" name="id" required="required" placeholder="id">
			<input type="submit" value="Search" name="submit" required="required">
		</form>
	</div>

<!-- 	<div class="right">
		<form action="<?php echo site_url('Police_Controller/searchByPriviledge'); ?>" method="post">
			<p>Search By Priviledge</p>
			<select name="priviledge">
				<option value="0">House</option>
				<option value="1">Ration</option>
				<option value="2">Risk</option>
				<option value="3">Medical</option>
				<option value="4">Travel</option>
			</select>
			<input type="submit" value="Search" name="submit" required="required">
		</form>
	</div>
 -->
	<!-- <div>
		<form  action="<?php echo site_url('Police_Controller/searchByDepartment'); ?>" method="post">
			<p>Search By Department</p>
			<select name="department">
				<option value="0">LOG</option>
				<option value="1">INTEL</option>
				<option value="2">CD</option>
			</select>
			<input type="submit" value="Search" name="submit" required="required">
		</form>
	</div> -->

	<div class="below">
		<form action="<?php echo site_url('Police_Controller/deleteById') ?>" method="post">
			<p>Delete By ID</p>
			<input type="text" name="id" required="required" placeholder="id">
			<input type="submit" value="delete" name="submit" required="required">
		</form>
	</div


</body>
</html>