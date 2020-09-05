<?php
get_header(); ?>

<div class="row">
<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 main-column">

<?php
if(have_posts()) :
	while(have_posts()) :
		the_post(); ?>

		<article class="page">
		<h1><a><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
		</article>
		
	<?php endwhile;

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