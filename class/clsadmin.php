<?php
include("clstmdt.php");
class admin extends tmdt
{
	public function loadcombo_congty($sql, $idcongty)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i > 0)
		{
			echo '<select name="congty" id="congty">
          			<option>chọn công ty</option>';
			while($row = mysql_fetch_array($ketqua))
			{
				$id = $row['id'];
				$tencty = $row['tencty'];
				if($id == $idcongty)
				{
					echo '<option value="'.$id.'" selected>'.$tencty.'</option>';
				}
				else
				{
					echo '<option value="'.$id.'">'.$tencty.'</option>';
				}
				
			}
			
			echo '</select>';
		}
		else
		{
			echo 'Không có cơ sở dữ liệu';
		}
		mysql_close($link);
	}
	
	public function uphinh($name, $folder, $tmp_name)
	{
		if($name != '' && $folder != '' && $tmp_name != '')
		{
			$newname = $folder."/".$name;
			if(move_uploaded_file($tmp_name, $newname))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 0;
		}
	}
	
	public function themxoasua($sql)
	{
		$link = $this->connect();
		if(mysql_query($sql, $link))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	public function load_ds_sanpham($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i > 0)
		{
			echo '<form id="form1" name="form1" method="post" action="">
				  <table width="800" border="1" align="center" cellpadding="5" cellspacing="0">
					<tr>
					  <td width="51" align="center" valign="middle"><strong>STT</strong></td>
					  <td width="285" align="center" valign="middle"><strong>TÊN SẢN PHẨM</strong></td>
					  <td width="130" align="center" valign="middle"><strong>GIÁ</strong></td>
					  <td width="282" align="center" valign="middle"><strong>MÔ TẢ</strong></td>
					</tr>';
			$dem = 1;
			while($row = mysql_fetch_array($ketqua))
			{
				$id = $row['id'];
				$tensp = $row['tensp'];
				$gia = $row['gia'];
				$mota = $row['mota'];
				echo '<tr>
					  <td width="51" align="center" valign="middle"><a href="?layid='.$id.'">'.$dem.'</a></td>
					  <td width="285" align="center" valign="middle"><a href="?layid='.$id.'">'.$tensp.'</a></td>
					  <td width="130" align="center" valign="middle"><a href="?layid='.$id.'">'.$gia.'</a></td>
					  <td align="center" valign="middle"><a href="?layid='.$id.'">'.$mota.'</a></td>
					</tr>';
				$dem++;
			}
			
			echo '</table>
				</form>';
		}
		else
		{
			echo 'Không có cơ sở dữ liệu';
		}
		mysql_close($link);
	}
	
	public function laycot($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		$giatri = '';
		if($i > 0)
		{
			while($row = mysql_fetch_array($ketqua))
			{
				$giatri = $row[0];
			}	
		}
		return $giatri;
	}
}
?>