@extends('layouts.phanchung')
@section('phanrieng')
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Danh sách sản phẩm</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <ul class="thumbnails listing-products">
                    @foreach ($listsp as $item)
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a href="product-{{$item->id_sp}}"><img alt="" src={{$item->hinh_anh}}></a><br/>
                                <a href="product-{{$item->id_sp}}" class="title">{{$item->ten_sp}}</a><br/>
                                <p class="soluong">Số lượng: {{$item->so_luong}}</p>
                                <p class="nhasx">Nhà sản xuất: {{$item->nha_sx}}</p>
                                <a href="product-{{$item->id_sp}}" class="price">{{$item->gia}}đ</a>

                            </div>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <div class="pagination pagination-small pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3 col">
                <div class="block">
                    <ul class="nav nav-list below">
                        <form action="/Admin" method="POST">
									
							<div class="control-group">
											
								<div class="controls">
									<input type="button" value="Thêm" class="btn btn-inverse" onclick="location.href='/Admin/create'">
								</div>
								<div class="controls">									
									<input name = "key" type="text" class="input-block-level search-query" Placeholder="Nhập mã sản phẩm">
									<input type="button" value="Sửa" class="btn btn-inverse" onclick="location.href='/Admin/create'">
								</div>
							
								<div class="controls">									
									<input name = "id" type="text" class="input-block-level search-query" Placeholder="Nhập mã sản phẩm">
									<input name = "search" type="button" value="Xóa" class="btn btn-inverse" onclick="location.href='/Admin/create'">
								</div>
							</div>
					</form>
                    </ul>
                </div>
               <!-- <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Gợi ý</span></span>
                        <span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                    </h4>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <img alt="" src="themes/images/Feature/1.jpg"><br/>
                                            <a href="/product_detail" class="title">Thời trang</a><br/>
                                            <p class="soluong">Số lượng: 5</p>
                                            <p class="price">11.990.000đ</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <img alt="" src="themes/images/New/2.jpg"><br/>
                                            <a href="/product_detail" class="title">Tinh tế</a><br/>
                                            <p class="soluong">Số lượng: 5</p>
                                            <p class="price">6.290.000đ</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>
    </section>
@endsection()