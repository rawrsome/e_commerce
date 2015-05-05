<html>
<head>
	<title>Orders</title>
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
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Dashboard</h1>&nbsp;&nbsp;&nbsp;
			<h2><a href="">Orders</a></h2>&nbsp;&nbsp;&nbsp;
			<h2><a href="">Products</a></h2>&nbsp;&nbsp;&nbsp;
			<p class="pull-right"><a href="">log off</a></p>
		</div>
		<hr>
		<div class="search">
			<form action="" method="POST">
				<input type="text" name="" placeholder="Search">
				<input type="submit" name="" value="Search" class="btn btn-default btn-xs">
			</form>
			<select class="pull-right">
				<option>Show all</option>
				<option>Shipped</option>
				<option>Cancelled</option>
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
						<td><a href=""><?= $order['id']; ?></a></td>
						<td><?= $order['id']; ?></td>
						<td><?= $order['id']; ?></td>
						<td><?= $order['id']; ?></td>
						<td>$420.00</td>
						<td><select>
							<option>Shipped</option>
							<option>Order in process</option>
							<option>Cancelled</option>
						</select></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php var_dump($orders); ?>
		</div>
	</div>
</body>
</html>