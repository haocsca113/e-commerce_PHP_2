<?php
session_start();
include("../class/clsadmin.php");
$p = new admin();
/*------------------------------ CODE PHP THÊM SẢN PHẨM VÀO GIỎ HÀNG ---------------------------------*/
// if(isset($_POST['add_to_cart']))
// {
//     if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']) && isset($_SESSION['hodem']) && isset($_SESSION['ten']))
//     {
//         $tensp = $_REQUEST['tensp'];
//         $gia = $_REQUEST['gia'];
//         $hinh = $_REQUEST['hinh'];
//         $soluong = $_REQUEST['soluong'];
//         $id_sanpham = $_REQUEST['id_sanpham'];
    
    
//         if($p->themxoasua("insert into giohang(tensp, gia, hinh, soluong, id_sanpham) values('$tensp', '$gia', '$hinh', '$soluong', '$id_sanpham')") == 1)
//         {
//             echo '<script language="javascript">
//                     alert("Thêm vào giỏ thành công");
//                 </script>';
    
//             echo '<script language="javascript">
//                     window.location = "../giohang/";
//                 </script>';
//         }
//     }
//     else
//     {
//         echo '<script language="javascript">
//                 alert("Bạn phải đăng nhập trước khi mua hàng");
//             </script>';
//         echo '<script language="javascript">
//                 window.location = "../login/";
//             </script>';
//     }
// }

if(isset($_POST['add_to_cart']))
{
    if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']) && isset($_SESSION['hodem']) && isset($_SESSION['ten']))
    {
        $tensp = $_REQUEST['tensp'];
        $gia = $_REQUEST['gia'];
        $hinh = $_REQUEST['hinh'];
        $soluong = $_REQUEST['soluong'];
        $id_sanpham = $_REQUEST['id_sanpham'];
    
    
        if($p->themxoasua("insert into giohang(tensp, gia, hinh, soluong, id_sanpham) values('$tensp', '$gia', '$hinh', '$soluong', '$id_sanpham')") == 1)
        {
            echo '<script language="javascript">
                    alert("Thêm vào giỏ thành công");
                </script>';
    
            echo '<script language="javascript">
                    window.location = "../giohang/";
                </script>';

            $_SESSION['tensp'] = $tensp;
            $_SESSION['gia'] = $gia;
            $_SESSION['hinh'] = $hinh;
            $_SESSION['soluong'] = $soluong;
            $_SESSION['id_sanpham'] = $id_sanpham;

        }
    }
    else
    {
        echo '<script language="javascript">
                alert("Bạn phải đăng nhập trước khi mua hàng");
            </script>';
        echo '<script language="javascript">
                window.location = "../login/";
            </script>';
    }
}
/*------------------------------- END CODE PHP THÊM SẢN PHẨM VÀO GIỎ HÀNG -------------------------------*/


/*--------------------------------- CODE PHP XÓA SẢN PHẨM KHỎI GIỎ HÀNG ------------------------------------*/
if(isset($_POST['remove_from_cart']))
{
    $layid = $_REQUEST['layid'];
    if($p->themxoasua("delete from giohang where id = '$layid'") == 1)
    {
        echo '<script language="javascript">
				alert("Xóa khỏi giỏ thành công");
			</script>';

        echo '<script language="javascript">
            window.location = "../giohang/";
        </script>';
    }
}
/*--------------------------------- END CODE PHP XÓA SẢN PHẨM VÀO GIỎ HÀNG ------------------------------------*/
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
        .row
        {
            position: relative;
        }
        .tienhanhthanhtoan
        {
            position: absolute;
            right: 15px;
            bottom: -40px;
        }
        .tienhanhthanhtoan a
        {
            color: #fff;
            text-decoration: none;
        }
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

    <!--*************************** LOAD GIỎ HÀNG *****************************-->
    <div class="container">
        <div class="row">
            <?php
            if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']) && isset($_SESSION['hodem']) && isset($_SESSION['ten']))
            {
                if(isset($_SESSION['tensp']) && isset($_SESSION['gia']) && isset($_SESSION['hinh']) && isset($_SESSION['soluong']) && isset($_SESSION['id_sanpham']))
                {
                    $p->load_giohang("select * from giohang order by id asc");
                }
            }
                
            ?>
        </div>
    </div>    

    
    <!--*************************** END LOAD GIỎ HÀNG *****************************-->
</body>
</html>


