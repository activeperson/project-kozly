<?php
/*
Template Name: Шаблон родительской страницы кейсов
*/


get_header();
?>




<div class="container">
        <?php 
			get_template_part('template-blocks/block', 'breadcrumb');
		?>
		<div class="intro">
			<div class="intro__inner">
				<div class="case__title case__title--white">
                <?php the_field('nazvanie_bloka', pll_current_language('slug')); ?><span class="orange">.</span>
				</div>
				<div class="case__list case__list--white">
					<ul>
                    <?php
                      if( have_rows('elementy_pod_nazvaniem_bloka', pll_current_language('slug')) ) {
                        while ( have_rows('elementy_pod_nazvaniem_bloka', pll_current_language('slug')) ) { 
                            the_row();
                        ?>
                            <li><?php the_sub_field('element_spiska', pll_current_language('slug')); ?></li>
                        <?php
                        }
                    }
                    ?>
					</ul>
				</div>
			</div>
			<div class="intro__item">
				<div class="col__one">
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-1-1.jpg" alt="">
					</div>
					<div class="col__item col__item--center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-1-2.jpg" alt="">
					</div>
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-1-3.jpg" alt="">
					</div>
				</div>
				<div class="col__two">
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-2-1.jpg" alt="">
					</div>
					<div class="col__item col__item--center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-2-2.jpg" alt="">
					</div>
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/3-2-3.jpg" alt="">
					</div>
				</div>
			</div>
		</div> <!-- intro -->
	</div>
	<section class="all-cases">
		<div class="container">
			<div class="case">
				<div class="case__inner">
					<div class="case__subtitle">
                        <?php the_field('nazvanie_bloka_cases', pll_current_language('slug')); ?>
					</div>
					<div class="case__title">
						<h5><?php the_field('zagolovok_bloka_cases', pll_current_language('slug')); ?><span class="orange">.</span></h5>
					</div>
				</div>
			</div>
                                <?php  
									$cat = get_category_by_slug((CURRENT_LANG === 'ru') ? 'cases' : 'cases_en'); 
									$id = $cat->term_id;
							
									$posts = get_posts( array(
										'numberposts' => 0,
										'category'    => $id,
										'orderby'     => 'date',
										'order'       => 'ASC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									) );
									foreach( $posts as $post ){
										$metas = get_post_meta(  $post->ID);
										$position = get_field_object('otobrazhenie_bloka_variant_sleva_sprava_main_page');
										$image_attributes = wp_get_attachment_image_src( $metas['izobrazhenie_kejsa_new_version'][0], 'full' );
										?>

									<div class="case" style="<?php ($position['value'] === 'СПРАВА') ? print('flex-direction: row-reverse;') : ''; ?>">
										<div class="case__images">
											<img src="<?php echo $image_attributes[0]; ?>" alt="<?php the_title(); ?>">
										</div>
										<div class="case__inner">
											<div class="case__title">
												<a href="<?php echo get_permalink($post->ID); ?>"><h2><?php the_title(); ?></h2></a>
											</div>
											<div class="case__text"><?php echo $metas['opisanie_kejsa_new'][0]; ?></div>
											<div class="case__list">
												<ul>
													<?php
														if( have_rows('punkty_pod_nazvaniem') ) {
															while ( have_rows('punkty_pod_nazvaniem') ) { 
																the_row();
															?>
																<li><?php the_sub_field('punkt'); ?></li>
															<?php
															}
														}
													?>
												</ul>
											</div>
										</div>
									</div>
							<?php
								}
								wp_reset_postdata(); // сброс
							?>
</div>
                            </section>
<?php

get_footer();