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
	$mahd=$_GET['mahd'];
    $select = "select * from chitiethoadon where mahd = $mahd";
    $query = $link->query($select);
?>
<div class="quanlysp">
	<h3 style="text-align:center;">THÔNG TIN ĐƠN HÀNG</h3>	
</div>
<table id="customers" style="margin-top: 10px;">
    
    <tr>     
        <td>ID</td>   
        <td>Mã HD</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Giá</td>
    </tr>

    <?php								
        while ($bien = mysqli_fetch_array($query))
        {
?>
            <tr>
                <td ><?php  echo $bien['id_hdct'] ?></td>
                <td ><?php echo $bien['mahd'] ?></td>
				<td ><?php echo $bien['tensp'] ?></td>
				<td >0<?php echo $bien['soluong'] ?></td>
				<td ><?php echo $bien['gia'] ?></td>
            </tr>
<?php 
    }
?>	
    
</table>

	