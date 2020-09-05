<article class="row post p-2">

			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail') ?></a></div>

			<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 post-content">
				<h1><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></h1>
				<p class="post-info"><?php the_time('j F, Y') ?> | Autor: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a> | Kategoria: <?php echo getCategory() ?></p>
				<p>
				<?php echo get_the_excerpt(); ?>
				</p>
			</div>

</article>
<!--Pojedyńczy wpis w głównej kolumnie -->