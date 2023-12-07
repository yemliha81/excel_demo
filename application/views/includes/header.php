<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kokulife Oda Kokuları</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_ENV['BASE_URL'];?>assets/images/kokulife-favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery.scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/mobile-menu.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/style.css?v=1.8.1">
    <style>
        .src i{
            font-size:20px;
        }
    </style>
</head>
<body class="home">
<header class="header style7">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-md-6 col-xs-5 col-ts-12" style="text-align:center;">
                    <a href="<?php echo $_ENV['BASE_URL'];?>">
                        <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo.svg" alt="img" width="280">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="header-nav">
                    <div class="container-wapper" style="display: flex;align-items: center;justify-content: flex-end;">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="<?php echo $_ENV['BASE_URL'];?>" class="stelina-menu-item-title" title="Home">Anasayfa</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo CATEGORY_LIST;?>" class="stelina-menu-item-title" title="Shop">Kategoriler</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PRODUCT_LIST;?>" class="stelina-menu-item-title" title="Shop">Ürünler</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'kullanici-yorumlari';?>" class="stelina-menu-item-title" title="About">KULLANICI YORUMLARI</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'hakkimizda';?>" class="stelina-menu-item-title" title="About">Hakkımızda</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'iletisim';?>" class="stelina-menu-item-title" title="About">İLETİŞİM</a>
                            </li>
                            
                            <li class="menu-item">
                                <a target="_blank" href="https://wa.me/+905425441711" class="stelina-menu-item-title" title="About">
                                    <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/whatsapp.svg" width="30px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="<?php echo $_ENV['BASE_URL'];?>">
                    <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo.svg" alt="img" width="240">
                </a>
            </div>
        </div>
        <!--<div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>