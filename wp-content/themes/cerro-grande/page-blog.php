<?php get_header(); ?>
<div class="wrapper blog">
    <article class="light-spacing post-single">
        <div class="container">
            <h1 class="heading text-center">BLOG</h1>
            <?php
            // set up or arguments for our custom query
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 15,
                'paged' => $paged
            );
            // create a new instance of WP_Query
            $the_query = new WP_Query( $query_args );
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop 
            if($counter == 0 || $counter%3 == 0) {
                echo '<div class="row">';
            }
            ?>
            <div class="col-sm-4">
                <a href="<?php echo get_the_permalink(); ?>">
                    <div class="img-container">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Post Image" class="post-img">
                    </div>
                    <h3 class="text-center">
                        <?php
                        if ( strlen($post->post_title) > 50) { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . ' [...]'; 
                        } else {
                            the_title();
                        } 
                        ?>
                    </h3>
                </a>
            </div>
            <?php 
            $counter++;
            if( $counter%3 == 0 || $counter == $the_query->post_count ) {
                echo '</div>';
            }
            endwhile; 
            ?>

            <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
            <nav class="post-entries" id="post-entries">
                <div class="row no-margin">
                    <div class="nav-posts nav-prev col-sm-6 text-left">
                        <?php echo get_next_posts_link( '<span class="meta-nav">←</span> Entradas Anteriores', $the_query->max_num_pages ); // display older posts link ?>
                    </div>
                    <div class="nav-posts nav-next col-sm-6 text-right">
                        <?php echo get_previous_posts_link( 'Nuevas Entradas <span class="meta-nav">→</span>' ); // display newer posts link ?>
                    </div>
                </div>
            </nav>
            <?php } ?>

            <?php else: ?>
            <article>
                <h1>Sorry...</h1>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </article>
            <?php endif;?>
        </div>
    </article>
</div>
<?php get_footer(); ?>