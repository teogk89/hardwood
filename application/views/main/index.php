<?php

$projects = [

"hh8.jpg","hyiuhi.jpg","ijoijo.jpg","ijoijo90.jpg","ijoijoi909.jpg","ijoiujo.jpg","im98.jpg","jhoijo.jpg","joijoi909.jpg","kopkp.jpg","uhhiu.jpg"

];

shuffle($projects);


$feedback = [
	["Ken Hung","Price paid was consistent with quote. Quality exceeded our expectation. Preferred hardwood floor over other wood products due to chemicals. Contractors completed job within the timeframe they quoted and they were willing to accommodate special needs without charging us. Overall, very happy with the store's professional service and quality product."],
	["Adrian B","This is the most amazing hardwood flooring store. The staff is friendly, takes their time in listening and accommodating client's needs and offer the most economical solution"],
	["Angela Tsang","The staffs are very knowledgeable and friendly. Highly recommended."]


]
?>

<main class="jumbotron">

<div class="rev_slider_wrapper">
<div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
<?php $this->load->view("main/slider")?>	
</div>
</div>
</main>
<div class="content"> 

<section class="section-about">
<div class="container">
<div class="row">
<div class="col-md-6">
<strong class="section-subtitle">about us</strong>
<h2 class="section-title section-about-title">Professional flooring company</h2>

<p>We provide a wide range of Quality Wood Floorings as well as Professional Installation, Refinishing, Repair, Restoration of Hardwood Flooring in Toronto<br/><br/>We are the passionate contractors with great experiences in making your living space simply gorgeous.</p>
<div class="experience-box">
<div class="experience-border"></div>
<div class="experience-content">
<div class="experience-number">16</div>
<div class="experience-info wow fadeInDown">Years<br>Experience<br>Working</div>
</div>
</div>
</div>
<div class="col-md-5 col-md-offset-1">
<div class="dots-image">
<img alt="" class="about-img img-responsive" src="images/right_panel.jpg">
<div class="dots"></div>
</div>
</div>
</div>
</div>
</section>

<section class="section-projects section">
<div class="container">
<div class="row">
<div class="col-lg-5">
<h2 class="section-title">Latest Projects</h2>
</div>
<div class="col-lg-7">
<div class="filter-content">
<ul class="filter-carousel filter pull-lg-right js-filter-carousel">
<li class="active"><a href="#" class="all" data-filter="*">All</a></li>

<li><a href="#" data-filter=".interior-exterior">Hard Wood Flooring </a></li>
</ul>
<a href="" class="view-projects">View All Projects</a>
</div>
</div>
</div>
</div>
<div class="project-carousel owl-carousel">


<?php foreach($projects as $p):?>

<div class="project-item item-shadow building">
<img alt="" class="img-responsive" src="<?php echo base_url('images/projects/' . $p)?>">
<div class="project-hover">
<div class="project-hover-content">
<h3 class="project-title"></h3>
<p class="project-description"></p>
</div>
</div>
<a href="" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
</div>

<?php endforeach?>


<!--<div class="project-item item-shadow interior-exterior">
<img alt="" class="img-responsive" src="images/projects/8-426x574.jpg">
<div class="project-hover">
<div class="project-hover-content">
<h3 class="project-title">Cubic<br>Inter Mesuem<br>In Rome</h3>
<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
</div>
</div>
<a href="" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
</div> !-->
</div>
</section>

<section class="section-clients section bg-dots">
<div class="container">
<h2 class="section-title">From Great Our Clients</h2>
<div class="client-carousel owl-carousel">
<!--<div class="client-carousel-item">
<img alt="" class="client-img" src="images/clients/1-92x92.jpg">
<div class="client-box">
<img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
<div class="client-title">
<span class="client-name">Adam Stone</span>
<span class="client-company">/ CEO at Google INC</span>
</div>
<p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
</div>
</div> !-->
<?php foreach($feedback as $f):?>

<div class="client-carousel-item">
<img alt="" class="client-img" src="<?php echo base_url('images/image-icons/people.png')?>">
<div class="client-box">
<img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
<div class="client-title">
<span class="client-name"><?php  echo $f[0] ?></span>
<span class="client-company">/</span>
</div>
<p class="client-description"><?php echo $f[1]?></p>
</div>
</div>

<?php endforeach?>


</div>
<!--<div class="partner-carousel owl-carousel">
	<div class="partner-carousel-item">
	<img alt="" src="images/partners/1.png">
	</div>
	<div class="partner-carousel-item">
	<img alt="" src="images/partners/2.png">
	</div>
	<div class="partner-carousel-item">
	<img alt="" src="images/partners/3.png">
	</div>
	<div class="partner-carousel-item">
	<img alt="" src="images/partners/4.png">
	</div>
	<div class="partner-carousel-item">
	<img alt="" src="images/partners/5.png">
	</div>
</div> !-->
</div>
</section>

<section class="section-news section" style="display:none">
<div class="container">
<h2 class="section-title">Latest News <a href="" class="link-arrow-2 pull-right">All Articles <i class="icon ion-ios-arrow-right"></i></a></h2>
<div class="news-carousel owl-carousel">
<div class="news-item">
<img alt="" src="images/news/1-370x370.jpg">
<div class="news-hover">
<div class="hover-border"><div></div></div>
<div class="content">
<div class="time">Dec 15th, 2016</div>
<h3 class="news-title">Discover Architecture Of Bario</h3>
<p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
</div>
<a class="read-more" href="#">Continue</a>
</div>
</div>
<div class="news-item">
<img alt="" src="images/news/2-370x370.jpg">
<div class="news-hover">
<div class="hover-border"><div></div></div>
<div class="content">
<div class="time">Dec 15th, 2016</div>
<h3 class="news-title">Discover Architecture Of Bario</h3>
<p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
</div>
<a class="read-more" href="#">Continue</a>
</div>
</div>
<div class="news-item">
<img alt="" src="images/news/3-370x370.jpg">
<div class="news-hover">
<div class="hover-border"><div></div></div>
<div class="content">
<div class="time">Dec 15th, 2016</div>
<h3 class="news-title">Discover Architecture Of Bario</h3>
<p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
</div>
<a class="read-more" href="#">Continue</a>
</div>
</div>
</div>
</div>
</section>
</div>

