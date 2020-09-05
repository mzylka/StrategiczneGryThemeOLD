<?php

get_header(); ?>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 main-column">
<?php
	if(have_posts()) :
		while(have_posts()) :
			the_post();
			get_template_part('content');
		endwhile;
	else:
		echo "<p>No content</p>";
	endif;
?>
</div>
<?php get_template_part('brandbar') ?>
</div>
<?php
get_footer();	
?>