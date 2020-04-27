<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
<title><?php echo $this->config->item('brand_name')?></title>

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" media="screen">
</head>
<body>
<div class="animsition">
<div class="wrapper boxed">

<div class="click-capture"></div>

<div class="menu">
<span class="close-menu icon-cross2 right-boxed"></span>
<div class="menu-lang right-boxed">
<a href="" class="active">Eng</a>
<a href="">Fra</a>
<a href="">Ger</a>
</div>
<ul class="menu-list right-boxed">
<li class="active">
<a href="index.html">Home</a>
<ul>
<li><a href="../light/index.html">Classic</a></li>
<li><a href="home-fullpage.html">Full page</a></li>
<li class="active"><a href="index.html">Dark</a></li>
</ul>
</li>
<li>
<a href="works.html">Works</a>
<ul>
<li><a href="works-grid.html">Grid</a></li>
<li><a href="works-masonry.html">Masonry</a></li>
<li><a href="works-carousel.html">Carousel</a></li>
<li><a href="project-detail.html">Project Detail</a></li>
</ul>
</li>
<li>
<a href="#">News</a>
<ul>
<li><a href="news-grid.html">Grid</a></li>
<li><a href="news-listing.html">Listing</a></li>
<li><a href="news-masonry.html">Masonry</a></li>
</ul>
</li>
<li>
<a href="#">Post detail</a>
<ul>
<li><a href="post-image.html">Image</a></li>
<li><a href="post-gallery.html">Gallery</a></li>
<li><a href="post-video.html">Video</a></li>
<li><a href="post-right-sidebar.html">Right Sidebar</a></li>
</ul>
</li>
<li>
<a href="#">Pages</a>
<ul>
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</li>
</ul>
<div class="menu-footer right-boxed">
<div class="social-list">
<a href="" class="icon ion-social-twitter"></a>
<a href="" class="icon ion-social-facebook"></a>
<a href="" class="icon ion-social-googleplus"></a>
<a href="" class="icon ion-social-linkedin"></a>
<a href="" class="icon ion-social-dribbble-outline"></a>
</div>
<div class="copy">© <?php echo $this->config->item('brand_name')?> 2020. All Rights Reseverd<br></div>
</div>
</div>

<header class="navbar boxed js-navbar">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="#">
<img alt="" src="<?php echo base_url('images/brand.png')?>">
<div class="brand-info">
<div class="brand-name"><?php echo $this->config->item('brand_name')?></div>
<div class="brand-text"><?php echo $this->config->item("slogan")?></div>
</div>
</a>
<div class="social-list hidden-xs">
<a href="" class="icon ion-social-twitter"></a>
<a href="" class="icon ion-social-facebook"></a>
<a href="" class="icon ion-social-googleplus"></a>
 <a href="" class="icon ion-social-linkedin"></a>
<a href="" class="icon ion-social-dribbble-outline"></a>
</div>
<div class="navbar-spacer hidden-sm hidden-xs"></div>
<address class="navbar-address hidden-sm hidden-xs">call us: <span class="text-dark"><?php echo $this->config->item("phone_number")?></span></address>
</header>
