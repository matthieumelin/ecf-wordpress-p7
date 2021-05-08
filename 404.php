<?php get_header(); ?>

<div class="container">
    <div class="error">
        <h1 class="error_title"><?php _e("Page non trouvée.", "ecfwordpress"); ?></h1>
        <p class="error_description"><?php _e("Il semble que rien n'ait été trouvé à cet endroit. Essayez peut-être une recherche?", "ecfwordpress"); ?></p>
        <div class="error_search">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>