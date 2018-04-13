<!DOCTYPE html>
<html>
<head>
	<title>Departments</title>
	<style>
	body
	{
		margin: 0 auto;
		background-color: #FFFFF0;
	}	

	.manage a
	{
		text-decoration: none;
		position: relative;
		display: block;
		top:-5px;
		left:21%;
		height: 80px;
		width: 500px;
		background-color: #7E95A0;
		margin: 8%;
		border-radius: 5%;
	}

	.manage a div
	{
		position: absolute;
		left:30%;
		top:15%;
		font-size: 2.5em;
		color: black;

	}

	.manage a:hover
	{
		background-color: #BFBEA7;
		transition:0.5s;
	}
	h1
	{
		text-align: center;
	}

	

	</style>
</head>
<body>
	<h1>Manage Departments</h1>
	<hr>
	<div class="manage">
	<a href="<?php echo site_url('Police_Controller/load_logistics'); ?>"><div>Logistics</div></a>

	<a href="<?php echo site_url('Police_Controller/load_intelligence'); ?>"><div>Intelligence</div></a>

	<a href="<?php echo site_url('Police_Controller/load_crimeDivision'); ?>"><div>Crime Division</div></a>

</div>


</body>
</html>