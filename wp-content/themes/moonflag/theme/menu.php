<?php
    
// Função para imprimir o menu do header
function custom_header_menu()
{
?>
    <nav id="custom-header-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'custom_header_menu',
            'menu_id'        => 'custom-header-menu',
            'menu_class'     => 'main-menu',
            'fallback_cb'    => '__return_false',
            'walker'         => new Custom_Menu_Walker(),
        ));
        ?>
    </nav>
<?php
}

function register_custom_menus()
{
    register_nav_menus(
        array(
            'custom_header_menu' => __('Menu do Header', 'moonflag'),
        )
    );
}
add_action('after_setup_theme', 'register_custom_menus');

class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $classes = array( 'sub-menu', 'sub-menu-' . $depth );
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $output .= "\n$indent<ul class=\"$class_names\">\n";
    }
}