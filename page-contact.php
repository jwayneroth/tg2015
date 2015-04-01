<?php get_header(); ?>

	<section id="contact-main" class="main">
		<div class="container">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="row">
				<div class="col-sm-5">
					<div class="page-entry">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="page-entry">
						<?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>
					</div>
				</div>
			</div>
	
	<?php endwhile; else : ?>
	
			<div class="row">
				<div class="col-sm-8">
					<p class="text-warning"><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</div>
			</div>
			
	<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>
