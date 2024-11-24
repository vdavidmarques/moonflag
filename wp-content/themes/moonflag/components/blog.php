<section class="blog">
    <div class="container">
        <div class="blog--header">
            <div class="content">
                <h4 class="tag">blog</h4>
                <h3 class="title">Encontre as informações mais importantes para seu dia a dia</h3>
            </div>
            <div class="show">
                <button class="button">
                    Confira o blog
                </button>
            </div>
        </div>
        <div class="blog--list">
            <?php

            $recent_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'ASC'
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                    <div class="recent-post">
                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('medium'); ?>

                            <?php endif; ?>
                        </div>
                        <div class="post-category">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<span>' . esc_html($categories[0]->name) . '</span>';
                            }
                            ?>
                        </div>
                        <div class="data-infos">
                            <div class="date-author">
                                <?php echo get_the_date('d M Y'); ?> | <?php the_author(); ?>
                            </div>

                            <h2 class="post-title"><a href="#"><?php the_title(); ?></a></h2>
                            <div class="read-more">
                                <a href="<?php the_permalink(); ?>">
                                    Leia na integra
                                </a>
                            </div>
                        </div>

                    </div>
            <?php
                endwhile;
            else :
                echo '<p>Não há posts disponíveis.</p>';
            endif;


            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>