<?php get_header(); ?>
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Sahara-Promo.jpeg" class="d-block w-100 carousel-img" alt="Sahara">
              <div class="carousel-caption d-none d-md-block"></a>
                <h5>SAHARA</h5>
                <p>New Global Edition of Sahara Out Now On Amazon!</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/who-killed-the-poet.jpeg" class="d-block w-100 carousel-img" alt="Who Killed The Poet">
              <div class="carousel-caption d-none d-md-block"></a>
                <h5>WHO KILLED THE POET</h5>
                <p>Check Out My Latest Poetry Collection, Now On Amazon!</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/YouTube-thumb.png" class="d-block w-100 carousel-img" alt="Angella's Book Hotspot"></a>
              <div class="carousel-caption d-none d-md-block">
                <h5>ANGELLA'S BOOK HOTSPOT</h5>
                <p>Check Out My YouTube Channel!</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      <div class="container">
    </div>
  </div>
</div>

        <section class="about-section">
          <h3 class="section-heading">About</h3>
          
              <div class="row">
                  <div class="col-md-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpeg" alt="Angella Ricot" class="about-img">
                  </div>
                  <div class="col-md-6">
                      <p class="about-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni amet voluptas quidem culpa. Nesciunt sint, fuga veniam quasi aperiam necessitatibus possimus, asperiores blanditiis, ut incidunt vero deserunt natus reprehenderit ipsam.</p>
                  </div>
              </div>
          </section>

          <section class="book-section">
          <h3 class="section-heading">Books</h3>
          <!-- <div class="container"> -->
              <div class="row">
                  <div class="col-md-6">
                      <h3 class="section-subheading mb-3">Novels</h3>
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-6">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/Sahara.png" alt="Sahara" class="book-img">
                              </div>
                              <div class="col-sm-6">
                                  <h4 class="book-title">Sahara</h4>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptas omnis et excepturi ipsum quaerat, asperiores maxime corporis quam earum perferendis facere modi ab possimus ad! Quisquam numquam deserunt sequi.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <h3 class="section-subheading mb-3 poetry-heading">Poetry</h3>
                      <div class="container">
                          <div class="row mb-5">
                              <div class="col-sm-6">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/Who-Killed-The-Poet-Book.png" alt="Who Killed The Poet" class="book-img">
                              </div>
                              <div class="col-sm-6 mb-5">
                                  <h4 class="book-title">Who Killed The Poet?</h4>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptas omnis et excepturi ipsum quaerat, asperiores maxime corporis quam earum perferendis facere modi ab possimus ad! Quisquam numquam deserunt sequi.</p>
                              </div>
                          </div>
                          <div class="row new-row">
                              <div class="col-sm-6">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/Mirror-of-Souls.png" alt="Mirror of Souls" class="book-img">
                              </div>
                              <div class="col-sm-6">
                                  <h4 class="book-title">Mirror of Souls</h4>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptas omnis et excepturi ipsum quaerat, asperiores maxime corporis quam earum perferendis facere modi ab possimus ad! Quisquam numquam deserunt sequi.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        <!-- </div> -->
        </section>
        <section class="coming-section">
          <h3 class="mt-3 section-heading">Upcoming Releases</h3>
          <!-- <div class="container"> -->
            <div class="row">
                <div class="col-12">
                    <h4 class="section-subheading">Come Back Soon!</h4>
                </div>
            </div>
        </section>
        <section class="blog-section">
        <!-- </div> -->
            <h3 class="section-heading">Blog</h3>
          <!-- <div class="container"> -->
        <?php 
                
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()) {
                    $blogposts->the_post();
                
                
                ?> 
            <div class="row">
                <div class="col-12">
                  <div class="container-fluid blog-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                            <a href="<?php the_permalink(); ?>"></a>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                <a href="<?php the_permalink(); ?>"></a>
                                    <h5 class="card-title"><?php the_title(); ?></h5>
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
        <a href="<?php echo site_url('/blog'); ?>" class="float-end px-3 all-blogs-link">All Blog Posts ></a>
                </div>
            <!-- </div> -->
          </div>
        </section>
        <section class="connect-section">
          <h2 class="section-heading">connect</h2>
          <div class="connect-paragraph">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores qui distinctio ducimus nesciunt voluptas ipsam magni non ipsum voluptate tempore et aperiam veritatis quas quibusdam quae consequuntur doloribus, at eos.</p>
          </div>
                        <div class="containter-fluid">
                            <div class="col-lg-8 offset-lg-2">
                            <div class="container-fluid mb-3 icons">
                            <!-- <a href="#" class="font-awesome" id="github" target="_blank"><i class="fa fa-github"></i> GitHub</a> -->
                            <a href="#" target="_blank"><i class="fa fa-linkedin linkedin" id="linkedin"></i> LinkedIn</a>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="contact-form-container">
                                             <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?> 
                                        </div> 
          <!-- </div> -->
        </section>
    </div>
</body>

<?php get_footer(); ?>