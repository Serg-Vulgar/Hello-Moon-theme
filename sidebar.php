		<ul class="sidebar">
			<li>
				<h3><?php bloginfo('name'); ?></h3>
				<p><?php bloginfo('description'); ?></p>
			</li>
			<li>
				<h3>Subscribe</h3>
				<form>
					<input type="email" placeholder="Email adress">
					<button type="submit" class="post-icon icon-ok"></button>
				</form>

				<div class="social-icons">
					<a href="" class="icon-rss"></a>
					<a href="" class="icon-instagram"></a>
					<a href="" class="icon-twitter"></a>
				</div>
				<h3>Recent</h3>
				<ul class="recent">
				<?php
					$recent_posts = wp_get_recent_posts('numberposts=20&category=0,1');
					foreach($recent_posts as $recent): 
						print '<li><a href="'. get_permalink($recent["ID"]). '" title="Смотрите '. 
						esc_attr($recent["post_title"]).'" >'. $recent["post_title"].'</a></li> ';
					endforeach;
				?>
				</ul>

			</li>
			<li>
				<h3>Search</h3>
				<form>
					<input type="search">
					<button type="submit" class="post-icon icon-right-big"></button>
				</form>
			</li>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('MiddleSidebar') ) : ?>
			<!–Default sidebar info goes here–>
			<?php endif; ?>
		</ul>
	</main>