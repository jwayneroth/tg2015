<?php get_header(); ?>

	<section id="main">
		<div class="container">
		
			<div class="row">
				
				<div class="col-sm-10 col-sm-push-2">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $currID = get_the_ID(); ?>
					<?php if( have_rows('project_gallery') ): ?>
					<div class="slideshow-wrapper">
					<div class="cycle-slideshow" id="project-slideshow" 
						data-cycle-log="false" 
						data-cycle-slides=".slide"
						data-cycle-timeout=5000
						data-cycle-speed="1400"
						data-cycle-pause-on-hover=true
						data-cycle-auto-height="-1"
						data-cycle-prev=".project-prev"
						data-cycle-next=".project-next"
						>
					
					<?php while( have_rows('project_gallery') ): the_row(); ?> 

						<?php $imgID = get_sub_field('project_gallery_image'); ?>
					
						<div class="slide">
							<?php echo wp_get_attachment_image($imgID, 'project-slide', 0, array('class'=>'')); ?>
						</div>

					<?php endwhile; ?>
						
						<!--<div class="cycle-pager"></div>-->
					
					</div>
					
					<a href class="cycle-prev project-prev"><</a>
					<a href class="cycle-next project-next">></a>
					</div>
				<?php endif; ?>
				
				</div>
				
				<div class="col-sm-2 col-sm-pull-10">
					<ul class="projects-menu">
					<?php global $post; ?>
					<?php $projects = get_posts(array( 'post_type' => 'project', 'posts_per_page' => -1 )); ?>
					<?php foreach($projects as $post) : setup_postdata($post); ?>
						<?php $li_class = ( get_the_ID() == $currID ) ? 'active' : ''; ?>
						<li class="<?php echo $li_class; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
				
			</div>
				
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
				<?php the_content(); ?>
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
