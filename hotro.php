

<form action="insert_hotro.php" method="post" name="frm" onsubmit="return kiemtra()">
	<div id="hotro">
		<h3>HỖ TRỢ</h3>
		<table>
		<tr>
			<td>Chủ đề <font color="red">*</font> </td><td class="input"><input style="width: 100%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="chude" size="40"></td>
		</tr>
		<tr>
			<td>Họ tên <font color="red">*</font> </td><td class="input"><input style="width: 100%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="hoten" size="40"></td>
		</tr>
		<tr>
			<td>Email <font color="red">*</font> </td><td class="input"><input style="width: 100%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="email" size="40"></td>
		</tr>
		<tr>
			<td>Điện thoại <font color="red">*</font> </td><td class="input"><input style="width: 100%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;" type="text" name="dienthoai" size="40"></td>
		</tr>
		<tr>
			<td>Nội dung  <font color="red">*</font> </td><td class="input"><textarea name="noidung" style="width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;"></textarea></td>
		</tr>
		<tr style="margin-left: 50px;">
			<td colspan=2 class="btnhotro">
				<input style="background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
border-radius: 15px; 
cursor: pointer;
width: 100px;
margin-top: 10px;
height: 30px;
margin-left: 150px;" type="submit" name="submit" value="GỬI">
				<input style="background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
border-radius: 15px; 
cursor: pointer;
width: 100px;
margin-top: 10px;
height: 30px;
" type="reset" value="HỦY">
			</td>
		</tr>
		</table>
	</div>
</form>

<script language="javascript">
 	function  kiemtra()
	{
	    if(frm.chude.value=="")
		{
			alert("Bạn chưa nhập chủ đề. Vui lòng kiểm tra lại");
			frm.chude.focus();
			return false;	
		}
		if(frm.chude.value.length<6)
		{
			alert("Chủ đề quá ngắn. Vui lòng điền đầy đủ.");
			frm.chude.focus();
			return false;	
		}
		if(frm.hoten.value=="")
	 	{
			alert("Bạn chưa nhập tên . Vui lòng kiểm tra lại");
			frm.hoten.focus();
			return false;	
		}
		if(frm.hoten.value.length<6)
	 	{
			alert("Tên không đúng.");
			frm.hoten.focus();
			return false;	
		}
		if(frm.noidung.value=="")
		{
			alert("Bạn chưa nhập nội dung");	
			frm.noidung.focus();
			return false;
		}
		if(frm.noidung.value.length<20)
		{
			alert("Nội dung phải nhiều hơn 20 ký tự");	
			frm.noidung.focus();
			return false;
		}
	   dt=/^[0-9]+$/;
	   dienthoai=frm.dienthoai.value;
	   if(!dt.test(dienthoai))
	   {
		    alert("Bạn chưa nhập điện thoại. Vui lòng kiểm tra lại.");
		    frm.dienthoai.focus();
		    return false;
	   }
	   	dd=frm.dienthoai.value;
		if(10>dd.length || dd.length>11)
		{
			alert("Số điện thoại không đủ độ dài. Vui lòng nhập lại");
			frm.dienthoai.focus();
			return false;	
		}
		if(frm.email.value=="")
		{
			alert("Bạn chưa nhập email");	
			frm.email.focus();
			return false;
		}
		mail=frm.email.value;
		m=/^([A-z0-9])+[@][a-z]+[.][a-z]+[.]*([a-z]+)*$/;
		if(!m.test(mail))
		{
			alert("Bạn nhập sai email");	
			frm.email.focus();
			return false;
		}
		
	}
 </script>