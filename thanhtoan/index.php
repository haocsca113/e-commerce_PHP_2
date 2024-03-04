<?php
    session_start();
    include("../class/clsadmin.php");
    $p = new admin();

    /********************* Lấy tổng tiền từ form giỏ hàng ở trang clstmdt ********************/
    // if(isset($_POST['tienhanhthanhtoan']))
    // {
    //     $tongtien = $_REQUEST['tongtien'];
    // }

    $tongtien = $_SESSION['tongtien'];
    // $_SESSION['tt_momo'] = $tt_momo;
    /********************* END CODE Lấy tổng tiền từ form giỏ hàng ở trang clstmdt ********************/
    
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
                    <table width="600" border="1" align="center" cellpadding="5" cellspacing="0">
                        <tr>
                        <td colspan="2" align="center" valign="middle"><strong>THÔNG TIN MUA HÀNG</strong></td>
                        </tr>
                        <tr>
                        <td width="172">Họ tên:</td>
                        <td width="402"><label for="txthoten"></label>
                        <input name="txthoten" type="text" id="txthoten" size="50" /></td>
                        </tr>
                        <tr>
                        <td>Địa chỉ:</td>
                        <td><label for="txtdiachi"></label>
                        <input name="txtdiachi" type="text" id="txtdiachi" size="50" /></td>
                        </tr>
                        <tr>
                        <td>Số điện thoại:</td>
                        <td><label for="txtSDT"></label>
                        <input name="txtSDT" type="text" id="txtSDT" size="50" /></td>
                        </tr>
                        <tr>
                        <td>Email:</td>
                        <td><label for="txtemail"></label>
                        <input name="txtemail" type="text" id="txtemail" size="50" /></td>
                        </tr>
                        <tr>
                        <td>Tổng tiền:</td>
                        <td><label for="txttongtien"></label>
                        <input type="text" name="txttongtien" id="txttongtien" size="50" value="<?php echo $tongtien .'$' ?>"/></td>
                        </tr>
                        <tr>
                            <td>Hình thức thanh toán:</td>
                            <td>
                                <label>
                                    <input type="radio" name="giaohang" value="1" id="giaohang" />
                                    Thanh toán khi nhận hàng
                                </label>
                                <br />
                                <label>
                                    <input type="radio" name="giaohang" value="2" id="giaohang" />
                                    Thanh toán VNPAY
                                </label>
                                <!-- <br /> -->
                                <!-- <label>
                                    <input type="radio" name="giaohang" value="3" id="giaohang" />
                                    Thanh toán MOMO
                                </label> -->
                                <label for="radio"></label>

                                <br>
                                <label for="">
                                    <input type="submit" name="momo_qr" value="Thanh toán MOMO QRcode" class="btn btn-danger" onclick="javascript: form.method='post'; form.action='../thanhtoan_momo/' ">
                                    
                                    <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien_momo"> 
                                </label>

                                <br>
                                <label for="">
                                    <input type="submit" name="momo_atm" value="Thanh toán MOMO ATM" class="btn btn-danger" onclick="javascript: form.action='../thanhtoan_momo_atm/' ">
                        
                                    <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien_momo">  
                                </label>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2" align="center" valign="middle"><input type="submit" name="nut1" id="nut1" value="Đặt hàng" />

                        <input type="submit" name="nut2" id="nut2" value="Reset" /></td>
                        </tr>
                    </table>
                </form>

                <!-- <br>
                <form method="post" enctype="application/x-www-form-urlencoded" action="../thanhtoan_momo/">
                    <input type="submit" name="momo_qr" value="Thanh toán MOMO QRcode" class="btn btn-danger">
                </form>

                <br>
                <form method="post" enctype="application/x-www-form-urlencoded" action="../thanhtoan_momo_atm/">
                    
                    <input type="submit" name="momo_atm" value="Thanh toán MOMO ATM" class="btn btn-danger">
                </form> -->

                <!-- ******************************* CODE PHP Đặt hàng *********************************** -->
                <?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $id_taikhoan = $_SESSION['id'];  
                
                if(isset($_POST['momo_qr']))
                {
                    $hoten = $_REQUEST['txthoten'];
                    $diachi = $_REQUEST['txtdiachi'];
                    $SDT = $_REQUEST['txtSDT'];
                    $email = $_REQUEST['txtemail'];
                    $tt = $_REQUEST['txttongtien'];
                    $giaohang = 'momo_qr';
                    $date = date("y-m-d H:i:s");

                    

                    $p->themxoasua("insert into donhang(hoten, diachi, SDT, email, tongtien, giaohang, status, order_date, id_taikhoan) values('$hoten', '$diachi', '$SDT', '$email', '$tt', '$giaohang', '1', '$date', '$id_taikhoan')");
                }
                
                if(isset($_POST['momo_atm']))
                {
                    $hoten = $_REQUEST['txthoten'];
                    $diachi = $_REQUEST['txtdiachi'];
                    $SDT = $_REQUEST['txtSDT'];
                    $email = $_REQUEST['txtemail'];
                    $tt = $_REQUEST['txttongtien'];
                    $giaohang = 'momo_atm';
                    $date = date("y-m-d H:i:s");
                    

                    $p->themxoasua("insert into donhang(hoten, diachi, SDT, email, tongtien, giaohang, status, order_date, id_taikhoan) values('$hoten', '$diachi', '$SDT', '$email', '$tt', '$giaohang', '1', '$date', '$id_taikhoan')");
                }

                if(isset($_POST['nut1']))
                {
                        $hoten = $_REQUEST['txthoten'];
                        $diachi = $_REQUEST['txtdiachi'];
                        $SDT = $_REQUEST['txtSDT'];
                        $email = $_REQUEST['txtemail'];
                        $tt = $_REQUEST['txttongtien'];
                        $giaohang = $_REQUEST['giaohang'];
                        $date = date("y-m-d H:i:s");

                        // giaohang == 1 la nhan tien sau khi giao hang
                        if($giaohang == '1')
                        {
                            
                            if($p->themxoasua("insert into donhang(hoten, diachi, SDT, email, tongtien, giaohang, status, order_date, id_taikhoan) values('$hoten', '$diachi', '$SDT', '$email', '$tt', '$giaohang', '1', '$date', '$id_taikhoan')") == 1)
                            {
                                echo '<script language="javascript">
                                        alert("Đặt hàng thành công, đơn hàng đang chờ được xác nhận.");
                                    </script>';

                                echo '<script language="javascript">
                                        window.location = "../index.php";
                                    </script>';
                            }
                            else
                            {
                                echo 'Đặt hàng không thành công';
                            }
                            
                        }
                        // giaohang == 2 la dat hang online vnpay
                        else if($giaohang == '2'){
                            if($p->themxoasua("insert into donhang(hoten, diachi, SDT, email, tongtien, giaohang, status, order_date, id_taikhoan) values('$hoten', '$diachi', '$SDT', '$email', '$tt', '$giaohang', '1', '$date', '$id_taikhoan')") == 1)
                            {
                                echo '<script language="javascript">
                                        window.location = "../vnpay_php/";
                                    </script>';
                            }
                        }
                }
                else if(isset($_POST['nut2']))
                {
                    echo '<script language="javascript">
                            window.location = "../thanhtoan/";
                        </script>';
                }
                ?>
                <!-- ****************************** END CODE PHP Đặt hàng ********************************** -->

            </div>
        </div>
    </div>
    
</body>
</html>