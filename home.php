<!-- connect file -->
<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>iTech Cart</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="animate.min.css">
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="icomoon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="meanmenu.css">
<link rel="stylesheet" href="owl.carousel.min.css">
<link rel="stylesheet" href="swiper.min.css">
<link rel="stylesheet" href="slick.css">
<link rel="stylesheet" href="jquery.fancybox.min.css">
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="nice-select.css">

   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <?php if (isset($_SESSION['message'])): ?>
    <div style="background: #f26522; color: white; padding: 10px; margin-bottom: 10px; text-align:center; font-weight:bold;">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']); // remove message after showing
        ?>
    </div>
<?php endif; ?>
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="best_sellers.php">Best Sellers</a></li>
                           <li><a href="new_releases.php">New Releases</a></li>
                           <li><a href="all_models.php">All Models</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="home.php">Home</a>
                     <a href="new_releases.php">New Releases</a>
                     <a href="best_sellers.php">Best Sellers</a>
                     <a href="all_models.php">All Models</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" style="margin-left: 18px; margin-top: 8px;"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="new_releases.php">New Releases</a>
                        <a class="dropdown-item" href="best_sellers.php">Best Sellers</a>
                        <a class="dropdown-item" href="all_models.php">All Models</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #000000; border-color:#000000 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                     <ul>
                     <li>
  <a href="cart.php">
    <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #050005;"></i>
    <span class="padding_10" style="color: black;">Cart</span>
  </a>
</li>

                           <li><a href="User.php">
                              <i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
                              <span class="padding_10" style="color: black; ">User</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital" style="color: black;">i-Tech <br>Cart</h1>
                              <div class="buynow_bt"><a href="buy_now.php" style="cursor:pointer; color:white; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital" style="color: black;">i-Tech <br>Cart</h1>
                              <div class="buynow_bt"><a href="buy_now.php" style="cursor:pointer; color:white; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital" style="color: black;">i-Tech <br>Cart</h1>
                              <div class="buynow_bt"><a href="buy_now.php" style="cursor:pointer; color:white; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa -angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">New Releases</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16 (512 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱63,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 16 (512 GB)', 63990, '512 GB', 'images/iphone16.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 16 (512 GB)', 63990, '512 GB', 'images/iphone16.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 (128GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱47,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 (128GB)', 47990, '128GB', 'images/iphone15.webp')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 (128GB)', 47990, '128GB', 'images/iphone15.webp')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro Max (1TB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱108,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15pm.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 Pro Max (1TB)', 108990, '1TB', 'images/iphone15pm.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 Pro Max (1TB)', 108990, '1TB', 'images/iphone15pm.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">New Releases</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16 Pro (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱76,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16pro (2).png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 16 Pro (128 GB)', 76990, '128 GB', 'images/iphone16pro (2).png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 16 Pro (128 GB)', 76990, '128 GB', 'images/iphone16pro (2).png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16e (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱37,490</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16e.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 16e (128 GB)', 37490, '128 GB', 'images/iphone16e.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 16e (128 GB)', 37490, '128 GB', 'images/iphone16e.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱59,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15pro.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 Pro (256 GB)', 59990, '256 GB', 'images/iphone15pro.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 Pro (256 GB)', 59990, '256 GB', 'images/iphone15pro.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Best Sellers</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro Max (1TB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱108,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone15pm.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 Pro Max (1TB)', 108990, '1TB', 'images/iphone15pm.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 Pro Max (1TB)', 108990, '1TB', 'images/iphone15pm.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 13 (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱37,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone13.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 13 (128 GB)', 37990, '128 GB', 'images/iphone13.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 13 (128 GB)', 37990, '128 GB', 'images/iphone13.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 11 (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱24,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone11.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 11 (128 GB)', 24990, '128 GB', 'images/iphone11.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 11 (128 GB)', 24990, '128 GB', 'images/iphone11.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Best Sellers</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16 (512 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱63,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone16.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 16 (512GB)', 63990, '512GB', 'images/iphone16.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 16 (512GB)', 63990, '512GB', 'images/iphone16.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 12 (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱34,990</span></p>
                                  <img src="images/iphone12.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 12 (128GB)', 34990, '128GB', 'images/iphone12.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 12 (128GB)', 34990, '128GB', 'images/iphone12.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 (128GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱47,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone15.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 (128GB)', 47990, '128GB', 'images/iphone15.webp')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 (128GB)', 47990, '128GB', 'images/iphone15.webp')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Best Sellers</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 14 (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱52,990.00</span></p>
                                 <img src="images/iphone 14.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 14 (256GB)', 52990, '256GB', 'images/iphone 14.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 14 (256GB)', 52990, '256GB', 'images/iphone 14.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 12 Pro Max (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱70,990</span></p>
                                 <img src="images/iphone12pm.webp" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 12 Pro Max (128GB)', 70990, '128GB', 'images/iphone12pm.webp')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 12 Pro Max (128GB)', 70990, '128GB', 'images/iphone12pm.webp')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Plus (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱66,990</span></p>
                                 <img src="images/iphone15plus.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt" style="text-align: left;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleAddToCart(event, 'Iphone 15 Plus (256GB)', 66990, '256GB', 'images/iphone15plus.png')">
                                          Add to Cart
                                       </a>
                                    </div>
                                    <div class="buy_bt" style="text-align: right;">
                                       <a href="#" 
                                          style="cursor:pointer; color:#f26522; font-weight:bold; font-size:14px; font-family:'Poppins', sans-serif;"
                                          onclick="handleBuyNowClick(event, 'Iphone 15 Plus (256GB)', 66990, '256GB', 'images/iphone15plus.png')">
                                          Buy Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="itech_cart@gmail.com" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Contact Number : <a href="#">09912948281</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text"> 2025 All Rights Reserved.<a href="https://html.design"></a></p>
         </div>
      </div>
      <li>
  <a href="cart.php" class="cart-button" style="position: relative; display: inline-block;">
    <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #050005; font-size: 22px;"></i>
    <span class="padding_10" style="color: black;">Cart</span>
    <span class="cart-badge" style="
      position: absolute;
      top: -5px;
      right: -10px;
      background: red;
      color: white;
      border-radius: 50%;
      font-size: 12px;
      padding: 2px 6px;
      display: none;
    ">0</span>
  </a>
</li>

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
      <script>
// Function to handle Buy Now button clicks
function handleBuyNowClick(event, productName, price, gb, img) {
    event.preventDefault();
    
    // Find the product in cartData
    const productData = cartData.find(item => item.name === productName);
    
    if (!productData) {
        console.error('Product not found in cart data');
        return;
    }
    
    // Create product object with available colors from cartData
    const product = {
        name: productName,
        price: productData.price,
        gb: gb || '',
        img: img || 'images/default-product.jpg',
        colors: productData.colors.map(color => ({ name: color })),
        selectedColor: productData.selectedColor
    };
    
    // Show color selection modal
    showColorModal(product, (selectedProduct) => {
        // Add to cart via AJAX
        addToCart(selectedProduct, () => {
            // After adding to cart, redirect to cart page
            window.location.href = 'cart.php';
        });
    });
}

// Function to handle Add to Cart button clicks
function handleAddToCart(event, productName, price, gb, img) {
    event.preventDefault();
    
    // Find the product in cartData
    const productData = cartData.find(item => item.name === productName);
    
    if (!productData) {
        console.error('Product not found in cart data');
        return;
    }
    
    // Create product object with available colors from cartData
    const product = {
        name: productName,
        price: productData.price,
        gb: gb || '',
        img: img || 'images/default-product.jpg',
        colors: productData.colors.map(color => ({ name: color })),
        selectedColor: productData.selectedColor
    };
    
    // Show color selection modal
    showColorModal(product, (selectedProduct) => {
        // Add to cart via AJAX
        addToCart(selectedProduct, () => {
            // Show success message or update cart count
            const cartCount = document.querySelector('.cart-badge');
            if (cartCount) {
                const currentCount = parseInt(cartCount.textContent) || 0;
                cartCount.textContent = currentCount + 1;
            }
            alert('Item added to cart!');
        });
    });
}

// Function to add item to cart via AJAX
function addToCart(product, callback) {
    const formData = new FormData();
    formData.append('name', product.name);
    formData.append('price', product.price);
    formData.append('gb', product.gb);
    formData.append('color', product.selectedColor);
    formData.append('qty', '1');
    formData.append('img', product.img);
    
    fetch('add_to_cart.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success && typeof callback === 'function') {
            callback();
        }
    })
    .catch(error => {
        console.error('Error adding to cart:', error);
        alert('There was an error adding the item to your cart.');
    });
}

// Cart data with all iPhone models, prices, and colors
const cartData = [
    { name: 'Iphone 16 (512 GB)', price: 63990, qty: 0, img: 'images/iphone16.png', colors: ['Black', 'White', 'Blue', 'Pink', 'Natural Titanium', 'Yellow'], selectedColor: 'Black', type: 'New Release' },
    { name: 'Iphone 16 Pro (128 GB)', price: 76990, qty: 0, img: 'images/iphone16pro (2).png', colors: ['Black Titanium', 'White Titanium', 'Blue Titanium', 'Natural Titanium'], selectedColor: 'Black Titanium', type: 'New Release' },
    { name: 'Iphone 16e (128 GB)', price: 37490, qty: 0, img: 'images/iphone16e.png', colors: ['Blue', 'White', 'Green', 'Yellow', 'Red'], selectedColor: 'Blue', type: 'New Release' },
    { name: 'Iphone 15 (128GB)', price: 47990, qty: 0, img: 'images/iphone15.webp', colors: ['Black', 'Blue', 'Green', 'Yellow', 'Pink'], selectedColor: 'Black', type: 'New Release' },
    { name: 'Iphone 15 Pro Max (1TB)', price: 108990, qty: 0, img: 'images/iphone15pm.png', colors: ['Black', 'White', 'Blue', 'Natural'], selectedColor: 'Black', type: 'New Release' },
    { name: 'Iphone 15 Pro (256 GB)', price: 59990, qty: 0, img: 'images/iphone15pro.png', colors: ['Black', 'White', 'Blue', 'Natural'], selectedColor: 'Black', type: 'New Release' },
    { name: 'Iphone 15 Plus (256 GB)', price: 66990, qty: 0, img: 'images/iphone15plus.png', colors: ['Blue', 'Pink', 'Yellow', 'Green', 'Black'], selectedColor: 'Blue', type: 'New Release' },
    { name: 'Iphone 14 (256 GB)', price: 52990, qty: 0, img: 'images/iphone 14.png', colors: ['Midnight', 'Starlight', 'Purple', 'Blue', 'Red', 'Yellow'], selectedColor: 'Midnight', type: 'Old Model' },
    { name: 'Iphone 13 (128 GB)', price: 37990, qty: 0, img: 'images/iphone13.png', colors: ['Pink', 'Blue', 'Midnight', 'Starlight', 'Green', 'Red'], selectedColor: 'Pink', type: 'Best Seller' },
    { name: 'Iphone 13 Pro Max (256 GB)', price: 58990, qty: 0, img: 'images/iphone13promax.webp', colors: ['Graphite', 'Gold', 'Silver', 'Sierra Blue'], selectedColor: 'Graphite', type: 'Old Model' },
    { name: 'Iphone 12 (128 GB)', price: 34990, qty: 0, img: 'images/iphone12.png', colors: ['Black', 'White', 'Purple', 'Green', 'Blue', 'Red'], selectedColor: 'Black', type: 'Best Seller' },
    { name: 'Iphone 12 Mini (128GB)', price: 25000, qty: 0, img: 'images/iphone12mini.webp', colors: ['Black', 'White', 'Blue', 'Green', 'Purple', 'Red'], selectedColor: 'Black', type: 'Old Model' },
    { name: 'Iphone 12 Pro Max (128 GB)', price: 70990, qty: 0, img: 'images/iphone12pm.webp', colors: ['Gold', 'Silver', 'Graphite', 'Pacific Blue'], selectedColor: 'Gold', type: 'Old Model' },
    { name: 'Iphone 11 (128 GB)', price: 24990, qty: 0, img: 'images/iphone11.png', colors: ['Black', 'White', 'Purple', 'Yellow', 'Green', 'Red'], selectedColor: 'Black', type: 'Best Seller' },
    { name: 'Iphone Xr (128 GB)', price: 15500, qty: 0, img: 'images/iphonexr.jpg', colors: ['Black', 'Red', 'White', 'Coral', 'Blue', 'Yellow'], selectedColor: 'Black', type: 'Old Model' },
    { name: 'Iphone X (64 GB)', price: 11500, qty: 0, img: 'images/iphonex.png', colors: ['Black', 'Silver', 'Space Gray'], selectedColor: 'Black', type: 'Old Model' },
    { name: 'Iphone Xs Max (64 GB)', price: 12990, qty: 0, img: 'images/iphonexsmax.png', colors: ['Gold', 'Black', 'Silver'], selectedColor: 'Gold', type: 'Old Model' },
    { name: 'Iphone 8 Plus (64 GB)', price: 7500, qty: 0, img: 'images/iphone8plus.webp', colors: ['Black', 'Gold', 'Silver', 'Product Red'], selectedColor: 'Black', type: 'Old Model' },
    { name: 'Iphone 7 Plus (64 GB)', price: 6500, qty: 0, img: 'images/iphone7plus.webp', colors: ['Black', 'Jet Black', 'Gold', 'Rose Gold', 'Silver', 'Red'], selectedColor: 'Black', type: 'Old Model' },
    { name: 'Iphone 8 (64 GB)', price: 5000, qty: 0, img: 'images/iphone8.webp', colors: ['Space Gray', 'Silver', 'Gold', 'Product Red'], selectedColor: 'Space Gray', type: 'Old Model' }
];

// Show color selection modal
function showColorModal(product, callback) {
    // Create color options HTML
    const colorOptions = product.colors.map(color => 
        `<option value="${color.name}" ${color.name === product.selectedColor ? 'selected' : ''}>
            ${color.name}
        </option>`
    ).join('');

    // Create modal HTML with color selection
    const modalHtml = `
        <div class="modal" id="color-modal" tabindex="-1" role="dialog" style="display: block; background: rgba(0,0,0,0.5);">
            <div class="modal-dialog" role="document" style="margin-top: 15%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select Color</h5>
                        <button type="button" class="close" onclick="document.getElementById('color-modal').remove()">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="${product.img}" alt="${product.name}" style="max-width: 200px; margin: 10px 0;">
                        <h5>${product.name}</h5>
                        <p>₱${product.price.toLocaleString()} ${product.gb ? '| ' + product.gb : ''}</p>
                        <div class="form-group" style="margin-top: 15px;">
                            <label for="colorSelect">Select Color:</label>
                            <select class="form-control" id="colorSelect" style="max-width: 200px; margin: 0 auto;">
                                ${colorOptions}
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('color-modal').remove()">Cancel</button>
                        <button type="button" class="btn btn-dark" onclick="confirmSelection()">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Remove any existing modals
    const existingModal = document.getElementById('color-modal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Add modal to body
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    
    // Store the callback and product in window for access in inline functions
    window.colorModalCallback = callback;
    window.colorModalProduct = { ...product };
    
    // Add event listener for the confirm button
    window.confirmSelection = function() {
        const colorSelect = document.getElementById('colorSelect');
        const selectedColor = colorSelect ? colorSelect.value : product.selectedColor;
        const selectedProduct = { 
            ...product, 
            selectedColor: selectedColor 
        };
        
        callback(selectedProduct);
        const modal = document.getElementById('color-modal');
        if (modal) modal.remove();
        delete window.colorModalCallback;
        delete window.colorModalProduct;
        delete window.confirmSelection;
    };
}
<script>
// Initialize cart badge count from localStorage or 0
document.addEventListener('DOMContentLoaded', () => {
  const initialCount = parseInt(localStorage.getItem('cartCount')) || 0;
  updateCartBadge(initialCount);
});

// Add helper function to update the cart badge
function updateCartBadge(count) {
  const badge = document.querySelector('.cart-badge');
  if (!badge) return;
  badge.textContent = count;
  badge.style.display = count > 0 ? 'block' : 'none';
  localStorage.setItem('cartCount', count);
}

// Modify the existing handleAddToCart function:
function handleAddToCart(event, productName, price, gb, img) {
  event.preventDefault();
  const productData = cartData.find(item => item.name === productName);
  if (!productData) {
    console.error('Product not found in cart data');
    return;
  }
  const product = {
    name: productName,
    price: productData.price,
    gb: gb || '',
    img: img || 'images/default-product.jpg',
    colors: productData.colors.map(color => ({ name: color })),
    selectedColor: productData.selectedColor
  };

  showColorModal(product, (selectedProduct) => {
    addToCart(selectedProduct, () => {
      const badge = document.querySelector('.cart-badge');
      let currentCount = parseInt(badge.textContent) || 0;
      currentCount += 1;
      updateCartBadge(currentCount);
      alert('Item added to cart!');
    });
  });
}


</script>
   </body>
</html>