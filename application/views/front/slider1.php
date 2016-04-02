<!-- Master Slider -->
	<div class="container content no-padding-bottom">
		<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
		 <?php
             foreach ($slider_news as $row) {
             
		 ?>
			<div class="ms-slide blog-slider">
				<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" data-src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge"><?php echo $this->crud_model->get_field('category', $row['category_id'], 'category_name'); ?></span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><?php echo $row['date']?></span>
					<h2><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title']?></a></h2>
				</div>
				<div class="ms-thumb">
					<h3><?php echo limit_chars($row['title'], 25);?></h3>
					<p><?php echo limit_chars($row['title'], 50);?></p>
				</div>
			</div>

			<?php
               }
			?>
		</div>
	</div>
	<!-- End Master Slider -->