<div id="quem-atendemos" style="position: absolute;">&nbsp;</div>
<div id="sobre-nos" style="position: absolute;">&nbsp;</div>
<section class="services">
    <div class="container">
        <?php
            $title = get_field('title_services', $homePageId);
            $desc = get_field('desc', $homePageId);
            $button_talk_services = get_field('button_talk_services', $homePageId);
            $service_lists = get_field('service_lists', $homePageId);
        ?>
        <div class="services--header">
            <div class="main-title scroll-effect">
                <h2 class="title"><?php echo $title; ?></h2>
            </div>
            <div class="content scroll-effect">
                <p class="desc"><?php echo $desc; ?></p>
                <a href="<?php echo $button_talk_services['url']; ?>" class="link">
                    <?php echo $button_talk_services['title']; ?>
                </a>
            </div>
        </div>

        <div class="services--list">
            <?php foreach ($service_lists as $key => $value): ?>
                <div class="the-list scroll-effect">
                    <div class="image">
                        <img src="<?php echo $value['icon']['url']; ?>" alt="<?php echo $value['title']; ?>">
                    </div>
                    <div class="title">
                        <h3 ><?php echo $value['title']; ?></h3>
                    </div>
                    <div class="link">
                        <a href="<?php echo $value['link']['url']; ?>">
                            <?php echo $value['link']['title']; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>