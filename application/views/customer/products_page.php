<html>
<head>
	<title>Products Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sort').change(function(){
				var sort = $(this).val();
				$('#sort_hidden').val(sort);
				$('form').submit();
			})
		})
	</script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
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
		.header img
		{
			-moz-transform: scaleX(-1);
	        -o-transform: scaleX(-1);
	        -webkit-transform: scaleX(-1);
	        transform: scaleX(-1);
	        filter: FlipH;
	        -ms-filter: "FlipH";
			height: 28px;
			width: 28px;
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
			/*border: 1px solid black;*/
			width: 205px;
			display: inline-block;
			position: static;
			padding: 10px;
			background: #DEB887;
			border-radius: 5px;
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
		.center_nav_products_img
		{

		}
		.center_nav
		{
			/*border: 1px solid black;*/
			display: inline-block;
			vertical-align: top;
			position: static;
			width: 560px;
		}
		.center_title h1
		{
			display: inline-block;
		}
		.center_search
		{
			display: inline-block;
			text-align: right;
			margin-left: 190px;
		}
		.center_search p
		{
			margin: 0px;
		}
		.picture_box
		{
			display: inline-block;
			margin-left: 8px;
			/*border: 1px solid black;*/
			width: 120px;
			vertical-align: top;

		}
		.picture_box img
		{
			width: 100px;
			height: 100px;
			border: 1px solid #999;
			background-color: #fcfcfc;
			padding: 3px;

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
		<div class="header">

			<h1>COFFREAKS</h1>

				<!-- echoing out the session that's stored -->
			
			<h4><a href="/admins">login</a><a href="/products_page/show_cart">Shopping Cart (<?= $this->session->userdata('cart_counts') ?>)<img src="http://www.creativecodestudios.com/wp-content/uploads/2015/03/trolly.png"></a></h4>
			
		</div>
		<div class="left_nav">

			<form action="/products_page/search_products" method="POST">
				<input type="text" name="search_bar" placeholder="Search">
				<input id="sort_hidden" type="hidden" name="sort" value="all">
				<button><type="submit" name="search"><img src="http://png-2.findicons.com/files/icons/1156/fugue/16/magnifier_medium_left.png"></button>
				<p id="categories_title">Categories</p>

			</form>


				<p><a href='/products_page/view_category/all'>Show All</a></p>

<?php foreach ($count_categories as $count_categories) { ?>

				<p><a href='/products_page/view_category/<?= $count_categories['id'] ?>'><?= $count_categories['name'] ?>(<?= $count_categories['count'] ?>)</a></p>

<?php }?>
		</div>
		<div class="center_nav">
			<div class="center_title">
				<h1><?= $cat_name ?></h1>
				<div class="center_search">
					<p>Sorted by 
						
							<select id="sort">
								<option value="all">All</option>
								<option value="pop">Most Popular</option>
								<option value="high">Price: High - Low</option>
								<option value="low">Price: Low - High</option>
							</select>
						
					</p>
				</div>
			</div>
			<div class="center_nav_products">
				<div class="center_nav_products_img">

<?php foreach ($products as $product) { ?>
<div class="picture_box">
					
					<a href="/product_show/show_products/<?= $product['id'] ?>">					
						<img class="img-circle" src="<?= $product['img_url'] ?>">
						</a>

					<a href='/product_show/show_products/<?= $product['id'] ?>'>
						<?= $product['name'] ?></a>
					<p><?= $product['price'] ?></p>
</div>
<?php	} ?>
						
				</div>
			</div>

		</div>
	</div>
		<script>
	 
	$(".img-circle").mouseover(function() {
		$( this ).css("background-color","#333")
	});
	$(".img-circle").mouseout(function(){
		$( this ).css("background-color","#fcfcfc")
	});
	</script>
</body>
</html>
