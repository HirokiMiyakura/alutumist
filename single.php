<?php get_header('single'); ?>
<!-- <style>header { background: none; height: auto; }</style> -->
<main role="main">
	<!-- <section id="SINGLE"> -->
		<div class="outerSingle">
			<div class="inner shadow">
				<div class="single-contaienr">
					<div class="single-item-side">
						<h4>アーカイブ</h4>
						<?php wp_get_archives(); ?>
						<h4>カテゴリー</h4>
						<?php the_category(); ?>
					</div>
					<div class="single-item-main">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
							<!-- post title -->
							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->
							<!-- post details -->
							<span class="date"><?php the_time('Y年n月j日'); ?></span>
							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
							<p><?php _e( 'カテゴリー: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
							<!-- /post details -->
							<div class="contentSingle">
							<?php the_content(); // Dynamic Content ?>
							</div>
						</article>
						<!-- /article -->
						<?php endwhile; ?>
						<?php else: ?>
						<!-- article -->
						<article>
							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
						</article>
						<!-- /article -->

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<!-- </section> -->
	<!-- /section -->
</main>
<?php get_footer(); ?>
