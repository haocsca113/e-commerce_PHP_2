<?php
include("../class/clsadmin.php");
$p = new admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        
    </style>
</head>
<body>
    <div class="container" style="margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a title="Magento Commerce" href="../index.php"><img alt="Magento Commerce" src="../images/logo.png"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <form id="form1" name="form1" method="post" action="">
                <table width="500" border="1" align="" cellpadding="5" cellspacing="0">
                    <tr>
                    <td colspan="2" align="center"><strong>THÔNG TIN ĐĂNG KÝ</strong></td>
                    </tr>
                    <tr>
                    <td width="152">Nhập họ:
                    </p></td>
                    <td width="322"><input name="txtho" type="text" id="txtho" size="40" />
                    </td>
                    </tr>
                    <tr>
                    <td>Nhập tên: </td>
                    <td>
                        <input name="txtten" type="text" id="txtten" size="40" />
                    </td>
                    </tr>
                    <tr>
                    <td>Nhập username:</td>
                    <td>
                    <input name="txtuser" type="text" id="txtuser" size="40" /></td>
                    </tr>
                    <tr>
                    <td>Nhập password:</td>
                    <td>
                    <input name="txtpass" type="password" id="txtpass" size="40" /></td>
                    </tr>
                    <tr>
                    <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Đăng ký" /></td>
                    </tr>
                </table>
            </form>

            <?php
                switch($_POST['nut'])
                {
                    case 'Đăng ký':
                    {
                        $ho = $_REQUEST['txtho'];
                        $ten = $_REQUEST['txtten'];
                        $username = $_REQUEST['txtuser'];
                        $password = $_REQUEST['txtpass'];
                        $password = md5($password);
                        
                        if($ho == '' || $ten == '' || $username == '' || $password == '')
                        {
                            echo 'Vui lòng nhập đầy đủ thông tin';
                        }
                        else
                        {
                            echo '<script language="javascript">
                                    alert("Đăng ký thành công");
                                </script>';
                            $p->themxoasua("insert into taikhoan(username, password, hodem, ten, phanquyen) values('$username', '$password', '$ho', '$ten', '2')");
                            
                        }
                        break;
                    }
                }
                
            ?>
            </div>
        </div>
    </div>
    
</body>
</html>