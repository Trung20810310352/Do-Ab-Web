<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link rel="stylesheet" href="style_login.css"/> 
    <title>Dang Nhap</title>
</head>
<body>
<header class="sticky-top">
		<div class="container1">
			<div class="row">
				<div class="col-2 menu">
					<img src="uploads/logo.png">
				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/trangchu.html">Trang chủ</a></li>
                        <li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/gioithieu.html">Giới thiệu</a></li>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/sanpham.html">Sản phẩm</a>
							<ul class="menu_child">
								<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/dienthoai.html">Điện thoại</a></li>
								<li><a href="">Máy tính</a></li>
								<li><a href="">Phụ kiện</a></li>
							</ul>
						</li>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/baohanh.html">Bảo hành</a></li>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/lienhe.html">Liên hệ</a></li>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/dangnhap.html">Đăng nhập</a></li>
						<li><a href="http://127.0.0.1:5500/vs%20web/webbantbdientu/giohang.html">Giỏ hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header> 
    <form action='Dang nhap.php' class="dangnhap" method='POST'> <br><br><br><br>
    Tên đăng nhập : <input type='text' name='username' /> 
    Mật khẩu : <input type='password' name='password' /> 
    <input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
    <a href='Dang ky.php' title='Đăng ký'>Đăng ký</a> <br><br>
    </form>
    <footer1 action='Dang nhap.php'>
		<div class="container1">
			<div class="row footer1">
				<div class="col-3">
					<h3>Sửa chữa điện thoại </h3>
					<ul class="menu_footer">
						<li><a href="">IPhone</a></li>
						<li><a href="">SamSung</a></li>
						<li><a href="">Máy tính xách tay</a></li>
						<li><a href="">Bảo hành sản phẩm</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Chính sách bán hàng</h3>
					<ul class="menu_footer">
						<li><a href="">CS Bảo mật thông tin</a></li>
						<li><a href="">CS Vận chuyển</a></li>
						<li><a href="">CS Đổi trả</a></li>
						<li><a href="">CS Thanh toán</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Hướng dẫn</h3>
					<ul class="menu_footer">
						<li><a href="">Hướng dẫn mua hàng từ xa</a></li>
						<li><a href="">Đặt hàng qua faceBook</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Giới thiệu</h3>
					<ul class="menu_footer">
						<li><a href="">Giới thiệu</a></li>
						<li><a href="">Sản phẩm</a></li>
						<li><a href="">Khuyến mãi</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 copy_right">
				<a href="">CÔNG TY CỔ PHẦN CÔNG NGHỆ BOTA-Email: contact@bota.com.vn</a>
			</div>
		</div>
	</footer1>
</body>
</html>