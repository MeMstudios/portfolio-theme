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

            <div class="row">
                <div class="col-12">
                    <div class="featured-img">
                        
                            <?php echo get_the_post_thumbnail($post, array(420,420)); ?>
                        
                    </div><!-- .content-area -->
                </div><!-- .col -->

                <div class="col-12 col-lg-8">
                    <div class="content-area">
                        <header class="entry-header">
                            <div class="post-meta">
                                <a href="/">Portfolio</a>
                            </div><!-- .meta-post -->

                            <h1><?php echo get_the_title(); ?></h1>

                            
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php the_field('description', $post->ID); ?></p>
                        </div><!-- .entry-content -->
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .single-post -->
</div><!-- .outer-container -->
<?php get_footer(); ?>