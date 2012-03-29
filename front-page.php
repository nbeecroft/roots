<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
      	<h1 class="banner-text">Hi, I'm Nick. What brings you here?</h1>
	   <section>
	     <div class="row buttons">
	       <h2 id="business" class="well span2 offset3">Business</h3>
	       <h2 id="pleasure" class="well span2 offset1">Pleasure</h3>
	     </div>
	     <div id="category-list-business" class="row buttons">
	       <ul class="well span2">
	         <?php wp_list_categories('child_of=18&hide_empty=0&title_li='); ?>
    	       </ul>
             </div>
             <div id="category-list-pleasure"> 
	       <ul class="well span2">
	         <?php wp_list_categories('child_of=20&hide_empty=0&title_li='); ?>
               </ul>
	     </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
        </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
