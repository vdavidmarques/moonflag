</main>
<!-- Não esquecer de fechar o </main> no elementor -->
<footer id="footer" role="contentinfo">
    <?php
    $args = array(
        'name' => 'informacoes-gerais',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $instagram = get_field('instagram');
        $facebook = get_field('facebook');
        $linkedin = get_field('linkedin');
        $message = get_field('footer-message');
    ?>
        <a target="_blank" href="<?php echo $instagram ?>">
            <?php echo $instagram ?>
        </a>
        <a target="_blank" href="<?php echo $facebook ?>">
            <?php echo $facebook ?>
        </a>
        <a target="_blank" href="<?php echo $linkedin ?>">
            <?php echo $linkedin ?>
        </a>
        <?php echo $message; ?>
    <?php endwhile; ?>
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>