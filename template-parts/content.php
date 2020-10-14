<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elseven
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_singular()): ?>
        <?php
        $category = get_the_category();
        $firstCategory = $category[0]->slug;
//        get_pr($category);
        if ($firstCategory == 'news'):
            ?>
            <?php get_template_part('template-parts/archives_singles/single_news'); ?>
        <?php else: ?>
            <?php get_template_part('template-parts/archives_singles/single_shipments'); ?>
        <?php endif; ?>

    <?php else: ?>
        <!--for custom shipments-->
        <?php if (is_category('shipments')): ?>
            <?php get_template_part('template-parts/archives_singles/archive_shipments'); ?>
        <?php else: ?>
            <?php get_template_part('template-parts/archives_singles/archive_news'); ?>
        <?php endif; ?>
    <?php endif; ?>


    <!--	<footer class="entry-footer">-->
    <!--		--><?php //elseven_entry_footer(); ?>
    <!--	</footer>-->
    <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
