<? register_nav_menus(array(


));

add_theme_support('post-thumbnails');




function new_excerpt_length($length) {
    return 55;
}



add_filter('excerpt_length', 'new_excerpt_length');



function new_excerpt_more($more) {
       global $post;
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// add_filter('excerpt_more', 'new_excerpt_more');


// function new_excerpt_more($more) {
//  global $post;
//  return '<a href="'. get_permalink($post->ID) . '" style="text-decoration: none;"><br>Читать дальше...</a>';
// }
 add_theme_support( 'post-thumbnails');

    function wps_display_attachment_settings() {
        update_option( 'image_default_align', 'none' );
        update_option( 'image_default_link_type', 'none' );
        update_option( 'image_default_size', 'large' );
    }
    add_action( 'after_setup_theme', 'wps_display_attachment_settings' );
    function add_scripts() {
        if(is_admin()) return false;
        wp_deregister_script('jquery'); 
        wp_enqueue_script('jqueryjs','https://code.jquery.com/jquery-3.1.0.min.js','','',false);
        wp_enqueue_script('slick',get_template_directory_uri().'/slick/slick.min.js','','',true);
        wp_enqueue_script('flipcountdownjs', get_template_directory_uri().'/js/jquery.flipcountdown.js','','',false);
        wp_enqueue_script('mainjs', get_template_directory_uri().'/js/main.js','','',false);
        wp_localize_script( 'mainjs', 'SITEDATA', array(
            'url' => get_site_url(),
            'themepath' => get_template_directory_uri(),
            'current_user_id' => get_current_user_id()
        ));
        
    }

    function add_styles() {
        if(is_admin()) return false;
        wp_enqueue_style( 'slick', get_template_directory_uri().'/slick/slick.css' );
        wp_enqueue_style( 'slicktheme', get_template_directory_uri().'/slick/slick-theme.css' ); 
        wp_enqueue_style( 'maincss', get_template_directory_uri().'/style.css?v=1.00' );
        wp_enqueue_style( 'flipcss', get_template_directory_uri().'/css/jquery.flipcountdown.css' );
    }

    add_action('wp_footer', 'add_scripts');
    add_action('wp_print_styles', 'add_styles');
 // колонка "ID" для таксономий (рубрик, меток и т.д.) в админке
    if (is_admin()) {
    foreach (get_taxonomies() as $taxonomy) {
        add_action("manage_edit-${taxonomy}_columns", 'tax_add_col');
        add_filter("manage_edit-${taxonomy}_sortable_columns", 'tax_add_col');
        add_filter("manage_${taxonomy}_custom_column", 'tax_show_id', 10, 3);
    }
        add_action('admin_print_styles-edit-tags.php', 'tax_id_style');
        function tax_add_col($columns) {return $columns + array ('tax_id' => 'ID');}
        function tax_show_id($v, $name, $id) {return 'tax_id' === $name ? $id : $v;}
        function tax_id_style() {print '<style>#tax_id{width:4em}</style>';}
        add_filter('manage_posts_columns', 'posts_add_col', 5);
        add_action('manage_posts_custom_column', 'posts_show_id', 5, 2);
        add_filter('manage_pages_columns', 'posts_add_col', 5);
        add_action('manage_pages_custom_column', 'posts_show_id', 5, 2);
        add_action('admin_print_styles-edit.php', 'posts_id_style');
        function posts_add_col($defaults) {$defaults['wps_post_id'] = __('ID'); return $defaults;}
        function posts_show_id($column_name, $id) {if ($column_name === 'wps_post_id') echo $id;}
        function posts_id_style() {print '<style>#wps_post_id{width:4em}</style>';}
    }
    if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {
    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page' ) );
    function AddThumbColumn($cols) {
        $cols['thumbnail'] = __('Thumbnail');
        return $cols;
    }
    function AddThumbValue($column_name, $post_id) {
            $width = (int) 60;
            $height = (int) 60;
            if ( 'thumbnail' == $column_name ) {
                // thumbnail of WP 2.9
                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
                // image from gallery
                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                if ($thumbnail_id)
                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
                elseif ($attachments) {
                    foreach ( $attachments as $attachment_id => $attachment ) {
                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                    }
                }
                    if ( isset($thumb) && $thumb ) {
                        echo $thumb;
                    } else {
                        echo __('None');
                    }
            }
    }
    // for posts
    add_filter( 'manage_posts_columns', 'AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'AddThumbValue', 10, 2 );
    // for pages
    add_filter( 'manage_pages_columns', 'AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'AddThumbValue', 10, 2 );
}
function remove_comment_fields($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','remove_comment_fields');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Основные настройки',
        'menu_title'    => 'Основные настройки',
        'menu_slug'     => 'options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
    register_post_type(
    'city',
    array('labels' => array( 'name' => __( 'Города' ),
    'singular_name' => __( 'Город' ) ),
    'supports'      => array( 'title', 'thumbnail'),
    'public' => true, ) );

}


add_action( 'wp_head', 'favicon' );
function favicon(){
  ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<? echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<? echo get_template_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<? echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<? echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<? echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<? echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
    <link rel="shortcut icon" href="<? echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
  <?
}

?>
