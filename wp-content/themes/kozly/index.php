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
 * @package kozly
 */

get_header();
?>

<div class="nav" id="nav">
		<div class="nav__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-white.svg" alt="">
		</div>
		<div class="nav__inner">
			<div class="nav__title">KozLy<span class="orange">.</span></div>
			<div class="nav__subtitle">Agency</div>
			<div class="nav__cat" id="nav__cat">
				<a href="index.html">Главная</a>
				<a href="services.html">Услуги</a>
				<a href="#contact">Контакты</a>
				<a href="who_we_are.html">О нас</a>
				<a href="cases.html">Кейсы</a>
			</div>
		</div>
		<div class="nav__footer">
			<div class="nav__footeritem">
				
			</div>
			<div class="nav__footeritem">
				Презентация агенства
			</div>
			<div class="nav__footeritem">
				Политика конфиденциальности
			</div>
			<div class="nav__footeritem">
				<div class="btn__menu">Оставить заявку</div>
			</div>
		</div>
	</div>

	
	<div class="container">
		<div class="intro" id="intro">
				<div class="intro__inner">
					<div class="case__subtitle case__subtitle--white">
						поможем вашему бизнесу покорить вершину Digital!
					</div>
					<div class="intro__title">
						KozLy<span class="orange">.</span>
					</div>
					<div class="intro__subtitle">
						Agency
					</div>

				</div>
				<div class="intro__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/globus-bg.svg" alt="">
				</div>
		</div> <!-- intro -->
	</div>

	<div class="container">
		<div class="case">
			<div class="case__inner">
				<div class="case__subtitle">
					О нас
				</div>
				<div class="case__title">
					<h5>Кто мы такие<span class="orange">?</span></h5>
				</div>
				<div class="case__text">
					Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
					Разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты.
					<br><br><br>
					Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента.
				</div>
				<div class="case__more">
					<a href="javascript:void(0);">
						Подробнее
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-link.svg" alt="">
					</a>
				</div>
			</div>
			<div class="stat">
				<div class="stat__item">
					<div class="stat__inner">
						<div class="stat__count">
							260
						</div>
						<div class="stat__text">
							проектов
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__in">
							<div class="stat__count">
								$490 000
							</div>
							<div class="stat__text">
								оборот в год
							</div>
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__count">
							150
						</div>
						<div class="stat__text">
							человек в команде
						</div>
					</div>
					<div class="stat__inner">
						<div class="stat__count">
							1.49млрд
						</div>
						<div class="stat__text">
							Людей посещают наши ресурсы
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
					Наши услуги
				</div>
				<div class="case__title case__title--white">
					Наши услуги<span class="orange">?</span>
				</div>
				<div class="services__text">
					<div class="services__item">
						<div class="services__title">Digital</div>
						<div class="services__subtitle">Стратегия</div>
						<div class="services__subtitle">Выход в диджитал</div>
						<div class="services__subtitle">Креативный маркетинг</div>
					</div>
					<div class="services__item">
						<div class="services__title">Аудит</div>
						<div class="services__subtitle">Технический SEO аудит</div>
						<div class="services__subtitle">Аудит рекламных аккаунт PPS</div>
						<div class="services__subtitle">Анализ конкурентов</div>
						<div class="services__subtitle">Анализ соц. сетей</div>
					</div>
					<div class="services__item">
						<div class="services__title">design</div>
						<div class="services__subtitle">Графический дизайн</div>
						<div class="services__subtitle">Motion-design</div>
						<div class="services__subtitle">Брендинг</div>
					</div>
					<div class="services__item">
						<div class="services__title">web</div>
						<div class="services__subtitle">Лендинг</div>
						<div class="services__subtitle">Корпоративные сайты</div>
						<div class="services__subtitle">Порталы</div>
						<div class="services__subtitle">Интернет-магазины</div>
					</div>
					<div class="services__item">
						<div class="services__title">Smm</div>
						<div class="services__subtitle">Полное сопровождение</div>
						<div class="services__subtitle">Стратегия</div>
						<div class="services__subtitle">Поддержка</div>
					</div>
					<div class="services__item">
						<div class="services__title">полиграфия</div>
						<div class="services__subtitle">Широкоформатная печать</div>
						<div class="services__subtitle">Офсетная печать</div>
						<div class="services__subtitle">Цифровая печать</div>
						<div class="services__subtitle">Сувенирная продукция</div>
					</div>
				</div>
			</div>
			<div class="services__form">
				<form action="/" method="post">
					<div class="form__inner">
						<div class="form__title">Не нашли нужного?</div>
						<div class="form__img">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/gif/1deb154e6909ef309f613779011995ee.gif" alt="">
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
						<button class="form__btn" type="submit">Отправить</button>
					</div>
				</form>
			</div>
		</div>	
	</div>

	<section>
		<div class="container">
			<div class="case">
				<div class="case__inner">
					<div class="case__subtitle">
						наша гордость
					</div>
					<div class="case__title">
						<h5>Наши кейсы<span class="orange">?</span></h5>
					</div>
					<div class="case__text">
						Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента. <br>
						Разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты.
					</div>
					<div class="case__more">
						<a href="javascript:void(0);">
							Все наши кейсы
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-link.svg" alt="">
						</a>
					</div>
				</div>
				<div class="case__images">
					
				</div>
			</div>

			<div class="case">
				<div class="case__images">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image 9.jpg" alt="">
				</div>
				<div class="case__inner">
					<div class="case__title">
						<a href="javascript:void(0);"><h2>Веселый молочник</h2></a>
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
			</div>
			
			<div class="case">
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
			</div>

			<div class="case">
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
			</div>
			<div class="case__more case__more--center">
				<a href="javascript:void(0);">
					Все наши кейсы
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
			</div>
		</div>
	</div>

<?php
get_footer();
