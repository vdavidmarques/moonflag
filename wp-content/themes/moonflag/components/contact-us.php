<section class="contact-us">
    <?php
        $tag = get_field('tag_contact', $homePageId);
        $main_text = get_field('main_text_contact', $homePageId);

        echo $tag;
        echo $main_text;
    ?>
</section>