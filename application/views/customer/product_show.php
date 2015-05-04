<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		body
		{
			width: 100%;
			height: 100%;
			background: #FFE4B5;
		}

		.container
		{
			width: 800px;
			margin: 0px auto;
		}
		.header 
		{
			background: url(/assets/beans.png);
			color: white;
		}
		.header h4
		{
			text-align: right;
		}
		.header h1
		{
			margin: 0;
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

			display: inline-block;

		}
		.left_nav_mini_img img
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

			<h1>COFFREAKS</h2>
			<h4><a href="/carts/cart">Shopping Cart (5)</a></h4>
			

		</div>

		<p><a href="/products_page/index">Go Back</a></p>

		<div class="left_nav">
			<h4><?= $name; ?></h4>
			<p class="left_nav_main_img"></p>

			<p class="left_nav_mini_img"><a href=""><img src="http://www.bostonsearchgroup.com/blog/wp-content/uploads/thumbnail-1024x1024.jpg"></a></p>
			<p class="left_nav_mini_img"><a href=""><img src="http://www.bostonsearchgroup.com/blog/wp-content/uploads/thumbnail-1024x1024.jpg"></a></p>
			<p class="left_nav_mini_img"><a href=""><img src="http://www.bostonsearchgroup.com/blog/wp-content/uploads/thumbnail-1024x1024.jpg"></a></p>

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
						<p class="bottom_nav_similar"><a href=""></a></p>
						<p class="bottom_nav_similar"><a href=""></a></p>
						<p class="bottom_nav_similar"><a href=""></a></p>
						<p class="bottom_nav_similar"><a href=""></a></p>
						<p class="bottom_nav_similar"><a href=""></a></p>
						<p class="bottom_nav_similar"><a href=""></a></p>
<!-- 					</tr>
				</tbody>
			</table> -->
		</div>
	</div>
</body>
</html>