<?php get_header(); ?>

<main role="main" class="container">
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>