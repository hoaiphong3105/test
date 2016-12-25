<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Quản Lí Bán Hàng</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="/themes/js/jquery-1.7.2.min.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>				
		<script src="/themes/js/superfish.js"></script>	
		<script src="/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form action = "/Search" method="GET" class="search_form1">
						<input name = "key" type="text" class="input-block-level search-query" Placeholder="Bạn muốn tìm gì?">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="/home">Tài khoản</a></li>
							<li><a href="/cart">Giỏ hàng</a></li>
							<li><a href="/checkout">Kiểm tra</a></li>
							<li><a href="/login">Đăng nhập</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="/" class="logo pull-left"><img src="/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							@include('Composers.ProductMenu')
							<li><a href="#">Khuyến mãi</a></li>
							<li><a href="#">Bán chạy nhất</a></li>
							<li><a href="/Admin">Admin</a></li>
						</ul>
					</nav>
				</div>
			</section>
			@section('phanrieng')
			@show()

			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="/">Trang chủ</a></li>  
							<li><a href="/about">Thông tin công ty</a></li>
							<li><a href="/contact">Liên lạc với chúng tôi</a></li>
							<li><a href="/cart">Giỏ hàng</a></li>
							<li><a href="/register">Đăng nhập</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>Tài khoản</h4>
						<ul class="nav">
							<li><a href="#">Tài khoản</a></li>
							<li><a href="#">Lịch sử đơn hàng</a></li>
							<li><a href="#">Danh sách mua sắm</a></li>
							<li><a href="#">Bản tin</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="/themes/images/logo.png" class="site_logo" alt=""></p>
						
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="/themes/js/common.js"></script>
		<script src="/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
			
		</script>
    </body>
</html>