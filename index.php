<?php

get_header();

if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
		<article class="article">
			<h2 class="article_title"><?php the_title(); ?></h2>
			<div class="article_thumbnail"><?php the_post_thumbnail(); ?></div>
			<div class="article_content"><?php the_content(); ?></div>
		</article>
<?php
	endwhile;
endif;

get_footer();