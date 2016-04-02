	<!--=== Container Part ===-->
	<div class="container content-sm">
		<!-- Blog Grid -->

		<div class="row margin-bottom-50">
		   <?php
		     foreach ($category_place_3 as $row) { 
		    ?>
			<div class="col-sm-4 sm-margin-bottom-50">
				<div class="blog-grid">
					<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
					<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'],50);?></a></h3>
					<ul class="blog-grid-info">
						<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
						<li><?php echo $row['date'];?></li>
						<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
					</ul>
					<p><?php echo limit_chars($row['summary'],250);?></p>
					<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
				</div>
			</div>
		<?php
		   }
		 ?>	
			
			
		</div><!--/end row-->
		<!-- End Blog Grid -->

		<div class="row">
			<div class="col-md-9 md-margin-bottom-50">
				<?php
                    foreach ($category_place_5 as $row) {
				?>
				<div class="row margin-bottom-50">
					<div class="col-sm-4 sm-margin-bottom-20">
						<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
					</div>
					<div class="col-sm-8">
						<div class="blog-grid">
							<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title'];?></a></h3>
							<ul class="blog-grid-info">
								<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
								<li><?php echo $row['date'];?></li>
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
							</ul>
							<p><?php echo limit_chars($row['summary'],250);?></p>
							<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
						</div>
					</div>
				</div>
                <?php
                   }
				?>
				<ul class="pager pager-v4">
					<li class="previous"><a class="rounded-3x" href="#">&larr; Older</a></li>
					<li class="page-amount">1 of 7</li>
					<li class="next"><a class="rounded-3x" href="#">Newer &rarr;</a></li>
				</ul>
				<!-- End Pager v4 -->
			</div>

			<div class="col-md-3">
				<!-- Blog Thumb v3 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Blog &amp; Comments</h2>

					<div class="blog-thumb-v3">
						<small><a href="#">Evan Bartlett</a></small>
						<h3><a href="#">Cameron's silence on defence is shameful</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Jonathan Owen</a></small>
						<h3><a href="#">Architects plan to stop skyscrapers from blocking out sunlight</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Susie Lau</a></small>
						<h3><a href="#">Fashion's first selfies: It was a 16th-century German accountant who started the trend for style blogging</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">John Rentoul</a></small>
						<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Richard Garner</a></small>
						<h3><a href="#">Controversial plan to test new primary school pupils infuriates teachers</a></h3>
					</div>
				</div>
				<!-- End Blog Thumb v3 -->

				<!-- Social Shares -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Social</h2>
					<ul class="blog-social-shares">
						<li>
							<i class="rounded-x fb fa fa-facebook"></i>
							<a class="rounded-3x" href="#">Like</a>
							<span class="counter">31,702</span>
						</li>
						<li>
							<i class="rounded-x tw fa fa-twitter"></i>
							<a class="rounded-3x" href="#">Follow Us</a>
							<span class="counter">164,290</span>
						</li>
						<li>
							<i class="rounded-x gp fa fa-google-plus"></i>
							<a class="rounded-3x" href="#">Add to circle</a>
							<span class="counter">5,425,764</span>
						</li>
					</ul>
				</div>
				<!-- End Social Shares -->

				<!-- Blog Thumb v2 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Recent News</h2>
                    <?php
                       foreach ($category_place_5 as $row) {
			     	?>
					

					<div class="blog-thumb blog-thumb-circle">
						<div class="blog-thumb-hover">
							<img class="rounded-x" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
							<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-link"></i></a>
						</div>
						<div class="blog-thumb-desc">
							<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'],75);?></</a></h3>
							<ul class="blog-thumb-info">
								<li><?php echo $row['date'];?></li>
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
							</ul>
						</div>
					</div>

					<?php
                       }
					?>
				</div>
				<!-- End Blog Thumb v2 -->
			</div>
		</div><!--/end row-->
	</div>
	<!--=== End Container Part ===-->