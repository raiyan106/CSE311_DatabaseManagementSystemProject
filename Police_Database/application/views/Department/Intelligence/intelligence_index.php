<!DOCTYPE html>
<html>
<head>
	<title>Intelligence Department</title>
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
		text-decoration: none;
		font-size: 1.5em;
		background-color: grey;
		font-family: verdana;
		margin-left: 150px;
		margin-top: 50px;
		padding: 10px;
		border-radius: 5%;
		color: black;
	}

	.view a:hover
	{
		text-decoration: underline;
		color: white;
		background-color: black;
		transition:.6s;
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

	.delete
	{
		position: relative;
		top:-80px;
	}
	
	.update
	{
		position: relative;
		top:55px;
		left:10px;
		border-right: 0px !important;
	}

	input[type="text"]
	{
		border-radius: 5%;
		height: 20px;
	}

	input[type="submit"]
	{
		border-radius: 2%;
		height: 25px;
		width: 70px;
	}

	h1
	{
		margin: 0 auto;
		text-align: center;
		margin-bottom: 4%;
	}

	
	</style>
</head>
<body>
	<h1>Welcome to the Department of Intelligence</h1>
	<hr>
	<div class="view">
	<a href="<?php echo site_url('Police_Controller/all_intelligence'); ?>">View All Employees</a>
	</div>


</body>
</html>