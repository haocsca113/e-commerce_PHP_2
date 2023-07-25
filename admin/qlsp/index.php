<?php
session_start();
include("../../class/clslogin.php");
$p1 = new login();
if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']))
{
	$p1->confirmlogin($_SESSION['id'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['phanquyen']);
}
else
{
	// header("Location: ../../login/");
	// echo '<script language="javascript">
	// 		window.location = "../../login/";
	// 	</script>';
}
?>

<?php
include("../../class/clsadmin.php");
$p = new admin();
?>
<?php
if(isset($_REQUEST['layid']))
{
	$layid = $_REQUEST['layid'];
}
else
{
	$layid = 0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="800" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2" align="center" valign="middle"><strong>QUẢN LÝ SẢN PHẨM</strong></td>
    </tr>
    <tr>
      <td width="170" align="left" valign="middle"><strong>Chọn công ty</strong></td>
      <td width="607">
      <?php
	  	$idcongty = $p->laycot("select id_cty from sanpham where id='$layid' limit 1");
	  	$p->loadcombo_congty("select * from congty order by tencty asc", $idcongty);
	  ?>
      <label for="txtidxoa"></label>
      <input name="txtidxoa" type="hidden" id="txtidxoa" value="<?php echo $layid?>" /></td>
    </tr>
    <tr>
      <td width="170" align="left" valign="middle"><strong>Nhập tên</strong></td>
      <td><label for="txtten"></label>
      <input name="txtten" type="text" id="txtten" value="<?php echo $p->laycot("select tensp from sanpham where id='$layid' limit 1");?>" size="50" /></td>
    </tr>
    <tr>
      <td width="170" align="left" valign="middle"><strong>Nhập giá</strong></td>
      <td><label for="txtgia"></label>
      <input name="txtgia" type="text" id="txtgia" value="<?php echo $p->laycot("select gia from sanpham where id='$layid' limit 1");?>" size="50" /></td>
    </tr>
    <tr>
      <td width="170" align="left" valign="middle"><strong>Nhập mô tả</strong></td>
      <td><label for="txtmota"></label>
      <textarea name="txtmota" id="txtmota" cols="50" rows="5"><?php echo $p->laycot("select mota from sanpham where id='$layid' limit 1");?></textarea></td>
    </tr>
    <tr>
      <td width="170" align="left" valign="middle"><strong>Hình đại diện</strong></td>
      <td><label for="myfile"></label>
      <input type="file" name="myfile" id="myfile" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
		<input type="submit" name="nut1" id="nut1" value="Thêm sản phẩm" />
        <input type="submit" name="nut2" id="nut2" value="Sửa sản phẩm" />
      	<input type="submit" name="nut3" id="nut3" value="Xóa sản phẩm" />
	</td>
    </tr>
  </table>
  <hr />
  <?php
  	$p->load_ds_sanpham("select * from sanpham order by id desc");
  ?>
  
  <?php
	// Thêm sp
	if(isset($_POST['nut1']))
	{
		$name = $_FILES['myfile']['name'];
		$type = $_FILES['myfile']['type'];
		$tmp_name = $_FILES['myfile']['tmp_name'];
		$ten = $_REQUEST['txtten'];
		$gia = $_REQUEST['txtgia'];
		$mota = $_REQUEST['txtmota'];
		$congty = $_REQUEST['congty'];
		
		if($type == 'image/jpeg')
		{
			$name = time()."_".$name;
			if($p->uphinh($name, "../../hinh", $tmp_name) == 1)
			{
				if($p->themxoasua("insert into sanpham(tensp, gia, mota, hinh, id_cty) values('$ten', '$gia', '$mota', '$name', '$congty')") == 1)
				{
					echo '<script language="javascript">
							alert("Thêm sản phẩm thành công");
						</script>';
					
					echo '<script language="javascript">
							window.location = "../qlsp/";
						</script>';
				}
				else
				{
					echo 'Thêm ko thành công';
				}
			}
			else
			{
				echo 'Upload hình ko thành công';
			}
		}
		else
		{
			echo 'Yêu cầu upload file hình ảnh .jpg.';
		}
	}   

	// Sửa sp
	if(isset($_POST['nut2']))
	{
		$idsua = $_REQUEST['txtidxoa'];
		$ten = $_REQUEST['txtten'];
		$gia = $_REQUEST['txtgia'];
		$mota = $_REQUEST['txtmota'];
		$congty = $_REQUEST['congty'];
		if($idsua > 0)
		{
				if($p->themxoasua("update sanpham set tensp='$ten', gia='$gia', mota='$mota', id_cty='$congty' where id='$idsua' limit 1")==1)
				{
					echo '<script language="javascript">
							alert("Sửa sản phẩm thành công");
						</script>';
					
					echo '<script language="javascript">
							window.location = "../qlsp/";
						</script>';
				}
				else
				{
					echo 'Sửa ko thành công';
				}
		}
		else
		{
			echo 'Vui lòng chọn sản phẩm cần sửa';
		}
	}

	// Xóa sp
	if(isset($_POST['nut3']))
	{
		$idxoa = $_REQUEST['txtidxoa'];
		if($idxoa > 0)
		{
			$hinh = $p->laycot("select hinh from sanpham where id = '$idxoa' limit 1");
			$vitri = "../../hinh/".$hinh;
			if(unlink($vitri))
			{
				if($p->themxoasua("delete from sanpham where id = '$idxoa' limit 1") == 1)
				{
					echo '<script language="javascript">
							alert("Xóa sản phẩm thành công");
						</script>';
					
					echo '<script language="javascript">
							window.location = "../qlsp/";
						</script>';
				}
				else
				{
					echo 'Xóa sản phẩm ko thành công';
				}
			}
			else
			{
				echo 'Xóa hình ko thành công';
			}
		}
		else
		{
			echo 'Vui lòng chọn sản phẩm cần xóa';
		}
	}
  ?>
</form>
</body>
</html>