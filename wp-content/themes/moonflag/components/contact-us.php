<section class="contact-us">
    <div class="container">
        <div class="contact-us--container">
            <?php
                $tag = get_field('tag_contact', $homePageId);
                $main_text = get_field('main_text_contact', $homePageId);
            ?>
            <div class="contact-us--container--header">
                <div class="tag">
                    <?php echo $tag; ?>
                </div>
                <div class="title">
                    <?php echo $main_text; ?>
                </div>
            </div>
            <div class="contact-us--container--form">
                <?php 
                   echo do_shortcode('[contact-form-7 id="4f46a84" title="Contact form 1"]'); 
                ?>
            </div>
        </div>
    </div>
</section>