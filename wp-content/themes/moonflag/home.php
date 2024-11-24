<?php
/*
Template Name: Página Inicial
*/
get_header();

if (!\Elementor\Plugin::$instance->editor->is_edit_mode()) {
    $homePageId = 36;
    include 'components/main-banner.php';
    include 'components/services.php';
    include 'components/accounting-solutions.php';
    include 'components/contact-us.php';
    include 'components/blog.php';
}
?>

<div class="elementor-container">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<?php

get_footer();
