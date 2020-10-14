<?php
/*get all existed categories start*/
$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';
$empty        = 0;

$args = array(
    'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    'hierarchical' => $hierarchical,
    'title_li'     => $title,
    'hide_empty'   => $empty
);
$all_categories = get_categories( $args );
foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

        $args2 = array(
            'taxonomy'     => $taxonomy,
            'child_of'     => 0,
            'parent'       => $category_id,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
            }
        }
    }
}
/*get all existed categories end*/

// GET ALL CATEGORY IMAGES AND NAMES START
$prod_categories = get_terms('product_cat', array(
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => true
));

foreach ($prod_categories as $prod_cat) :
    $cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
    $shop_catalog_img = wp_get_attachment_image_src($cat_thumb_id, 'shop_catalog');
    $term_link = get_term_link($prod_cat, 'product_cat'); ?>

    <a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>"
                                             alt="<?php echo $prod_cat->name; ?>"/></a>

<?php endforeach;
wp_reset_query();
// GET ALL CATEGORY IMAGES AND NAMES END
