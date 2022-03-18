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
</style>
<?php
	include ('include/connect.php');
	
    $select = "select * from hoadon where idnd = ".$_SESSION['idnd'];
    $query = $link->query($select);
?>
<div class="quanlysp">
	<h3 style="text-align:center;">THÔNG TIN ĐƠN HÀNG</h3>	
</div>
<table id="customers" style="margin-top: 10px;">
    
    <tr>        
        <td>Mã HD</td>
        <td>Họ Tên</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        
        <td>Trạng thái</td>
        <td></td>
        <td colspan=2></td>
    </tr>

    <?php								
        while ($bien = mysqli_fetch_array($query))
        {
?>
            <tr>
                <td ><?php  echo $bien['mahd'] ?></td>
                <td ><?php echo $bien['hoten'] ?></td>
				<td ><?php echo $bien['diachi'] ?></td>
				<td >0<?php echo $bien['dienthoai'] ?></td>
				
				<td ><?php if($bien['trangthai']==1) echo "Đang xử lý"; else if($bien['trangthai']==2) echo"Đã giao hàng"; else echo"Đã hủy";?></td>
				<td style="width:70px;"><a href="index.php?content=chitietdonhang&mahd=<?php echo $bien['mahd'];?> " style="float:left; color: blue;">Chi tiết</a>					
				</td>

				<td style="width:70px;">
                    <?php if($bien['trangthai'] == 1) { ?>
                    <a href="xulyhuydonhang.php?mahd=<?php echo $bien['mahd'];?> " style="float:left; color: blue;">Hủy</a>
                    <?php }?>		
				</td>
            </tr>
<?php 
    }
?>	
    
</table>

	