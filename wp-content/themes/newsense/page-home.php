<?php /* Template Name: Home */ get_header(); ?>
<header class="hero flex-parent height-full border-thick-sides">
      <div class="flex-child v-center padding-5pc">
          <h1 class="title column is-three-quarters">This is where it all starts to make sense</h1>
          <h3 class="subtitle column is-three-quarters">We're a creative agency that help barnds strategise campaigns, solve complex design problems and tell stories that engage audiences.</h3>
      </div>
      <div id="header" class="hero-foot primary padding-5pc navigation">
          <nav class="nav" role="navigation">
                <?php html5blank_nav(); ?>
            </nav>
          <div class="logo padding-5pc">
            <a href="#"><header class="logo">newsense</header></a>
          </div>
      </div>
  </header>

	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
				<?php the_content(); ?>

				

				<br class="clear">

				<?php edit_post_link(); ?>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
	</main>
<?php get_footer(); ?>
