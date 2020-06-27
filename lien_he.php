<!DOCTYPE html>
<html>
	<head>
		<title>Liên hệ</title>
	</head>
	<body>
		<div id="menu_top">
			<ul>
            <li id="Register">Register</li>
            <li>Thành viên</li>
            <li style="color: #ED6F24">Trợ giúp</li>
            <li>Tài liệu tham khảo</li>
            <li>User</li>
            <li>Khoa</li>
            <li>Trang chủ</li>
        </ul>
		</div>
		<div id="main_1">
			<div id ="left">
				<h2 style="color: #ED6F24; margin: 25px 100px">Gửi thông tin cho chúng tôi</h2>
				<p style="margin-left: 100px"> Nếu bạn có bất kì thắc mắc nào, hãy liên hệ với chúng tôi !</p>
				<form style="margin-left: 100px" method="POST" action="./lien_he_phan_hoi.php">
				<p>
				Tên:<br>
				<input type="text" name="txtTen" style="width: 400px;">
				</p>
				<p>
				Số điện thoại:<br>
				<input type="text" name="txtSoDienThoai" style="width: 400px;">
				</p>
				Email:<br>
				<input type="text" name="txtEmail" style="width: 400px;">
				</p>
				<p>
				Lời nhắn:<br>
				<textarea name="txtLoiNhan" style="width: 400px; height: 100px"></textarea>
				</p>
				<button type="submit">Gửi</button>
				</form>
			</div>
			<div id="right">
			<p><b>Địa chỉ:</b></p>
			<p>Học viện Ngân hàng, số 12 Chùa Bộc, Đống Đa</p>
			<p><b>Số điện thoại:</b></p>
			<p>0378565965</p>
			<p><b>Địa chỉ:</b></p>
			<p>Học viện Ngân hàng, số 12 Chùa Bộc, Đống Đa</p>
			<p><b>Email:</b></p>
			<p>sob@gmail.com</p>
			<p><b>Facebook:</b></p>
			<p>Sob - Học viện Ngân hàng</p>
				
			</div>
		</div>
		<div id="main_2">
			<h1 style="color: #ED6F24; margin-left: 420px; margin-right: 420px">Trợ giúp</h1>
			<div id="qa1">
				<h2>Về tài khoản</h2>
				<p>1.Tôi có thể đăng kí tài khoản Sob như thế nào?</p>
				<p>2.Tôi bị báo lỗi khi đăng nhập?</p>
				<p>3.Làm thế nào khi tôi quên mật khẩu?</p>
				<p>4.Làm thế nào để tôi quản lý và chỉnh sửa thông tin trong tài khoản?</p>
				<p>5.Tại sao tôi nên đăng kí tài khoản Sob?</p>

			</div>
			<div id="qa2">
				<h2>Về quy trình bán sách</h2>
				<p>1.làm thế nào tôi có thể đăng bài lên website?</p>
				<p>2.Tôi có thể đăng bán tối đa bao nhiêu sách ở một thời điểm ?</p>
				<p>3.Làm thế nào để sửa đổi bài mà tôi đã đăng?</p>
				<p>4.Đăng bao nhiêu lâu thì được admin phê duyệt?</p>

			</div>
			<br>
			<br>
			<br>
		</div>
		<div id="footer">
        <div id="logo">
            <img src="./img/Logo1.png">
        </div>
        <div id="book">
            <ul>
                <h2> Sách của chúng tôi </h2>
                <li>Khoa Hệ thống thông tin quản lý</li>
                <li>Khoa Tài chính</li>
                <li>Khoa Ngân hàng</li>
                <li>Khoa Luật</li>
                <li>Khoa Ngoại ngữ</li>
                <li>Khoa Quản trị kinh doanh</li>
                <li>Khoa Kinh tế</li>
                <li>Khoa Lý luận chính tri</li>
                <li>Khoa Kinh doanh quốc tế</li>
            </ul>
        </div>
        <div id="lienHe">
            <ul>
                <h2>Liên hệ</h2>
                <li>Hotline: 0886 858 296</li>
                <li>Email: sob@gmail.com</li>
                <li>Mọi thắc mắc hãy gửi về cho chúng tôi</li>
            </ul>
            <form>
                <input type="text" id="text">
                <input type="button" id="submit">
            </form>
        </div>
    </div>
    <link rel="stylesheet" href="./css/lien_he.cs" />
</html>