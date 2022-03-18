<?php  
include 'include/connect.php';
$mahd=$_GET['mahd'];

$sql="update hoadon set trangthai=3 where mahd='$mahd'";
$link->query($sql);
echo "
	<script language='javascript'>
		window.open('index.php?content=thongtindonhang','_self', 1);
		</script>
	";
?>
