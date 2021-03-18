<?php
use App\Http\controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}

?>


	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +237</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> null@.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="" alt="LOGO" /></a>
						</div>
					
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                            @if(Session::has('user'))
								<li><a href="#"><i class="fa fa-user"></i>{{Session::get('user')['name']}}</a></li>
								
								<li><a href="/cartlist"><i class="fa fa-shopping-cart"></i> Cart({{$total}})</a></li>
                               
								<li><a href="/myorders"> MyOrders</a></li>
								<li><a href="/logout"><i class="fa fa-lock"></i> Logout</a></li>

                                @else
                                <li><a href="/login"><i class="fa fa-lock"></i> Login/SignUp</a></li>
                                @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li class="dropdown"><a href="">Operations<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/upload">AddProduct</a></li>
									
                                    </ul>
                                </li> 
								
							
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
                    @if(Session::has('user'))
						<div class=" pull-right">
                            <form action="/search">
							<input type="text" name="name" placeholder="Search"/>
                           <button type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
						</div>
                    @else
                    <div class=" pull-right">
                            <form action="/login">
							<input type="text" name="name" placeholder="Search"/>
                           <button type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
						</div>
                   @endif
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->