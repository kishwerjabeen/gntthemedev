<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnttheme
 */

?>

<!-- ======= About Section ======= -->
<section id="about" class="about">

	<!-- ======= About Me ======= -->
	<div class="about-me container">

		<div class="section-title">
			<h2>About</h2>
			<p><?php the_field('about_title', 'option'); ?></p>
		</div>

		<div class="row">
			<div class="col-lg-4" data-aos="fade-right">
				<img src="assets/img/me.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
				<h3><?php the_field('about_profession_title', 'option'); ?></h3>
				<p class="fst-italic">
					<?php the_field('about_profession_description', 'option'); ?>
				</p>
				<div class="row">
					<div class="col-lg-12 p-0 m-0">


						<?php if (have_rows('abouts_bio_data', 'option')) : ?>
							<ul class="bio-data-counter">
								<?php while (have_rows('abouts_bio_data', 'option')) : the_row(); ?>
									<li><i class="bi bi-chevron-right"></i> <strong><?php the_sub_field('about_bio_titles'); ?></strong>
										<span> <?php the_sub_field('about_bio_details'); ?></span>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php else : ?>
							<?php // no rows found 
							?>
						<?php endif; ?>
					</div>


				</div>
				<p>
				<?php the_field( 'about_profession_description_after_bio', 'option' ); ?>
				</p>
			</div>
		</div>

	</div><!-- End About Me -->