<!DOCTYPE html>
<html>
<head></head>
<body>
<?php get_header(); ?>
<h1 class="site_heading">Expositions photo</h1>

<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<h2 class="site_subheading">Publications et articles</h2>
<?php get_template_part( 'archive' );?>


<?php get_footer(); ?>

</body>
</html>

