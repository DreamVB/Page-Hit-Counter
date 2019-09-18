<?php
	require("counter.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			.counter{
				display: inline-block;
				padding: 2px 8px 2px 8px;
				background-color: #3fa346;
				color: #fff;
				font-size: 16px;
				line-height: 1.5;
				border-radius: 3px;
				font-weight: 400;
				margin-bottom: 8px;
				text-align: center;
			}
			.counter-blue{background-color: #003195;}
			.counter-red{background-color: #ec0000;}
			.counter-orange{background-color: #ee9f00;}
			.counter-night{background-color: #555;}
		</style>
	</head>
	<body>
		<h1>Simple Hit Counter</h1>
		<p>Keep a count of unique visitors.</p>
		<span>You are vistor </span><span class="counter counter-night"><?php echo($counter)?></span><span> to this site</span><br />
	</body>
</html>