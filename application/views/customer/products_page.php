<html>
<head>
	<title>Products Page</title>
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
			border: 1px solid black;
			width: 200px;
			display: inline-block;
			position: static;
		}

		.center_nav
		{
			border: 1px solid black;
			display: inline-block;
			vertical-align: top;
			position: static;
			width: 560px;
		}

		.product_img
		{
			border: 1px solid black;
			width: 120px;
			height: 120px;
			padding: 20px;
		}

		.product_page
		{
			text-align: center;
		}

		.img 
		{
			display: inline-block;
		}

		img 
		{
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>BayArea Roasters</h2>
			<h4>Shopping Cart (5)</h4>
		</div>
		<div class="left_nav">
			<form action="" method="POST">
				<input type="text" name="search_bar" placeholder="product name...">
				<button><type="submit" name="search"><img src="http://png-2.findicons.com/files/icons/1156/fugue/16/magnifier_medium_left.png"></button>
				<p>Categories</p>
				<p><a href="">Ludlow</a></p>
				<p><a href="">Crosby</a></p>
				<p><a href="">Tuxedos</a></p>
				<p><a href="">Travler</a></p>
				<p><a href="">All Suits</a></p>
			</form>
		</div>
		<div class="center_nav">
			<div class="center_title">
				<h1>All Suits</h1>
				<p><a href="">first</a> | <a href="">prev</a> | 1 | <a href="">next</a></p>
				<p>Sorted by 
					<select>
						<option>Price</option>
						<option>Most Popular</option>
					</select>
				</p>
			</div>
			<div class="center_nav_products">
				<div class="center_nav_products_img">			
<?php foreach ($products as $product) { ?>						
					<img src="http://www.bostonsearchgroup.com/blog/wp-content/uploads/thumbnail-1024x1024.jpg"><br>
					<a href=""><?= $product['name'] ?></a>
					<p><?= $product['price'] ?></p>

<?php	} ?>						
				</div>
			</div>
			<div class="product_page">
				<p><a href="">1</a> | <a href="">2</a> | <a href="">3</a> | <a href="">4</a> | <a href="">5</a> | <a href="">6</a> -></p>
			</div>
		</div>
	</div>
</body>
</html>

<img src="">