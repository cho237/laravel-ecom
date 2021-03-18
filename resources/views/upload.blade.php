@extends('master')
@section("content")


<!DOCTYPE html>
<html lang="en">
<head>
   
</head><!--/head-->

<body>
	
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">

					<div class="login-form"><!--login form-->
						<h2>Upload Product</h2>
						<form action="/upload" method="POST" enctype="multipart/form-data">
							@csrf
							<label for="product_image">Product image:</label>
							<input type="file" placeholder="Image here" name="image"/>

                            <label for="product_name">Product Name:</label>
							<input type="text" placeholder="Product Name" name="product_name"/>

                            <label for="product_price">Product Price:</label>
							<input type="text" placeholder="Price" name="price"/>

                            <label for="product_description">Product Description:</label>
							<input type="text" placeholder="description here" name="product_description"/>
							
							
							<button type="submit" class="btn btn-default">Upload</button>
						</form>

					</div><!--/login form-->
				
				</div>
			</div>
		</div>
	</section><!--/form-->

	</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->

						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Users Upload</a></li>
								
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
							@foreach($photos as $photo)
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="img-p" src="{{asset('images/'.$photo->name)}}" alt="" />
												<h1>{{$photo['product_name']}}</h1>
												<h2>{{$photo['price']}}</h2>
												<p>{{$photo['description']}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
								@endforeach	
								
							</div>
							
							</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	
	
	

  
</body>
</html>
@endsection