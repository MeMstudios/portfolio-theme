<?php 
    get_header();
    $args = array (
        'category_name' => 'project-management',
        'numberposts' => 2
    ); 
    $pm_posts = get_posts($args);
    $args['category_name'] = 'development';
    $dev_posts = get_posts($args);
    $args['category_name'] = 'devops';
    $devops_posts = get_posts($args);
    $args['category_name'] = 'music';
    $music_posts = get_posts($args);
?>
<div class="outer-container home-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure class="blue">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/head.png" alt="Project Management">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Project Management</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Clients</a> /</li>
                            <li><a href="#">Developers</a></li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure class="yellow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/big-head-sq.png" alt="Development">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Development</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Frontend</a> /</li>
                            <li><a href="#">Backend</a></li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure class="green">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloud-head.png" alt="DevOps">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">DevOps</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Servers</a> /</li>
                            <li><a href="#">Automation</a></li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure class="purple">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/color-head.png" alt="Music">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Music</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Keyboards</a> /</li>
                            <li><a href="#">Guitar</a></li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->
            <?php 
            // Posts Loop
            for($i=0; $i < sizeof($pm_posts); $i++) { ?>
                <div class="col-12 col-md-6 col-lg-3 no-padding">
                    <div class="portfolio-content">
                        <figure class="blue">
                            <?php echo get_the_post_thumbnail($pm_posts[$i], 'full'); ?>
                        </figure>

                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <div class="show">
                                <h3><a class="description" href='#'><?php echo $pm_posts[$i]->post_title ?></a></h3>

                                <ul class="flex flex-wrap justify-content-center">                                    
                                    <li><a target="_blank" href=<?php echo get_field("link_0", $pm_posts[$i]->ID)?>><?php echo get_field("link_title_0", $pm_posts[$i]->ID)?></a> /</li>
                                    <li><a class="description" href="#">Description</a></li>
                                </ul>
                            </div>
                            <p class="flex flex-wrap justify-content-center hidden-description">
                                <?php echo get_field("description", $pm_posts[$i]->ID); ?>
                            </p>
                        </div><!-- .entry-content -->
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-3 no-padding">
                    <div class="portfolio-content">
                        <figure class="yellow">
                            <?php echo get_the_post_thumbnail($dev_posts[$i], 'full'); ?>
                        </figure>

                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <div class="show">
                                <h3><a class='description' href='#'><?php echo $dev_posts[$i]->post_title ?></a></h3>

                                <ul class="flex flex-wrap justify-content-center">                                    
                                    <li><a target="_blank" href=<?php echo get_field("link_0", $dev_posts[$i]->ID)?>><?php echo get_field("link_title_0", $dev_posts[$i]->ID)?></a> /</li>
                                    <li><a class="description" href="#">Description</a></li>
                                </ul>
                            </div>
                            <p class="flex flex-wrap justify-content-center hidden-description">
                                <?php echo get_field("description", $dev_posts[$i]->ID); ?>                                    
                            </p>
                        </div><!-- .entry-content -->
                        
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-3 no-padding">
                    <div class="portfolio-content">
                        <figure class="green">
                            <?php echo get_the_post_thumbnail($devops_posts[$i], 'full'); ?>
                        </figure>

                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <div class="show">
                                <h3><a class='description' href='#'><?php echo $devops_posts[$i]->post_title ?></a></h3>

                                <ul class="flex flex-wrap justify-content-center">                                    
                                    <li><a target="_blank" href=<?php echo get_field("link_0", $devops_posts[$i]->ID)?>><?php echo get_field("link_title_0", $devops_posts[$i]->ID)?></a> /</li>
                                    <li><a class="description" href="#">Description</a></li>
                                </ul>
                            </div>
                            <p class="flex flex-wrap justify-content-center hidden-description">
                                <?php echo get_field("description", $devops_posts[$i]->ID); ?>                                    
                            </p>
                        </div><!-- .entry-content -->
                        
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-3 no-padding">
                    <div class="portfolio-content">
                        <figure class="purple">
                            <?php echo get_the_post_thumbnail($music_posts[$i], 'full'); ?>
                        </figure>

                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <div class="show">
                                <h3><a class='description' href='#'><?php echo $music_posts[$i]->post_title ?></a></h3>

                                <ul class="flex flex-wrap justify-content-center">                                    
                                    <li><a target="_blank" href=<?php echo get_field("link_0", $music_posts[$i]->ID)?>><?php echo get_field("link_title_0", $music_posts[$i]->ID)?></a> /</li>
                                    <li><a class="description" href="#">Description</a></li>
                                </ul>
                            </div>
                            <p class="flex flex-wrap justify-content-center hidden-description">
                                <?php echo get_field("description", $music_posts[$i]->ID); ?>                                    
                            </p>
                        </div><!-- .entry-content -->
                        
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
        <?php
        } //End Posts loop
    get_footer(); ?>