<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

	<section id="main">
		<div class="container">
			
			<div class="row banner-row">
				
			</div>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row about-row">
				<div class="col-sm-12">
				<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
			
			<div class="row thumb-row">
				<div class="col-xs-12 col-md-12">
					<div id="thumb-wrapper">

					<?php $posts = get_posts(array( 'post_type' => 'project', 'posts_per_page' => -1 )); ?>
					<?php $cnt = 0; ?>
					<?php foreach($posts as $post) : setup_postdata($post); ?>
						
						<?php if(has_post_thumbnail()): ?>

							<?php if($cnt == 0): ?>
							<div class="row">
							<?php endif; ?>
						
							<?php $pid = get_the_ID(); ?>
							<?php $thumb_src = wp_get_attachment_image_src( $featured_img_id, 'project-thumb' ); ?>
							<?php $project_title = get_the_title(); ?>
						
								<div class="col-xs-4 col-sm-3 thumb-column">
									<div class="thumb">
										<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('project-thumb'); ?></a>
										<a href="<?php the_permalink(); ?>"><?php echo $project_title; ?></a><br>
										<?php edit_post_link(); ?>
									</div>
								</div>
								
							<?php $cnt++; ?>
						
							<?php if($cnt == 3) : ?>
							<div class="clearfix visible-xs-block"></div>
							<?php endif; ?>
							
						<?php endif; ?>
					<?php endforeach; ?>
					
						</div><!--end thumb-row-->
					</div>
				</div>
			</div>
			
		</div>
	</section>

<?php get_footer(); ?>