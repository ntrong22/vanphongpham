﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Tin Tức</title>
<link rel="stylesheet" href="css/them_sanpham.css" />
</head>

<body>
<?php
	include '../include/connect.php';

	if(isset($_POST['submit']))
	{
		$tieude=$_POST['tieude'];
		$ndngan=$_POST['ndngan'];
		$tacgia=$_POST['tacgia'];
		$noidung=$_POST['noidung'];
	//	$hinhanh=$_POST['hinhanh'];
		$upload_image="../img/tintuc/";
		$file_tmp= isset($_FILES['hinhanh']['tmp_name']) ?$_FILES['hinhanh']['tmp_name'] :"";
		$file_name=isset($_FILES['hinhanh']['name']) ?$_FILES['hinhanh']['name'] :"";
		$file_type=isset($_FILES['hinhanh']['type']) ?$_FILES['hinhanh']['type'] :"";
		$file_size=isset($_FILES['hinhanh']['size']) ?$_FILES['hinhanh']['size'] :"";
		$file_error=isset($_FILES['hinhanh']['error']) ?$_FILES['hinhanh']['error'] :"";
		//Lay gio cua he thong
		$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
		$file__name__=$dmyhis.$file_name;
		move_uploaded_file($file_tmp,$upload_image.$file__name__);
		
		$insert="INSERT INTO tintuc VALUES('','$tieude', '$ndngan', '$noidung', '$file__name__', '$ngay', '$tacgia','1')";
		$query=$link->query($insert);
		if($query) {
			echo "Thêm tin tức hành công";		
			echo '<meta http-equiv="refresh" content="2;url=admin.php?admin=hienthitt">';
			}
			else { echo "Thêm tin tức thất bại";
			}
}


		
?>
<form action="" method="post" enctype="multipart/form-data">
	
      <table>
			<tr class="tieude_themsp">
				<td colspan=2>Thêm Tin Tức </td>
			</tr>
        	<tr>
            	<td>Tiêu đề</td><td><input style="width: 70%;margin-left: -30px;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="tieude" size="50"/></td>
            </tr>
    		<tr>
            	<td>Nội dung ngắn</td><td><textarea style="width: 70%;margin-left: -30px;
  height: 80px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" name="ndngan"></textarea></td>
            </tr>
            <tr>
            	<td>Nội dung chi tiết</td><td><textarea name="noidung" id="chitiet"></textarea></td>
            </tr> 
			<tr>
            	<td>Hình ảnh</td><td><input type="file" name="hinhanh"/></td>
            </tr>
            <tr>
            	<td>Tác giả</td><td><input style="width: 40%;margin-left: -30px;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="tacgia"/></td>
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