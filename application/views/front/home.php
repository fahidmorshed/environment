	<div class="container margin-bottom-40">
		<div class="row">
			<!-- Main Content -->
			<div class="col-md-9">
				<!-- Tab v4 -->
				<div class="tab-v4 margin-bottom-40">
					<!-- Tab Heading -->
					<div class="tab-heading">
						<h2>Latest News</h2>
						<ul class="nav nav-tabs" role="tablist">
							<li class="home active">
								<a href="#tab-v4-a1" role="tab" data-toggle="tab">All</a>
							</li>
							<li>
								<a href="#tab-v4-a2" role="tab" data-toggle="tab">Fashion</a>
							</li>
							<li>
								<a href="#tab-v4-a3" role="tab" data-toggle="tab">Education</a>
							</li>
						</ul>
					</div>
					<!-- End Latest News -->

					<!-- Tab Content -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-v4-a1">
							<div class="row">
								<div class="col-sm-7">
                                	<?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3>
                                        	<a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">
												<?php echo $row['title'];?>
                                            </a>
                                        </h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo $row['summary'];?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
                                    <?php } ?>
								</div>

								<div class="col-sm-5">                                	
                                	<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<!-- Blog Thumb -->
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
								</div>
							</div><!--/end row-->
						</div>
						<div class="tab-pane fade" id="tab-v4-a2">
							<div class="row">
								<div class="col-sm-7">
								     <?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title'];?></a></h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo $row['summary'];?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
									   <?php } ?>

								</div>

								<div class="col-sm-5">
									<!-- Blog Thumb -->
									<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
								</div>
							</div><!--/end row-->
						</div>
						<div class="tab-pane fade" id="tab-v4-a3">
							<div class="row">
								<div class="col-sm-7">
                                	<?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3>
                                        	<a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">
												<?php echo $row['title'];?>
                                            </a>
                                        </h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo $row['summary'];?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
                                    <?php } ?>
								</div>

								<div class="col-sm-5">
									<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
									
									<!-- End Blog Thumb -->
								</div>
							</div><!--/end row-->
						</div>
					</div>
					<!-- End Tab Content -->
				</div>
				<!-- End Tab v4 -->

				<!-- Blog Carousel Heading -->
				<div class="blog-cars-heading">
					<h2>Breaking News</h2>
					<div class="owl-navigation">
						<div class="customNavigation">
							<a class="owl-btn prev-v3"><i class="fa fa-angle-left"></i></a>
							<a class="owl-btn next-v3"><i class="fa fa-angle-right"></i></a>
						</div>
					</div><!--/navigation-->
				</div>
				<!-- End Blog Carousel Heading -->

				<!-- Blog Carousel -->
				<div class="blog-carousel margin-bottom-50">
					<!-- Blog Grid -->
					<?php
                        foreach ($category_place_5 as $row) {
					?>
					<div class="item">
						<div class="row">
							<div class="col-sm-5 sm-margin-bottom-20">
								<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
							</div>
							<div class="col-sm-7">
								<div class="blog-grid">
									<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title'];?></a></h3>
									<ul class="blog-grid-info">
										<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
										<li><?php echo $row['date'];?></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<p><?php echo limit_chars($row['summary'], 400);?><p>
									<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
				<!-- End Blog Carousel -->

				<!-- Blog Grid -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Featured News</h2>
					<div class="row margin-bottom-50">
						<div class="col-sm-6 sm-margin-bottom-50">
							<!-- Blog Grid -->
							<?php 
                               
                                  foreach ($category_place_1 as $row) {
							?>
							<div class="blog-grid margin-bottom-40">
								<div class="carousel slide carousel-v2" id="portfolio-carousel">
									<ol class="carousel-indicators">
										<li class="rounded-x active" data-target="#portfolio-carousel" data-slide-to="0"></li>
										<li class="rounded-x" data-target="#portfolio-carousel" data-slide-to="1"></li>
									</ol>
									<div class="carousel-inner">
										<div class="item active">
											<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										</div>
										<div class="item">
											<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										</div>
									</div>
								</div>
								<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title'];?></a></h3>
								<ul class="blog-grid-info">
									<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
									<li><?php echo $row['date'];?></</li>
									<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
								</ul>
								<p><?php echo limit_chars($row['summary'], 200);?></p>
								<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
							</div>
							<!-- End Blog Grid -->

							<!-- Blog Thumb v3 -->
							<div class="blog-thumb-v3">
								<small><a href="#">Evan Bartlett</a></small>
								<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
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
							<!-- End Blog Thumb v3 -->
							<?php
                             }
							?>
						</div>

						<div class="col-sm-6">
							<!-- Blog Grid -->
							<?php 
                               
                                  foreach ($category_place_1 as $row) {
							?>
							<div class="blog-grid margin-bottom-40">
								<div class="carousel slide carousel-v2" id="portfolio-carousel">
									<ol class="carousel-indicators">
										<li class="rounded-x active" data-target="#portfolio-carousel" data-slide-to="0"></li>
										<li class="rounded-x" data-target="#portfolio-carousel" data-slide-to="1"></li>
									</ol>
									<div class="carousel-inner">
										<div class="item active">
											<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										</div>
										<div class="item">
											<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										</div>
									</div>
								</div>
								<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo $row['title'];?></a></h3>
								<ul class="blog-grid-info">
									<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
									<li><?php echo $row['date'];?></</li>
									<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
								</ul>
								<p><?php echo limit_chars($row['summary'], 200);?></p>
								<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
							</div>
							
							<!-- End Blog Thumb v3 -->
							<?php
                             }
							?>
							<!-- End Blog Grid -->

							<div class="blog-thumb-v3">
								<small><a href="#">John Rentoul</a></small>
								<h3><a href="#">Cameron's silence on defence is shameful</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small><a href="#">Richard Garner</a></small>
								<h3><a href="#">Controversial plan to test new primary school pupils infuriates teachers</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small><a href="#">Alex Amell</a></small>
								<h3><a href="#">Fashion's first selfies: It was a 16th-century German accountant who started the trend for style blogging</a></h3>
							</div>
						</div>
					</div><!--/end row-->
				</div>
				<!-- End Blog Grid -->

				<!-- Blog Thumb v4 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Weekly News</h2>
					<div class="row margin-bottom-50">
						<?php
                        foreach ($category_place_4 as $row) {
					    ?>

						<div class="col-sm-3 col-xs-6 sm-margin-bottom-30">
							<!-- Blog Thumb v4 -->
							<div class="blog-thumb-v4">
								<img class="img-responsive margin-bottom-10" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
								<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
							</div>
							<!-- End Blog Thumb v4 -->
						</div>

					<?php
                        }
					?>

					</div><!--/end row-->
				</div>
				<!-- End Blog Thumb v4 -->

				<!-- Tab v4 -->
				<div class="tab-v4 margin-bottom-50">
					<!-- Tab Heading -->
					<div class="tab-heading">
					<h2>Popular News</h2>
						<ul class="nav nav-tabs" role="tablist">
							<li class="home active">
								<a href="#tab-v4-b1" role="tab" data-toggle="tab">Food</a>
							</li>
							<li>
								<a href="#tab-v4-b2" role="tab" data-toggle="tab">Travel</a>
							</li>
							<li>
								<a href="#tab-v4-b3" role="tab" data-toggle="tab">Sport</a>
							</li>
						</ul>
					</div>
					<!-- End Tab Heading -->

					<!-- Tab Content -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-v4-b1">
							<div class="row">
								<div class="col-sm-7">
									<!-- Blog Grid -->
								<?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3>
                                        	<a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">
												<?php echo $row['title'];?>
                                            </a>
                                        </h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo limit_chars($row['summary'], 180);?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
                                    <?php } ?>
									<!-- End Blog Grid -->
								</div>

								<div class="col-sm-5">
									<!-- Blog Thumb v2 -->
									<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<!-- Blog Thumb -->
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
								
								</div>
							</div><!--/end row-->
						</div>
						<div class="tab-pane fade" id="tab-v4-b2">
							<div class="row">
								<div class="col-sm-7">
									<!-- Blog Grid -->
									<?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3>
                                        	<a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">
												<?php echo $row['title'];?>
                                            </a>
                                        </h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo $row['summary'];?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
                                    <?php } ?>
								</div>

								<div class="col-sm-5">
									<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<!-- Blog Thumb -->
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
								</div>
							</div><!--/end row-->
						</div>
						<div class="tab-pane fade" id="tab-v4-b3">
							<div class="row">
								<div class="col-sm-7">
									<?php
                                    	foreach ($category_place_1 as $row) {
									?>
									<!-- Blog Grid -->
									<div class="blog-grid sm-margin-bottom-40">
										<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
										<h3>
                                        	<a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">
												<?php echo $row['title'];?>
                                            </a>
                                        </h3>
										<ul class="blog-grid-info">
											<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
											<li><?php echo $row['date'];?></li>
											<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
										</ul>
										<p><?php echo $row['summary'];?></p>
										<a class="r-more" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>">Read More</a>
									</div>
									<!-- End Blog Grid -->
                                    <?php } ?>
								</div>

								<div class="col-sm-5">
								    
									<?php
                                    	foreach ($category_place_5 as $row) {
									?>
									<!-- Blog Thumb -->
									<div class="blog-thumb margin-bottom-20">
										<div class="blog-thumb-hover">
											<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
											<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
										</div>
										<div class="blog-thumb-desc">
											<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
											<ul class="blog-thumb-info">
												<li><?php echo $row['date'];?></li>
												<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
											</ul>
										</div>
									</div>
									<!-- End Blog Thumb -->
                                    <?php } ?>
								</div>
							</div><!--/end row-->
						</div>
					</div>
					<!-- End Tab Content -->
				</div>
				<!-- End Tab v4 -->

				<!-- Blog Grid -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Monthly News</h2>

					<!-- Blog Grid -->
					<div class="row margin-bottom-50">
					    <?
                             foreach ($category_place_5 as $row) {
					    ?>
						<div class="col-sm-6 sm-margin-bottom-50">
							<div class="blog-grid">
								<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
								<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'], 50);?></a></h3>
								<ul class="blog-grid-info">
									<li><?php echo $this->crud_model->get_field('reporter', $row['reporter_id'], 'name'); ?></li>
									<li><?php echo $row['date'];?></li>
									<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="blog-grid">
								<img class="img-responsive" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
								<h3><a href="blog_single.html">10 Most beautiful beaches</a></h3>
								<ul class="blog-grid-info">
									<li>Richard Garner</li>
									<li>Mar 6, 2015</li>
									<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
								</ul>
							</div>
						</div>
						<?
                             }
						?>
					</div>
					
				</div>
				<!-- End Blog Grid -->

				<!-- Pager v4
				<ul class="pager pager-v4 md-margin-bottom-50">
					<li class="previous"><a class="rounded-3x" href="#">&larr; Older</a></li>
					<li class="page-amount">1 of 7</li>
					<li class="next"><a class="rounded-3x" href="#">Newer &rarr;</a></li>
				</ul>
				End Pager v4 -->
			</div>
			<!-- End Main Content -->

			<!-- Right Sidebar -->
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
                       foreach ($category_place_4 as $row) {
                    ?>
					<div class="blog-thumb blog-thumb-circle margin-bottom-15">
						<div class="blog-thumb-hover">
							<img class="rounded-x" src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
							<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-link"></i></a>
						</div>
						<div class="blog-thumb-desc">
							<h3><a href="blog_single.html"><?php echo limit_chars($row['title'], 50);?></a></h3>
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

				<!-- Tab v5 -->
				<div class="tab-v5 margin-bottom-50">
					<ul class="nav nav-tabs" role="tablist">
						<li class="home active">
							<a href="#tab-v5-a1" role="tab" data-toggle="tab">Hi-Tech</a>
						</li>
						<li>
							<a href="#tab-v5-a2" role="tab" data-toggle="tab">Other News</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane in active" id="tab-v5-a1">
							<!-- Blog Grid -->
							
							<!-- End Blog Grid -->
                            <?php
                                 foreach ($category_place_3 as $row) {
                               
						   ?>
							<!-- Blog Thumb -->
							<div class="blog-thumb margin-bottom-20">
								<div class="blog-thumb-hover">
									<img src="<?php echo base_url();  ?>uploads/news_image/news_<?php echo $row['news_id']; ?>_thumb.jpg" alt="">
									<a class="hover-grad" href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><i class="fa fa-video-camera"></i></a>
								</div>
								<div class="blog-thumb-desc">
									<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'],55)?></a></h3>
								</div>
							</div>
							<!-- End Blog Thumb -->

							<?php
                              }
							?>
							<!-- End Blog Thumb -->
						</div>
						<div class="tab-pane" id="tab-v5-a2">
						   <?php
                                 foreach ($category_place_5 as $row) {
                               
						   ?>
							<div class="blog-thumb-v3">
								<small><?php echo $row['date']?></small>
								<h3><a href="<?php echo $this->crud_model->news_link($row['news_id']); ?>"><?php echo limit_chars($row['title'],50);?></a></h3>
							</div>
							<?php
                               }
						   ?>

							
						</div>
					</div>
				</div>
				<!-- End Tab v5 -->

				<!-- Tags v3 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Tags</h2>

					<ul class="list-inline tags-v3">
						<li><a class="rounded-3x" href="#">Web Design</a></li>
						<li><a class="rounded-3x" href="#">Economy</a></li>
						<li><a class="rounded-3x" href="#">Sport</a></li>
						<li><a class="rounded-3x" href="#">Marketing</a></li>
						<li><a class="rounded-3x" href="#">Books</a></li>
						<li><a class="rounded-3x" href="#">Elections</a></li>
						<li><a class="rounded-3x" href="#">Flickr</a></li>
						<li><a class="rounded-3x" href="#">Politics</a></li>
						<li><a class="rounded-3x" href="#">Marketing</a></li>
						<li><a class="rounded-3x" href="#">Web Hosting</a></li>
						<li><a class="rounded-3x" href="#">Art &amp; Design</a></li>
					</ul>
				</div>
				<!-- End Tags v3 -->

				<!-- Blog Carousel Heading -->
				<div class="blog-cars-heading">
					<h2>Popular Video</h2>
					<div class="owl-navigation">
						<div class="customNavigation">
							<a class="owl-btn prev-v4"><i class="fa fa-angle-left"></i></a>
							<a class="owl-btn next-v4"><i class="fa fa-angle-right"></i></a>
						</div>
					</div><!--/navigation-->
				</div>
				<!-- End Blog Carousel Heading -->

				<!-- Blog Carousel -->
				<div class="blog-carousel-v2 margin-bottom-50">
					<!-- Blog Video -->
					<div class="item">
						<div class="blog-video">
							<img class="full-width" src="<?php echo base_url();?>template/front/img/video/img-video2.jpg" alt="">
							<span class="category-badge">Holiday</span>
							<span class="date-badge">Mar 6, 2015</span>
							<div class="center-wrap">
								<span class="center-alignCenter">
									<span class="center-body">
										<a href="https://player.vimeo.com/video/74197060" class="fbox-modal fancybox.iframe" title="At World's end">
											<span><img class="video-play-btn" src="<?php echo base_url();?>template/front/img/icons/video-play.png" alt=""></span>
										</a>
									</span>
								</span>
							</div><!--/end center wrap-->
							<h4><a href="#">Most Beautiful Places</a></h4>
						</div>
					</div>
					<!-- End Blog Video -->

					<!-- Blog Video -->
					<div class="item">
						<div class="blog-video">
							<img class="full-width" src="<?php echo base_url();?>template/front/img/video/img-video1.jpg" alt="">
							<span class="category-badge">Science</span>
							<span class="date-badge">Mar 6, 2015</span>
							<div class="center-wrap">
								<span class="center-alignCenter">
									<span class="center-body">
										<a href="http://player.vimeo.com/video/47911018" class="fbox-modal fancybox.iframe" title="Existance a timeplase project">
											<span><img class="video-play-btn" src="<?php echo base_url();?>template/front/img/icons/video-play.png" alt=""></span>
										</a>
									</span>
								</span>
							</div><!--/end center wrap-->
							<h4><a href="#">Existance a timeplase project</a></h4>
						</div>
					</div>
					<!-- End Blog Video -->

					<!-- Blog Video -->
					<div class="item">
						<div class="blog-video">
							<img class="full-width" src="<?php echo base_url();?>template/front/img/video/img-video3.jpg" alt="">
							<span class="category-badge">Travel</span>
							<span class="date-badge">Mar 6, 2015</span>
							<div class="center-wrap">
								<span class="center-alignCenter">
									<span class="center-body">
										<a href="http://player.vimeo.com/video/58226214" class="fbox-modal fancybox.iframe" title="Who are the 10 greatest living athletes in the UK?">
											<span><img class="video-play-btn" src="<?php echo base_url();?>template/front/img/icons/video-play.png" alt=""></span>
										</a>
									</span>
								</span>
							</div><!--/end center wrap-->
							<h4><a href="#">Who are the 10 greatest living athletes in the UK?</a></h4>
						</div>
					</div>
					<!-- End Blog Video -->
				</div>
				<!-- End Blog Carousel -->

				<!-- Twitter Posts -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Twitter Posts</h2>

					<ul class="twitter-posts">
						<li>
							<img class="rounded-x" src="<?php echo base_url();?>template/front/img/thumb/img-thumb5.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Dr.Cafee</strong>
								<span><a href="#">@DrCafee</a></span>
								<span>4h</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="<?php echo base_url();?>template/front/img/thumb/img-thumb4.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Jessi</strong>
								<span><a href="#">@Jessi</a></span>
								<span>5m</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="<?php echo base_url();?>template/front/img/thumb/img-thumb6.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>PhotoStudio</strong>
								<span><a href="#">@PS</a></span>
								<span>7h</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="<?php echo base_url();?>template/front/img/thumb/img-thumb7.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Wrapbootstrap</strong>
								<span><a href="#">@Wrapbootstrap</a></span>
								<span>25m</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- End Twitter Posts -->
			</div>
			<!-- End Right Sidebar -->
		</div>
	</div>