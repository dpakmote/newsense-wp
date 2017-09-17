<?php /* Template Name: Blank Template */?>

    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
		<?php endwhile; ?>

		<?php else: ?>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
