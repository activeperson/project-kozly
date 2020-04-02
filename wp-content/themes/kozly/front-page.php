
<?php
/*
Template Name: Шаблон главной страницы
*/


get_header();
$urlBtnCases = get_category_link(get_field('ssylka-1_case', pll_current_language('slug')), false);

?>

    
    <?php 
   		get_template_part('template-blocks/block', 'grid');
    ?>
    
	<div class="container first-screen">
		<div class="switcher-lang">
            <?php pll_the_languages(); ?> 
        </div>
		<div class="intro" id="intro">
				<div class="intro__inner">
					<div class="case__subtitle case__subtitle--white">
						<?php pll_e('Текст на первом экране'); ?>
					</div>
					<div class="intro__title">
						KozLy<span class="orange">.</span>
					</div>
					<div class="intro__subtitle">
						Agency
					</div>

				</div>
				<div class="intro__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/main-animation.svg" alt="">
				</div>
		</div> <!-- intro -->
	</div>
	<div class="container who-we-are">
		<div class="case">
			<div class="case__inner">
				<div class="case__subtitle">
                <?php the_field('nazvanie_bloka-1',pll_current_language('slug')); ?>
				</div>
				<div class="case__title">
                    <h5><?php  the_field('zagolovok-1',pll_current_language('slug')); ?></h5>
                    
				</div>
				<div class="case__text">
                <?php  the_field('tekst-1',pll_current_language('slug')); ?>
				</div>
				<div class="case__more">
					<a href="<?php the_field('ssylka-1', pll_current_language('slug')); ?>">
                    <?php the_field('tekst_na_knopke-1', pll_current_language('slug')); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-link.svg" alt="">
					</a>
				</div>
			</div>
			<div class="stat">
				<div class="stat__item">
					<div class="stat__inner">
						<div class="stat__count">
                        <?php the_field('proektov', pll_current_language('slug')); ?>
						</div>
						<div class="stat__text">
                        <?php the_field('proektov-2', pll_current_language('slug')); ?>
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__in">
							<div class="stat__count">
                            <?php the_field('oborot_v_god', pll_current_language('slug')); ?>
							</div>
							<div class="stat__text">
                            <?php the_field('oborot_v_god-2', pll_current_language('slug')); ?>
							</div>
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__count">
                        <?php the_field('chelovek_v_komande', pll_current_language('slug')); ?>
						</div>
						<div class="stat__text">
                        <?php the_field('chelovek_v_komande-2', pll_current_language('slug')); ?>
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__count">
                        <?php the_field('lyudej_poseshhayut_nashi_resursy', pll_current_language('slug')); ?>
						</div>
						<div class="stat__text">
                        <?php the_field('lyudej_poseshhayut_nashi_resursy-2', pll_current_language('slug')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="services">
			<div class="services__inner">
				<div class="case__subtitle case__subtitle--white">
					<?php the_field('nazvanie_bloka-2', pll_current_language('slug')); ?>
				</div>
				<div class="case__title case__title--white">
					<?php the_field('zagolovok-2', pll_current_language('slug')); ?>
				</div>
				<div class="services__text">
					<div class="services__item">
						<a href="#" class="services__title">Digital</a>
						<div class="services__subtitle">Стратегия</div>
						<div class="services__subtitle">Выход в диджитал</div>
						<div class="services__subtitle">Креативный маркетинг</div>
					</div>
					<div class="services__item">
						<a href="#" class="services__title">Аудит</a>
						<div class="services__subtitle">Технический SEO аудит</div>
						<div class="services__subtitle">Аудит рекламных аккаунт PPS</div>
						<div class="services__subtitle">Анализ конкурентов</div>
						<div class="services__subtitle">Анализ соц. сетей</div>
					</div>
					<div class="services__item">
						<a href="#" class="services__title">design</a>
						<div class="services__subtitle">Графический дизайн</div>
						<div class="services__subtitle">Motion-design</div>
						<div class="services__subtitle">Брендинг</div>
					</div>
					<div class="services__item">
						<a href="#" class="services__title">web</a>
						<div class="services__subtitle">Лендинг</div>
						<div class="services__subtitle">Корпоративные сайты</div>
						<div class="services__subtitle">Порталы</div>
						<div class="services__subtitle">Интернет-магазины</div>
					</div>
					<div class="services__item">
						<a href="#" class="services__title">Smm</a>
						<div class="services__subtitle">Полное сопровождение</div>
						<div class="services__subtitle">Стратегия</div>
						<div class="services__subtitle">Поддержка</div>
					</div>
					<div class="services__item">
						<a href="#" class="services__title">полиграфия</a>
						<div class="services__subtitle">Широкоформатная печать</div>
						<div class="services__subtitle">Офсетная печать</div>
						<div class="services__subtitle">Цифровая печать</div>
						<div class="services__subtitle">Сувенирная продукция</div>
					</div>
				</div>
			</div>
			<div class="services__form">
					<div class="form__inner">
                        <?php  
                            if( pll_current_language('slug') === 'en' ){
                                ?>
								<div class="form__title">Did not find the right one?</div>
								<div class="form__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gif/1deb154e6909ef309f613779011995ee.gif" alt="Gif">
								</div>
                                    <div class="form__item">
                                        <div class="form__text">While John Travolta is looking, we are already helping!</div>
                                        <div class="form__nick">How can I call you?</div>
                                        <input class="form__input" type="text" name="name" placeholder="My lord">
                                        <div class="form__description">Describe what interests you</div>
                                        <textarea class="form__input form__input--ask" type="text" name="name" placeholder="Motorcycle chain stores, need analysis.." wrap="soft"></textarea>
                                        <input class="form__input" type="tel" name="tel" placeholder="Contact number">
                                        <input class="form__input" type="email" name="email" placeholder="Email">
                                    </div>
                                    <button class="form__btn" type="submit">Submit</button>
                            <?php
                            } else {
                                ?>
								<!-- <div class="form__title">Не нашли нужного?</div>
								<div class="form__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gif/1deb154e6909ef309f613779011995ee.gif" alt="Gif">
								</div>
                                <div class="form__item">
                                    <div class="form__text">Пока Джон Траволта ищет, мы уже помогаем!</div>
                                    <div class="form__nick">Как к вам обращаться?</div>
                                    <input class="form__input" type="text" name="name" placeholder="Мой властелин">
                                    <div class="form__description">Опишите, что вас интересует</div>
                                    <textarea class="form__input form__input--ask" type="text" name="name" placeholder="Сеть магазинов по продаже мотоциклов, нуждаемся в анализе, таргетинговой рекламе и дизайне баннеров." wrap="soft"></textarea>
                                    <input class="form__input" type="tel" name="tel" placeholder="Контактный телефон">
                                    <input class="form__input" type="email" name="email" placeholder="Электропочта">
                                </div>
                                <button class="form__btn" type="submit">Отправить</button> -->
								<?php echo do_shortcode( '[cf7form cf7key="glavnaya-stranicza-russkaya-versiya"]' ); ?>
                            <?php
                            }
                        ?>
					</div>
			</div>
		</div>	
	</div>

	<section class="our-cases">
		<div class="container">
			<div class="case">
				<div class="case__inner">
					<div class="case__subtitle">
						<?php the_field('nazvanie_bloka-2_case', pll_current_language('slug')); ?>
					</div>
					<div class="case__title">
						<h5><?php the_field('zagolovok-2_case', pll_current_language('slug')); ?><span class="orange">?</span></h5>
					</div>
					<div class="case__text">
						<?php the_field('opisanie_bloka_case', pll_current_language('slug')); ?>
					</div>
					<div class="case__more">
						<a href="<?php echo $urlBtnCases; ?>">
						<?php the_field('tekst_na_knopke-case', pll_current_language('slug')); ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-link.svg" alt="">
						</a>
					</div>
				</div>
				<div class="case__images">
					
				</div>
			</div>
							<?php  
									$cat = get_category_by_slug((CURRENT_LANG === 'ru') ? 'cases' : 'cases_en'); 
									$id = $cat->term_id;
							
									$posts = get_posts( array(
										'numberposts' => 3,
										'category'    => $id,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'include'     => array(),
										'exclude'     => array(),
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

							<?php
							?>
			<div class="case__more case__more--center">
				<a href="<?php echo $urlBtnCases; ?>">
				<?php the_field('tekst_na_knopke-case', pll_current_language('slug')); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-link.svg" alt="">
				</a>
			</div>

		</div>
	</section>
	<div class="container">
		<div class="subscribe">
			<div class="subscribe__before">
				<div class="subscribe__black"></div>
			</div>
			<div class="subscribe__inner">

				<?php if(CURRENT_LANG === 'ru') { ?>

				<div class="case__title case__title--white">
					<h3>Подпишись на рассылку<span class="black">.</span></h3>
				</div>
				<div class="subscribe__categ">
					<div class="categ">Новости</div>
					<div class="categ">Дайджесты</div>
					<div class="categ">Маркетинговые инсайты</div>
					<div class="categ">И другое</div>
				</div>
				<form action="/" method="post">
					<div class="form__inner form__inner--subscribe">
						<div class="form__nick">Как к вам обращаться?*</div>
						<input class="form__input form__input--white" type="text" name="name" placeholder="Мой властелин">
						<input class="form__input" type="email" name="email" placeholder="Электропочта*">
						<button class="form__btn form__btn--black" type="submit">Подписаться на рассылку</button>
					</div>
					<div class="subscribe__info">
						Поля отмеченные * – обязательны для заполнения. Заполняя данную форму вы соглашаетесь с правилами конфиденциальности
					</div>
				</form>

				<?php } else{
				?>

				<div class="case__title case__title--white">
					<h3>Sign up for the newsletter<span class="black">.</span></h3>
				</div>
				<div class="subscribe__categ">
					<div class="categ">News</div>
					<div class="categ">Digests</div>
					<div class="categ">Marketing insights</div>
					<div class="categ">And other</div>
				</div>
				<form action="/" method="post">
					<div class="form__inner form__inner--subscribe">
						<div class="form__nick">How can I call you?*</div>
						<input class="form__input form__input--white" type="text" name="name" placeholder="Name">
						<input class="form__input" type="email" name="email" placeholder="Email*">
						<button class="form__btn form__btn--black" type="submit">Subscribe to newsletter</button>
					</div>
					<div class="subscribe__info">
					Fields marked with * are required. By filling out this form you agree to the privacy policy.
					</div>
				</form>

				<?php
				} ?>

				

					
			</div>
		</div>
	</div>





<?php
get_footer();



