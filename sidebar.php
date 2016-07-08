<aside class="col-xs-12 col-sm-3">
	<div class="sidebar newsletter">
		<header><h1>Assine nossa newsletter</h1></header>
		<span></span>
		<form action="//intrustweb.us13.list-manage.com/subscribe/post?u=a2a672fef6910f5f7276a880f&amp;id=3a32fe030f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="input-group">
				<input type="text" placeholder="Seu nome" name="FNAME" id="mce-FNAME">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Seu e-mail" name="EMAIL" id="mce-EMAIL">
			</div>
			<input value="Assinar" type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom2">
			<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none;color: white;"></div>
			<div class="response" id="mce-success-response" style="display:none;color: white;"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a87686e44179880f1e95c6c84_ee643cbcd8" tabindex="-1" value=""></div>
		</form>
	</div>
	<div class="sidebar articlestop">
		<header><h1>ARTIGOS POPULARES</h1></header>
		<ul>
			<?php if (function_exists('get_most_viewed')): ?>
			<?php get_most_viewed('post', 7); ?>
			<?php endif; ?>
		</ul>
	</div>
	<div class="sidebar category">
		<header><h1>CATEGORIAS</h1></header>
		<ul>
			<?php wp_list_categories( array(
		        'orderby'    => 'name',
		        'title_li' => ''
		    ) ); ?> 
		</ul>
	</div>
	<div class="sidebar socials">
		<?php
		$args = array(
		'posts_per_page' => 1,
		'post_type' => 'navbar',
		'order' => 'ASC'
		);
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<header><h1>SIGA-NOS</h1></header>
		<a href="<?php the_field('facebook'); ?>" target="_blank" title="Facebook">
			<img src="http://madknow.com.br/triciclos/wp-content/themes/triciclos-theme/img/face-black.png" alt="FACEBOOK">
		</a>
		<a href="<?php the_field('twitter'); ?>" target="_blank" title="Twitter">
			<img src="http://madknow.com.br/triciclos/wp-content/themes/triciclos-theme/img/twitter-black.png" alt="TWITTER">
		</a>
		<?php endwhile; ?>
	</div>
</aside>