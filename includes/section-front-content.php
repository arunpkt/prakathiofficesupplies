<!-- end header -->
<section id="home" class="hero_carousal">
    <div class="container">
        <div class="row">
            <!-- Categories -->
            <div class="col-md-3">
                <ul class="nav left_cat_nav browse">
                    <li class="nav-item head">
                        <button class="navbar-toggler float-left" type="button" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="nav-link" href="#">Browse Categories</a>
                    </li>
                </ul>
                <ul class="nav flex-column collapse show left_cat_nav" id="navbarToggleExternalContent">
                    <?php 
                            $taxonomy     = 'product_cat';
                            $orderby      = 'name';  
                            $show_count   = 0;      // 1 for yes, 0 for no
                            $pad_counts   = 1;      // 1 for yes, 0 for no
                            $hierarchical = 1;      // 1 for yes, 0 for no  
                            $title        = '';  
                            $empty        = 0;

                            $args = array(
                                    'taxonomy'     => $taxonomy,
                                    'orderby'      => $orderby,
                                    'show_count'   => $show_count,
                                    'pad_counts'   => $pad_counts,
                                    'hierarchical' => $hierarchical,
                                    'title_li'     => $title,
                                    'hide_empty'   => $empty
                            );
                            $all_categories = get_categories( $args );
                            foreach ($all_categories as $cat) {
                                if($cat->category_parent == 0) {
                                    $category_id = $cat->term_id;       
                                    echo '<li class="nav-item"><a class="nav-link" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';
                                }
                            }
                        ?>

                </ul>
            </div>
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner d-block" data-stellar-ratio="0.5" style="left: 0px; top: 0px;">
                        <div class="carousel-item active">
                            <img src="<?php echo get_template_directory_uri() ?>/images/hero1.jpg" class="d-block w-100"
                                alt="London eye">
                            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Buy anything from the stationary items</h5>
                                <p>We pledged to provide the world class products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/hero2.jpg" class="d-block w-100"
                                alt="London eye">
                            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Buy anything from the stationary items</h5>
                                <p>We pledged to provide the world class products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/hero3.jpg" class="d-block w-100"
                                alt="London eye">
                            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Buy anything from the stationary items</h5>
                                <p>We pledged to provide the world class products</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Info sections -->
<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="row contact_header">
                    <div class="col-md-3">
                        <i class="fa fa-headphones"></i>
                    </div>
                    <div class="col-md-9 p-0">
                        <p class="info_head font-weight-bold">Free delivery item</p>
                        <p class="info_desc">Orders over 5000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="row contact_header">
                    <div class="col-md-3">
                        <i class="fa fa-circle-notch"></i>
                    </div>
                    <div class="col-md-9 p-0">
                        <p class="info_head font-weight-bold">Money back guarantee</p>
                        <p class="info_desc">100% money back</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="row contact_header">
                    <div class="col-md-3">
                        <i class="fa fa-piggy-bank"></i>
                    </div>
                    <div class="col-md-9 p-0">
                        <p class="info_head font-weight-bold">Cash on delivery</p>
                        <p class="info_desc">Pay on delivery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="row contact_header">
                    <div class="col-md-3">
                        <i class="fa fa-life-ring"></i>
                    </div>
                    <div class="col-md-9 p-0">
                        <p class="info_head font-weight-bold">Help & Support</p>
                        <p class="info_desc">Contact us 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick shop -->
<section class="quick-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 lhs">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/team13.jpg"
                                class="img-responsive"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/team18.jpg"
                                class="img-responsive"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 rhs">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/portfolio-item26.jpg"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/portfolio-item25.jpg"
                                class="img-responsive"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/portfolio-item24.jpg"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/portfolio-item23.jpg"
                                class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quick shop -->
<section class="best-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 lhs">
                <h3>Best selling product</h3>
                <?php 
                        echo do_shortcode("[products limit='8' columns='1' best_selling='true' class='best-selling']");
                    ?>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 rhs">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-best"
                            role="tab" aria-controls="nav-home" aria-selected="true">Best products</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-featured"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Featured products</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-new" role="tab"
                            aria-controls="nav-contact" aria-selected="false">New products</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-best" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php 
                               echo do_shortcode("[products limit='6' columns='3' orderby='popularity' class='quick-sale' on_sale='true']");
                            ?>

                    </div>
                    <div class="tab-pane fade" id="nav-featured" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php 
                               echo do_shortcode("[products limit='6' columns='3' class='quick-sale' visibility='featured']");
                        ?>
                    </div>
                    <div class="tab-pane fade" id="nav-new" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <?php 
                            echo do_shortcode('[products limit="6" columns="3" orderby="id" order="DESC" class="quick-sale" visibility="visible"]');       
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick shop -->
<section class="quick-shop1 mob_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/quick_sale_1.png"
                        class="img-responsive"></a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/quick_sale_2.png"
                        class="img-responsive"></a>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <a href="#"><img src="<?php echo  get_template_directory_uri()?>/images/quick_sale_3.png"
                        class="img-responsive"></a>
            </div>
        </div>
    </div>
</section>

<!-- category shop -->
<section class="cat-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 lhs">
                <h3 class="bg-success text-light text-center p-2 offer-head">Special offer</h3>
                <?php 
                        echo do_shortcode("[products limit='1' columns='1' best_selling='true' class='offer-selling']");
                    ?>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 rhs">
                <nav>
                    <div class="nav nav-tabs" id="nav-cat-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-interior-tab" data-toggle="tab" href="#nav-interior"
                            role="tab" aria-controls="nav-best" aria-selected="true">INTERIOR ART DESIGNING</a>
                        <a class="nav-item nav-link" id="nav-event-tab" data-toggle="tab" href="#nav-event" role="tab"
                            aria-controls="nav-featured" aria-selected="false">EVENT SETUP</a>
                        <a class="nav-item nav-link" id="nav-floor-tab" data-toggle="tab" href="#nav-floor" role="tab"
                            aria-controls="nav-new" aria-selected="false">FLOOR MATS</a>
                        <a class="nav-item nav-link" id="nav-advert-tab" data-toggle="tab" href="#nav-advert" role="tab"
                            aria-controls="nav-advert" aria-selected="false">ADVERTISING</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-interior" role="tabpanel"
                        aria-labelledby="nav-best-tab">
                        <?php 
                               echo do_shortcode('[products limit="9" columns="3" category="clothing"]');
                            ?>

                    </div>
                    <div class="tab-pane fade" id="nav-event" role="tabpanel" aria-labelledby="nav-featured-tab">
                        <?php 
                               echo do_shortcode('[products limit="9" columns="3" category="decor"]');
                        ?>
                    </div>
                    <div class="tab-pane fade" id="nav-floor" role="tabpanel" aria-labelledby="nav-new-tab">
                        <?php 
                            echo do_shortcode('[products limit="9" columns="3" category="music"]');       
                            ?>
                    </div>
                    <div class="tab-pane fade" id="nav-advert" role="tabpanel" aria-labelledby="nav-advert-tab">
                        <?php 
                            echo do_shortcode('[products limit="9" columns="3" category="uncategorized"]');       
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="customer_speaks">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                <div class="customer_pod">
                    <h3>CUSTOMER TESTIMONIALS</h3>
                    <div id="reviewCarousal1" class="carousel slide" data-interval="6000" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#reviewCarousal1" data-slide-to="0" class="active"></li>
                            <li data-target="#reviewCarousal1" data-slide-to="1"></li>
                            <li data-target="#reviewCarousal1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="relative-carousal">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/avtar-01.jpg ?>"
                                        class="img-responsive">
                                    <p class="blockquote"><span><i class="fa fa-quote-left"
                                                aria-hidden="true"></i></span>POS site give me the formal guidens to the
                                        buy the products of my own taste. And the products dispatched on time. Excellent
                                        effort team</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="relative-carousal">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/avtar-02.jpg ?>"
                                        class="img-responsive">
                                    <p class="blockquote"><span><i class="fa fa-quote-left"
                                                aria-hidden="true"></i></span>POS site give me the formal guidens to the
                                        buy the products of my own taste. And the products dispatched on time. Excellent
                                        effort team</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="relative-carousal">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/avtar-03.jpg ?>"
                                        class="img-responsive">
                                    <p class="blockquote"><span><i class="fa fa-quote-left"
                                                aria-hidden="true"></i></span>POS site give me the formal guidens to the
                                        buy the products of my own taste. And the products dispatched on time. Excellent
                                        effort team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="recent_posts">
                    <h4>LATEST NEWS</h4>
                    <div class="row">
                        <?php 
                                // the query
                                $args = array('posts_per_page=5');
                                $the_query = new WP_Query( $args ); ?>

                        <div id="recentPostCarousal" class="carousel slide" data-interval="5000" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="carousel-item <?php echo ( $the_query->current_post==0)?'active':''; ?>">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <?php echo the_post_thumbnail( 'large' ); ?>
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <div class="post_content">
                                                <div class="dateformat">
                                                    <span class="date"><?php echo get_the_date('d'); ?></span>
                                                    <span class="month"><?php echo get_the_date('M'); ?></span>
                                                </div>
                                                <h4>
                                                    <?php the_title(); ?>
                                                </h4>
                                                <p><?php the_excerpt(__('(more…)')); ?></p>
                                                <a class="text-success" href="<?php the_permalink() ?>">
                                                    <span class="text-info">Read more</span> <span
                                                        class="badge badge-pill badge-success"> > </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                <div class="carousel-item">
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#recentPostCarousal" data-slide-to="0" class="active"></li>
                                <li data-target="#recentPostCarousal" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our brands -->
<section class="brands">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center font-weight-bold">OUR CLIENTS</h4>
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">

                        <div class="brands_item d-flex flex-column justify-content-center">
                            <img src="<?php echo get_template_directory_uri()?>/images/partner1.png" alt="">
                        </div>

                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                src="<?php echo get_template_directory_uri()?>/images/partner2.png" alt="">
                        </div>

                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                src="<?php echo get_template_directory_uri()?>/images/partner3.png" alt="">
                        </div>

                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                src="<?php echo get_template_directory_uri()?>/images/partner4.png" alt="">
                        </div>

                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                src="<?php echo get_template_directory_uri()?>/images/partner5.png" alt="">
                        </div>

                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                src="<?php echo get_template_directory_uri()?>/images/partner6.png" alt="">
                        </div>
                    </div> <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
