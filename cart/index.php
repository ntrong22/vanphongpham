
  <?php
   if(isset($_GET['idsp']))
   $stt=$_GET['idsp'];
   else $stt=0;
   switch($action){
    
    case "xoa":
    unset ($_SESSION['cart']);
	echo "
							<script language='javascript'>
								
								window.open('index.php','_self', 1);
							</script>
						";
    break;
    //case"huy":
    //unset ($_SESSION['cart'][$idsp]);
    //break;
    case"check":
    include('check.php');
    break;
    case"thanhtoan":
    include('ttkh.php');
    break;
    case"insert":
    include('insert.php');
    break;
    case"add":
    $sql="select soluong from sanpham where idsp=$stt";
    $rows=$link->query($sql);
    $row=mysqli_fetch_array($rows);
    if($row['soluong']==0)
    {
        echo '<script language="javascript">
    alert("Sản phẩm này tạm thời hết hàng");
    history.back(); 
     history.go(-1);
    </script>';
    }
    elseif(@$_POST['soluongmua']==0)
    {
		
        $_SESSION['cart'][$stt]=1;
        echo '<script language="javascript">
    
    history.back(); 
     history.go(-1);
    </script>';
    }
	else
    {
		
        $_SESSION['cart'][$stt]=$_POST['soluongmua'];
        echo '<script language="javascript">
    
    history.back(); 
     history.go(-1);
    </script>';
    }
    break;
    case"addcart":
   // foreach($_POST['idsp'] as $idsp)
    $sql="select soluong from sanpham where idsp=$stt";
    $rows=$link->query($sql);
    $row=mysqli_fetch_array($rows);
    if($row['soluong']==0)
    {
        echo '<script language="javascript">
    alert("Sản phẩm này tạm thời hết hàng");
    history.back(); 
     history.go(-2);
    </script>';
    }
    else if($row['soluong']<$_SESSION['cart'][$stt])
    {
        echo '<script language="javascript">
    alert("Sỗ lượng đặt mua lớn hơn số hàng còn lại trong kho");
    history.back(); 
     history.go(-2);
    </script>';
    }
    else
    {
    $sl=$_POST['sl'];
  
    $_SESSION['cart'][$stt]=$sl;
    echo '<script language="javascript">
    
    history.back(); 
     history.go(-2);
    </script>';
    }
    break;
      case "update": 
    if(isset($_POST['huy']))
    $sl=0;
    else
    $sl=$_POST['sl'];

	
    if($sl==0)
    unset ($_SESSION['cart'][$stt]);
    else
    $_SESSION['cart'][$stt]=$sl;
    echo '<script language="javascript">
    
     window.location.href="index.php?content=cart";
    </script>';
	
    break;
    default:
    include('viewcart.php');
    break;
     }
     ?>

