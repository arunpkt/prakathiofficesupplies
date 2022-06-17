    <!-- Start Services section -->
    <section class="services wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    <h5 class="alt-font font-weight-700"><?php the_title(); ?></h5>

                     <?php if ( has_post_thumbnail() ) { ?>
                        <img src="<?php the_post_thumbnail_url('post-large');?>" loading="lazy" class="img-responsive justify-content-center text-center"/>
                     <?php } ?>
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <p class="mb-0 mt-4">
                                <?php the_content(); ?>
                            </p>
                        <?php  endwhile; else : endif;?>
                   
                </div>  
            </div>
        </div>
    </section>
    <!-- Services section -->
