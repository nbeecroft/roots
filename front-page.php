<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        
	    <section>
	    <div class="category-list row">
	      <div class="span4 hero-unit-custom blue1">
            <div class="hero-unit-inside">
                <h2>Projects</h2>
                <ul>
                    <li><a href="http://atticdeprovence.com">Attic de Provence</a></li>
                    <li><a href="https://www.facebook.com/ColesWalkOfHope">Cole's Walk of Hope</a></li>
                    <li><a href="http://tidepowerd.com">TidePowerd</a></li>
                </ul>
            </div>
	      </div>
	      <div class="span4 hero-unit-custom blue1">
            <div class="hero-unit-inside">
                <h2>Connect with Me</h2>
                <ul>
                    <li><a href="http://facebook.com/nicolasbeecroft">Facebook</a></li>
                    <li><a href="https://twitter.com/nbeecroft">Twitter</a></li>
                    <li><a href="http://linkedin.com/in/nbeecroft">LinkedIn</a></li>
                </ul>
            </div>
	      </div>
	      <div class="span4 hero-unit-custom blue1">
            <div class="hero-unit-inside">
		        <h2>Latest Tweets</h2>
            </div>
	      </div>
	    </div>
        </section>
        <section>
	    <div id="articles" class="well">
	      <h2>Articles</h2>
	    </div>
	    <div class="category-list row">
	      <div class="span3  hero-unit-custom blue2">
		    <div class="hero-unit-inside">
                <h2><a href="<?php echo get_category_link(18); ?>"><?php echo get_cat_name(18);?></a></h2>
                <ul><?php echo my_list_categories(array('child_of'=>18,'hide_empty'=>0,'title_li'=>''));?>
                </ul>
            </div>    
	      </div>
	      <div class="span3 hero-unit-custom blue2">
	        <div class="hero-unit-inside">
                <h2><a href="<?php echo get_category_link(20); ?>"><?php echo get_cat_name(20);?></a></h2>
                <ul><?php echo my_list_categories(array('child_of'=>20,'hide_empty'=>0,'title_li'=>''));?>
                </ul>
            </div>    
	      </div> 
          <div class="span6 hero-unit-custom blue2">
            <div class="hero-unit-inside">
                <h2>Recently Written</h2>
                <ul>
                <?php
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                    }
                ?>
                </ul>
            </div>    
          </div>
	    </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
