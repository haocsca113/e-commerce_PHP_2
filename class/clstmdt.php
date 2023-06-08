<?php
class tmdt
{
	public function connect()
	{
		$conn = mysql_connect("localhost", "tmdt", "123456");
		if(!$conn)
		{
			echo 'Khong ket noi dc csdl';
			exit();
		}
		else
		{
			mysql_select_db("btl_ptudw_team");
			mysql_query("SET NAMES UTF8");
			return $conn;
		}
	}
	
	public function xuatsanpham($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i > 0)
		{
			while($row = mysql_fetch_array($ketqua))
			{
				$id = $row['id'];
				$tensp = $row['tensp'];
				$gia = $row['gia'];
				$mota = $row['mota'];
				$hinh = $row['hinh'];

				echo '
					<div class="col-md-3" id="sanpham">
                        <a href="chitietsanpham.php?layid='.$id.'"><img id="sanpham_hinh" src="hinh/'.$hinh.'" alt=""/></a>
                        <div id="sanpham_noidung">
                            <a id="sanpham_ten" href="chitietsanpham.php?layid='.$id.'"><p >'.$tensp.'</p></a>
                            <a id="sanpham_mota" href="chitietsanpham.php?layid='.$id.'"><p >'.$mota.'</p></a>
                            <p id="sanpham_gia" >Giá: '.number_format($gia, 0, '', '.').' $</p>  
                        </div>
				    </div>
				</form>';
			}
		}
		else
		{
			echo 'Khong co csdl';
		}
		mysql_close($link);
	}

    public function xuatchitietsanpham($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i > 0)
		{
			while($row = mysql_fetch_array($ketqua))
			{
                $id = $row['id'];
				$tensp = $row['tensp'];
				$gia = $row['gia'];
				$mota = $row['mota'];
				$hinh = $row['hinh'];

					echo '
					<form method="post" action="giohang/"> 
						<div class="col-md-5">
							<img src="hinh/'.$hinh.'" id="sanpham_hinh">
						</div>
						<div class="col-md-7">
							<p id="sanpham_ten">'.$tensp.'</p>
							<p id="sanpham_gia">Giá: '.number_format($gia, 0, "", ".").' USD</p>
							<p id="sanpham_mota">'.$mota.'</p>

							<input type="hidden" name="tensp" value="'.$tensp.'">
							<input type="hidden" name="gia" value="'.$gia.'">
							<input type="hidden" name="hinh" value="'.$hinh.'">
							<input type="number" name="soluong" value="1" class="form-control" style="width:10%";>
							<input type="hidden" name="id_sanpham" value="'.$id.'">
							<input type="submit" name="add_to_cart" class="btn btn-info" value="Add to cart" style="width:60%; color: #000; margin-top:10px; ">
						</div>
					</form>
					';
			}
		}
		else
		{
			echo 'Khong co san pham';
		}
	}

	public function load_giohang($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		$dem = 1;
		if($i > 0)
		{
			while($row = mysql_fetch_array($ketqua))
			{
				$id = $row['id'];
				$tensp = $row['tensp'];
				$gia = $row['gia'];
				$hinh = $row['hinh'];
				$soluong = $row['soluong'];
				$tonggia = ($soluong * $gia);

				echo '<div class="col-md-12">
						<form method="post" action="../giohang/">
							<table class="table table-bordered table-striped">
								<tr>
									<th>STT</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
									<th>Hình</th>
									<th>Số lượng</th>
									<th>Tổng giá</th>
									<th></th>
								</tr>
								
								<tr>
									<td>'.$dem.'</td>
									<td>'.$tensp.'</td>
									<td>'.$gia.' $</td>
									<td><img src="../hinh/'.$hinh.'" alt=""/ style="width:50px;"></td>
									<td>'.$soluong.'</td>
									<td>'.number_format($tonggia, 0, "", ".").' $</td>
									<td>	
									<button name="remove_from_cart" class="btn btn-danger" value='.$id.'">Remove</button>
									</td>
								</tr>
						
					';
				$dem++;
				$tongtien = $tongtien + $tonggia;
			}
			
			
				echo '
					<tr>
						<td colspan="4"></td>
						<td><b>Tổng tiền</b></td>						
						<td>'.number_format($tongtien, 0, "", ".").' $</td>	

						<input type="hidden" name="tongtien" value="'.$tongtien.'">	
					</tr>
					';

				echo '</table>
					</form>
					</div>';

				/********************* Form dùng để lấy tổng tiền hiện ở trang thanh toán **********************/
				echo '<form action="../thanhtoan/" method="post">
						
						<button class="btn btn-info tienhanhthanhtoan" name="tienhanhthanhtoan">Tiến hành thanh toán</button>		
						<input type="hidden" name="tongtien" value="'.$tongtien.'">	
					</form>
					';
				/********************* END Form dùng để lấy tổng tiền hiện ở trang thanh toán **********************/
		}
		else
		{
			echo 'Chưa có sản phẩm nào được thêm vào giỏ';
		}
		mysql_close($link);
	}
	
	public function load_menu_congty($sql)
	{
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i > 0)
		{
			while($row = mysql_fetch_array($ketqua))
			{
				$id = $row['id'];
				$tencty = $row['tencty'];
				// echo '<a href="?idcty='.$id.'">'.$tencty.'</a>';
				echo '<li class="mega-menu"><a href="?idcty='.$id.'" class="level-top"><span>'.$tencty.'</span></a></li>';
			}
		}
		else
		{
			echo 'Không có cơ sở dữ liệu';
		}
		mysql_close($link);
	}
}

?>