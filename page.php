<?php
get_header();
?>

<!-- WHITE SECTION: Body Content -->
<main class="grow pt-20">
    <?php
    $hidden_home_layouts = array(
        'about_us',
        'about_stats',
        'key_features',
        'industry',
        'contact',
        'contact_form',
    );

    if (have_rows('flexible_section')):
        while (have_rows('flexible_section')):
            the_row();
            $layout = get_row_layout();

            if (in_array($layout, $hidden_home_layouts, true)) {
                continue;
            }

            get_template_part('partials/flexible-content/' . $layout);
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
?>