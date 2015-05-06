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
			background: url(http://38.media.tumblr.com/7ef87fea367244e61bf404b934aa0ab9/tumblr_mlaqezFGke1s5jjtzo1_500.png);
			background-color: #FFE4B5;
			background-position: right bottom;
			background-attachment: fixed;
			background-size: 25%;
			background-repeat: no-repeat;
		}

		.container
		{
			width: 800px;
			margin: 0px auto;
		}
		.header 
		{
			background: url(/assets/beans.png);
			background-repeat: no-repeat;
			color: white;
			height: 200px;
		}
		.header h4
		{
			text-align: right;
			padding-top: 30px;
		}
		.header h1
		{
			padding-top: 50px;
			padding-left: 50px;
			margin: 0;
			font-size: 60px;
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
			
			<h4><a href="/products_page/show_cart">Shopping Cart (<?= $this->session->userdata('cart_counts') ?>)</a></h4>

			
		</div>

		<p><a href="/products_page/index">Go Back</a></p>

		<div class="left_nav">

			<h4><?= $product['name']; ?></h4>
			<img class="left_nav_main_img" src=<?= $product['img_url'] ?>>


			<?php foreach($product_imgs as $img){?>

				<p class="left_nav_mini_img"><a href=""><img src=<?= $img['img_url'] ?>></a></p>
			
			<?php } ?>
		</div>
		<div class="center_nav">
			<div class="center_nav_description">
				<p>
					<?= $product['description']; ?>
				</p>
			</div>
			<form action="/cart/carts/" method="POST" class="pull-right">
				<select name="qty">
					<option value='1'>Qty 1: $<?= $product['price']; ?></option>
					<option value='2'>Qty 2: $<?= $product['price'] * 2; ?></option>
					<option value='3'>Qty 3: $<?= $product['price'] * 3; ?></option>

					<!-- passing the id for the indvidual product to be grabbed -->
<?php if($this->session->flashdata("confirmation"))
	{
		echo $this->session->flashdata("confirmation");
	} ?>

					<input type='hidden' name='id' value='<?= $id; ?>'>
					<input type='hidden' name='price' value='<?= $price; ?>'>
					<input type='hidden' name='name' value='<?= $name; ?>'>
					<input type="submit" value="buy" class="btn btn-primary btn-xs">
				</select>
			</form>
		</div>
		<div class="bottom_nav">
			<h3>Similar Items</h3>

				<?php foreach ($similar as $img): ?>
					
					<p class="bottom_nav_similar"><a href=""></a><img class="bottom_nav_similar" src=<?=$img['img_url']?>></p>

				<?php endforeach ?>

		</div>
	</div>
</body>
</html>