
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;


}

.binhluan {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<?php 
	$idsp=$_GET['idsp'];
	$rows=$link->query("select * from sanpham where idsp=$idsp");
	while ($row=mysqli_fetch_array($rows))
	{
?>

<div class="chitietsp">
	<div class="chitietsp-in">
		<div class="content">
			<div class="zoom-small-image">
				<a href='img/uploads/<?php echo $row['hinhanh'] ?>' width="300" height="300"  class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">
					<img src="img/uploads/<?php echo $row['hinhanh'] ?>" width="250" height="250"  alt='' title="Optional title display" />
				</a>
			</div>
			<div class="giasp">
				<ul>
					<p> <?php echo $row['tensp'] ?></p>
					<li><span><b>Giá: <font color="red"><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?></b></font></span></li>
					<li>Tình trạng: 
						<?php 
							$dem = $row['soluong'] - $row['daban'];
							if( $dem >0)
								echo "Còn lại (".$dem.") sản phẩm";
							else 
								echo "Hết hàng";
						?>
					</li>
					<form action="index.php?content=cart&action=add&idsp=<?php echo $row['idsp'] ?>" method="post">
					<li>Số lượng mua : <input type="text" name="soluongmua" size="1" value="1" /></li>
					<li>
					<?php 
						if($dem <=0)
							echo "<a href='index.php?content=hethang'><button>Cho vào giỏ</button></a>
							";
						else { ?>
							<input type="submit" value="Cho vào giỏ" name="chovaogio" class="inputmuahang" />
							<?php } ?>
					</li>
					</form>
				</ul>
			</div>
		</div>
		<div class="tinhnang">
			<div class="tieudetinhnang">
				<ul class="tabs">
				<li><a href="#tab1">Thông tin chi tiết</a></li>
				<li><a href="#tab2">Đánh giá</a></li>
				</ul>
			</div>
			
			<div id="tab1">
				<?php echo $row['chitiet'] ?>
			</div>
			<div id="tab2">
				<!-- <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="https://www.facebook.com/pages/%C4%90i%E1%BB%87n-tho%E1%BA%A1i-Th%C3%A0nh-%C4%90%E1%BA%A1t/609767402431528?ref=hl" data-width="560" data-numposts="10" data-colorscheme="light"></div> -->

				<?php	
    $select = "select * from binhluan where idsp = $idsp order by idbl desc";
    $query = $link->query($select);
?>
<div style="margin-left: 4px;">
	<?php if(isset($_SESSION['username'])) {?> 
	<form action="thembinhluan.php?username=<?php echo $_SESSION['username']?>&idsp=<?=$idsp?>" method="post">

    	<img style="margin-top: 10px; padding-left: 30px;" src="img/icons8-user-30.png">
    	<p style="color:red; font-weight: bold; "><?=$_SESSION['username']?> </p>
    	<input type="submit" value="Send" name="thembinhluan" class="binhluan" style="margin-top: -38px; float: right; margin-right: 20px; border-radius: 15px; cursor: pointer;" />
    	<textarea name="noidung" style="width: 390px; height: 53px; float: right; margin-top: -50px; margin-right: 10px;"></textarea>

	</form>
	<?php }?>
</div>

<table id="customers" style="margin-top: 7px; padding-left: 20px; margin-top: 30px;">

    <?php								
        while ($bien = mysqli_fetch_array($query))
        {
?>
            <tr>
                <td style="width: 140px;">
                	<div style="text-align: center; color: blue; font-weight: bold; float: right; margin-left: 2px; margin-top: 7px;"><?php echo $bien['username'] ?></div>
                	<img style="margin-top: 3px; mar" src="img/icons8-male-user-30.png">	
                </td>
                <td style="width: 400px; height: auto;"><?php echo $bien['noidung'] ?></td>
                <?php if(isset($_SESSION['username'])) {
                if($bien['username'] == $_SESSION['username']) {?>
				<td ><a href="xoabinhluan.php?idbl=<?=$bien['idbl']?>&idsp=<?=$bien['idsp']?>"> 
					<img src="img/icons8-delete-30.png" class="deleteCmt" anlong="<?=$bien['idbl']?>">
					
				</a></td>
			<?php }} ?>
            </tr>
<?php 
    }
?>	
</table>
			</div>
		</div>
	</div>
</div>
<?php } ?>