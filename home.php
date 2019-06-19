<?php 
    get_header();
    $args = array (
        'category_name' => 'project-management',
        'numberposts' => 2,
        'order' => 'ASC'
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
                <div class="portfolio-content description blue">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/head.png" alt="Project Management">
                    </figure>
                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            
                            <div class="show">
                                <h3><a href="#">Project Management</a></h3>

                                <ul class="flex flex-wrap justify-content-center">
                                    <li><a href="#">Agile</a> /</li>
                                    <li><a href="#">Process</a> /</li>
                                    <li><a href="#">Planning</a></li>
                                </ul>
                            </div>
                            <h4 class="flex flex-wrap justify-content-center hidden-description">
                                Understanding systems and processes brings a fresh perspective to every project.
                            </h4>
                        </div><!-- .entry-content -->                    
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content description yellow">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/big-head-sq.png" alt="Development">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <div class="show">
                            <h3><a href="#">Development</a></h3>

                            <ul class="flex flex-wrap justify-content-center">
                                <li><a href="#">Software Design</a> /</li>
                                <li><a href="#">REST API</a> /</li>
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </div>
                        <h4 class="flex flex-wrap justify-content-center hidden-description">
                                Solving tough problems and writing efficient code.
                        </h4>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content description">
                    <figure class="green">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloud-head.png" alt="DevOps">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <div class="show">
                            <h3><a href="#">DevOps</a></h3>

                            <ul class="flex flex-wrap justify-content-center">
                                <li><a href="#">Servers</a> /</li>
                                <li><a href="#">Automation</a></li>
                            </ul>
                        </div>
                        <h4 class="flex flex-wrap justify-content-center hidden-description">
                                Troubleshooting servers. Automating deployment.
                        </h4>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content description">
                    <figure class="purple">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/color-head.png" alt="Music">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <div class="show">
                            <h3><a href="#">Personal Projects</a></h3>

                            <ul class="flex flex-wrap justify-content-center">
                                <li><a href="#">Research</a> /</li>
                                <li><a href="#">Music</a> /</li>
                                <li><a href="#">GoLang</a></li>
                            </ul>
                        </div>
                        <h4 class="flex flex-wrap justify-content-center hidden-description">
                                Emerging technologies. Music Production. GoLang.
                        </h4>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->
            <?php 
            // Posts Loop
            for($i=0; $i < sizeof($pm_posts); $i++) { 
                for($j=0; $j < 4; $j++) {
                    //Change the posts category and color for each column
                    if($j==0) {
                        $posts = $pm_posts;
                        $color = "blue";
                    }
                    elseif($j==1) {
                        $posts = $dev_posts;
                        $color = "yellow";
                    }
                    elseif($j==2) {
                        $posts = $devops_posts;
                        $color = "green";
                    }
                    else {
                        $posts = $music_posts;
                        $color = "purple";
                    }
                    $title =  $posts[$i]->post_title;
                    $pic = get_the_post_thumbnail($posts[$i], 'full');
                    $link = get_field("link_0", $posts[$i]->ID);
                    $link_title = get_field("link_title_0", $posts[$i]->ID);
                    $description = get_field("description", $posts[$i]->ID);
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 no-padding">
                        <div class="portfolio-content description">
                            <figure class=<?php echo $color ?>>
                                <?php echo $pic ?>
                            </figure>

                            <div class="entry-content flex flex-column align-items-center justify-content-center">
                                <div class="show">
                                    <h3><a href='#'><?php echo $title ?></a></h3>

                                    <ul class="flex flex-wrap justify-content-center">                                    
                                        <li><a class="description-link" target="_blank" href=<?php echo $link ?>><?php echo $link_title?></a><?php if($link_title != '') { echo " /"; } ?></li>
                                        <li><a href="#">Description</a></li>
                                    </ul>
                                </div>
                                <div class="flex flex-wrap justify-content-center hidden-description">
                                    <h4>
                                        <?php echo $title ?>
                                    </h4>
                                    <p>
                                        <?php echo $description ?>
                                    </p>
                                    <ul class="flex flex-wrap justify-content-center">                                    
                                        <li><a class="description-link" target="_blank" href=<?php echo $link ?>><?php echo $link_title?></a></li>
                                    </ul>
                                </div>
                            </div><!-- .entry-content -->
                        </div><!-- .portfolio-content -->
                    </div><!-- .col -->
                <?php
                }
                ?>
               
        <?php
        } //End Posts loop
    get_footer(); ?>