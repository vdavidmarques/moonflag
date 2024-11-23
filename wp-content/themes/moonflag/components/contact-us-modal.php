<aside class="contact-us-modal">
    <button onclick="closeModal()" class="bg-close-menu-mobile">
        Fechar menu
    </button>
    <div class="contact-us-modal--container">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $whatsapp = get_field('whatsapp');
            $email = get_field('e-mail');
            $phone = get_field('phone');
            $instagram = get_field('instagram');
            $facebook = get_field('facebook');
            $linkedin = get_field('linkedin');
            $message = get_field('footer-message');
        ?>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/logo-2.svg" alt="MoonFlag">
            </div>
            <div class="message">
                <p class="text"><?php echo $message; ?></p>
            </div>

            <div class="infos">
                <div class="phone">
                    <h4 class="tag">Telefone</h4>
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </div>
                <div class="email">
                    <h4 class="tag">E-mail</h4>
                    <a href="mailto:<?php echo $email ?>" target="_blank"><?php echo $email ?></a>
                </div>
            </div>
            <div class="socials">
                <div class="social-networks">
                    <a href="<?php echo $instagram; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/instagram.svg" alt="Instagram">
                    </a>
                    <a href="<?php echo $facebook; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.linkedin.com/company/moonflag/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/linkedin.svg" alt="Linkedin">
                    </a>
                    <a href="<?php echo $whatsapp; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/whatsapp.svg" alt="Whatsapp">
                    </a>
                </div>
                <div class="whatsapp-large">
                    <a href="<?php echo $whatsapp; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/whatsapp.svg" alt="Whatsapp">
                        Entrar em contato
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</aside>