<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
	body
	{
		width: 100%;
		height: 100%;
	}

	.container
	{
		width: 800px;
		margin: 0px auto;
	}
	.header
	{
		background: #DEB887;
	}
	.header h1, h2
	{
		display: inline-block;
	}
	.search form
	{
		display: inline-block;
	}
	.order_id
	{
		border: 1px solid silver;
		display: inline-block;
		border-radius: 10px;
		padding: 8px;
	}
	.order_info
	{
		display: inline-block;
		vertical-align: top;
		width: 590px;
	}
	.order_status
	{
		border: 1px solid silver;
		text-align: center;
		padding: 7px 40px 0px;
		margin-bottom: 20px;
		border-radius: 10px;

	}
	.order_price
	{
		border: 1px solid silver;
		padding: 10px;
		text-align: right;
		border-radius: 10px;
	}
	</style>
</head>
<body>
	<?php var_dump($result); ?>
	<div class="container">
		<div class="header">
			<h1>Dashboard</h1>&nbsp;&nbsp;&nbsp;
			<h2><a href="">Orders</a></h2>&nbsp;&nbsp;&nbsp;
			<h2><a href="">Products</a></h2>&nbsp;&nbsp;&nbsp;
			<p class="pull-right"><a href="">log off</a></p>
		</div>
		<hr>
		<div class="order_id">
			<p>Order ID: 420</p>
			<p>Customer Shipping info:</p>
			<p>Name: Dr. Dre<br>
				Address: 420 Dr.<br>
				City: San Francisco<br>
				State: CA<br>
				Zip: 90420<br>
			</p>
			<p>Customer Billing info:</p>
			<p>Name: Dr. Dre<br>
				Address: 420 Dr.<br>
				City: San Francisco<br>
				State: CA<br>
				Zip: 90420<br>
			</p>
		</div>
		<div class="order_info">
			<div class="order_table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Item</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10</td>
							<td>Blunt</td>
							<td>$9.99</td>
							<td>2</td>
							<td>$19.98</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="order_status">
				<p>Status: Shipped</p>
			</div>
			<div class="order_price">
				<p>Sub total: $19.98</p>
				<p>Shipping: $1.00</p>
				<p>Total price: $20.98</p>
			</div>
		</div>
	</div>
</body>
</html>