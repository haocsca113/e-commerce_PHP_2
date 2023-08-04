<?php
class login
{
	// private function connect()
	// {
	// 	$conn = mysql_connect("localhost", "id20901309_tmdt", "Vualaptrinh@01");
	// 	if(!$conn)
	// 	{
	// 		echo 'Khong ket noi dc csdl';
	// 		exit();
	// 	}
	// 	else
	// 	{
	// 		mysql_select_db("id20901309_btl_ptudw_team");
	// 		mysql_query("SET NAMES UTF8");
	// 		return $conn;
	// 	}
	// }

	public function connect()
	{
		$conn = mysqli_connect("localhost", "tmdt", "123456", "btl_ptudw_team");
		if(!$conn)
		{
			echo 'Khong ket noi dc csdl';
			exit();
		}
		else
		{
			mysqli_set_charset($conn,"utf8");
			return $conn;
		}
	}
	
	public function mylogin($user, $pass)
	{
		$pass = md5($pass);
		$sql = "select * from taikhoan where username='$user' and password='$pass' limit 1";
		$link = $this->connect();
		$ketqua = mysqli_query($link, $sql);
		$i = mysqli_num_rows($ketqua);
		
		if($i == 1)
		{
			while($row = mysqli_fetch_array($ketqua))
			{
				$id = $row['id'];
				$username = $row['username'];
				$password = $row['password'];
				$phanquyen = $row['phanquyen'];
				$hodem = $row['hodem'];
				$ten = $row['ten'];

				session_start();
				$_SESSION['id'] = $id;
				$_SESSION['user'] = $username;
				$_SESSION['pass'] = $password;
				$_SESSION['phanquyen'] = $phanquyen;
				$_SESSION['hodem'] = $hodem;
				$_SESSION['ten'] = $ten;

				
				if($phanquyen == 1)
				{
					// header("Location: ../admin/");
					echo '<script language="javascript">
						window.location = "../admin/";
					</script>';
				}
				
				else if($phanquyen == 2)
				{
					echo '<script language="javascript">
						window.location = "../index.php";
					</script>';
				}
				
			}
		}
		else
		{
			echo 'Sai username hoặc password.';
		}
	}

	
	public function confirmlogin($id, $user, $pass, $phanquyen)
	{
		$sql = "select id from taikhoan where id='$id' and username='$user' and password='$pass' and phanquyen='$phanquyen'";
		$link = $this->connect();
		$ketqua = mysqli_query($link, $sql);
		$i = mysqli_num_rows($ketqua);
		if($i != 1)
		{
			header("Location: ../login/");	
		}
	}
}
?>