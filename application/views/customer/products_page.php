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
		.hearder 
		{
			background: url(/assets/beans.png);
			background-repeat: no-repeat;
			color: white;
			height: 200px;
		}
		.hearder h4
		{
			text-align: right;
			padding-top: 30px;
		}
		.hearder h1
		{
			padding-top: 50px;
			padding-left: 50px;
			margin: 0;
			font-size: 60px;
		}
		.left_nav 
		{
			border: 1px solid black;
			width: 200px;
			display: inline-block;
			position: static;
			padding: 10px;
		}
		.left_nav button
		{
			padding: 3px 0px;
		}
		#categories_title
		{
			margin-top: 10px;
			font-weight: bold;
		}
		.center_nav
		{
			border: 1px solid black;
			display: inline-block;
			vertical-align: top;
			position: static;
			width: 566px;
		}
		.center_title h1
		{
			display: inline-block;
		}
		.center_search
		{
			display: inline-block;
			text-align: right;
			margin-left: 200px;
		}
		.center_search p
		{
			margin: 0px;
		}
		.picture_box
		{
			display: inline-block;
			margin-left: 8px;

		}
		.picture_box img
		{
			width: 100px;
			height: 100px;
		}

		.product_page
		{
			text-align: center;
		}

		.img 
		{
			display: inline-block;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="hearder">

			<h1>COFFREAKS</h2>
				<!-- echoing out the session that's stored -->
			<h4><a href="/products_page/show_cart">Shopping Cart (<?= $this->session->userdata('cart_counts') ?>)</a></h4>
			
		</div>
		<div class="left_nav">

			<form action="/products_page/search" method="POST">
				<input type="text" name="search_bar" placeholder="Search">
				<button><type="submit" name="search"><img src="http://png-2.findicons.com/files/icons/1156/fugue/16/magnifier_medium_left.png"></button>
				<p id="categories_title">Categories</p>
			</form>

<?php foreach ($categories as $categories) { ?>

				<p>
					<a href='/product_show/show_products/'><?= $categories['name'] ?>
						
					</a>
				</p>

<?php }?>			
		</div>
		<div class="center_nav">
			<div class="center_title">
				<h1>All Coffee</h1>
				<div class="center_search">
					<p><a href="">first</a> | <a href="">prev</a> | 1 | <a href="">next</a></p>
					<p>Sorted by 
						<select>
							<option>Most Popular</option>
							<option>Price: High - Low</option>
							<option>Price: Low - High</option>
						</select>
					</p>
				</div>
			</div>
			<div class="center_nav_products">
				<div class="center_nav_products_img">			
<?php foreach ($products as $product) { ?>	
<div class="picture_box">
					<a href="/product_show/show_products/<?= $product['id']; ?>">					
						<img src="http://www.bostonsearchgroup.com/blog/wp-content/uploads/thumbnail-1024x1024.jpg">
						</a><br>
					<!-- $product['id'] carries products.id to display in the product_show page -->

					<a href='/product_show/show_products/<?= $product['id']; ?>'>
						<?= $product['name'] ?></a>

					<p><?= $product['price'] ?></p>
</div>
<?php	} var_dump($products);?>						
				</div>
			</div>

			<div class="product_page">
				<p><a href="">1</a> | <a href="">2</a> | <a href="">3</a> | <a href="">4</a> | <a href="">5</a> | <a href="">6</a> -></p>

			</div>
		</div>
	</div>
</body>
</html>
