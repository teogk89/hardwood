<main class="page-header">
<div class="container"><h1>Upgrade Your Home Flooring Today</h1></div>
</main>
<div class="content">
	<div class="projects">
		<div class="container">
			<div class="filter-content-2">
				<ul class="filter js-filter">
					<li class="active"><a href="#" data-filter="*">All</a></li>
					<li><a href="#" data-filter=".building"></a></li>
					<li><a href="#" data-filter=".villa"></a></li>
					<li><a href="#" data-filter=".interior"></a></li>
					<li><a href="#" data-filter=".exterior"></a></li>
				</ul>
			</div>
		</div>
		<div class="grid-items js-isotope js-grid-items">
			<?php foreach($images as $image): ?>
			<div class="grid-item building js-isotope-item js-grid-item">
				<div class="project-item item-shadow">
					<img alt="" class="img-responsive" src="<?php echo base_url('images/gallery/' . $image)?>">
					<div class="project-hover">
						<div class="project-hover-content">
							<h3 class="project-title"></h3>
							<p class="project-description"></p>
						</div>
					</div>
					<a target="_blank" href="<?php echo base_url('images/gallery/'.$image)?>" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
				</div>
			</div>	
			<?php endforeach?>	
		</div>
	</div>
</div>