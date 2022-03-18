<base href="http://localhost/vanphongpham/" />
<?php 
session_start();
include("include/connect.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Văn Phòng Phẩm
 </title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" style="style/sheet" href="css/index.css">



<link rel="stylesheet" style="style/sheet" href="slide/engine/style.css">
<script type="text/javascript" src="slide/engine/wowslider.js"></script>
<script type="text/javascript" src="slide/engine/wowslider.mod.js"></script>




<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-------------------------------------Slide tài trợ-------------------------------------->

<script src="js/newsScrollerDefault-rightToleft-bottomTotop.js" type="text/javascript"></script>
<script src="js/newsScrollerEdit-leftToright-topTobottom.js" type="text/javascript"></script>


<!-------------------------------------zoom anh-------------------------------->
<script type="text/javascript" src="js/zoom/cloud-zoom.1.0.2.js"></script>
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />



<!-------------------------------------Tabs-------------------------------->
<script>



$(document).ready(function(){

$('ul.tabs').each(function(){



var $active, $content, $links = $(this).find('a');



$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);

$active.addClass('active');

$content = $($active.attr('href'));



$links.not($active).each(function () {

$($(this).attr('href')).hide();

});



$(this).on('click', 'a', function(e){



$active.removeClass('active');

$content.hide();



$active = $(this);

$content = $($(this).attr('href'));



$active.addClass('active');

$content.show();


e.preventDefault();

});

});

});

</script>

<!-------------------------------------slide-------------------------------->
<link rel="stylesheet" style="style/sheet" href="css/style1.css">
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
											 	easing			: 'easeInOutExpo',
												duration		: 2000,
												auto		 	: true,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth:1000,
												buttons			: buttons} );	
	});
</script>
</head>
<body style="background:white">
<div id="wapper">
	<div id="header">
		<div id="">
			<!-- <h1><a href="index.php">logo</a></h1> -->
						<img src="img/baner_2.png" style="width: 800px;height:150px ;margin-left: 100px;">
		</div>
		<!-- End .bg-lg-header -->
		<div id="">	
		</div><!-- End .bg-header -->
			<div id="menu-header">
			<?php include("home_include/menu_ngang.php"); ?>
				<!-- End .menu -->
			</div><!-- End .menu-header -->
	</div><!-- End .header -->
	<div id="content">
		<div id="lofslidecontent45" class="lof-slidecontent" style="width:1000px; height:350px;">
			<div class="preload"><div></div></div>
				<div id="lof-main-outer">
					<ul class="lof-main-wapper">
						<li><img src="img/slide/slide1.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide2.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide3.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide4.jpg" width="1000" height="350"></li>
					</ul>
				</div>
				
		</div>
		<div id="main-content">
			<div id="left-content">
				<?php include("home_include/left_content.php");?>
			</div><!-- End .left-content -->
			
			<div id="center-content">
				
				<?php include("content_page.php"); ?>
				<!-------------------------------------------------------------------------------------------------------------------->
					
				
			</div><!-- End .center-content -->
			
			<div id="right-content">
				<?php include("home_include/right_content.php"); ?>
			</div><!-- End .right-content-->
		</div><!-- End .main-content -->
		<div id="doitac">
			<div id="center2">
		
			</div><!-- End .center2 -->
		</div><!-- End .bottom-content -->
	</div><!-- End .content -->
	<div id="footer">
		<div id="menu-footer">
			<ul>
						<li><a href="index.php">Trang Chủ</a></li>
						<!-- <li><a href="index.php?content=gioithieu">Giới Thiệu</a></li> -->
						<li><a href="index.php?content=sanpham">Văn phòng phẩm</a>
						<li><a href="index.php?content=phukien">Thiết Bị Văn Phòng</a></li>
						<li><a href="index.php?content=khuyenmai">Khuyến Mãi</a></li>
						<li><a href="index.php?content=tintuc">Tin Tức</a></li>
						<li><a href="index.php?content=hotro">Hỗ Trợ</a></li>
			</ul>
		</div><!-- End .menu-footer -->
		<div id="bg-footer">
			<div id="noidungfooter">
				<div id="lg-footer">
					<img src="img/logo1-header.png">
				</div><!-- End .lg-footer -->
				<div id="noidung" style="float: right;">
					<ul>
						
						
						<li>Địa chỉ: Thủ Đức - Hồ Chí Minh </li>
						<li>Điện thoại: 0972341193 - Hotline:  0972341193</li>
						<li>Email: vanphongpham@gmail.com</li>
					</ul>
				</div><!-- End .noidung -->
				<div id="thanhngang">
					<img src="img/thanhngang-footer.png">
				</div><!-- End .thanhngang -->
				<div id="copyright">
					
				</div><!-- End .copyright -->
			</div><!-- End .noidungfooter -->
		</div><!-- End .bg-footer -->
	</div><!-- End .footer -->
</div><!-- End .wapper -->
</body>
</html>