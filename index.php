<?php get_header();?>
<!-- content row-->
	<div class="row">
		<!-- left side bar -->
			<?php get_sidebar();?>
		<!-- end of left sidebar -->
		<!-- main content -->
			<div class="col-6 col-m-9 maincontent">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
					<?php bitwali_paging_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div>
		<!-- right side bar -->
			<?php get_sidebar('right')?>
		<!-- right side bar -->	
	</div>
<!-- end of content row -->
<?php get_footer();?>