@extends('master')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>

</head><!--/head-->

<body>
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">orderNow</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					
					<tbody>
						
						<tr>
						<td class="">Amount Carts:</td>
						<td class="">{{$total}}FCFA</td>

						</tr>
                        <tr>
						<td class="">Tax:</td>
						<td class="">2000FCFA</td>

						</tr>
                        <tr>
						<td class="">Delivery:</td>
						<td class="">1000FCFA</td>

						</tr>
                        <tr>
						<td class=""></td>
						<td class=""></td>

						</tr>
                        <tr>
						<td class="text-danger"><span><h3>Total Amount : </h3></span></td>
						<td class="text-danger"><h3>{{$total+1000+2000}}FCFA</h3> </td>

						</tr>
					
						

						
						
					</tbody>
				</table>
			</div>
            <div class="col-sm-4 col-sm-offset-1">

					<div class="login-form">
						<h2>Payment</h2>
						<form action="/orderplace" method="POST">
						@csrf
							<label for="name">E-Mail:</label>
                           
							<textarea type="text" placeholder="Enter Email" name="email"></textarea>
							<label for="name">Payment Method:</label>
                            <textarea type="text" placeholder="Enter Payment" name="payment"></textarea>
							
                            <textarea type="text" placeholder="Enter Adress" name="address"></textarea>
							
							
							<button type="submit" class="btn btn-default">Order</button>
						</form>

					</div><!--/login form-->
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	
	


  
</body>
</html>
@endsection