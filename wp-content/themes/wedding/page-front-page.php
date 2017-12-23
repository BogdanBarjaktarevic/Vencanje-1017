<?php /* Template Name: Front Page Template */ 
	get_header();
?>

<!-- SLIDER -->
        <div id="outerslider">
        	<div class="container">
            <div class="row">
        	<div id="slidercontainer" class="twelve columns">
            
            	<section id="slider">
                    <div id="slideritems" class="flexslider">
                        <ul class="slides">
                            <?php // WP_Query arguments
                            $args = [
                                'post_type' => 'slider',
                                'order_by' => 'id',
                                'order' => 'asc'
                            ]; ?>

                            <?php

                            // The Query
                            $query = new WP_Query( $args );

                            // The Loop
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) :
                                     $query->the_post(); ?>
                                    <li>
                                    <?php the_post_thumbnail('slider-velicina'); ?>
                                    <div class="flex-caption">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    </li>
                                    <?php
                                endwhile;
                            endif;

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <img src=<?= get_template_directory_uri() . "/images/slider-shadow.png"?> alt="" />
                    </div>
                </section>
                
            </div>
            </div>
            </div>
        </div>
        <!-- END SLIDER -->

        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                               <h1> We're getting married August 18, 2013</h1>
                            </div>
                        
							<div id="featured" class="row">
                            	<div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon5.png"?> alt="" />
                                	<h3>Our Wedding Location</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon6.png"?> alt="" />
                                	<h3>Our Gift Registry</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon7.png"?> alt="" />
                                	<h3>Honeymoon Destinantion</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                            </div>

                                
                           	<div class="separator"></div>

                            <div class="row">
                                <?php // WP_Query arguments
                                $args = [
                                    'post_type' => 'about_us',
                                    'order_by' => 'id',
                                    'order' => 'asc'
                                ]; ?>

                                <?php

                                // The Query
                                    $query = new WP_Query( $args );
                                    if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) :
                                    $query->the_post(); ?>
                            	<div class="one_half columns">
                                	<div class="frame10 circle">
                                        <?php the_post_thumbnail('about_us') ?>
                                    </div>
                                    <div class="indentleft">
                                	<h3 class="title"><?php the_title () ?></h3>
                                    <p><?= get_first_x_words(get_the_content(),25) ?></p>
                                    <a href="<?= get_the_permalink () ?>" class="button"><?php the_field('button')?><span></span></a>
                                    </div>
                                </div>
                                    <?php endwhile; ?>
                                        <?php endif;
                                        wp_reset_postdata();
                                        ?>
                            </div>
                             
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php get_footer(); ?>