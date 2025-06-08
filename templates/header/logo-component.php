<div class="logo__header">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            // آدرس لوگوی پیش‌فرض
            $default_logo = get_template_directory_uri() . '/assets/images/a7abe50b-f058-4f13-8865-f310e11f471d.png';
            ?>
            <img src="<?php echo esc_url($default_logo); ?>" 
                 alt="<?php bloginfo('name'); ?>" 
                 title="<?php bloginfo('name'); ?>" 
                 class="img-fluid">
            <?php
        }
        ?>
    </a>
</div>
