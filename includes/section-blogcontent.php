<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <section class="main_content">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
                <h3><?php the_title() ?></h3>
                <?php the_post_thumbnail( array(500, 300));?>

                 <?php
                  $firstname = get_the_author_meta('first_name');
                  $lastname = get_the_author_meta('last_name');
                ?> 
                <p class="bold mt-3">Authored by : <?php echo $firstname . ' ' . $lastname;?> </p>
                <p class="text-info"><?php echo get_the_date(); ?></p>
                <p><?php the_content(); ?></p>

                <?php
                  if($tags) :
                  $tags = get_the_tags();?>
                  <p>Tags : 
                  <?php
                  foreach($tags as $tag) : 
                  ?>
                  <a href="<?php get_tag_link($tag -> term_id); ?>" class="btn btn-info">
                    <?php echo $tag -> name; ?>
                  </a>
                <?php   
                  endforeach;endif; 
                ?>
                </p>
                <!-- Category link -->
                <?php
                  $categories = get_the_category();
                  foreach($categories as $category) : 
                  ?>
                  <a href="<?php echo get_category_link($category -> term_id); ?>" class="btn btn-info">
                    <?php echo $category -> name; ?>
                  </a>
                <?php   
                  endforeach;
                ?>
          </div>
        </div>
    </div>
  </section>
<?php endwhile;else:endif ?>

