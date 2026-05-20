<?php
/**
 * Functions and definitions
 */

function snazzy_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails', array( 'case_study' ) ); // Support featured images only for case studies
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'snazzy-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'snazzy_theme_setup' );

// Ensure case_study has post thumbnail support explicitly after CPT registration
function snazzy_ensure_case_study_thumbnails() {
    add_post_type_support( 'case_study', 'thumbnail' );
}
add_action( 'init', 'snazzy_ensure_case_study_thumbnails', 20 );

function snazzy_theme_enqueue_styles() {
    // Enqueue the main style.css
    wp_enqueue_style( 'snazzy-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue the Tailwind compiled CSS
    wp_enqueue_style( 'snazzy-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), filemtime( get_template_directory() . '/assets/css/tailwind.css' ) );
}
add_action( 'wp_enqueue_scripts', 'snazzy_theme_enqueue_styles' );

// Add classes to menu li elements
function snazzy_theme_nav_menu_css_class( $classes, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location == 'primary' ) {
        $classes[] = 'flex items-center';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'snazzy_theme_nav_menu_css_class', 10, 3 );

// Add classes to menu a elements
function snazzy_theme_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location == 'primary' ) {
        // Base classes
        $class = "font-['DM_Sans'] font-medium text-[14px] leading-[23.1px] tracking-[0.28px] transition-colors ";
        
        // Active state (current page) vs Inactive state
        if ( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-page-ancestor', $item->classes ) ) {
            $class .= 'text-[#00D4AA]';
        } else {
            $class .= 'text-[#9BA3C2] hover:text-[#00D4AA]';
        }

        $atts['class'] = $class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'snazzy_theme_nav_menu_link_attributes', 10, 3 );

// Register a dedicated image field inside the ACF "Case Study Details" group
function snazzy_register_acf_image_field() {
    if ( function_exists('acf_add_local_field') ) {
        acf_add_local_field(array(
            'key' => 'field_case_study_image',
            'label' => 'Case Study Image',
            'name' => 'case_study_image',
            'type' => 'image',
            'parent' => 'group_69e7ff69b2a5b', // Key of "Case Study Details" group
            'instructions' => 'Upload a picture related to this case study.',
            'required' => 0,
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
        ));
    }
}
add_action('acf/init', 'snazzy_register_acf_image_field');

// Helper to get case study image URL (with fallback to Featured Image)
function snazzy_get_case_study_image_url( $post_id ) {
    $case_image = get_field('case_study_image', $post_id);
    if ( is_array($case_image) && isset($case_image['url']) ) {
        return $case_image['url'];
    } elseif ( is_string($case_image) && filter_var($case_image, FILTER_VALIDATE_URL) ) {
        return $case_image;
    } elseif ( is_numeric($case_image) ) {
        return wp_get_attachment_url($case_image);
    }
    
    // Fallback to Featured Image
    if ( has_post_thumbnail( $post_id ) ) {
        return get_the_post_thumbnail_url( $post_id, 'large' );
    }
    
    return '';
}
