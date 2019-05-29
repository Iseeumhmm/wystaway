<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WystawayLaser
 */

get_header();?>
	<!-- ***********************  GET IMAGES *********************** -->
	 <style>
        .hero {
            background-image: url('<?php echo get_template_directory_uri(); ?>/img/main-hero.png');
		}
	</style>
	<?php if( get_field('special_image') ): ?>
		<style>
			.sale-img {				
				background-image: url('<?php the_field('special_image'); ?>');
			}
		</style>
	<?php endif; ?>
	<?php if( get_field('first_contact') ): ?>
		<style>
			.first-profile-img {				
				background-image: url('<?php the_field('first_contact'); ?>');
			}
		</style>
	<?php endif; ?>
	<?php if( get_field('second_contact') ): ?>
		<style>
			.second-profile-img {				
				background-image: url('<?php the_field('second_contact'); ?>');
			}
		</style>
	<?php endif; ?>
		<!-- ***********************  MAIN AREA *********************** -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="hero"></div>
			<div id="Angie" class="cta-container">
				<div class="cta-banner cta-banner-first container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center">
							<div class="profile-details d-flex align-items-center">
								<div class="first-profile-img profile-img"></div>
								<div class="first-description text-center ml-5">
									<p class="first-name"><?php the_field('first_full_name'); ?></p>
									<p><?php the_field('first_title'); ?></p>
									<hr class="dash">
									<p><?php the_field('first_specialty'); ?></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-2 text-center">
							<button class="btn">BOOK AN APPOINTMENT</button>
						</div>
						<div class="col-xl-4 col-lg-5 text-right">
							<a href="tel:<?php the_field('first_phone'); ?>" class="phone">Call or text <?php the_field('first_phone'); ?></a>
							<a href="mailto:<?php the_field('first_email'); ?>" class="email"><?php the_field('first_email'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<p class="heading"><?php the_field('headline'); ?></p> 
				<div class="image-dates">
					<div class="img-container">
						<div class="sale-img"></div>
					</div>
					<p><?php the_field('special_dates'); ?></p>
				</div>
				<hr class="sale-dash">
			</div>
			<div id="Price-List" class="price-list w-100 text-center">
				<?php
					$table = get_field( 'price_list' );
					if ( ! empty( $table['header'] ) ) {
						echo '<h2>';
						foreach ( $table['header'] as $th ) {
							echo $th['c'];
						}
						echo '</h2> <div class="d-flex justify-content-center text-left">';
					}
					if ( ! empty ( $table ) ) {
						echo '<table border="0">';
							echo '<tbody>';
								foreach ( $table['body'] as $tr ) {
									echo '<tr>';
									$isLast = false;
									foreach ( $tr as $td ) {
										echo empty($isLast) ? '<td>' : '<td class="last">';
											echo $td['c'];
										echo '</td>';
										if ( empty($isLast) ) {
											$isLast = true;
										} else {
											$isLast = false;
										}
									}
									echo '</tr>';
								}
							echo '</tbody>';
						echo '</table> </div>';
					}
				?>
			</div>

			<div id="Cassie" class="cta-container">
				<div class="cta-banner cta-banner-second container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center">
							<div class="profile-details d-flex align-items-center">						
								<div class="second-profile-img profile-img"></div>
								<div class="second-description text-center ml-5">
									<p class="first-name"><?php the_field('second_full_name'); ?></p>
									<p><?php the_field('second_title'); ?></p>
									<hr class="dash">
									<p><?php the_field('second_specialty'); ?></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-2 text-center">
							<button class="btn">BOOK AN APPOINTMENT</button>
						</div>
						<div class="col-xl-4 col-lg-5 text-right">
							<a href="tel:<?php the_field('second_phone'); ?>" class="phone">Call or text <?php the_field('second_phone'); ?></a>
							<a href="mailto:<?php the_field('second_email'); ?>" class="email"><?php the_field('second_email'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<section class="before-after">
				<?php 
				// the query
				$ba_all_query = new WP_Query(array('post_type'=>'beforeAfter', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $ba_all_query->have_posts() ) : ?>
				<!-- the loop -->
				<?php while ( $ba_all_query->have_posts() ) : $ba_all_query->the_post(); ?>
				<div class="container-fluid">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-4 before-after-img" style="background-image: url('<?php the_field( "before" ); ?>')" title="Before">
							<p class="label">Before</p>
						</div>
						<div class="col-lg-4 before-after-img after" style="background-image: url('<?php the_field( "after" ); ?>')" title="After">
							<p class="label">After</p>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'You have no FAQs to post.' ); ?></p>
				<?php endif; ?>
			</section>
			<section id="FAQ" class="faqs dark-blue">
				<hr class="faq-dash">
				<h2 class="text-center">Frequently Asked Questions</h2>
				<?php 
				// the query
				$wpb_all_query = new WP_Query(array('post_type'=>'faqs', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<div class="px-2 px-md-5">
						<p class="heading"><?php the_title() ?></p>
						<p class="px-4 px-md-5"><?php the_field( "content" ); ?></p>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'You have no FAQs to post.' ); ?></p>
				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();

