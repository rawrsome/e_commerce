<html>
<head>
	<title>Cart</title>
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


	</style>
</head>
<body>
	<div class="container">
		<div class="header">
<<<<<<< HEAD
			<h1>COFFREAKS</h2>
			<h4>Shopping Cart (5)</h4>
=======
			<h1>Dojo eCommerce</h2>
			<h4><a href="/carts/cart">Shopping Cart (5)</a></h4>
>>>>>>> 86240e2fefbe17715a2f1307a462755e12c539ff
		</div>
		<div class="cart_table">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Ludlow blazer</td>
						<td>$299.99</td>
						<td>1&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-info btn-xs">update</a><a href="">&nbsp;&nbsp;&nbsp;<img src="http://q-serv.biz/design/admin2/images/trash-icon-16x16.gif"></a></td>
						<td>$299.99</td>
					</tr>
					<tr>
						<td>Ludlow chino</td>
						<td>$199.99</td>
						<td>2&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-info btn-xs">update</a><a href="">&nbsp;&nbsp;&nbsp;<img src="http://q-serv.biz/design/admin2/images/trash-icon-16x16.gif"></a></td>
						<td>$399.98</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="total col-xs-12">
		<div class="col-xs-10"></div>			
			<div class="col-xs-2">
				<p>Total: $699.97</p>
				<a class="btn btn-success btn-xs" href="/products_page/index/">Continue Shopping</a>
			</div>
		</div>
	
		<div class="shipping">
			<h3>Shipping Information</h3>
			<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">First Name:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Last Name:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Address:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Address 2:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">City:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">State:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Zipcode</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>

			<h3>Billing Info</h3>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Same as Shipping
			        </label>
			      </div>
			    </div>
			  </div>
			<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">First Name:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Last Name:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Address:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Address 2:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">City:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">State:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Zipcode</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>
			  <br>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Card:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Security Code:</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputPassword3">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Buy</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>