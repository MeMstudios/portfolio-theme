<?php get_header(); ?>

<div class="outer-container">
    <div class="single-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="/">Home</a></li>
                        
                        <li>Details</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->
            <header class="entry-header">

                <h1><?php echo get_the_title(); ?></h1>

                
            </header><!-- .entry-header -->
            <div class="row">
                <div class="col-12">
                    <div class="featured-img">
                        
                            <?php echo get_the_post_thumbnail($post, array(350,350)); ?>
                        
                    </div><!-- .content-area -->
                </div><!-- .col -->

                <div class="col-12 col-lg-8">
                    <div class="content-area">
                        

                        <div class="entry-content">
                            <h4>Description: </h4>
                            <p><?php the_field('description', $post->ID); ?></p>
                            <?php echo $post->post_content; ?>
                        </div><!-- .entry-content -->
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .single-post -->
</div><!-- .outer-container -->
<?php get_footer(); ?>