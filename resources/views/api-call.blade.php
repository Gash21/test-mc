@extends('layout')

@section('content')

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Hopscotch Test</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
          	<ul class="nav navbar-nav">
            	<li class="active"><a href="/">Hopscotch</a></li>
            	<li><a href="api-call">API Call</a></li>
            	<li><a href="#contact">Contact</a></li>
          	</ul>
        </div><!--/.nav-collapse -->
	</div>
</nav>
<div class="container" >
	<div class="">
		<div class="col-md-12" style="margin-bottom:12px">
			<div class="col-md-offset-3 col-md-6">
				<form id="apiCall" method="POST" action="">
				<div class="form-group forms">
				  	<label id="merchantId" >Merchant ID</label>
				  	<input id="mrc_id" name="mrc_id" type="text" placeholder="Merchant Id" class="form-control" aria-describedby="basic-addon1">
				</div>				
				<div class="form-group forms">
				  	<label id="orderId" >Order ID</label>
				  	<input id="order_id" name="order_id" type="text" placeholder="Order ID" class="form-control" aria-describedby="orderId">
				</div>
				<div class="form-group forms">
				  	<label id="paymentInfo" >Payment Info</label>
				  	<input id="payment_info" name="payment_info" type="text" placeholder="Payment Info" class="form-control" aria-describedby="paymentInfo">
				</div>
				<div class="form-group forms">
				  	<label id="customerInfo" >Customer Info</label>
				  	<input id="customer_info" name="customer_info" type="text" placeholder="Customer Info" class="form-control" aria-describedby="customerInfo">
				</div>
				<div class="form-group forms">
				  	<label id="amounts" >Amount</label>
				  	<input id="amount" name="amount" type="number" placeholder="Amount" class="form-control" aria-describedby="amounts">
				</div>
				<div class="form-group forms">
				  	<button class="btn btn-primary"> Save </button>
				</div>
				</form>
			</div>
		</div>
		<div class="col-md-12" style="margin-bottom:12px">
			<div class="col-md-offset-3 col-md-6">
				<h4>Request</h4>
				<textarea id="requestText" class="form-control" rows="10" disabled="true"></textarea>
			</div>
			<div class="col-md-offset-3 col-md-6">
				<h4>Response</h4>
				<textarea id="responseText" class="form-control" rows="10" disabled="true"></textarea>
			</div>
		</div>
	</div>
</div>
<!-- /.container -->
