<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		.header 
		{
			background: silver;
		}

		.left_nav 
		{
/*			border: 1px solid black;*/
			width: 300px;
			display: inline-block;
		}

		.left_nav_main_img
		{
			border: 1px solid black;
			width: 270px;
			height: 270px;
		}

		.left_nav_mini_img
		{
			border: 1px solid black;
			display: inline-block;
			width: 54px;
			height: 54px;

		}

		.center_nav
		{
/*			border: 1px solid black;*/
			display: inline-block;
			vertical-align: top;
			width: 400px;
		}

		.bottom_nav_similar
		{
			width: 100px;
			height: 100px;
			border: 1px solid black;
			display: inline-block;
			margin-right: 15px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Dojo eCommerce</h2>
			<h4>Shopping Cart (5)</h4>
		</div>

		<p><a href="/products_page/index">Go Back</a></p>

		<div class="left_nav">
			<h4><?= $name; ?></h4>
			<p class="left_nav_main_img"></p>
			<table>
				<tbody>
					<tr>
						<td class="left_nav_mini_img"></td>
						<td class="left_nav_mini_img"></td>
						<td class="left_nav_mini_img"></td>
						<td class="left_nav_mini_img"></td>
						<td class="left_nav_mini_img"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="center_nav">
			<div class="center_nav_description">
				<p>
					<?= $description; ?>
				</p>
			</div>
			<form action="" method="POST" class="pull-right">
				<select>
					<option>Qty 1: $<?= $price; ?></option>
					<option>Qty 2: $<?= $price * 2; ?></option>
					<option>Qty 3: $<?= $price * 3; ?></option>
					<input type="submit" value="buy" class="btn btn-primary btn-xs">
				</select>
			</form>
		</div>
		<div class="bottom_nav">
			<h3>Similar Items</h3>
<!-- 			<table>
				<tbody>
					<tr> -->
						<p class="bottom_nav_similar"></p>
						<p class="bottom_nav_similar"></p>
						<p class="bottom_nav_similar"></p>
						<p class="bottom_nav_similar"></p>
						<p class="bottom_nav_similar"></p>
						<p class="bottom_nav_similar"></p>
<!-- 					</tr>
				</tbody>
			</table> -->
		</div>
	</div>
</body>
</html>