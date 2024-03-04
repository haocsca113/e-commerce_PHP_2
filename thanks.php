<?php
    include("class/clsadmin.php");
    $p = new admin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANKS</title>

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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo" style="margin-bottom: 10px;">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Magento Commerce">
                    </a>
                </div>

                <?php
                    if(isset($_GET['partnerCode']))
                    {
                        $code_order = rand(0, 9999);
                        $partnerCode = $_GET['partnerCode'];
                        $orderId = $_GET['orderId'];
                        $amount = $_GET['amount'];
                        $orderInfo = $_GET['orderInfo'];
                        $orderType = $_GET['orderType'];
                        $transId = $_GET['transId'];
                        $payType = $_GET['payType'];
                
                        if($p->themxoasua("insert into tt_momo(partner_code, order_id, amount, order_info, order_type, trans_id, pay_type, code_cart) values('$partnerCode', '$orderId', '$amount', '$orderInfo', '$orderType', '$transId', '$payType', '$code_order')") == 1)
                        {
                            echo '<h5>Giao dịch thanh toán bằng MOMO thành công!</h5>';
                        }
                        else
                        {
                            echo 'Giao dịch MOMO thất bại';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>