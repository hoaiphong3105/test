@extends('layouts.phanchung')
@section('phanrieng')
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-3.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
						</li>
					</ul>
				</div>			
			</section>

			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<!--<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line"> <strong>Sản phẩm</strong> Hot</span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">

											</ul>
										</div>
										<div class=" item">
											<ul class="thumbnails">

												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/Feature/5.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">iPad Mini 4 Wifi 64GB</a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">11.990.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/Feature/6.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Samsung Galaxy Tab E 9.6 (SM-T561)</a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">5.490.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/Feature/7.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">HP Pavilion 14 ab120TU i5 </a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">13.990.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/Feature/8.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Dell Inspiron 5559 i7 </a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">18.990.000đ</p>
													</div>
												</li>
											</ul>
										</div>
										
									</div>							
								</div>
							</div>
						</div>-->
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line"> <strong>Sản phẩm </strong>Mới nhất</span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												@foreach($listnew as $item)
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product-{{$item->id_sp}}"><img src="{{$item->hinh_anh}}" alt="" /></a></p>
															<a href="product-{{$item->id_sp}}" class="title">{{$item->ten_sp}}</a><br/>
															<p class="soluong">Số lượng: {{$item->so_luong}}</p>
															<a href="product-{{$item->id_sp}}" class="price">{{$item->gia}}đ</a>
														</div>
													</li>
												@endforeach
											</ul>
										</div>
									<!--	<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/New/5.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Huawei MediaPad T2 7 Pro</a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">4.590.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/New/6.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Laptop HP Pavilion 15 </a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">15.490.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/New/7.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Laptop Apple Macbook Pro </a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">46.990.000đ</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/New/8.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Laptop Lenovo Yoga 300</a><br/>
														<p class="soluong">Số lượng: 5</p>
														<p class="price">7.990.000đ</p>
													</div>
												</li>																																	
											</ul>
										</div>-->
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4> <strong>THIẾT KẾ</strong> HIỆN ĐẠI</h4>										
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4> <strong>GIAO HÀNG</strong> MIỄN PHÍ</h4>
										
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4> <strong>HỖ TRỢ</strong> TRỰC TUYẾN 24/7</h4>
										
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Namufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
@endsection()