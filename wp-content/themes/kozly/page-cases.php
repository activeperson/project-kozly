<?php
/*
Template Name: Шаблон родительской страницы кейсов
*/


get_header();
?>







<div class="container">
		<div class="intro" id="intro">
			<div class="intro__inner">
				<div class="case__title case__title--white">
                <?php the_title(); ?><span class="orange">.</span>
				</div>
				<div class="case__list case__list--white">
					<ul>
                    <?php
                        while( have_posts() ) : the_post();
                            the_content();
                        endwhile; 
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
	<section>
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
						if( have_rows('dobavlenie_kejsov', pll_current_language('slug')) ) {
							while ( have_rows('dobavlenie_kejsov', pll_current_language('slug')) ) { 
                                the_row();
                                $position = get_sub_field_object('otobrazhenie_bloka_variant_sleva_sprava', pll_current_language('slug'));
                            ?>
                            <div class="case" style="<?php ($position['value'] === 'СПРАВА') ? print('flex-direction: row-reverse;') : ''; ?>">
                                            
                                <div class="case__images">
                                        <img src="<?php the_sub_field('izobrazhenie_kejsa', pll_current_language('slug')); ?>" alt="">
                                </div>
                                <div class="case__inner">
                                    <div class="case__title">
                                        <a href="<?php the_sub_field('ssylka_na_kejs', pll_current_language('slug')); ?>"><h2><?php the_sub_field('nazvanie_kejsa', pll_current_language('slug')); ?></h2></a>
                                    </div>
                                    <?php the_sub_field('opisanie_kejsa', pll_current_language('slug')); ?>
                                </div>
                            </div>
							<?php
							}
						}
            ?>

				<!-- <div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 9 (2).jpg" alt="">
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Fresh Milk</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Брендинг & полиграфия</li>
							<li>Веб-дизайн</li>
							<li>Таргетинговая реклама</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div> -->
			
			<!-- <div class="case">
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Maybelline New York</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Брендинг & полиграфия</li>
							<li>Веб-дизайн</li>
						</ul>
					</div>
				</div>
				<div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 10.jpg" alt="">
				</div>
			</div> -->

			<!-- <div class="case">
				<div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 11.jpg" alt="">
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Мясная лавка</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Брендинг & полиграфия</li>
							<li>Веб-дизайн</li>
							<li>Таргетинговая реклама</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
			</div> -->

			<!-- <div class="case">
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2> Lobster Belgian IPA</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Брендинг & полиграфия</li>
							<li>Веб-дизайн</li>
						</ul>
					</div>
				</div>
				<div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 18.jpg" alt="">
				</div>
			</div> -->
			
			<!-- <div class="case">
				<div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 19.jpg" alt="">
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Боровково</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Брендинг & полиграфия</li>
							<li>Веб-дизайн</li>
							<li>Таргетинговая реклама</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>














<?php

get_footer();