<?php
/* Template name: Пользовательское соглашение */
get_header(); ?>

    <div class="privacy-page">
        <div class="container" id="activeInnerPage">
            <h2><?php the_title() ?></h2>
            <div class="container__text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php get_footer();