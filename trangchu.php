<!--html 5-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>24H NEWS - Tin tức 24h nhanh chóng, chính xác, tin cậy</title>
		<link rel="shortcut icon" href="images/logo.png"/>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.css"/>       
		
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <script src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_news5/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
		
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	</head>

	<body>
		
		<!--hiển thị nội dung website-->
		<div class="container">
			
			<div class="row top">
				<!--banner-->
				<div class="col-3 top1">
                    <a href="#"><img src="images/LogoBanner1.png" class="img-fluid"/></a>
				</div>
				<!--Tìm kiếm-->
				<div class="col-4">
                	<div class="timedate">
					<div id="clock">Loading...</div>
					<script type="text/javascript"> function refrClock() {
					var d=new Date();
					var s=d.getSeconds();
					var m=d.getMinutes();
					var h=d.getHours();
					var day=d.getDay();
					var date=d.getDate();
					var month=d.getMonth();
					var year=d.getFullYear();
					var days=new Array("Chủ nhật","Thứ hai","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7");
					var months=new Array("1","2","3","4","5","6","7","8","9","10","11","12"); var am_pm;
					if (s<10) {s="0" + s}
					if (m<10) {m="0" + m}
					if (h>12)
					{h-=12;AM_PM = "PM"}
					else {AM_PM="AM"}
					if (h<10) {h="0" + h}
					document.getElementById("clock").innerHTML=days[day] + ", Ngày " + date + "/" +months[month] + "/" + year + " - "+ h + ":" + m + ":" + s +" "+ AM_PM; setTimeout("refrClock()",1000); } refrClock(); </script>
					</div>
                </div>
				<div class="col-3" style="margin-top:20px; margin-left:0px;">
				<form action="#" method="post" style=" margin-right: 0px; border-radius:10px;">
					<input type="text" name="txt_search" placeholder="Nhập nội dung tìm kiếm..."/>
					<button><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					  </svg></button>
					
				</form>
				</div>
			
				<!--Login-->
                <div class="col-2 top2" style="margin-top:20px;">
				<div class="dangnhap">
				<a href="#" class="dangnhap2" title=" Đăng nhập">	
				   <i class="fa fa-user"> Đăng Nhập</i>
				</a>
			 	</div>
				<!----
				<a href="#" style="text-decoration:none; font-weight: bold; font-size:14px;">
					<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
					</svg>
					<span style="font-size: 12px;">Đăng nhập</span>
				</a>
				-->
				</div>
				
			</div>
		
			<!--menu - navigation-->
			
			<div class="row menu">
                <ul>
					
					<li><a href="#"><i class="fas fa-home" style="margin-left: 5px; margin-right: 5px;"></i></a></li>
                    <li><a href="#">NỔI BẬT</a></li>
					<li><a href="#">VĂN HÓA VÀ GIẢI TRÍ</a></li>
                    <li><a href="#">XÃ HỘI</a></li>
					<li><a href="#">THỂ THAO</a></li>
					<li><a href="#">GIÁO DỤC</a></li>
					<li><a href="#">SỨC KHỎE</a></li>
					<li><a href="#">DU LỊCH</a></li>
					<li><a href="#">CÔNG NGHỆ</a></li>
				</ul>
			</div>
		
			<!--Nóng-->
			<div class="row tieude" style="margin-top:10px;">
				<div class="col-9"><a href="#"><h3 style="border-left:4px solid red; margin-left: -15px;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
				  </svg>NÓNG</h3></a></div>
				<div class="col-3"><a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
				  </svg>&nbspXem nhiều </h3></a></div>
			</div>
			
			<div class="row" style="margin-top:10px;">
				
				<div class="col-6 bgtext">
					<a href="#"><table width="650" height="350"  background="./images/wenger.jpg" cellpadding="2" cellspacing="0">
						<tr>
						<td valign="bottom">
							<span style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: white; background-color:black">
								Wenger: 'Nếu tôi mua Ronaldo, Arsenal có thể ghi 200 bàn mỗi mùa'</span>
						</td>
						</tr>
					</table></a>
				</div>
				<div class="col-3">
					<div class="box2">
						<a href="#">
							<img src="images/Minh-Hieu.jpg" class="img-fluid"/>
							<h1>Đôi bạn '10 năm cõng nhau' cùng dự khai giảng Đại học Bách khoa Hà Nội</h1>
						</a>
					</div>
					<div class="box2">
						<a href="#">
							<img src="images/huyndai.jpg" class="img-fluid"/>
							<h1>‘Thái tử’ Hyundai kế nghiệp sau 20 năm chờ đợi</h1>
						</a>
					</div>
				</div>
				<div class="col-3">

					<div class="scroll1">
						<a href="#"><h2>Nguyên giao dịch viên ngân hàng tự ý rút 28 lượng vàng của người gửi để bán</h2></a>
						<hr class="light">
						<a href="#"><h2>Tìm thấy 6 thi thể mất tích</h2></a>
						<hr class="light">
						<a href="#"><h2>Đề xuất làm sớm 2 tuyến đường trên cao ở TP HCM</h2></a>
						<hr class="light">
						<a href="#"><h2>Áp thấp nhiệt đới vào Biển Đông</h2></a>
						<hr class="light">
						<a href="#"><h2>Gần 1.000 người tham gia cứu hộ vụ Rào Trăng 3</h2></a>
						<hr class="light">
						<a href="#"><h2>Tiểu hành tinh vận tốc 90.252 km mỗi giờ bay tới Trái Đất</h2></a>
						<hr class="light">
						<a href="#"><h2>Ôtô khách chở 40 người đối đầu xe container</h2></a>
						<hr class="light">
						<a href="#"><h2>Hướng về "khúc ruột" miền Trung!</h2></a>
						<hr class="light">
						<a href="#"><h2>Ông Dương Văn Thái được bầu làm Bí thư Tỉnh ủy Bắc Giang</h2></a>
						<hr class="light">
						<a href="#"><h2>Pháp tuyên bố tình trạng khẩn cấp y tế, 'Quý tử' của ông Trump mắc Covid-19</h2></a>
						<hr class="light">
						<a href="#"><h2>Bùn chất đầy nhà sau lũ, người dân Quảng Trị hối hả dọn dẹp</h2></a>
						<hr class="light">
						<a href="#"><h2>'Nữ ca sĩ 3 con' Mỹ Lệ: Tôi tự kiếm tiền, không lệ thuộc vào chồng đại gia</h2></a>
						<hr class="light">
						<a href="#"><h2>Van de Beek giải cứu Hà Lan trên đất Italy</h2></a>
						<hr class="light">
						<a href="#"><h2>Xe tải lao vách đá biến dạng, tài xế tử vong mắc kẹt trong cabin</h2></a>
					</div>
					
				</div>
			</div>
			<hr class="light">
			<!--Thể thao-->
			<div class="row tieude" style="margin-top:-10px;">
				<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trophy" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 
					3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076
					 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 
					 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
				  </svg>&nbspThể thao</h3></a>
			</div>
			<div class="row" style="margin-top:10px;">
				
				<div class="col-3">
					<div class="box2">
						<a href="#">
							<img src="images/Maguire.jpg" class="img-fluid"/>
							<h1>HLV Gareth Southgate động viên Harry Maguire tiếp tục chiến đấu</h1>
						</a>
					</div>
					<div class="box2">
						<a href="#">
							<img src="images/QuangNam-ThanhHoa.jpg" class="img-fluid"/>
							<h1>Thanh Hóa - Quảng Nam: Chờ xem ‘chuyên gia chữa cháy’</h1>
						</a>
					</div>
				</div>
				<div class="col-3">
					<div class="box2">
						<a href="#">
							<img src="images/Ro7.jpg" class="img-fluid"/>
							<h1>Lương của Ronaldo đủ trả cho bốn đội Serie A
							</h1>
						</a>
					</div>
					<div class="box2">
						<a href="#">
							<img src="images/m10.jpg" class="img-fluid"/>
							<h1>Messi xếp trên Ronaldo ở Champions League mùa trước</h1>
						</a>
					</div>
				</div>
				<div class="col-6 bgtext">
					<a href="#"><table background="./images/Phap.jpg" cellpadding="2" cellspacing="0">
						<tr>
						<td valign="bottom">
							<span style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: white; background-color:black">Pháp bám đuổi Bồ Đào Nha</span>
						</td>
						</tr>
					</table></a>
				</div>
			</div>
			<hr class="light">
			<!--covid 19-->
			<div class="row tieude" style="margin-top:10px;">
				<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
					<path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
				  </svg>&nbspCovid -19</h3></a>
				
			</div>
			
			<div class="row" style="margin-top:10px;">
				<div class="col-3 box2">
					<a href="#">
						<img src="images/covid1.jpg" class="img-fluid" height="150" />
						<h1>Covid-19: Ngày kỷ lục buồn ở Nga, Trung Quốc có ca nhiễm nội địa trở lại</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/covid2.jpg" class="img-fluid" />
						<h1>Cristiano Ronaldo nhiễm COVID-19</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/covid3.jpg" class="img-fluid" />
						<h1>Hiểm họa và triển vọng cho kinh tế toàn cầu từ Covid-19</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/covid4.jpg" class="img-fluid" />
						<h1>Chuẩn bị kịch bản ứng phó tình huống dịch COVID-19 xấu nhất mùa đông xuân</h1>
					</a>
				</div>
			</div>
				
			<hr class="light">
			
				<!--Banner chạy-->
			<div class="row" style="margin:20px 0px;">
				<div class="col-12" style="border:1px solid #CCCCCC;">
					<marquee>
						<a href="#"><img src="images/bannerchay.png" class="img-fluid"/></a>
						<a href="#"><img src="images/bannerchay.png" class="img-fluid"/></a>
						<a href="#"><img src="images/bannerchay.png" class="img-fluid"/></a>
						<a href="#"><img src="images/bannerchay.png" class="img-fluid"/></a>
						<a href="#"><img src="images/bannerchay.png" class="img-fluid"/></a>
					</marquee>
				</div>				
			</div>
			
			<hr class="light">
		<!--Gíao dục -->
			
			<div class="row" style="margin-top:10px;">	
				<div class="col-7">
					<div class="row tieude" style="margin-top:10px; margin-bottom:10px;">
						<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
						  </svg>&nbspGiáo dục</h3></a>
						
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/bosung.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Thêm 5 trường công an xét tuyển bổ sung </h4></a>
							
							<h5>5 trong số 7 trường công an xét tuyển bổ sung,
								 trong đó Học viện An ninh nhân dân và Chính trị Công an nhân dân thiếu nhiều nhất...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/tumoi.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>9 lời khuyên để nhớ từ mới nhanh hơn</h4></a>
							<h5>Thay vì chỉ tra cứu từ để biết nghĩa, bạn cần nghe cách phát âm, viết ra, đưa nó vào câu cụ thể và nhắc đi nhắc lại nhiều lần...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/dhtonducthang.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Sớm hoàn thiện bộ máy tổ chức ở Đại học Tôn Đức Thắng</h4></a>
							<h5>Phó thủ tướng Vũ Đức Đam yêu cầu các đơn vị chỉ đạo Đại học Tôn Đức Thắng khẩn trương hoàn thiện bộ máy tổ chức quản lý... </h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/gd.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Sinh viên chia sẻ lý do chọn Western Sydney Việt Nam</h4></a>
							<h5>Môi trường học quốc tế, có cơ hội nhận học bổng đến 50% học phí là những lý do một số học sinh trường chuyên chọn Western Sydney Việt Nam...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/pho-thu-tuong.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Phó thủ tướng: 'Tiếp thu cầu thị góp ý sách giáo khoa lớp 1'</h4></a>
							<h5>Phó thủ tướng Vũ Đức Đam yêu cầu Bộ Giáo dục và Đào tạo trân trọng, nghiên cứu, tiếp thu một cách cầu thị, khoa học những góp ý về sách giáo khoa lớp 1 mới...</h5>
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="row tieude" style="margin-left:0px; margin-top:10px; margin-bottom:10px;">
						<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gem" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
						  </svg>&nbspVăn hóa và giải trí</h3></a>
						
					</div>
		<!--VĂN HÓA GT-->			
					<div class="scroll2">
						<a href="#"><img src="images/John-Cena.jpg" alt=""><h2>'Huyền thoại đô vật' John Cena kết hôn</h2></a>
						<hr class="light">
						<a href="#"><img src="images/VinhThuy.jpg" alt=""><h2>Vĩnh Thụy casting phim của Ngô Thanh Vân</h2></a>
						<hr class="light">
						<a href="#"><img src="images/taylor.jpg" alt=""><h2>Taylor Swift trắng tay tại Billboard Music Awards</h2></a>
						<hr class="light">
						<a href="#"><img src="images/lamtruong.png" alt=""><h2>Phong độ Lam Trường qua hơn hai thập niên</h2></a>
						<hr class="light">
						<a href="#"><img src="images/billboard.jpg" alt=""><h2>Sao đa phong cách ở lễ trao giải Billboard</h2></a>
						<hr class="light">
						<a href="#"><img src="images/domanhcuong.jpg" alt=""><h2>Đỗ Mạnh Cường nhận con nuôi thứ bảy</h2></a>
						<hr class="light">
						<a href="#"><img src="images/abbey1.png" alt=""><h2>‘Abbey Road’ - dấu ấn cuối cùng của huyền thoại The Beatles</h2></a>
						<hr class="light">
						<a href="#"><img src="images/thuyvan.jpg" alt=""><h2>Thụy Vân: 'Tôi bị đồn ly hôn vì cứ giấu chồng'</h2></a>
						<hr class="light">
						<a href="#"><img src="images/Selena-Gomez.jpg" alt=""><h2>Selena Gomez sản xuất phim kinh dị</h2></a>
						<hr class="light">
						<a href="#"><img src="images/dongnhi.jpg" alt=""><h2>Đông Nhi khoe bụng bầu với váy trong suốt</h2></a>
						<hr class="light">
						<a href="#"><img src="images/ChrisHemsworth.jpg" alt=""><h2>Gia đình Chris Hemsworth du lịch biển</h2></a>
					
					</div>
				</div>
			</div>
			
			
			<hr class="light">
		<!--SỨC KHỎE CÔNG NGHỆ-->
			<div class="row" style="margin-top:10px;">	
				<div class="col-6">
					<div class="tieude" style="margin-left:-15px; margin-top:0px; margin-bottom:10px;">
						<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
							<path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
						  </svg>&nbspSức khỏe</h3></a>		
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/2cacovid.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Thêm hai người nhập cảnh nhiễm nCoV</h4></a>
							
							<h5>Chiều 17/10, Bộ Y tế công bố thêm 2 ca nhiễm Covid-19. Những người này đều từ nước ngoài về Việt Nam, được cách ly ngay sau nhập cảnh tại TP. Hồ Chí Minh và Khánh Hoà....</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/20t.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Thanh niên Hà Nội 20 tuổi mắc ung thư gan, bệnh ủ từ lâu không biết</h4></a>
							<h5>Nam thanh niên đến viện khám vì đau hạ sườn phải, khi siêu âm bác sĩ phát hiện khối u trong gan có đường kính hơn 15 cm....</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/sap-toi-nguoi-dan-co-the-kham-chua-benh-ngay-tai-nha.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Sắp tới, người dân có thể khám chữa bệnh ngay tại nhà</h4></a>
							<h5>Với sự hỗ trợ của công nghệ, người dân có thể dễ dàng trao đổi, thực hiện khám chữa bệnh ngay tại nhà với bác sĩ.... </h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/benhmat.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Các căn bệnh ẩn sau những dấu hiệu bất thường của mắt</h4></a>
							<h5>Mắt bị đỏ là dấu hiệu của dị ứng, tăng nhãn áp trong khi đó, lòng trắng của mắt có màu vàng cảnh báo bệnh gan, mật...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/115kg.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Người phụ nữ Sơn La sốc vì tăng từ 49 lên 115kg</h4></a>
							<h5>Từ thân hình mảnh mai, chị A. đã tăng liền 65 kg lên 115 kg, dù tìm mọi cách giảm cân nhưng không hiệu quả...</h5>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row tieude">
						<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
							<path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
						  </svg>&nbspCông nghệ</h3></a>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/tiktok.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Thêm một quốc gia cấm TikTok, Apple trả gần 7 tỷ đồng cho nhóm hacker </h4></a>
							
							<h5>Thêm một quốc gia cấm TikTok; Apple trả gần 7 tỷ đồng cho một nhóm hacker; Facebook dùng sức mạnh độc quyền để diệt đối thủ,...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/itudigi.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Khách tham quan sẽ được trải nghiệm những gì tại ITU Virtual Digital World 2020?</h4></a>
							<h5>Chỉ còn ít ngày nữa, ITU Digital World 2020 sẽ được chính thức khai mạc với chương trình ba ngày triển lãm và hội nghị trực tuyến cấp Bộ trưởng ...</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/vanhanh.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Vận hành nhà máy lắp ráp thiết bị điện tử công nghệ cao ở miền Trung</h4></a>
							<h5>Nhà máy có quy mô nhà xưởng 1.000m2 với tổng số vốn đầu tư ban đầu hơn 7 triệu USD và cùng với sự hỗ trợ từ các chuyên gia đến từ Silicon Valley, Hoa Kỳ... </h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/quan-chuc-huawei-chi-trich-5g-trung-quoc-gia-tao-ngu-ngoc-ngheo-nan.jpg" alt=""></a>
						</div>
						<div class="col-8">
							
							<a href="#"><h4>Quan chức Huawei chỉ trích 5G Trung Quốc “giả tạo, ngu ngốc, nghèo nàn”</h4></a>
							<h5>Ryan Ding, người phụ trách bộ phận nhà mạng của Huawei, vừa dội gáo nước lạnh vào dịch vụ 5G Trung Quốc.</h5>
						</div>
					</div>
					<div class="row box1" style="margin-bottom:5px;">
						<div class="col-4">
							<a href=""><img src="images/iphone-an-icloud-dat-hang-re-hon-ca-iphone-lock-5.jpg" alt=""></a>
						</div>
						<div class="col-8">
							<a href="#"><h4>Từ hôm nay, bán điện thoại xách tay có thể bị phạt tới 100 triệu đồng</h4></a>
							<h5>Người kinh doanh, vận chuyển hàng nhập lậu còn có thể bị tịch thu tang vật và phương tiện vận chuyển theo quy định mới nhất về xử phạt vi phạm hành chính trong hoạt động thương mại...</h5>
						</div>
					</div>
					
					
				</div>
			</div>

			<hr class="light">

	<!--DU LỊCH-->

			<div class="row tieude" style="margin-top:10px; margin-bottom:10px;">
					<a href="#"><h3 style="border-left:4px solid red;">&nbsp<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bicycle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443l-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057L9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
					</svg>&nbspDu lịch</h3></a>
			</div>		
			
			<div class="row" style="margin-top:10px;">
				<div class="col-3 box2">
					<a href="#">
						<img src="images/nb.jpg" class="img-fluid" />
						<h1>Người đầu tiên du lịch khắp thế giới trong 72 ngày</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/5ngoilang.jpeg" class="img-fluid" />
						<h1>5 ngôi làng có tuổi đời hàng nghìn năm tuổi ở Trung Quốc, ai cũng khao khát được ghé đến</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/Bus_2_tang_Ha_.jpg" class="img-fluid" />
						<h1>Ngắm thu Hà Nội từ xe bus hai tầng mui trần</h1>
					</a>
				</div>
				<div class="col-3 box2">
					<a href="#">
						<img src="images/thacdadocx-1602222985134.jpeg" class="img-fluid" />
						<h1>Ớn lạnh khu rừng đá sắc như lưỡi dao – nơi hiểm trở bậc nhất thế giới</h1>
					</a>
				</div>
			</div>
			<hr class="light">
			
		<!--footer-->
		<div class="footer"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>
		<footer>
			<div class="container-fluid padding">	
				<div class="row text-center">
					<div class="col-md-4">
						<hr class="light">
						<h3>Địa chỉ</h3>
						<hr class="light">
						<p>Trường Đại học Mỏ Địa chất</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0067258234426!2d105.77165101475617!3d21.072393585974716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2sHanoi%20University%20of%20Mining%20and%20Geology!5e0!3m2!1sen!2s!4v1600045112244!5m2!1sen!2s" width="50%" height="30%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">	
						</iframe>
						<p>Số 6, Phố Viên, Đức Thắng, Bắc Từ Liêm, HN</p>
					</div>
					<div class="col-md-4">				
						<hr class="light">
						<h3>Theo dõi 24H NEWS</h3>
						<hr class="light">
						<div class="container-fluid padding">
							<div class="row text-center padding">
								<div class="col-12 social padding">
									<a href="https://www.facebook.com/m3ssi.cules"><i class="fab fa-facebook"></i></a>
									<a href="https://www.instagram.com/h.tien10/?hl=vi"><i class="fab fa-instagram"></i></a>
									<a href="https://www.youtube.com/channel/UCY4HUKDCX7Lb7CBCGolgExw?view_as=subscriber"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">				
						<hr class="light">
						<h3>Liên hệ và quảng cáo</h3>
						<hr class="light">
						<p>Đường dây nóng: (+84)378.000.442</p>
						<p>Email: m3ssi102672@gmail.com</p>
						<p>----------------------</p>
						<a href="">Đồng Sáng Lập</a>
						<br>
						<p>Hồ Bá Tiến - Nguyễn Bảo Ngọc - Nguyễn Ngọc Phú</p>
						
					</div>	
					<div class="col-12">
					<hr class="light-100">
					<h5>&copy;10/2020 - by 24HNEWS.com </h5>
					</div>			
				</div>
			</div>
		</footer>
		</div>

		<!--Nút về đầu trang-->
		<button onclick="topFunction()" id="myBtn" title="Go to top"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
		</svg></button>

		


		<script src="https://code.jquery.com/jquery-3.5.1.t5im.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/2696badd31.js" crossorigin="anonymous"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		 
		<script>
			var mybutton = document.getElementById("myBtn");
			window.onscroll = function() {scrollFunction()};
			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			  } else {
				mybutton.style.display = "none";
			  }
			}
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		</script>
	</body>
</html>

