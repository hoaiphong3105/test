@extends('layouts.phanchung')
@section('phanrieng')

			<section class="header_text sub">
			<img class="pageBanner" src="/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Thêm sản phẩm</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								
								<form action="/Admin" method="post">
									{{ csrf_field() }}
									<fieldset>
										<div class="control-group">
											<label class="control-label">Tên</label>
											<div class="controls">
												<input type="text" name="ten" placeholder="Enter product name"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Loại</label>
											<div class="controls">
											<input type="text" name ="loai" placeholder="Enter product type"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Giá</label>
											<div class="controls">
											<input type="text" name ="gia" placeholder="Enter product price"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Số lượng</label>
											<div class="controls">
											<input type="text" name ="soluong" placeholder="Enter product amount"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Mô tả</label>
											<div class="controls">
											<input type="text" name ="mota" placeholder="Enter product describe"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Hình ảnh</label>
											<div class="controls">
											<input type="text" name ="hinhanh" placeholder="Enter product picture"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Nhà sản xuất</label>
											<div class="controls">
											<input type="text" name ="nsx" placeholder="Enter product producer"  class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Tình trạng</label>
											<div class="controls">
											<input type="text" name ="tinhtrang" placeholder="Enter product state"  class="input-xlarge">
											</div>
										</div>
										<button name = "continue" class="btn btn-inverse">Continue</button>
									</fieldset>
								</form>								
							</div>
							
						</div>				
					</div>
				</div>
			</section>			
@endsection()