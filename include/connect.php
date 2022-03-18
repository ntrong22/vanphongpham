<?php
	$link=mysqli_connect("localhost","root","","webtest");
	if($link){
		mysqli_query($link,"SET NAMES 'UTF8'");
	}else{
		echo 'fail';
	}
?>
