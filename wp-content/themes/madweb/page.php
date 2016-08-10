<?php get_header(); ?>
<section class="container blog">
	<div class="row">
		<?php
		$args = array(
		'post_type' => 'post'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<div class="col-xs-12 col-sm-8">
			<div class="page-header">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php 
				$share = '[ssba url='. get_permalink() . 'title="Share"]';
				echo do_shortcode($share);
			?>
			<?php the_content(); ?>
			<a class="btn btn-custom2 float--right" href="http://intrustweb.com.br/blog">Voltar ao blog</a>
		</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>