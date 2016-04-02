
	<!-- Master Slider -->
	<div class="blog-ms-v1 content-sm bg-color-darker margin-bottom-60">
		<div class="master-slider ms-skin-default" id="masterslider">
			<?php	
				foreach ($slider_news as $row) {
			?>
			<div class="ms-slide blog-slider">
				<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg"  data-src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge"><?php echo $this->crud_model->get_field('category', $row['category_id'], 'category_name'); ?></span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><?php echo $row['date'];?></span>
					<h2><a href="#"><?php echo $row['title'];?></</a></h2>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- End Master Slider -->
<!-- Master Slider -->
	<div class="container content no-padding-bottom">
		<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
			
			<?php
				foreach ($slider_news as $row) {
			?>
			<div class="ms-slide blog-slider">
				<img src="<?php echo base_url();?>template/front/plugins/master-slider/masterslider/style/blank.gif" data-src="<?php echo base_url();?>template/front/img/blog/img9.jpg" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge">Fashion</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted">Mar 6, 2015</span>
					<h2><a href="#">Is this the end for fashion police?</a></h2>
				</div>
				<div class="ms-thumb">
					<h3>Fashion Week</h3>
					<p>Lorem ipsum dolor sit ametonse ctetuer elit</p>
				</div>
			</div>

			<?php } ?>

		</div>
	</div>
	<!-- End Master Slider -->