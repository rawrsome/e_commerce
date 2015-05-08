<html>
<head>
	<title>Orders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#stat').change(function(){
				var status=$('#stat').val();
				$('#status_hidden').val(status);
				$('form').submit();
			})
		})

	</script>
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
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Dashboard</h1>&nbsp;&nbsp;&nbsp;
			<a href="/Products_page">view products</a>
			<h2><a href="/admins/show_orders">Orders</a></h2>&nbsp;&nbsp;&nbsp;
			<h2><a href="/admins/products_show">Products</a></h2>&nbsp;&nbsp;&nbsp;
			<p class="pull-right"><a href="">log off</a></p>
		</div>
		<hr>
		<div class="search">
			<form action="/admins/search_orders" method="POST">
				<input type="text" name="search" placeholder="Search">
				<input id="status_hidden" type="hidden" name="status" value="show_all">
				<input type="submit" value="Search" class="btn btn-default btn-xs">
			</form>
			<select id="stat" name="status" class="pull-right">

				<option >Status</option>
				<option value="show_all">Show all</option>
				<option value="shipped">Shipped</option>
				<option value="processing">Processing</option>
				<option value="cancelled">Cancelled</option>
			</select>
		</div>
		<div class="data_table">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Name</th>
						<th>Date</th>
						<th>Billing Address</th>
						<th>Total</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($orders as $order) {
						
					?>
					<tr>
						<td><a href="/admins/show_order/<?= $order['order_id']; ?>"><?= $order['order_id']; ?></a></td>
						<td><?= $order['first_name']; ?></td>
						<td><?= $order['Date']; ?></td>
						<td><?= $order['address'].' '.$order['city'].', '.$order['state'].' '.$order['zipcode']; ?></td>
						<td>$<?= $order['Total']; ?></td>
						<td><?= $order['status']; ?>
							<!-- <select>
							<option>put da status herr</option>
							<option>Shipped</option>
							<option>Order in process</option>
							<option>Cancelled</option>
						</select> -->
					</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>