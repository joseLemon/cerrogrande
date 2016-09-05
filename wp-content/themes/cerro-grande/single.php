<?php get_header(); ?>
<div class="wrapper single">
    <article class="light-spacing post-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-8">
                    <?php
                    if ( have_posts() ) {
                        the_post();
                    } ?>
                    <div class="img-container">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Post Image" class="post-img">
                    </div>

                    <h1 class="heading text-center"><?php echo get_the_title(); ?></h1>
                    <p class="post-date text-center">
                        <strong><?php echo get_the_date(); ?></strong>
                    </p>
                    <p class="post-content text-justify">
                        <?php echo the_content(); ?>
                    </p>
                    <?php
                    query_posts( 'showposts=10' );
                    if ( have_posts() ) {
                        while ( have_posts() ) { 
                            the_post();
                    ?>
                    <?php
                        }
                    }
                    wp_reset_query();
                    ?>
                    <nav class="post-entries" id="post-entries">
                        <div class="row no-margin">
                            <div class="nav-posts nav-prev fl col-sm-6"><?php previous_post_link( '%link', '<span class="meta-nav">&larr; Post Anterior</span>' ); ?></div>
                            <div class="nav-posts nav-next fr col-sm-6 text-right"><?php next_post_link( '%link', '<span class="meta-nav">Post Siguiente &rarr;</span>' ); ?></div>
                        </div>
                    </nav><!-- #post-entries -->
                </div>
                <div class="col-lg-3 col-sm-4 feed">
                    <?php get_sidebar('blog'); ?>
                </div>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>