﻿<link rel="stylesheet" href="css/them_sanpham.css">
<?php
		$matt=$_GET['matt'];
        $sql="select * from tintuc where matt='".$_GET['matt']."'";
         $rows=$link->query($sql);
         $row=mysqli_fetch_array($rows);
?>
<form action="update_tintuc.php?matt=<?php echo $matt;?>" method="post" name="frm" onsubmit="" enctype="multipart/form-data">
	<table>
			<tr class="tieude_themsp">
				<td colspan=2>Sửa Tin Tức </td>
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
  resize: none;" type="text" name="tieude" size="50" value="<?php echo $row['tieude'];?>"/></td>
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
  resize: none;" name="ndngan" > <?php echo $row['ndngan'];?></textarea></td>
            </tr>
            <tr>
            	<td>Nội dung chi tiết</td><td><textarea name="noidung" id="chitiet"> <?php echo $row['noidung'];?></textarea></td>
            </tr> 
			 <tr>
            	<td>Hình ảnh</td><td><img src="../img/tintuc/<?=$row['hinhanh']?>" width="80" height="120"/><br /><br /><input type="file" name="hinhanh" /></td>
            </tr>
            <tr>
            	<td>Tác giả</td><td><input style="width: 40%; margin-left: -30px;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="tacgia" value="<?php echo $row['tacgia'];?>"/></td>
            </tr>
            <tr>
                <td colspan=2 class="input"> <input type="submit" name="update" value="Update" />
                <input type="reset" name="" value="Hủy" /></td>
            </tr>
        </table> 

</form>
<script type="text/javascript" language="javascript">
 
  CKEDITOR.replace( 'chitiet', {
	uiColor: '#d1d1d1'
});
</script>