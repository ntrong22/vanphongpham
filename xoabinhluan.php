<?php
include 'include/connect.php';
$idbl=$_GET['idbl'];
$idsp=$_GET['idsp'];
$sql="delete from binhluan where idbl = $idbl";
$link->query($sql);
echo "
	<script language='javascript'>
		window.open('index.php?content=chitietsp&idsp=$idsp','_self', 1);
		</script>
	";
?>