<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<style>
	body
	{
		margin: 0 auto;
		background-color: #FFFFF0;
	}

	nav
	{
		top:0px;
		position: absolute;
		width: 100%;
		background-color: #778899;
	}
	nav ul
	{
		margin: 0 auto;
		width: 80%;
	}

	nav ul li
	{
		display: inline-block;
		padding:1.2%;
		padding-right: 6%;
		padding-left: 6%;
		list-style-type: none;
	}

	nav ul a
	{
		text-decoration: none;
		font-size: 1.2em;
		color: black;
		font-family: sans-serif;
	}
	nav ul li:hover
	{
		background-color: #292421;
		color: white;
		transition:0.7s;
	}
	.form
	{
		position: relative;
		top:100px;
		left:20px;
		display: inline-block;
	}
	input[type="text"], input[type="password"]
	{
		width: 200px;
		border-radius: 5px;
		padding: 5px;
		border: 1px solid #c6c6c6;
	}
	input[type="submit"]
	{
		width: 100px;
		padding:3px;
		font-size: 1.2em;
		border-radius: 5px;
		background-color: #CDB7B5;

	}

	.right
	{
		font-size: 3em;
		color:black;
		position: absolute;
		top:100px;
		right:20px;
		font-style: italic;
	}

	</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<a href="#"><li>Home</li></a>
				<a href="<?php echo site_url('Police_Controller/gd'); ?>" target="_blank"><li>GD Info</li></a>
				<a href="<?php echo site_url('Police_Controller/safety_tips'); ?>" target="_blank"><li>Safety Tips</li></a>
				<a href="<?php echo site_url('Police_Controller/emergency'); ?>" target="_blank"><li>Emergency</li></a>
				<a href="<?php echo site_url('Police_Controller/about'); ?>" target="_blank"><li>About Us</li></a>
			</ul>	

		</nav>
	</header>

	
<div class="form">
	<form action="<?php echo site_url('Police_Controller/manage_index'); ?>" method="post">
		<p>
			<h3>Username</h3>
			<input type="text" name="username" required="required" placeholder="username">
		</p>

		<p>
			<h3>Password</h3>
			<input type="password" name="password" required="required" placeholder="password">
		</p>
		<p>
			<input type="submit" value="Login" name="submit">
		</p>
	</form>



</div>

<div class="right">
		POLICE DATABASE FOR THANA XYZ

	</div>





</body>
</html>