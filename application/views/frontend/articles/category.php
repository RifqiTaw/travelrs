            <section class="post-content-area">
				<div class="container">
					<div class="row">
						<div style="margin-top:50px;" class="col-lg-8 posts-list">
                            <?php if(empty($data)) { ?>
                                <div class="no-results td-pb-padding-side"><h2>No posts to display</h2></div>                                                                    
                            <?php } else { ?>
                            <?php for($row=0; $row<4; $row++) { 
                                $d = $data[$row];
                            ?>
                            <div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="<?= y_url_cat($d->cat_id, $d->cat_url) ?>"><?= $d->cat_name ?></a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">Travel CRS &nbsp;<span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><?= y_date_text($d->post_date) ?> &nbsp;<span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><?= $d->post_views ?> &nbsp;<span class="lnr lnr-eye"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="assets/traveltemplate/img/blog/feature-img1.jpg" alt="">
									</div>
									<a class="posts-title" href="<?= y_url_read($d->post_id, $d->post_url) ?>" title="<?= $d->post_title_id ?>"><h3><?= $d->post_title_id ?></h3></a>
									<p class="excert">
                                    <?= !empty($d->post_excerpt_id) ? y_ellipsis($d->post_excerpt_id, 100) : y_ellipsis($d->post_content_id, 100) ?> [...]
                                    </p>
									<a href="blog-single.html" class="primary-btn">View More</a>
								</div>
							</div>
                            <?php } } ?>
                            <div style="margin-top:-65px;"></div>													 
		                    <!-- <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="" class="page-link">01</a></li>
                                    <li class="page-item"><a href="" class="page-link">02</a></li>
                                    <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav> -->
                            
                        <?= $this->paging->show(); ?>

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