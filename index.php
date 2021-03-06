<?php get_header();?>
	
	
	<div class="col-sm-8 content list">
		<?php while( have_posts() ): the_post(); ?>
		<article>
			<h2 class="page_title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="row">
				<div class="col-sm-6">
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
					<div class="meta">Date: <?php the_date('F j, Y'); ?></div>
					<div class="meta">Written by: <?php the_author(); ?></div>
				</div>
				<div class="col-sm-6">
					<div class="hidden-xs hidden-sm">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<div class="row buffer">
				<div class="col-sm-12">
					<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block hidden-sm hidden-xs"><?php the_title(); ?></a>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block visible-sm visible-xs">Read Article</a>
				</div>
			</div>
		</article>
		<?php endwhile; ?>
		<div class="navigation">
			<p>
				<?php posts_nav_link( ' | ', 'Newer Posts', 'Older Posts' ); ?>
			</p>
		</div>
	</div>
	<div class="col-sm-4">
		<?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>
			<ul class="sidebar">
				<?php dynamic_sidebar( 'default-sidebar' ); ?>
			</ul>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>