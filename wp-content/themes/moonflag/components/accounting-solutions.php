<section class="accounting-solutions">
    <?php
        $title = get_field('title_solutions', $homePageId);
        $solutions_list = get_field('solutions_list', $homePageId);

        foreach($solutions_list as $key => $item):

        ?>
        <div class="solution-list">
            <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['title']; ?>">
            <h3><?php echo $item['text']; ?></h3>
        </div>
        <?php endforeach; ?>

        <h2><?php echo $title; ?></h2>

    ?>
</section>