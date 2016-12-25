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
                        <form action = "/SearchByMultipleCriteria" method="GET" class="search_form">
                            <li class="nav-header"><b>Tìm kiếm theo</b></li>
                            <li><select name="nhasanxuat">
                                    <option value="" >--Nhà sản xuất-- </option>
                                    <option value="Apple" >Apple </option>
                                    <option value="Samsung"> Samsung </option>
                                    <option value="Oppo"> Oppo </option>
                                    <option value="Hewlett-Packard" > HP </option>
                                    <option value="Lenovo" > Lenovo </option>
                                    <option value="Dell" > Dell </option>
                                    <option value="Huawei" > Huawei </option>
                                </select>
                            </li>
                            <li><select name="loai">
                                    <option value="" >--Loại-- </option>
                                    <option value="1" > Smartphone</option>
                                    <option value="2" > Tablet</option>
                                    <option value="3" > Laptop</option>
                                </select></li>
                            <li><select name="gia">
                                    <option value="" >--Giá--</option>
                                    <option value=1 > > 15 triệu</option>
                                    <option value=2> 10 triệu ->15 triệu</option>
                                    <option value=3 >  5 triệu->10 triệu</option>
                                    <option value=4 > < 5tr</option>
                                </select>
                            </li>
                            <li><input name="search" type="submit" value="Tìm kiếm"></li>
                        </form>

                    </ul>
                </div>
                <div class="block">
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
                </div>

            </div>
        </div>
    </section>
@endsection()