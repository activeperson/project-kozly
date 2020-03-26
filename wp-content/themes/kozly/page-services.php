<?php
/*
Template Name: Шаблон страницы услуг
*/


get_header();
?>
<?php 
	get_template_part('template-blocks/block', 'grid');
?>
<div class="container">
<div class="breadcrumb">
    <?php if(function_exists('bcn_display')) { bcn_display(); }?>
</div>
		<div class="intro" id="intro">
				<div class="intro__inner">
					<div class="case__title case__title--white">
                        <?php the_title(); ?><span class="orange">.</span>

                        
					</div>
					<div class="intro__text">
                    <?php
                        while( have_posts() ) : the_post();
                            the_content();
                        endwhile; 
                    ?>
					</div>
					<button class="btn__menu" type="submit"><?php pll_e('Заказать обратный звонок'); ?></button>
				</div>
				<div class="intro__item">
					<div class="col__one">
						<div class="col__item">
							<img style="height: 270px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/1-1.jpg" alt="">
						</div>
						<div class="col__item col__item--center">
							<img style="height: 390px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/1-2.jpg" alt="">
						</div>
						<div class="col__item">
							<img style="height: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/1-3.jpg" alt="">
						</div>
					</div>
					<div class="col__two">
						<div class="col__item">
							<img style="height: 270px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-1.jpg" alt="">
						</div>
						<div class="col__item col__item--center">
							<img style="height: 390px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-2.jpg" alt="">
						</div>
						<div class="col__item">
							<img style="height: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-3.jpg" alt="">
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
                    <?php  the_field('nazvanie_bloka_services', pll_current_language('slug')); ?>
					</div>
					<div class="case__title">
						<h5><?php  the_field('zagolovok_bloka_services', pll_current_language('slug')); ?><span class="orange">.</span></h5>
					</div>
				</div>
				<div class="case__images">
					
				</div>
			</div>

			<div class="case">
            <?php
						if( have_rows('spisok_uslug', pll_current_language('slug')) ) {
							while ( have_rows('spisok_uslug', pll_current_language('slug')) ) { 
                                the_row();
							?>
                                <?php 
                                    $color = get_sub_field('czvet_bloka', pll_current_language('slug'));
                                    $settingStatus = get_sub_field('nastrojka_statusa', pll_current_language('slug'));
                                    $tag = get_sub_field('status_uslugi_na_zelenom_fone', pll_current_language('slug'));
                                
                                ?>
                                <div class="case__inner <?php ($color) ? print_r('case__inner--black') : ''; ?>">
                                    <div class="case__title">
                                        <a href="<?php the_sub_field('usluga', pll_current_language('slug')); ?>"><h2><?php the_sub_field('nazvanie_uslugi', pll_current_language('slug')); ?></h2></a>
                                        <?php if($settingStatus) {
                                            ?>
                                                <div class="case__new">
                                                    <?php the_sub_field('status_uslugi_na_zelenom_fone', pll_current_language('slug')); ?>
                                                </div>
                                            <?php
                                        } 
                                        ?>
                                    </div>
                                    <div class="case__text">
                                    <?php the_sub_field('opisanie_uslugi', pll_current_language('slug')); ?>
                                    </div>
                                    <div class="case__list">
                                        <ul>
                                        <?php the_sub_field('spisok_informaczii', pll_current_language('slug')); ?>
                                        </ul>
                                    </div>
                                </div>

							<?php
							}
						}
					?>



				<!-- <div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Digital</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
				<div class="case__inner">
					<div class="case__title case__title--white">
						<a href="javascript:void(0);"><h2>Аудит</h2></a>
					</div>
					<div class="case__text case__text--white">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list case__list--white">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
                </div>
                <div class="case__inner">
					<div class="case__title case__title--white">
						<a href="javascript:void(0);"><h2>Design</h2></a>
					</div>
					<div class="case__text case__text--white">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list case__list--white">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>WEB</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
                </div>
                <div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>SMM</h2></a>
						<div class="case__new">NEW</div>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
				<div class="case__inner">
					<div class="case__title case__title--white">
						<a href="javascript:void(0);"><h2>Полиграфия</h2></a>
						<div class="case__new">NEW</div>
					</div>
					<div class="case__text case__text--white">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list case__list--white">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div> -->
			</div>
		</div>
		<!-- <div class="case">
				<div class="case__inner case__inner--black">
					<div class="case__title case__title--white">
						<a href="javascript:void(0);"><h2>Design</h2></a>
					</div>
					<div class="case__text case__text--white">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list case__list--white">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>WEB</h2></a>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="case">
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>SMM</h2></a>
						<div class="case__new">NEW</div>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
				<div class="case__inner case__inner--black">
					<div class="case__title case__title--white">
						<a href="javascript:void(0);"><h2>Полиграфия</h2></a>
						<div class="case__new">NEW</div>
					</div>
					<div class="case__text case__text--white">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					</div>
					<div class="case__list case__list--white">
						<ul>
							<li>Стратегия</li>
							<li>Выход в диджитал</li>
							<li>Креативный маркетинг</li>
							<li>Devepoment</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</section>
















<?php

get_footer();