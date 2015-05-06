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
	img{
		width:45px;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Dashboard</h1>&nbsp;&nbsp;&nbsp;
			<h2><a href="/admins/show_orders">Orders</a></h2>&nbsp;&nbsp;&nbsp;
			<h2><a href="/admins/products_show">Products</a></h2>&nbsp;&nbsp;&nbsp;
			<p class="pull-right"><a href="">log off</a></p>
		</div>
		<hr>
		<div class="search">
			<form action="/admins/search_products_admin" method="POST">
				<input type="text" name="search" placeholder="Search">
				<input type="submit" name="" value="Search" class="btn btn-default btn-xs">
			</form>
			<form action="" method="POST" class="pull-right">
				<input type="submit" name="" value="Add New Product">
			</form>
		</div>
		<div class="data_table">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Picture</th>
						<th>ID</th>
						<th>Name</th>
						<th>Inventory count</th>
						<th>Quantity sold</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $result): ?>
						
						<tr>
							<td><img src=<?= $result['img_url'] ?>></td>
							<td><?= $result['id'] ?></td>
							<td><?= $result['name'] ?></td>
							<td><?= $result['inventory'] ?></td>
							<td><?= $result['quantity_sold'] ?></td>
							<td><a href="">Edit</a>&nbsp;&nbsp;&nbsp;<a href="">Delete</a></td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>