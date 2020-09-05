<?php

get_header();

if(have_posts()) :
	while(have_posts()) :
		the_post(); ?>
		<div class="row">
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
			<article class="p-3">
				<section class="post-content">
					<h1><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></h1>
					<p class="post-info"><?php the_time('G:i a, j F, Y') ?> | Autor: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a> | Kategoria: <?php echo getCategory() ?></p>
					<?php the_content(); ?>
				</section>
				<section class="article-ads">
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle"
						style="display:block"
						data-ad-format="fluid"
						data-ad-layout-key="-fb+5w+4e-db+86"
						data-ad-client="ca-pub-3159341869108716"
						data-ad-slot="2374630751"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</section>
				<section style="padding-top: 30px;"><?php echo get_the_tag_list('<p>Tagi: ',', ','</p>') ?></section>
				<section class="post-comments">
					<?php comments_template() ?>
				</section>
			</article>
			</div>
			<?php get_template_part('brandbar') ?>
		</div>

	<?php endwhile;

else:
	echo "<p>No content</p>";
endif;

get_footer();	
?>
<!--Pełny wpis-->