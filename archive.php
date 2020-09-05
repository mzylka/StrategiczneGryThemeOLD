<?php
get_header();
?>

<div class="row">
<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 main-column">

<?php
if(have_posts()) : ?>
	<h2><?php

	if(is_category()){
		single_cat_title();
	}
	elseif(is_tag()){
		single_tag_title();
	}
	elseif(is_author()){
		the_post();
		echo "Autor: " . get_the_author();
		rewind_posts();
	}
	elseif(is_day()){
		echo "Dzień: " . get_the_date();
	}
	elseif(is_month()){
		echo "Miesiąc: " . get_the_date('F Y');
	}
	elseif(is_year()) {
		echo "Rok: " . get_the_date('Y');
	}
	else{
		echo "Archiwum";
	}
	?></h2>
	<?php
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