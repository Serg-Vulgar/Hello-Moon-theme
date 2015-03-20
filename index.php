
<?php get_header(); ?>
	<main>
		<div class="content">
<!-- 					<h2><?php the_post(); ?></h2>
					<span class="postdate">August 7, 2013</span>
					<p><?php the_content( $more_link_text, $strip_teaser ); ?></p> -->

					<ul class="container">
						<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
							<li class="post">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="entry">
									<?php the_content(); ?>
									<?php the_author(); ?>
									<?php the_category(‘, ‘); ?>
									<?php comments_popup_link(); ?>


								</div>
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>





			<div class="pages-nav">
				<a href="" class="oldpage"><span class="icon-left-open-big"></span>Old</a>
				<a href="" class="newpage">New<span class="icon-right-open-big"></span></a>
			</div>
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>