<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <link href="{{ URL ::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL ::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL ::asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ URL ::asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ URL ::asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ URL ::asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ URL ::asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="{{ URL ::asset('shortcut icon') }}" href="images/ico/favicon.ico">
    <link rel="{{ URL ::asset('apple-touch-icon-precomposed') }}" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="{{ URL ::asset('apple-touch-icon-precomposed') }}" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="{{ URL ::asset('apple-touch-icon-precomposed') }}" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="{{ URL ::asset('apple-touch-icon-precomposed') }}" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>




<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}


<script src="{{ URL ::asset('js/jquery.js') }}"></script>
	<script src="{{ URL ::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL ::asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ URL ::asset('js/price-range.js') }}"></script>
    <script src="{{ URL ::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL ::asset('js/main.js') }}"></script>
</body>
<style>
    .slider-img{
        height: 400px !important;
    }
    .img-p{
        height:170px  !important ;
    }
    .img-gallery{
        height: 372px !important;
        width: 500px;
    }
    .buy-btn{
       background-color: green;
    }
    .cartlist-img{
        height: 100px  !important;
        width: 100px;
    }
    .img-p{
        height: 200px;

    }
</style>
</html>