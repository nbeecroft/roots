<?php
/*
Template Name: About
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <section>
		<h1>About this site</h1>
		<p>This site has been built using the following technologies:</p>
		<ul>
		  <li><a href="http://wordpress.org" target="_blank">Wordpress</a></li>
		  <li><a href="https://github.com/retlehs/roots/wiki" target="_blank">Roots Wordpress Theme</a>, which is based off of:</li>
		    <ul>
		      <li><a href="http://html5boilerplate.com/" target="_blank">HTML 5 Boilerplate</a></li>
		      <li><a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a></li>
		    </ul>
		</ul>

	</section>
	<hr />
	<section>

		<h1>About me</h1>
		<p>I'm a driven entrepreneur with a thirst for knowledge and a passion for technology. I'm also co-founder of TidePowerd (www.tidepowerd.com) - We make .NET developer tools for GPU programming.</p>
		<p>In addition to learning about new technology, I like to take things apart to learn how they work (sometimes I even put them back together). Hopefully some of these articles can be useful to others.</p>
		<p>Some of the things I know a little about include:</p>

		<ul>
		   <li>HTML 5/CSS 3</li>
		   <li>Javascript</li>
		   <li>PHP</li>
		   <li>SQL</li>
		   <li>Asterisk</li> 
		</ul>

		<p>Some things I'm trying to learn in the next year are:</p>

		<ul>
		   <li>C#</li>
		   <li>Python/Ruby (not sure which yet)
		   <li>Music production</li>
		</ul>

		<p>I hope you enjoy the site, and please feel free to get in touch!</p>

	</section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
