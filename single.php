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

                <aside class="col-12 col-lg-3 offset-lg-1">
                    <div class="entry-meta">
                        <div class="posted-date">
                            <label>Date</label>

                            <span class="date-format"><a href="#">December 20, 2018</a></span>
                        </div><!-- .posted-date -->

                        <div class="post-category">
                            <label>Category</label>
                            <span><a href="#">Photography</a></span>
                        </div><!-- .post-category -->

                        <div class="posted-tags">
                            <label>tags</label>
                            <span><a href="#">Photography</a>, <a href="#">nature</a>, <a href="#">hat</a> </span>
                        </div><!-- .entry-meta -->

                        <div class="post-share">
                            <label>share</label>
                            <ul>
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- .post-share -->
                    </div><!-- .entry-meta -->
                </aside><!-- .col-md-3 -->

                
                   
               
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .single-post -->
</div><!-- .outer-container -->
<?php get_footer(); ?>
