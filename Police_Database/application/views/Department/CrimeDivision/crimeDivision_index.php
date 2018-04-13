<!DOCTYPE html>
<html>
<head>
	<title>Crime Division Department</title>
	<style>
	body
	{
		background-color: #FFFFF0;
	}	

	.view
	{
		position: relative;
		height: 100px;
		width: 100%;
		top: 100px;
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
		top:10px;
	}

	.view a:hover
	{
		text-decoration: underline;
		color: white;
		background-color: black;
		transition:0.6s;
		font-family: verdana;
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
	<h1>Welcome to the Department of Crime Division</h1>
	<hr>
	<div class="view">
	<a href="<?php echo site_url('Police_Controller/all_crimeDivision'); ?>">View All Employees</a>
	</div>

</body>
</html>