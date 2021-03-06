<header>
        <div class="row hide-on-small-only hide-on-med-only" style="border-bottom:2px solid #a5a5a2 ;padding-bottom:10px; margin:0px !important;">
            <div class="col l12">
                <div class="col l3 center" style="margin-top:10px;">
                    <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/logo.png" alt="Brick"></a>
                </div>
                <div class="col l9">
                    <div class="col l12 lineasepa">
                        <div class="col l3 phone-menu nopadding">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 55 14 52 67 90</p>
                        </div>
                        <div class="col l3 phone-menu">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> contacto@brickci.com</p>
                        </div>
                        <div class="col l2 offset-l1">
                            <a href="https://www.facebook.com/" target="_blank"><div class="social-menu"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
                            <a href="https://twitter.com/iniciarsesion?lang=es" target="_blank"><div class="social-menu"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
                        </div>
                        <div class="col l3 nopadding">
                        <?php get_search_form(); ?>
                            <!-- <div class="col l12 search">
                            
                                <p class="nomargin">                               
                                    
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col l12 menu-brick">
                        <ul>
                            <li><a href="<?php echo site_url();?>#nosotros"><span  class="hvr-underline-from-center">nosotros</span></a></li>
                            <li <?php if(is_category("4")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(4); ?>"><span  class="hvr-underline-from-center">propiedades</span></a></li>
                            <!-- <li><a href="<?php //echo site_url("?page_id=53");?>/propiedades"><span  class="hvr-underline-from-center">propiedades</span></a></li> -->
                            <li><a href="<?php echo site_url("?page_id=60");?>/inversion"><span  class="hvr-underline-from-center">brick inversión inmobiliaria</span></a></li>
                            <li <?php if(is_category("1")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(1); ?>"><span  class="hvr-underline-from-center">blog</span></a></li>
                             <!-- <li><a href="<?php //echo site_url("?page_id=16");?>/blog"><span  class="hvr-underline-from-center">blog</span></a></li>  -->
                            <li><a href="<?php echo site_url();?>#contacto"><span  class="hvr-underline-from-center">contacto</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hide-on-large-only">
            <div class="logo-responsive">
                <a href="<?php bloginfo( 'url' ); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/blog/logo.png" alt="Brick"></a>
            </div>
            <div class="header">
              <button class="hamburger">&#9776;</button>
              <button class="cross">&#735;</button>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="<?php echo site_url();?>#nosotros"><span  class="hvr-underline-from-center">nosotros</span></a></li>
                    <li <?php if(is_category("4")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(4); ?>"><span  class="hvr-underline-from-center">propiedades</span></a></li>
                    <!-- <li><a href="<?php //echo site_url("?page_id=53");?>/propiedades"><span  class="hvr-underline-from-center">propiedades</span></a></li> -->
                    <li><a href="<?php echo site_url("?page_id=60");?>/inversion"><span  class="hvr-underline-from-center">brick inversión inmobiliaria</span></a></li>
                    <li <?php if(is_category("1")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(1); ?>"><span  class="hvr-underline-from-center">blog</span></a></li>
                     <!-- <li><a href="<?php //echo site_url("?page_id=16");?>/blog"><span  class="hvr-underline-from-center">blog</span></a></li>  -->
                    <li><a href="<?php echo site_url();?>#contacto"><span  class="hvr-underline-from-center">contacto</span></a></li>
                </ul>
            </div>
        </div>
    </header>
