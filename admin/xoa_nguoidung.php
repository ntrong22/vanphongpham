﻿ <?php
include '../include/connect.php';
include 'function/function.php';
$delete = "delete from nguoidung where idnd='{$_GET['idnd']}'";
$tennd=$_GET['tennd'];
$del = $link->query($delete);
if ($del)
	echo "thanh cong";
	header("location: index.php?admin=hienthind");
	redirect ("admin.php?admin=hienthind", "Xóa người dùng thành công. ", 2);
	
?>