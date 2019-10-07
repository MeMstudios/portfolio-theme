<?php 
    get_header();
    $args = array (
        'category_name' => 'project-management',
        'numberposts' => 3,
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
                <div id="pm-header" class="portfolio-content">
                    <figure class="blue">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/head.jpg" alt="Project Management">
                    </figure>
                        <div id="pm-head" class="entry-content flex flex-column align-items-center justify-content-center">                            
                                
                            <h3><a id="pm-link" href="#">Project Management</a></h3>

                            <ul class="flex flex-wrap justify-content-center">
                                <li>Agile /</li>
                                <li>Process /</li>
                                <li>Planning</li>
                            </ul>
                        </div><!-- .entry-content -->                    
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div id="dev-header" class="portfolio-content">
                    <figure class="yellow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/big-head-sq.jpg" alt="Development">
                    </figure>

                    <div id="dev-head" class="entry-content flex flex-column align-items-center justify-content-center">
                        
                        <h3><a id="dev-link" href="#">Development</a></h3>

                        <ul class="flex flex-wrap justify-content-center">                            
                            <li>PHP /</li>
                            <li>APIs /</li>
                            <li>JavaScript Frameworks</li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div id="devops-header" class="portfolio-content">
                    <figure class="green">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloud-head.jpg" alt="DevOps">
                    </figure>

                    <div id="devops-head" class="entry-content flex flex-column align-items-center justify-content-center">
                     
                        <h3><a id="devops-link" href="#">DevOps</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>Servers /</li>
                            <li>Automation /</li>
                            <li>CI/CD</li>
                        </ul>
                    </div><!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div id="music-header" class="portfolio-content">
                    <figure class="purple">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/color-head.jpg" alt="Music">
                    </figure>

                    <div id="music-head" class="entry-content flex flex-column align-items-center justify-content-center">
                        
                        <h3><a id="music-link" href="#">Personal Projects</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li>Research /</li>
                            <li>Music /</li>
                            <li>GoLang</li>
                        </ul>
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
                        $id = "pm";
                    }
                    elseif($j==1) {
                        $posts = $dev_posts;
                        $color = "yellow";
                        $id = "dev";
                    }
                    elseif($j==2) {
                        $posts = $devops_posts;
                        $color = "green";
                        $id = "devops";
                    }
                    else {
                        $posts = $music_posts;
                        $color = "purple";
                        $id = "music";
                    }
                    $title =  $posts[$i]->post_title;
                    $pic = get_the_post_thumbnail($posts[$i], 'full');
                    $link = get_field("link", $posts[$i]->ID);
                    $link_title = get_field("link_title", $posts[$i]->ID);
                    $description = get_field("description", $posts[$i]->ID);
                    $description_title = get_field("description_title", $posts[$i]->ID)
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 no-padding">
                        <div id=<?php echo $id ?> class="portfolio-content description">
                            <figure class=<?php echo $color ?>>
                                <?php echo $pic ?>
                            </figure>

                            <div class="entry-content flex flex-column align-items-center justify-content-center">
                                <div class="show">
                                    <h3><a href='#'><?php echo $title ?></a></h3>

                                    <ul class="flex flex-wrap justify-content-center">

                                        <li><a href="#"><?php echo $description_title ?><?php if($link_title != '') { echo " /"; } ?></a></li>
                                        <li><a class="description-link" target="_blank" href=<?php echo $link ?>><?php echo $link_title?></a></li>
                                        
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
                                        <?php if($link_title == '') { ?>
                                            <li><a href="#">Back</a></li>
                                        <?php } ?>
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