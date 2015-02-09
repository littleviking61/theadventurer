<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="skroll-it">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'full', ['class' => 'skroll-img']);
		} ?>
	</div>
	<div class="container">
		<header>
			<h3 class="post-meta">
				<?= get_the_date('j F Y') ?>
				<?= get_the_category_list() ?>
				<?= get_the_tag_list() ?>	<?= comments_popup_link() ?>
			</h3>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="content">
			<?php the_content(__('Continue reading...', 'reverie')); ?>
		</div>
		<footer>
				
		</footer>
	</div>
</article>