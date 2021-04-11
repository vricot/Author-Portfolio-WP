<?php get_header(); ?>

<?php
while(have_posts()) {
    the_post();
?>
<div class="container outer-post-container">
    <div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card m-5 post-card">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
            <div class="card-body post-container">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <div class="card-meta-blogpost">
                    Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in 
                    <a href="#"><?php echo get_the_category_list(', ') ?></a>
                </div>
                <p class="card-text"><?php the_content(); ?></p>
                <?php comment_form(); 
                
                $comments_number = get_comments_number();
                if($comments_number != 0) {

                }

                ?>
                <div class="comments">
                <h3>What others say:</h3>
                <ol class="all-comments"> 
                    <?php 
                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));
                        wp_list_comments(array(
                            'per_page' => 15
                        ), $comments);
                    ?>
                </ol>
                </div>
                <a href="<?php echo site_url('/blog'); ?>" class="btn btn-primary btn-sm">Back To All Blog Posts</a>
            </div>
        </div>
    </div>
    </div>
</div>

<?php
}

?>

<?php get_footer(); ?>