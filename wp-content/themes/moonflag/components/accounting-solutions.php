<section class="accounting-solutions">
    <?php
    $title = get_field('title_solutions', $homePageId);
    $solutions_list = get_field('solutions_list', $homePageId);
    ?>
    <div class="container">
        <div class="accounting-solutions--header">
            <h2 class="title"><?php echo $title; ?></h2>
        </div>
        <div class="accounting-solutions--lists">
            <?php foreach ($solutions_list as $key => $item): ?>
                <div class="accounting-solutions--lists--list">
                    <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['title']; ?>" class="image">
                    <div class="desc">
                        <?php echo $item['text']; ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
    
        </div>
    </div>
</section>