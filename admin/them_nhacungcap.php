<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm NCC</title>
<link rel="stylesheet" href="css/them_sanpham.css" />
</head>

<body>
<?php
	include '../include/connect.php';

	if(isset($_POST['submit']))
	{
		$tenncc=$_POST['tenncc'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$ngaynhap=$_POST['ngaynhap'];
		
//Lay gio cua he thong
		$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");

		
		$insert="INSERT INTO nhacungcap VALUES('','$tenncc', '$diachi', '$dienthoai', '$ngaynhap')";
		$query=$link->query($insert);
		if($query) {
			echo "Thêm nhà cung cấp thành công";		
			echo '<meta http-equiv="refresh" content="1;url=admin.php?admin=hienthincc">';
			}
			else { echo "Thêm nhà cung cấp thất bại";
			}
}


		
?>
<form action="" method="post" enctype="multipart/form-data">
	
      <table>
			<tr class="tieude_themsp">
				<td colspan=2>Thêm Nhà Cung Cấp </td>
			</tr>
        	<tr>
		          <td>Tên Nhà cung cấp</td><td><input style="width: 70%;margin-left: -30px;
									  height: 30px;
									  padding: 12px 20px;
									  box-sizing: border-box;
									  border: 2px solid #ccc;
									  border-radius: 4px;
									  background-color: #f8f8f8;
									  font-size: 16px;
									  resize: none;" type="text" name="tenncc" size="50"/></td>
            </tr>
    		<tr>
            	<td>Địa Chỉ</td><td><textarea style="width: 70%;margin-left: -30px;
									  height: 80px;
									  padding: 12px 20px;
									  box-sizing: border-box;
									  border: 2px solid #ccc;
									  border-radius: 4px;
									  background-color: #f8f8f8;
									  font-size: 16px;
									  resize: none;" name="diachi"></textarea></td>
            </tr>
            
            <tr>
            	<td>Số điện thoại</td><td><input style="width: 40%;margin-left: -30px;
									  height: 30px;
									  padding: 12px 20px;
									  box-sizing: border-box;
									  border: 2px solid #ccc;
									  border-radius: 4px;
									  background-color: #f8f8f8;
									  font-size: 16px;
									  resize: none;" type="text" name="dienthoai"/></td>
            </tr>

            	<tr>
            	<td>Ngày nhập</td><td><input style="width: 40%;margin-left: -30px;
									  height: 30px;
									  padding: 12px 20px;
									  box-sizing: border-box;
									  border: 2px solid #ccc;
									  border-radius: 4px;
									  background-color: #f8f8f8;
									  font-size: 16px;
									  resize: none;" type="text" name="ngaynhap"/></td>
            </tr>






            <tr>
                <td colspan=2 class="input"> <input type="submit" name="submit" value="Thêm" />
                <input type="reset" name="" value="Hủy" /></td>
            </tr>
         </table>  
</form>

<script type="text/javascript" language="javascript">
 
  CKEDITOR.replace( 'chitiet', {
	uiColor: '#d1d1d1'
});
</script>

</body>
</html>