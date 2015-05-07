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


	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>COFFREAKS</h1>
			<a href="/admins">login</a>
		</div>

<?php  
	if(! $this->session->userdata('cart_total'))
	{
		$this->session->set_userdata('cart_total', array());
	}
	$total = 0;

	// checking session data for cart items 
	// var_dump($this->session->userdata('cart_total')); 
?>



		<div class="cart_table">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr class="active">
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>

<?php $item=0;
	foreach ($this->session->userdata('cart_total') as $cart_total) { ?>
					<tr class="active">
						<td><?= $cart_total['name'] ?></td>
						<td>$<?= $cart_total['price'] ?></td>
						<td><?= $cart_total['qty'] ?>&nbsp;&nbsp;&nbsp;
							<a href="/cart/update/<?= $cart_total['id'] ?>" class="btn btn-info btn-xs">update</a>
							<a href="/cart/destroy/<?= $item; ?>">&nbsp;&nbsp;&nbsp;<img src="http://q-serv.biz/design/admin2/images/trash-icon-16x16.gif"></a>
						</td>
						<td>$<?php echo $item_total = $cart_total['price'] * $cart_total['qty'];
						$total = $total + $item_total;
						$item++;
						 ?></td>
					</tr>
<?php  } ?>
 

 <?php 
 // var_dump($this->session->userdata('cart_total'));  ?>
				</tbody>
			</table>
		</div>

		<div class="total col-xs-12">
		<div class="col-xs-10"></div>			
			<div class="col-xs-2">
				<p>Total: $<?= $total ?></p>
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