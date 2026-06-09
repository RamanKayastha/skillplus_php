<?php
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu-1' => __('Footer Menu 1'),
        )
    );
}
add_action('init', 'register_menus');
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $is_programs = strtolower($item->title) == 'programs';

        $classes[] = ($args->walker->has_children || $is_programs) ? 'dropdown' : '';
        $classes[] = 'nav-item';

        $class_names = join(' ', array_filter($classes));

        $output .= $indent . '<li class="' . esc_attr($class_names) . '">';

        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        $atts['class'] = ($is_programs) ? 'nav-link dropdown-toggle' : ($depth == 0 ? 'nav-link' : 'dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2');

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        if ($is_programs) {
            $programs = new WP_Query(array(
                'post_type' => 'programs',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            ));

            if ($programs->have_posts()) {
                $output .= '<ul class="dropdown-menu">';
                while ($programs->have_posts()) {
                    $programs->the_post();
                    $output .= '<li><a class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2" href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $output .= '</ul>';
                wp_reset_postdata();
            }
        }
    }
} // Added closing brace for the class

class Footer_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= '<li>';

        $output .= '<a href="' . esc_url($item->url) . '" 
            class="text-accent-foreground hover:text-indigo-600 transition-colors hover:underline">';

        $output .= esc_html($item->title);

        $output .= '</a></li>';
    }
}
