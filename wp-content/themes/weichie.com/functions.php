<?php

add_action('after_setup_theme', function() {
    weichie_setup([
      'main-menu'     => __('Main Menu', 'weichie'),
      'footer-menu'   => __('Footer Menu', 'weichie'),
      'lang-menu'     => __('Language Menu', 'weichie'),
    ]);
});

function weichie_setup() {
  load_theme_textdomain('weichie', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main-menu'     => __('Main Menu', 'weichie'),
    'footer-menu'   => __('Footer Menu', 'weichie')
  ]);
}

add_action('wp_enqueue_scripts', function() {
    weichie_load_scripts('1.0.0');
});
function weichie_load_scripts() {
  wp_register_style('screen', get_stylesheet_directory_uri().'/style.css', [], '1.0.0', 'screen');
  wp_enqueue_style('screen');
}

add_filter('the_title', 'weichie_title');
function weichie_title($title) {
  if ($title == '') {
    return '&rarr;';
  } else {
    return $title;
  }
}

add_filter('wp_title', 'weichie_filter_wp_title');
function weichie_filter_wp_title($title) {
  return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'weichie_widgets_init');
function weichie_widgets_init() {
  register_sidebar(array(
    'name' => __('Sidebar Widget Area', 'weichie'),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

function weichie_custom_pings($comment) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
  <?php
}

//remove author link in comments
function weichie_remove_comment_author_link( $author_link, $author ) {
  return $author;
}
add_filter( 'get_comment_author_link', 'weichie_remove_comment_author_link', 10, 2 );

add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}

add_filter('get_comments_number', 'weichie_comments_number', 10, 2);
function weichie_comments_number($count, $id) {
  if (!is_admin()) {
    $comments_by_type =& separate_comments(get_comments('status=approve&post_id=' . $id));
    return count($comments_by_type['comment']);
  } else {
    return $count;
  }
}

if(function_exists('acf_add_options_page')){
  acf_add_options_page();
}

function remove_comments(){
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments');
