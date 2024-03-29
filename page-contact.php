<?php get_header(); ?>

<div class="outer-container">
    <div class="single-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="/">Home</a></li>
                        
                        <li>Contact</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->

                <div class="col-12 col-lg-8">
                    <div class="content-area">
                        <header class="entry-header">                            

                            <h1><?php echo get_the_title(); ?></h1>
                           
                        </header><!-- .entry-header -->
                        <div class="contact">
                                <?php echo do_shortcode('[contact-form-7 id="192" title="Contact form"]'); ?>
                        </div>
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .single-post -->
</div><!-- .outer-container -->
<?php get_footer(); ?>