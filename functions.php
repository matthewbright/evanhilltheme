<?php
add_action('after_setup_theme', 'evanhill_setup');
function evanhill_setup()
{
load_theme_textdomain('evanhill', get_template_directory() . '/languages');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 768, 0, false ); // Change default post thumbnail size
add_image_size( 'gallery-thumbnail', 300, 300, true ); // Add gallery thumbnail size
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'evanhill' ) )
);
}
add_action('wp_enqueue_scripts', 'evanhill_load_scripts');
function evanhill_load_scripts()
{
wp_enqueue_script('jquery');
}
add_action('comment_form_before', 'evanhill_enqueue_comment_reply_script');
function evanhill_enqueue_comment_reply_script()
{
if (get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'evanhill_title');
function evanhill_title($title) {
if ($title == '') {
return '&rarr;';
} else {
return $title;
}
}
add_filter('wp_title', 'evanhill_filter_wp_title');
function evanhill_filter_wp_title($title)
{
return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'evanhill_widgets_init');
function evanhill_widgets_init()
{
register_sidebar( array (
'name' => __('Sidebar Widget Area', 'evanhill'),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function evanhill_custom_pings($comment)
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter('get_comments_number', 'evanhill_comments_number');
function evanhill_comments_number($count)
{
if (!is_admin()) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count($comments_by_type['comment']);
} else {
return $count;
}
}

// Add bootstrap JS for carousel
function evanhill_scripts_basic()
{
    // Register the script like this for a theme:
    wp_register_script( 'jj-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jj-bootstrap-script' );
        // Register the script like this for a theme:
    wp_register_script( 'fittext-script', get_template_directory_uri() . '/js/jquery.fittext.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'fittext-script' );

}
add_action( 'wp_enqueue_scripts', 'evanhill_scripts_basic' );


// Remove height and width attributes from images
add_filter( 'post_thumbnail_html', 'evanhill_remove_thumbnail_dimensions', 10, 3 );

function evanhill_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


// Get Sticky Posts
function my_get_featured_posts() {
    $sticky = get_option( 'sticky_posts' );

    if ( empty( $sticky ) )
        return new WP_Query();

    $args = array(
        'posts_per_page' => 5,
        'post__in' => $sticky,
    );

    return new WP_Query( $args );
}


// Remove gallery img size

add_filter('wp_get_attachment_link', 'remove_img_width_height', 10, 4);

function remove_img_width_height( $html, $post_id, $post_image_id, $post_thumbnail) {
    
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    
    return $html;
}
