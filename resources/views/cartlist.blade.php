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
				  <li class="active">My Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							
							
							<td class="total">Price</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $item)
						<tr>
							<td class="cart_product">
								<a href="detail/{{$item->id}}"><img src="{{$item->gallery}}" class="cartlist-img"alt=""></a>
							</td>
							
							<!-- <td class="cart_price">
								<p>{{$item->name}}</p>
							</td> -->
							<td class="cart_quantity">
							<p>{{$item->name}}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$item->price}}FCFA</p>
							</td>
							<td class="cart_delete">
								<a href="/removecart/{{$item->carts_id}}" class="btn btn-danger"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						<a class="btn btn-success" href="ordernow">order now</a>

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	

	
	


  
</body>
</html>
@endsection