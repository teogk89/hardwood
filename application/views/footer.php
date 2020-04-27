<footer id="footer" class="footer section">
<div class="footer-flex">
<div class="flex-item">
<a class="brand pull-left" href="#">
<img alt="" src="<?php echo base_url('images/brand.png')?>">
<div class="brand-info">
<div class="brand-name"><?php echo $this->config->item('brand_name')?></div>
<div class="brand-text"><?php echo $this->config->item("slogan")?></div>
</div>
</a>
</div>
<div class="flex-item">
<div class="inline-block">© <?php echo $this->config->item('brand_name')?> 2020<br>All Rights Resevered</div>
</div>
<div class="flex-item">
<ul>
<li><a href="">Site Map</a></li>
<li><a href="">Term & Conditions</a></li>
<li><a href="">Privacy Policy</a></li>
<li><a href="">Help</a></li>
<li><a href="">Affiliatep</a></li>
</ul>
</div>
<div class="flex-item">
<ul>
<li><a href="">Our Location</a></li>
<li><a href="">Career</a></li>
<li><a href="">About</a></li>
<li><a href="">Contact</a></li>
</ul>
</div>
<div class="flex-item">
<ul>
<li class="active"><a href="">ENG</a></li>
<li><a href="">FRA</a></li>
<li><a href="">GER</a></li>
</ul>
</div>
<div class="flex-item">
<div class="social-list">
<a href="" class="icon ion-social-twitter"></a>
<a href="" class="icon ion-social-facebook"></a>
<a href="" class="icon ion-social-googleplus"></a>
<a href="" class="icon ion-social-linkedin"></a>
<a href="" class="icon ion-social-dribbble-outline"></a>
</div>
</div>
</div>
</footer>
</div>
</div>

<?php

$myJs = [

"js/jquery.min.js",
"js/animsition.min.js",
"js/bootstrap.min.js",
"js/smoothscroll.js",
"js/jquery.validate.min.js",
"js/wow.min.js",
"js/jquery.stellar.min.js",
"js/jquery.magnific-popup.min.js",
"js/owl.carousel.min.js",
"js/isotope.pkgd.min.js",
"js/imagesloaded.pkgd.min.js",
"js/plugins.js",
"js/sly.min.js",
"js/rev-slider/jquery.themepunch.tools.min.js",
"js/rev-slider/jquery.themepunch.revolution.min.js",
"js/rev-slider/revolution.extension.actions.min.js",
"js/rev-slider/revolution.extension.carousel.min.js",
"js/rev-slider/revolution.extension.kenburn.min.js",
"js/rev-slider/revolution.extension.layeranimation.min.js",
"js/rev-slider/revolution.extension.migration.min.js",
"js/rev-slider/revolution.extension.navigation.min.js",
"js/rev-slider/revolution.extension.parallax.min.js",
"js/rev-slider/revolution.extension.slideanims.min.js",
"js/rev-slider/revolution.extension.video.min.js",
"js/scripts.js",
"js/rev-slider-init.js"];

?>

<?php foreach($myJs as $js):?>

<script src="<?php echo base_url($js)?>"></script>	
<?php endforeach?>	
<!--<script src="js/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/sly.min.js"></script>

<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>

<script src="js/scripts.js"></script>
<script src="js/rev-slider-init.js"></script>!-->
</body>
</html>