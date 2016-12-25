
@extends('layouts.phanchung')
@section('phanrieng')
    @foreach ($sp as $ctsp)
    @endforeach
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Thông tin sản phẩm</span></h4>
    </section>
    <section class="main-phanrieng">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">

                        <a href="{{$ctsp->hinh_anh}}" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{$ctsp->hinh_anh}}"></a>

                    </div>
                    <div class="span5">
                        <address>

                            <strong>Tên sản phẩm:</strong> <span>{{$ctsp->ten_sp}}</span><br>
                            <strong>Nhà sản xuất:</strong> <span>{{$ctsp->nha_sx}}</span><br>
                            <strong>Số lượng:</strong> <span>{{$ctsp->so_luong}}</span><br>
                        </address>
                        <h4><strong>Giá: {{$ctsp->gia}}</strong></h4>
                    </div>
                    <div class="span5">
                        <form class="form-inline">

                            <p>&nbsp;</p>
                            <label>Chọn:</label>
                            <input type="text" class="span1" placeholder="1">
                            <button class="btn btn-inverse" type="submit">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Mô tả</a></li>
                            <li class=""><a href="#profile">Thông tin thêm</a></li>
                        </ul>
                        <div class="tab-phanrieng">
                            <div class="tab-pane active" id="home">{{$ctsp->mo_ta}}</div>
                            <div class="tab-pane" id="profile">
                                <table class="table table-striped shop_attributes">
                                    <tbody>
                                    <tr class="alt">
                                        <th>Màu</th>
                                        <td>Cam, Vàng</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
 
                    </div>
                </div>
            </div>
  

            </div>
        </div>
    </section>
@endsection()