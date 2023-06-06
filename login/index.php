<?php
include("../class/clslogin.php");
$p = new login();
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

<div class="container" style="margin-bottom: 10px;">
  <div class="row">
    <div class="col-md-6">
        <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td colspan="2" align="center" valign="middle"><strong>ĐĂNG NHẬP</strong></td>
          </tr>
          <tr>
            <td width="173" align="center" valign="middle">Nhập username</td>
            <td width="401"><label for="txtuser"></label>
            <input name="txtuser" type="text" id="txtuser" size="45" /></td>
          </tr>
          <tr>
            <td align="center" valign="middle">Nhập password</td>
            <td><label for="txtpass"></label>
            <input name="txtpass" type="password" id="txtpass" size="45" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="middle">
              <input type="submit" name="nut" id="nut" value="Đăng nhập" />
              <input type="submit" name="nut" id="nut" value="Đăng ký" />
            </td>
          </tr>
        </table>
        
        <div align="center">
        <?php
        switch($_POST['nut'])
        {
          case 'Đăng nhập':
          {
            $user = $_REQUEST['txtuser'];
            $pass = $_REQUEST['txtpass'];
            if($user != '' && $pass != '')
            {
              $p->mylogin($user, $pass);
            }
            else
            {
              echo 'Vui lòng nhập đầy đủ thông tin';
            }
            break;
          }

          case 'Đăng ký':
            {
              header("Location: ../signup/");
              break;
            }
        }
        ?>
        </div>
    </form>
    </div>
  </div>
</div>


</body>
</html>