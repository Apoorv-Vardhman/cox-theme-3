<?php
/**
 * template name: contact
 */

    get_header();
    get_template_part('template-parts/content','page-header');
?>
<main>
    <?php echo the_content(); ?>
</main>

<?php
    get_footer();
?>
