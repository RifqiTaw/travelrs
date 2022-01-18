            <section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="<?= y_image($data->post_img) ?>" alt="">
									</div>									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
                                    <?php foreach($cats as $cat) {?>
                                        <li><a href="<?= y_url_cat($cat->cat_id, $cat->cat_url) ?>"> <?= $cat->cat_name ?> </a></li>
                                    <?php } ?>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Travel CRS</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href=""><?= y_date_text($data->post_date) ?></a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#"><?= $data->post_views ?> Views</a> <span class="lnr lnr-eye"></span></p>
										<ul class="social-links col-lg-12 col-md-12 col-6">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-github"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
										</ul>																				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20"><?= $data->post_title_id ?></h3>
                                    <?= $data->post_content_id ?>
								</div>
								<div class="col-lg-12">
								</div>
							</div>
							
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Destination</h4>
									<div class="popular-post-list">
                                    <?php for($col=0; $col<=4; $col++) {
                                            if(isset($popular[$col]) && !empty($popular[$col])) {
                                                $b = $popular[$col]; ?>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="assets/traveltemplate/img/blog/pp4.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html" title="<?= $b->post_title_id ?>"><h6><?= $b->post_title_id ?></h6></a>
											</div>
										</div>
                                    <?php
                                            } }
                                    ?>
									</div>
								</div>
								
                                <?php $cats = $this->db->query("SELECT * FROM ms_category ORDER BY cat_name ASC")->result(); ?>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Post Catgories</h4>
									<ul class="cat-list">                                
                                        <?php foreach($cats as $cat) { ?>
										<li>
											<a href="<?= y_url_cat($cat->cat_id, $cat->cat_url) ?>" class="d-flex justify-content-between">
												<p><?= $cat->cat_name ?></p>
												<p><?= $cat->cat_count ?></p>
											</a>
										</li>
                                        <?php } ?>
                                    </ul>
								</div>	
								
																
							</div>
						</div>
					</div>
				</div>	
			</section>