<section class="main-banner">
    <div class="big-circle-graphic top desktop">&nbsp;</div>

    <?php
    $tag = get_field("tag", $homePageId);
    $main_text = get_field("main_text", $homePageId);
    $button_f = get_field("button_f", $homePageId);
    $button_s = get_field("button_s", $homePageId);
    $image = get_field("image", $homePageId);
    ?>
    <div class="container">
        <div class="main-banner--contents">
            <div class="main-banner--contents--texts">
                <div class="item scroll-effect">
                    <h2 class="tag"><?php echo $tag; ?></h2>
                    <div class="title">
                        <?php echo $main_text; ?>
                    </div>
                    <div class="buttons">
                        <a href=" <?php echo $button_f['url']; ?>" class="button button--secundary"><?php echo $button_f['title']; ?></a>
                        <a href="<?php echo $button_s['url']; ?>" class="link"><?php echo $button_s['title']; ?></a>
                    </div>
                </div>
            </div>
            <div class="main-banner--contents--image scroll-effect"><img src="<?php echo $image['url']; ?>" alt="<?php echo $tag; ?>"></div>
        </div>
    </div>


</section>