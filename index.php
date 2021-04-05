<?php get_header(); ?>
<section class="blog">
                    <h2 class="display-6 mb-5">All Blog Posts:</h2>
                <?php 

                while(have_posts()) {
                    the_post();
                
                
                ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="card mb-3">
                                        <a href="<?php the_permalink(); ?>"></a>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"></a>
                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                                <div class="card-meta">
                                                Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in 
                                                <a href="#"><?php echo get_the_category_list(', ') ?></a>
                                                </div>
                                                <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                        wp_reset_query(); 
                        
                    ?>
                    </section>
                    <div class="pagination">
                    <?php echo paginate_links(); ?>
                    </div>

<?php get_footer(); ?>