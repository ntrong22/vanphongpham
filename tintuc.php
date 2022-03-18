<div id="tintuc">
	<h3>Tin Tức</h3>
	<?php
   

		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  

		$max_results = 10;  


		$from = (($page * $max_results) - $max_results);  

 

		$sql = $link->query("SELECT * FROM tintuc ORDER by matt DESC  LIMIT $from, $max_results"); 

		while($row=mysqli_fetch_array($sql))
		{
	?>
	
	<div class="tintuccon">
		<div class="tintuccon-in">
			<div class="tieudetintuc">
				<p><a href="index.php?content=chitiettintuc&matt=<?php echo $row['matt'] ?>"><?php echo $row['tieude'] ?></a></p>
				<span>Ngày đăng tin: <?php echo $row['ngaydangtin'] ?></span>
			</div>
			<div class="imgtintuc">
				<img src="img/tintuc/<?php echo $row['hinhanh'] ?>" width="300px" height="300px;">
			</div>
			<div class="noidungtintuc">
				
				<span><p> <?php echo $row['ndngan'] ?> </p></span>
				<p class="xemthem"><a href="index.php?content=chitiettintuc&matt=<?php echo $row['matt'] ?>">Xem thêm >></a></p>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
