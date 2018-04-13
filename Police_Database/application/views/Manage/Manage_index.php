<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manage Section</title>
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
		display: inline-block;
		top:100px;
		left: 40px;
		height: 80px;
		width: 400px;
		background-color: #7E95A0;
		margin: 2%;
		border-radius: 5%;
	}

	.manage a div
	{
		position: absolute;
		left:145px;
		top:25px;
		font-size: 1.5em;
		color: black;

	}

	.manage a:hover
	{
		background-color: #BFBEA7;
		transition:0.4s;
	}

	#search
	{
		position: relative;
		top:170px;
		left:70px;
		height: 200px;
		width: 200px;

	}
	#search a
	{
		position: absolute;
		top:60px;
		height: 40px;
		width: 200px;
		background-color: #7E95A0;
		border-radius: 5%;
	}

	#search a div
	{
		position: absolute;
		font-size: 1.5em;
		left: 25px;
		top:5px;
		color: black;
	}
	#search a:hover
	{
		background-color: #BFBEA7;
		transition:0.4s;
	}

	.add
	{
		position: absolute;
		right: 50px;
		bottom: -50px;
		height: 50px;
		width: 250px;
	}

	.add a
	{
		position: relative;
		text-decoration: none;
		background-color: #CCC978;
		font-size: 1.5em;
		padding: 5%;
		color: black;

	}

	.add a:hover
	{

		background-color: #E7E499;
		cursor:pointer;
		bottom:-5px;
		transition:0.5s;
	}

	

	</style>
</head>
<body>

	<h1 style="text-align:center;">Manage your desired Section</h1>
	<hr>
	<div class="manage">
	<a href="<?php echo site_url('Police_Controller/subinspector');?> "><div>Sub Inspectors</div></a>

	<a href="<?php echo site_url('Police_Controller/artillery');?>"><div>Artillery</div></a>

	<a href="<?php echo site_url('Police_Controller/lostAndFound');?>"><div>Lost and Found</div></a>

	<a href="<?php echo site_url('Police_Controller/criminalInfo');?>"><div>Criminal Info</div></a>

	<a href="<?php echo site_url('Police_Controller/load_department');?>"><div>Departments</div></a>
</div>

<div id="search">
	<h4> Search For Employees</h4>
	<a href="<?php echo site_url('Police_Controller/search_section'); ?>" target="_blank"><div>Search Section</div></a>
</div>

<div class="add"><a href="<?php echo site_url('Police_Controller/load_entryForm'); ?>">Add new Employee</a></div>
</body>
</html>