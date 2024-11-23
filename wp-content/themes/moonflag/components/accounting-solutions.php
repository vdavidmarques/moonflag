<section class="accounting-solutions">
    <?php
    $title = get_field('title_solutions', $homePageId);
    $solutions_list = get_field('solutions_list', $homePageId);
    ?>
    <div class="container accounting-solutions--container"">
        <div class="accounting-solutions--header">
            <h2 class="title"><?php echo $title; ?></h2>
        </div>
        <div class="swiper-container">
            <div class="accounting-solutions--lists swiper-wrapper">
                <?php foreach ($solutions_list as $key => $item): ?>
                    <div class="accounting-solutions--lists--list swiper-slide">
                        <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['title']; ?>" class="image">
                        <div class="desc">
                            <?php echo $item['text']; ?></h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
            <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>