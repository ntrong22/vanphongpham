 <div id="dangnhap">
					<div class="center1">
						<h4>Đăng Nhập</h4>
						<?php if(isset( $_SESSION['username'])){
							?>
								<div id="dangnhap-in">
								<span id="xinchao"><p style="margin-left: -15px;">Xin chào: <span> <?php echo $_SESSION['username'] ?> </span></p></span>
								<div style="margin-left:20px; margin-top: -10px;"><a href="index.php?content=thongtindonhang" style="font-size: 13px; font-weight: bold;">Thông tin đơn hàng</a></div>
								<span id="logout" ><p><a style="background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
border-radius: 15px; 
cursor: pointer;
width: 100px;
margin-top: 10px;
height: 20px;
margin-right: 40px;" href="logout.php" style="font-size: 15px;">Đăng xuất</a></p></span>
						</div><!-- End .dangnhap-in-->
							<?php 
						}
						else{
						?>
						<div id="dangnhap-in">
							<form action="dangnhap.php" method="post">
								<span><p>Username: <input type="text" size="10" name="user"></p> <br>
								<p>Password: <input type="password" size="10" name="pass"></p> <br></span>
								<a href="index.php?content=dangnhap"><button name="login" style="background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
border-radius: 15px; 
cursor: pointer;
width: 100px;
margin-top: 0px;
height: 23px;
margin-right: 50px;">Đăng nhập</button></a><br>
							</form>
							<ul>
								<li><a href="index.php?content=dangky" style="">Đăng ký</a></li>
							</ul>
						</div><!-- End .dangnhap-in-->
						<?php } ?>
					</div><!-- End .center1-->
				</div><!-- End .giohang-->
				<div id="giohang">
					<div class="center1">
						<h4>Giỏ Hàng</h4>
							<a href="index.php?content=cart"><img src="img/images.jpg" title="Vào giỏ hàng" width="150" height="100px"></a>
							<?php 
								$tongtien=0;
								if(isset($_SESSION['cart']))
								$count=count($_SESSION['cart']);
								else $count=0;
								if($count==0){
							?>
							<p style="font-weight: bold;">Chưa có sản phẩm</p>
							<?php } 
							else {
							?>
							<p id="soluonggioh ang" style="font-weight: bold;">Có <span><?=$count?></span> sản phẩm trong giỏ</p>
							 
							<p id="tiengiohang">
							 <?php $sql ="select * from sanpham where idsp in(";
        
		foreach($_SESSION['cart'] as $id => $soluong)
            {
              if($soluong>0)
                $sql .= $id.",";
            }
            if (substr($sql,-1,1)==',')
            {
                $sql = substr($sql,0,-1);
            }
      $sql .=' )order by idsp 	';
      $rows=$link->query($sql);
while ($row=mysqli_fetch_array($rows))
{  
$tongtien+=$_SESSION['cart'][$row['idsp']]*$row['gia']; 
}
?> <?php  echo number_format($tongtien,"0",",",".");?> VNĐ
							</p>
							

          
					<?php } ?>		
							
					</div><!-- End .center1-->
				</div><!-- End .giohang-->
				<div id="timkiem">
					<div class="center1">
						<h4>Tìm Kiếm </h4>
							<div id="select">
								<form action="index.php?content=timkiem" method="GET">
								<input type="hidden" name="content" value="timkiem" style="">
								<input type="text" name="timkiem" style="" />
								<div id="select2">
									<select name="gia">
										<option value="0"> - Chọn giá - </option>
										<option value="1">  < 100.000</option>
										<option value="2">100.000 - 500.000</option>
										<option value="3">500.000 - 2.000.000</option>
									
										<option value="6"> > 2.000.000</option>
									</select>
									<input type="submit" name="btntk" value="Search" style="background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
border-radius: 15px; 
cursor: pointer;
height: 25px;" />
								</form>
								</div><!-- End .select2-->
							</div><!-- End .select-->
					
					</div><!-- End .center1-->
				</div><!-- End .timkiem-->
				
				<div id="yahoo">
					<div class="center1">
						<h4>Hotline</h4>
						<h2><a href="ymsgr:sendim?anhchanglangtu_yeubetocvang&amp;m=g&amp;t=14"><img src="img/imonline.png"></a></h2>
							<p>0978164307</p>
						<h2><a href="ymsgr:sendim?boydangyeu8188&amp;m=g&amp;t=14"><img src="img/imonline.png"></a></h2>
							<p>0982612514</p>
					</div><!-- End .center1-->
				</div><!-- End .yahoo -->
				
				