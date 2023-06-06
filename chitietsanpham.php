<?php 
session_start();
include ("class/clstmdt.php");
$p = new tmdt();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons Icon -->
  <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico"
    type="image/x-icon" />
  <title>Classic premium HTML5 &amp; CSS3 template</title>

  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/revslider.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  <link rel="stylesheet" href="css/sanpham.css">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
  <div id="page">
    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <!-- Header Logo -->
              <div class="logo"><a title="Magento Commerce" href="index.php"><img alt="Magento Commerce"
                    src="images/logo.png"></a></div>
              <!-- End Header Logo -->
            </div>
            <div class="col-lg-9 col-xs-12 right_menu">
              <div class="toplinks">
                <!-- Default Welcome Message -->
                <div class="welcome-msg hidden-xs">Default welcome msg! </div>
                <!-- End Default Welcome Message -->
                <div class="links">
                  <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My
                        Account</span></a></div>
                  <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span
                        class="hidden-xs">Wishlist</span></a></div>
                  <div class="check"><a title="Checkout" href="checkout.html"><span
                        class="hidden-xs">Checkout</span></a></div>
                  <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                  <!-- Header Company -->
                  <div class="dropdown block-company-wrapper hidden-xs"><a role="button" data-toggle="dropdown"
                      data-target="#" class="block-company dropdown-toggle" href="#">Company <span
                        class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="about_us.html">About Us</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Customer Service</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Privacy Policy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="sitemap.html">Site Map</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search Terms</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Advanced Search</a></li>
                    </ul>
                  </div>
                  <!-- End Header Company -->

                  <!-- Login Logout -->
                  <div class="login">
                    <a href="login/"><span class="hidden-xs">Log In</span></a>
                    <a href="logout/"><span class="hidden-xs">Log out</span></a>   
                  </div>
                </div>
                <!-- links -->
              </div>

              <!-- Search-col -->
              <div class="search-box pull-right">
                <form action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_1/cat"
                  method="POST" id="search_mini_form" name="Categories">
                  <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70"
                    name="search" id="search">
                  <button type="button" class="search-btn-bg"><span
                      class="glyphicon glyphicon-search"></span>&nbsp;</button>
                </form>
              </div>
              <!-- End Search-col -->
              <!-- Header Language -->
              <div class="lang-curr">
                <div class="form-language">
                  <ul class="lang">
                    <li class=""><a href="#" title="English"><img src="images/english.png" alt="English" />
                        <span>English</span></a></li>
                    <li class=""><a href="#" title="Francais"><img src="images/francais.png" alt="Francais" />
                        <span>francais</span></a></li>
                    <li class=""><a href="#" title="German"><img src="images/german.png" alt="German" />
                        <span>german</span></a></li>
                  </ul>
                </div>
                <div class="form-currency">
                  <ul class="currencies_list">
                    <li class=""><a class="" title="Dollar" href="#">$</a></li>
                    <li class=""><a class="" title="Euro" href="#">&euro;</a></li>
                    <li class=""><a class="" title="Pound" href="#">&pound;</a></li>
                  </ul>
                </div>
              </div>

              <!-- End Header Currency -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    
    <div class="mm-toggle-wrap">
      <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
    </div>
    <!-- Navbar -->
    <nav>
      <div class="container">
        <div class="row">
          <div class="nav-inner col-lg-12">
            <ul id="nav" class="hidden-xs">
              <li class="level0 parent drop-menu "><a href="index.php"><span>Home</span></a>
                <ul class="level1">
                  <li class="level1 first parent"><a href="index.php"><span>Home Version 1</span></a></li>
                  <li class="level1 parent"><a href="#"><span>Home Version 2</span></a></li>
                  <li class="level1 parent"><a href="#"><span>Home Version 3</span></a></li>

                </ul>
              </li>
              
              <!--***************** Code PHP Load Menu CongTy ******************-->
              <?php $p->load_menu_congty("select * from congty order by tencty asc"); ?>
              <!--***************** END Code PHP Load Menu CongTy ******************-->

              <li class="mega-menu"><a href="#" class="level-top"><span>Giới thiệu</span></a></li>
              <li class="mega-menu"><a class="level-top" href="#"><span>Blog</span></a></li>

            </ul>
            <div class="menu_top">
              <div class="top-cart-contain pull-right">
                <!------------------- Shopping Cart ------------------>
                <div class="mini-cart">
                  <!-- <div data-hover="dropdown" class="basket dropdown-toggle"><a href="giohang/"><span class="hidden-xs">Shopping Cart</span></a></div> -->
                  <div data-hover="dropdown" class="basket dropdown-toggle">
                    <?php
                    if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']) && isset($_SESSION['hodem']) && isset($_SESSION['ten']))
                    {
                      echo '<a href="giohang/"><span class="hidden-xs">Shopping Cart</span></a>';
                    }
                    else
                    {
                      echo '<a href="login/"><span class="hidden-xs">Shopping Cart</span></a>';
                    }
                    ?>
                   
                  </div>
                 
                </div>
                <!----------------- End Shopping Cart ------------------->
                <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                  <input value="" type="hidden">
                  <input id="enable_module" value="1" type="hidden">
                  <input class="effect_to_cart" value="1" type="hidden">
                  <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!-- ******************** Code PHP xuat danh sach san pham *************************-->
    <!-- main container -->
    <div class="main-col" style="margin: 10px 0; ">
      <div class="container">
        <div class="row">
              <?php 
                $idcty = $_REQUEST['idcty'];
                if($idcty > 0)
                {
                    $p->xuatsanpham("select * from sanpham where id_cty='$idcty' order by id asc");
                }
                
                if(isset($_REQUEST['layid']))
                {
                  $layid = $_REQUEST['layid'];
                }
                $p->xuatchitietsanpham("select * from sanpham where id = '$layid'");
              ?>
        </div>
      </div>
    </div>
    <!-- end main container -->
    <!-- ********************** END Code PHP xuat danh sach san pham **********************-->

    <!-- Footer -->
    <footer>
      <section class="footer-navbar">
        <div class="footer-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-xs-12 col-lg-8">
                <div class="footer-column pull-left collapsed-block">
                  <h4>Shopping Guide<a class="expander visible-xs" href="#TabBlock-1">+</a></h4>
                  <div class="tabBlock" id="TabBlock-1">
                    <ul class="links">
                      <li class="first"><a href="#" title="How to buy">How to buy</a></li>
                      <li><a href="faq.html" title="FAQs">FAQs</a></li>
                      <li><a href="#" title="Payment">Payment</a></li>
                      <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
                      <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                      <li class="last"><a href="#" title="Return policy">Return policy</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer-column pull-left collapsed-block">
                  <h4>Style Advisor<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                  <div class="tabBlock" id="TabBlock-2">
                    <ul class="links">
                      <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
                      <li><a title="Information" href="#">Information</a></li>
                      <li><a title="Addresses" href="#">Addresses</a></li>
                      <li><a title="Addresses" href="#">Discount</a></li>
                      <li><a title="Orders History" href="#">Orders History</a></li>
                      <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer-column pull-left collapsed-block">
                  <h4>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                  <div class="tabBlock" id="TabBlock-3">
                    <ul class="links">
                      <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
                      <li><a href="#" title="Search Terms">Search Terms</a></li>
                      <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                      <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                      <li><a href="#" title="Suppliers">Suppliers</a></li>
                      <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-lg-4">
                <div class="footer-column-last">
                  <div class="newsletter-wrap collapsed-block">
                    <h4>Sign up for emails<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                    <div class="tabBlock" id="TabBlock-4">
                      <form id="newsletter-validate-detail" method="post" action="#">
                        <div id="container_form_news">
                          <div id="container_form_news2">
                            <input type="text" class="input-text required-entry validate-email"
                              value="Enter your email address" onfocus=" this.value='' "
                              title="Sign up for our newsletter" id="newsletter" name="email">
                            <button class="button subscribe" title="Subscribe"
                              type="submit"><span>Subscribe</span></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="social">
                    <h4>Follow Us</h4>
                    <ul class="link">
                      <li class="fb pull-left"><a href="#"></a></li>
                      <li class="tw pull-left"><a href="#"></a></li>
                      <li class="googleplus pull-left"><a href="#"></a></li>
                      <li class="rss pull-left"><a href="#"></a></li>
                      <li class="pintrest pull-left"><a href="#"></a></li>
                      <li class="linkedin pull-left"><a href="#"></a></li>
                      <li class="youtube pull-left"><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-middle">
          <div class="container">
            <div class="row">
              <div style="text-align:center"><a href="index.html"><img src="images/footer-logo.png"
                    alt="footer-logo"></a></div>
              <address>
                <i class="icon-location-arrow"></i> 123 Main Street, Anytown, CA 12345 USA <i
                  class="icon-mobile-phone"></i><span> +(408) 394-7557</span> <i class="icon-envelope"></i><a
                  href="mailto:support@magikcommerce.com">support@magikcommerce.com</a>
              </address>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. All Rights Reserved.</div>
              <div class="col-sm-7 col-xs-12 company-links">
                <ul class="links">
                  <li><a title="Magento Themes" href="#">Magento Themes</a></li>
                  <li><a title="Premium Themes" href="#">Premium Themes</a></li>
                  <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
                  <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>

  <div id="mobile-menu">
    <div class="mm-search">
      <form name="search">
        <div class="input-group">
          <div class="input-group-btn">
            <button class="btn-default" type="submit"><i class="icon-search"></i></button>
          </div>
          <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
        </div>
      </form>
    </div>
    <ul>
      <li> </li>
      <li>
        <div class="home"><a href="index.html"><i class="icon-home"></i>Home</a> </div>
      </li>
      <li><a href="#">Pages</a>
        <ul>
          <li><a href="grid.html">Grid</a></li>
          <li> <a href="list.html">List</a></li>
          <li> <a href="product_detail.html">Product Detail</a></li>
          <li> <a href="shopping_cart.html">Shopping Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li> <a href="wishlist.html">Wishlist</a></li>
          <li> <a href="dashboard.html">Dashboard</a></li>
          <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
          <li> <a href="about_us.html">About us</a></li>
          <li><a href="compare.html">Compare</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="quick_view.html">Quick view</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="blog.html">Blog</a>
            <ul>
              <li><a href="blog_detail.html">Blog Detail</a></li>
            </ul>
          </li>
          <li><a href="contact_us.html">Contact us</a></li>
          <li><a href="404error.html">404 Error Page</a></li>
        </ul>
      </li>
      <li><a href="grid.html">Women</a>
        <ul>
          <li> <a href="grid.html" class="">Stylish Bag</a>
            <ul>
              <li> <a href="grid.html" class="">Clutch Handbags</a></li>
              <li> <a href="grid.html" class="">Diaper Bags</a></li>
              <li> <a href="grid.html" class="">Bags</a></li>
              <li> <a href="grid.html" class="">Hobo handbags</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Material Bag</a>
            <ul>
              <li> <a href="grid.html">Beaded Handbags</a></li>
              <li> <a href="grid.html">Fabric Handbags</a></li>
              <li> <a href="grid.html">Handbags</a></li>
              <li> <a href="grid.html">Leather Handbags</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Shoes</a>
            <ul>
              <li> <a href="grid.html">Flat Shoes</a></li>
              <li> <a href="grid.html">Flat Sandals</a></li>
              <li> <a href="grid.html">Boots</a></li>
              <li> <a href="grid.html">Heels</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Jwellery</a>
            <ul>
              <li> <a href="grid.html">Bracelets</a></li>
              <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
              <li> <a href="grid.html">Pendants</a></li>
              <li> <a href="grid.html">Pins &amp; Brooches</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Dresses</a>
            <ul>
              <li> <a href="grid.html">Casual Dresses</a></li>
              <li> <a href="grid.html">Evening</a></li>
              <li> <a href="grid.html">Designer</a></li>
              <li> <a href="grid.html">Party</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Swimwear</a>
            <ul>
              <li> <a href="grid.html">Swimsuits</a></li>
              <li> <a href="grid.html">Beach Clothing</a></li>
              <li> <a href="grid.html">Clothing</a></li>
              <li> <a href="grid.html">Bikinis</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Men</a>
        <ul>
          <li> <a href="grid.html" class="">Shoes</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
            </ul>
          </li>
          <li> <a href="#.html">Dresses</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
            </ul>
          </li>
          <li> <a href="#.html">Jackets</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
            </ul>
          </li>
          <li> <a href="#.html">Watches</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
            </ul>
          </li>
          <li> <a href="#/sunglasses.html">Sunglasses</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Accesories</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Electronics</a>
        <ul>
          <li> <a href="grid.html"><span>Mobiles</span></a>
            <ul>
              <li> <a href="grid.html"><span>Samsung</span></a></li>
              <li> <a href="grid.html"><span>Nokia</span></a></li>
              <li> <a href="grid.html"><span>IPhone</span></a></li>
              <li> <a href="grid.html"><span>Sony</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html" class=""><span>Accesories</span></a>
            <ul>
              <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
              <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
              <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
              <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Cameras</span></a>
            <ul>
              <li> <a href="grid.html"><span>Camcorders</span></a></li>
              <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
              <li> <a href="grid.html"><span>Digital SLR</span></a></li>
              <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
            <ul>
              <li> <a href="grid.html"><span>MP3 Players</span></a></li>
              <li> <a href="grid.html"><span>IPods</span></a></li>
              <li> <a href="grid.html"><span>Speakers</span></a></li>
              <li> <a href="grid.html"><span>Video Players</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Computer</span></a>
            <ul>
              <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
              <li> <a href="grid.html"><span>Pendrives</span></a></li>
              <li> <a href="grid.html"><span>Headphones</span></a></li>
              <li> <a href="grid.html"><span>PC Components</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Appliances</span></a>
            <ul>
              <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
              <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
              <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
              <li> <a href="grid.html"><span>Water Purifier</span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Furniture</a>
        <ul>
          <li> <a href="grid.html">Living Room</a>
            <ul>
              <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
              <li> <a href="grid.html">Sofas</a></li>
              <li> <a href="grid.html">Chairs</a></li>
              <li> <a href="grid.html">Tables</a></li>
            </ul>
          </li>
          <li> <a href="grid.html" class="">Dining &amp; Bar</a>
            <ul>
              <li> <a href="grid.html">Dining Table Sets</a></li>
              <li> <a href="grid.html">Serving Trolleys</a></li>
              <li> <a href="grid.html">Bar Counters</a></li>
              <li> <a href="grid.html">Dining Cabinets</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Bedroom</a>
            <ul>
              <li> <a href="grid.html">Beds</a></li>
              <li> <a href="grid.html">Chest of Drawers</a></li>
              <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
              <li> <a href="grid.html">Nightstands</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Kitchen</a>
            <ul>
              <li> <a href="grid.html">Kitchen Racks</a></li>
              <li> <a href="grid.html">Kitchen Fillings</a></li>
              <li> <a href="grid.html">Wall Units</a></li>
              <li> <a href="grid.html">Benches &amp; Stools</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Kids</a></li>
      <li><a href="contact_us.html">Contact Us</a></li>
    </ul>
  </div>
  <!-- End Footer -->
  <!-- JavaScript -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/revslider.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
  <script type='text/javascript'>
    jQuery(document).ready(function () {
      jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1920,
        startheight: 650,

        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,

        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'on',

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        spinner: 'spinner0',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,

        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
      });
    });

  </script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>