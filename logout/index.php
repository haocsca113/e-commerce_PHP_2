<?php
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['user'];
$password = $_SESSION['pass'];
$phanquyen = $_SESSION['phanquyen'];
$hodem = $_SESSION['hodem'];
$ten = $_SESSION['ten'];
// include("../class/clsadmin.php");
// $p = new admin();
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
                <?php
                echo '<form action="" method="post">
                        <h5>Username: '.$username.'</h5>
                        <h5>Fullname: '.$ten.' '.$hodem.'</h5>
                        <button name="logout" class="btn btn-secondary">Logout</button>
                     </form>
                    ';
                   
                ?>
                <?php
                if(isset($_POST['logout']))
                {
                    session_destroy();
                    echo '<script language="javascript">
                            alert("Đăng xuất thành công");
                        </script>';
                    echo '<script language="javascript">
                            window.location = "../index.php";
                        </script>';
                }
                ?>
                
            </div>
        </div>
    </div>
    
</body>
</html>