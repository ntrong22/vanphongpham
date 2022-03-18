<?php
include 'include/connect.php';
$idsp=$_GET['idsp'];
$username=$_GET['username'];
$noidung=$_POST['noidung'];
$sql="insert into binhluan values ('','$noidung','$username','$idsp')";
$link->query($sql);
echo "
	<script language='javascript'>
		window.open('index.php?content=chitietsp&idsp=$idsp','_self', 1);
		</script>
	";

?>