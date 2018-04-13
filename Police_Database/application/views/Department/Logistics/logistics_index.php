<!DOCTYPE html>
<html>
<head>
	<title>Logistics Department</title>
	<style>
	body
	{
		background-color: #FFFFF0;
	}	

	.view
	{
		height: 100px;
		width: 100%;
	
	}

	.view a
	{
		position: relative;
		text-decoration: none;
		font-size: 1.5em;
		background-color: grey;
		font-family: verdana;
		margin-left: 150px;
		margin-top: 50px;
		padding: 10px;
		border-radius: 5%;
		color: black;
		top:20px;
	}

	.view a:hover
	{
		text-decoration: underline;
		color: white;
		background-color: black;
		transition:0.6s;
	}


	.rest
	{
		top:100px;
		position: relative;
	}

	.rest div
	{
		display: inline-block;
		border-right: 2px solid black;
		height: 300px;
		width: 32%;

	}

	

	h1
	{
		margin: 0 auto;
		text-align: center;
		margin-bottom: 4%;
	}

	.i
	{
		height:100px;
		width: 100%;
		border:1px solid black;
	}
	

	
	</style>
</head>
<body>
	<h1>Welcome to the Department of Logistics</h1>
	<hr>
	<div class="view">
	<a href="<?php echo site_url('Police_Controller/all_logistics'); ?>">View All Employees</a>
	</div>
	

	


</body>
</html>