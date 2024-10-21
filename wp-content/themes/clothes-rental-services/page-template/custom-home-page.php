<?php
/**
 * Template Name: Custom Home
 */
get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'luzuk_clothes_rental_services_above_slider' ); ?>

	<?php if( get_theme_mod('luzuk_clothes_rental_services_slider_hide_show') != ''){ ?>
	<section id="slider">
		  <div class="slider-wave1">
        <svg width="690.169" height="217.159" viewBox="0 0 690.169 217.159">
          <defs>
            <filter id="Path_3" x="0" y="0" width="690.169" height="217.159" filterUnits="userSpaceOnUse">
              <feOffset dy="1" input="SourceAlpha"/>
              <feGaussianBlur stdDeviation="2.5" result="blur"/>
              <feFlood flood-opacity="0.149"/>
              <feComposite operator="in" in2="blur"/>
              <feComposite in="SourceGraphic"/>
            </filter>
          </defs>
          <g id="line" transform="translate(7.5 -229.038)">
            <g transform="matrix(1, 0, 0, 1, -7.5, 229.04)" filter="url(#Path_3)">
              <path id="Path_3-2" data-name="Path 3" d="M0,316.007s47.214,50.954,130.89,37.4,60.522-79.01,147.929-74.584,62.446-69.307,166.207-50.7c48.145,8.635,71.38,9.783,90.733,7.41,8.2-1.145,48.393-6.61,80.19-25.955,33.8-20.562,59.22-55.555,59.22-55.555L.148,153.538Z" transform="translate(7.5 -147.04)" fill="#272932"/>
            </g>
            <path id="Path_4" data-name="Path 4" d="M-3.5-9.412S42.012,54.571,99.5,45.7,151.552,4.783,210.965-14.53s60.875-4.585,101.653-19.386,39.223-34.223,77.732-45.429S481.9-66.413,547.18-74.854c30.486-3.942,57.056-17.11,76.87-30.127,22.289-14.643,29.27-28.646,29.27-28.646" transform="translate(3.5 369.5)" fill="none" stroke="#707070" stroke-width="1" stroke-dasharray="7"/>
            <path id="Path_6" data-name="Path 6" d="M-18.636-16.858S35.1,42.722,92.589,33.852s40.165-32.6,99.578-51.917,51.735-.851,101.28-16.171S337.5-67.287,376-78.492,481.9-66.413,547.18-74.854,638.673-122.9,638.673-122.9" transform="translate(18.5 358.5)" fill="none" stroke="#707070" stroke-width="1" opacity="0.3"/>
            <path id="Path_7" data-name="Path 7" d="M-18.364-48.055S42.012,3.183,99.5-3.119s52.052-29.07,111.465-42.791,60.875-3.257,101.653-13.772S351.841-84,390.35-91.956s91.549,9.187,156.83,3.191S638.673-122.9,638.673-122.9" transform="translate(18.5 358.5)" fill="none" stroke="#707070" stroke-width="1" opacity="0.3"/>
            <path id="Path_8" data-name="Path 8" d="M.47-75.182s42.786,25.5,101.956,21.836S156-70.226,217.151-78.193s62.656-1.891,104.627-8,40.37-14.118,80.006-18.741S496.012-99.6,563.2-103.078s94.17-19.82,94.17-19.82" transform="translate(-0.199 358.5)" fill="none" stroke="#707070" stroke-width="1" opacity="0.3"/>
          </g>
        </svg>
    </div>
    <div class="slider-wave2">
        <svg width="414.986" height="266.804" viewBox="0 0 414.986 266.804">
            <defs>
                <filter id="Path_9" x="0" y="0" width="414.986" height="266.804" filterUnits="userSpaceOnUse">
                      <feOffset dy="-1" input="SourceAlpha"/>
                      <feGaussianBlur stdDeviation="2.5" result="blur"/>
                      <feFlood flood-opacity="0.149"/>
                      <feComposite operator="in" in2="blur"/>
                      <feComposite in="SourceGraphic"/>
                </filter>
          </defs>
          <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_9)">
            <path id="Path_9-2" data-name="Path 9" d="M0,614.4S22.761,689.551,77.45,723.94s95.057-1.063,141.306,28.02c43.852,27.575,29.634,59.189,63.382,80.41,35.227,22.151,117.281,33.193,117.281,33.193H0Z" transform="translate(8 -605.76)" fill="#272932" stroke="#707070" stroke-width="1"/>
          </g>
        </svg>
    </div>
		<!-- <div class="container"> -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			    <?php $luzuk_clothes_rental_services_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'luzuk_clothes_rental_services_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $luzuk_clothes_rental_services_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($luzuk_clothes_rental_services_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $luzuk_clothes_rental_services_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
								<div class="row">
									<div class="col-lg-6">
									<?php
										$luzuk_clothes_rental_services_slider_effect = get_theme_mod('luzuk_clothes_rental_services_slider_effect', '') 
									?>
										<div class="content <?php echo ($luzuk_clothes_rental_services_slider_effect); ?>">
											<h3><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_sliderheading')); ?></h3>
											<h2><?php the_title(); ?></h2>
											<?php 
												$luzuk_clothes_rental_services_slider_excerpt_length = get_theme_mod('luzuk_clothes_rental_services_slider_excerpt_length','15');
											
												if( $luzuk_clothes_rental_services_slider_excerpt_length != ''){?>
												<p class="mb-0"><?php $luzuk_clothes_rental_services_excerpt = get_the_excerpt(); echo esc_html( luzuk_clothes_rental_services_string_limit_words( $luzuk_clothes_rental_services_excerpt, esc_attr(get_theme_mod('luzuk_clothes_rental_services_slider_excerpt_length','15') ) )); ?></p>
											<?php } ?>
											<?php $slider_btntext = esc_html(get_theme_mod('luzuk_clothes_rental_services_sliderbtntext', 'SHOP NOW!')); ?>
											<a href="<?php echo esc_url(get_theme_mod('luzuk_clothes_rental_services_sliderbtnlink')) ?>" class="read-btn sbtn1">
												<span><?php echo $slider_btntext; ?></span>
											</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="slideimg">
											<?php
												// Check if the post has a thumbnail
												if (has_post_thumbnail()) {
													// If post has thumbnail, display it
													?>
													<img src="<?php echo esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
													<?php
												} else {
													// If post does not have thumbnail, display default image
													?>
													<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/abt1.jpg'); ?>" alt="Default Image" />
													<?php
												}
											?>
											
										</div>
									</div>

									<div class="offertext">
										<svg viewBox="0 0 200 200" width="223" height="223"> 
											<path id="textPath" d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0" transform="translate(100,100)" fill="none" stroke-width="0"></path>
											<g font-size="13.1px">
											<text text-anchor="start">
												<textPath class="slider-dscsvgtxt" xlink:href="#textPath" startOffset="0%"><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_slider_offerroundtext')); ?></textPath>
											</text>
											</g>
                                		</svg>
										<div class="slider-dscprice">
											<b><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_slider_offernumber')); ?><b>
											<span><?php esc_html_e( 'OFF','clothes-rental-services' );?></span>
										</div>
									</div>
								</div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
			    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
			      	<span class="screen-reader-text"><//?php esc_html_e( 'Prev','clothes-rental-services' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
			      	<span class="screen-reader-text"><//?php esc_html_e( 'Next','clothes-rental-services' );?></span>
			    </a> -->
				<ol class="carousel-indicators">
                    <?php for ($j = 0; $j < $i; $j++) : ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $j; ?>" class="<?php if ($j === 0) echo 'active'; ?>"></li>
                    <?php endfor; ?>
                </ol>
			</div>
		  	<div class="clearfix"></div>
		<!-- </div> -->
	</section>
	<?php }?>
	
	<?php do_action('luzuk_clothes_rental_services_below_slider'); ?>

		<section id="aboutus-section" class="py-5">
			<div class="container"> 
				<div class="row mr-0"> 
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="row mr-0">
							<div class="col-lg-6 col-md-6 col-sm-12 imgbx1">
								<div class="heading">
									<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusimg1heading')); ?></h2>
								</div>
								<div class="aboutus-image1">
									<?php 
										$luzuk_clothes_rental_services_aboutus_leftimage1 = get_theme_mod('luzuk_clothes_rental_services_aboutus_leftimage1');

										if(!empty($luzuk_clothes_rental_services_aboutus_leftimage1)){
											echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($luzuk_clothes_rental_services_aboutus_leftimage1).'" class="img-responsive secondry-bg-img" />';
										}else{
											echo '<img alt="luzuk_clothes_rental_services_aboutus_leftimage1" src="'.get_template_directory_uri().'/assets/images/abotimg.jpg" class="img-responsive" />';
										}
									?>
								</div>
								<div class="icon">
									<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusimg2twittericonlink')); ?>">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusimg2instaiconlink')); ?>">
										<i class="fab fa-instagram"></i>
									</a>

									<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusimg2fbiconlink')); ?>">
										<i class="fab fa-facebook-f"></i>
									</a>

								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 imgbx2">
								<div class="heading">
									<div class="imgtitle">
										<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusimg2heading')); ?></h2>
									</div>
								</div>
								<div class="aboutus-image2">
									<?php 
										$luzuk_clothes_rental_services_aboutus_leftimage2 = get_theme_mod('luzuk_clothes_rental_services_aboutus_leftimage2');

										if(!empty($luzuk_clothes_rental_services_aboutus_leftimage2)){
											echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($luzuk_clothes_rental_services_aboutus_leftimage2).'" class="img-responsive secondry-bg-img" />';
										}else{
											echo '<img alt="luzuk_clothes_rental_services_aboutus_leftimage2" src="'.get_template_directory_uri().'/assets/images/abt3.png" class="img-responsive" />';
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 r-abt">
						<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutustitle')); ?></h2>
						<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusdescription1')); ?></p>
						<div class="row mr-0 fdsa"> 
							<div class="fdsa">
								<li>
									<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutuslist1')); ?></p>
									<div class="clearfix"></div>
								</li>
								<li>
									<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutuslist2')); ?></p>
									<div class="clearfix"></div>
								</li>
								
								<li>
									<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutuslist3')); ?></p>
									<div class="clearfix"></div>
								</li>
								<li>
									<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutuslist4')); ?></p>
									<div class="clearfix"></div>
								</li>
							</div>			
						</div>	
						<div class="row box">
							<div class="col-lg-6 col-md-12 col-sm-12 box1 pl-0">
								<div class="row boxhead">
									<div class="col-lg-2 col-md-12 col-sm-12 box1">
										<i class="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox1icon', 'fas fa-truck')); ?>"></i>
									</div>
									<div class="col-lg-10 col-md-12 col-sm-12 box1 pd-0">
										<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox1heading')); ?></h2>
										<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox1description')); ?></p>
									</div>
								</div>						
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 box2 pl-0">
								<div class="row boxhead">
									<div class="col-lg-2 col-md-12 col-sm-12 box1">
										<i class="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox2icon', 'fas fa-truck')); ?>"></i>
									</div>
									<div class="col-lg-10 col-md-12 col-sm-12 box1 pd-0">
										<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox2heading')); ?></h2>
										<p><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutusbox2description')); ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
						<div class="read-btn">
							<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_aboutus_btnlink')); ?>" ><?php echo esc_html('Read More','clothes-rental-services'); ?>
							</a>
						</div>
					</div> 
				</div>
			</div>
		</section>

	<?php do_action('luzuk_clothes_rental_services_below_aboutus_section'); ?>

	<section id="newarrival-section">
		<div class="container"> 
			<div class="newarrival-head">
				<h2><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_newarrival_heading')); ?></h2>
				<h3><?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_newarrival_subheading')); ?></h3>
			</div>
			<div class="newarrivalus-post-wrap">
				<div class="newarrivalus-post-boxes row">
					<div class="row owl-carousel owl-theme">
						<?php
						if (function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')) {
							// Query to fetch new arrival products
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 4,
								'orderby' =>'date',
								'order' => 'DESC',
								'meta_query' => array(
									array(
										'key' => '_stock_status',
										'value' => 'instock'
									)
								)
							);
							$loop = new WP_Query($args);
							if ($loop->have_posts()) {
								while ($loop->have_posts()) : $loop->the_post(); global $product;
									?>
									<div class="col-lg-3 col-md-6 col-sm-12 item newarrivalbx wow zoomIn" data-wow-duration="1s">
										<div class="newarrivalus-single">
											<div class="newarrival-box"> 
												<div class="hi-icon">
													<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
														<?php if (has_post_thumbnail($loop->post->ID)) {
															echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
														} else {
															echo '<img src="' . get_template_directory_uri() . '/images/default.png" alt="featured products" />';
														} ?>
													</a>
												</div>
											</div> 
											<div class="btn-rentadress">
												<a class="cart-contents" href="<?php the_permalink(); ?>"><span><?php echo esc_html('Rent A Dress','clothes-rental-services'); ?></span></a>
											</div>
											<div class="pcontent">
												<a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">    
													<h3><?php the_title(); ?></h3>
												</a>
												<div class="Pr_bx">
													<?php echo esc_html('from','clothes-rental-services'); ?><span class="price"><?php echo $product->get_price_html(); ?></span>
												</div>
											</div>             
										</div>
									</div>
								<?php endwhile;
							} else {
								// No new arrival products found
								echo '<div class="item">';
								echo '<p>No new arrival products found.</p>';
								echo '</div>';
							}
						}
						?>
					</div> 
					<div class="btn">
						<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_services_newarrival_viewmorebtnlink')); ?>">
							<?php echo esc_html('VIEW MORE','clothes-rental-services'); ?>
						</a>
					</div> 
				</div> 
			</div>
		</div>
	</section>

	<?php do_action('luzuk_clothes_rental_services_below_newarrival_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>