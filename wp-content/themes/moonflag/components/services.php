<section class="services">
    <?php     
        $title = get_field('title_services', $homePageId);
        $desc = get_field('desc', $homePageId);
        $button_talk_services = get_field('button_talk_services', $homePageId);
        $service_lists = get_field('service_lists', $homePageId);

        foreach($service_lists as $key => $value):
            ?>
    <div class="service-list">
            <img src="<?php echo $value['icon']['url']; ?>" alt="<?php echo $value['title']; ?>">
            <h3><?php echo $value['title']; ?></h3>
            <p><?php echo $value['link']['url']; ?><?php echo $value['link']['title']; ?></p>
        </div>
    <?php endforeach; ?>

        <h2><?php echo $title; ?></h2>
        <p><?php echo $desc; ?></p>
        <a href="<?php echo $button_talk_services['url']; ?>">
            <?php echo $button_talk_services['title']; ?>
        </a>

    ?>
</section>