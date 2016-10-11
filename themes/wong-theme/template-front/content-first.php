<section class="section-1">	
	<div class="content-front-2">
		<h2>About</h2>
		<p>Olympian and National Team Coach turned Web Nerd. I love building websites, tinkering with new technology, looking at beautiful designs and turning designs into live applications. <br><br>

		I am a Junior Front-End Web Developer with a keen eye for detail.  I enjoy web development because it's the combination of technical knowhow and creativity. My main objectives when creating any web projects are usability for the client and the end user, speed, and functional aesthetics. </p>
	</div>
	<div class="line"></div>
	
	<div class="content-front-1">
		<h2>I'am a <span>Front-End Developer</span> and Sports enthusiast with a serious Coffee Addiction</h2>
	</div>
</section>

<section class="section-2">
	<h2>Featured Projects</h2>
	<div class="projects-container">
		<?php
					// Get the last 2 posts.
					global $post;
					$args = array( 'posts_per_page' => 2 );
					$myposts = get_posts( $args );

					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="projects">
							<?php the_post_thumbnail(); ?>
							<div class="projects-content">
								
								<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo CFS()->get( 'description' ); ?></p>

								<a href="<?php the_permalink() ?>" class="btn btn-black">Read Entry</a>
							</div>
						</div>

				<?php endforeach;wp_reset_postdata(); ?>
	</div>
</section>

