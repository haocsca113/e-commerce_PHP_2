<?php
class login
{
	private function connect()
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
	
	// public function mylogin($user, $pass)
	// {
	// 	$pass = md5($pass);
	// 	$sql = "select id, username, password, phanquyen from taikhoan where username='$user' and password='$pass' limit 1";
	// 	$link = $this->connect();
	// 	$ketqua = mysql_query($sql, $link);
	// 	$i = mysql_num_rows($ketqua);
		
	// 	if($i == 1)
	// 	{
	// 		while($row = mysql_fetch_array($ketqua))
	// 		{
	// 			$id = $row['id'];
	// 			$username = $row['username'];
	// 			$password = $row['password'];
	// 			$phanquyen = $row['phanquyen'];
	// 			session_start();
	// 			$_SESSION['id'] = $id;
	// 			$_SESSION['user'] = $username;
	// 			$_SESSION['pass'] = $password;
	// 			$_SESSION['phanquyen'] = $phanquyen;
				
	// 			header("Location: ../admin/");
				
	// 		}
	// 	}
	// 	else
	// 	{
	// 		echo 'Sai username hoặc password.';
	// 	}
	// }

	public function mylogin($user, $pass)
	{
		$pass = md5($pass);
		$sql = "select * from taikhoan where username='$user' and password='$pass' limit 1";
		$link = $this->connect();
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		
		if($i == 1)
		{
			while($row = mysql_fetch_array($ketqua))
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
					header("Location: ../admin/");
				}
				else
				{
					header("Location: ../index.php");
					
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
		$ketqua = mysql_query($sql, $link);
		$i = mysql_num_rows($ketqua);
		if($i != 1)
		{
			header("Location: ../login/");	
		}
	}
}
?>