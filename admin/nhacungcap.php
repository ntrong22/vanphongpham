<link rel="stylesheet" href="css/hienthi_sp.css">
<?php
	include ('../include/connect.php');
	
    $select = "select * from nhacungcap ";
    $query = $link->query($select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ NHÀ CUNG CẤP</h3>
	

		<a href='?admin=themncc' style="color: blue;">Thêm nhà cung cấp</a><br>

	<p>Có <font color=red><b><?php echo $dem ?></b></font> Nhà cung cấp</p>



	<form action="admin.php?admin=xulyncc" method="post">
		<div id="check">
			<p>
				<input type="submit" name="xoa" value="Xóa" />

			</p>
		</div>
</div>
<table>
    
    <tr class='tieude_hienthi_sp'>
    	<td width="30"><input type="checkbox" name="check"  class="checkbox" onclick="checkall('item', this)"></td>
        <td>ID</td>
        <td>Tên NCC</td>
        <td>Địa Chỉ</td>
         <td>Điện thoại</td>
        
         <td>Ngày Nhập</td>
        <td>Active</td>
    </tr>



<?php
	
	/*------------Phan trang------------- */
		// Nếu đã có sẵn số thứ tự của trang thì giữ nguyên (ở đây tôi dùng biến $page) 
		// nếu chưa có, đặt mặc định là 1!   

		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  

		// Chọn số kết quả trả về trong mỗi trang mặc định là 10 
		$max_results = 10;  

		// Tính số thứ tự giá trị trả về của đầu trang hiện tại 
		$from = (($page * $max_results) - $max_results);  

		// Chạy 1 MySQL query để hiện thị kết quả trên trang hiện tại  

		$sql = $link->query("SELECT * FROM nhacungcap LIMIT $from, $max_results"); 



								
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr class='noidung_hienthi_sp'>
            	<td class="masp_hienthi_sp"><input type="checkbox" name="id[]" class="item" class="checkbox" value="<?=$bien['id']?>"/></td>
                <td class="masp_hienthi_sp"><?php  echo $bien['id'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['tenncc'] ?></td>
                <td class="img_hienthi_sp"> <?php echo $bien['diachi'] ?>  </td>
				<td class="sl_hienthi_sp"><?php echo $bien['dienthoai'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['ngaynhap'] ?></td>
				
				
				<td class="active_hienthi_sp">
                    <a href='admin.php?admin=suasp&idsp=<?php echo $bien['idsp']  ?>'><img src="img/sua.png" title="Sửa"></a>
				</td>
                
            </tr>
<?php 
    }
	
    else echo "<tr><td colspan='6'>Không có khách hàng</td></tr>";
	
?>

</table>
</form>
	<div id="phantrang_sp">
	
	<?php
			// Tính tổng kết quả trong toàn DB:  
			$total_results = mysqli_num_rows($link->query("SELECT * FROM sanpham"));  

			// Tính tổng số trang. Làm tròn lên sử dụng ceil()  
			$total_pages = ceil($total_results / $max_results);  


			// Tạo liên kết đến trang trước trang đang xem 
			if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
			}  

			for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){  
				if($i>1) {
						echo "$i&nbsp;";  } 
				
			} else {  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
			}  

			// Tạo liên kết đến trang tiếp theo  
			if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>";  		
		
	?>
	</div>