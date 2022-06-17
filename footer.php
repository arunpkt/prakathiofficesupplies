<?php wp_footer();?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer_height">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
                    <div class="row">
                        <div class="col-md-1 col-xs-2">
                            <p><i class="fas fa-envelope-open" aria-hidden="true"></i></i></p>
                        </div>
                        <div class="col-md-11 col-xs-10">
                            <p>#18/20, Sivan kovil street, Koyambedu, Chennai</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-xs-2 col-md-1">
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i></p>
                        </div>
                        <div class=" col-xs-10 col-md-11">
                            <p>+91-73586 23222</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-xs-2">
                            <p><i class="fa fa-globe" aria-hidden="true"></i></p>
                        </div>
                        <div class="col-md-11 col-xs-10">
                            <p>prakathiofficesupplies@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 footer_height">
                    <h4>QUICK LINKS</h4>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                'menu_class' => 'nav navbar-nav footer_menu',
                            )
                        )
                    ?>
                </div>
                <div class="col-md-4 col-sm-12 footer_height">
                    <h4>NEWSLETTER SUBSCRIBE</h4>
                    <input type="text" class="form-control" placeholder="Enter you email Id here" id="email"> 
                    <button class="btn btn-success btn-block olive-green">Subscribe</button>
                    <h4>Stay connected</h4>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer bottom -->
    <footer class="footer_bottom">
        <div class="container">
            <p>Copyright @2021 <span>Prakathi Office Supplies</span>. All rights reserved.<br/>
            Developed by <a href="http://www.techdiscussion.co.in">techdiscussion.co.in</a>
            </p>
        </div>
    </footer> 

    </body>
</html>