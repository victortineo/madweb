<?php get_header(); ?>
<section id="blog" class="container blog">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-header">
				<h1><span>CATEGORIA</span> - <?php echo single_cat_title("", false); ?></h1>
				<h2><?php echo category_description(); ?></h2>
				<hr>
			</div>
		</div>
		<div class="col-xs-12 col-sm-9">
			<div class="row">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
					'category_name' => single_cat_title("", false),
					'post_type' => 'post',
					'paged' => $paged
					);
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<article class="post-preview col-xs-12 col-sm-4">
					<a href="<?php echo get_permalink(); ?>">
					<div class="post-thumbnail" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
					</a>
					<div class="post-content">
						<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_excerpt(); ?>
					</div>
					<div class="post-excerpt">
						<span class="glyphicon glyphicon-time"></span><span><?php the_date($d) ; ?></span><br>
						<span class="glyphicon glyphicon-user"></span><span><?php if(function_exists('the_views')) { the_views(); } ?></span><br>
						<!-- <strong>COMPARTILHE</strong> -->
					</div>
				</article>
				<?php endwhile; ?>
				<?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>