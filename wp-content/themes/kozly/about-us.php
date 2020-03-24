<?php
/*
Template Name: Шаблон About us
*/

get_header();

?>

<style>

    .grid{
        display: flex;
    }

</style>

<div class="grid">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="container">
		<div class="intro" id="intro">
			<div class="intro__inner">
				<div class="case__title case__title--white">
					Кто мы такие<span class="orange">?</span>
				</div>
				<div class="case__list case__list--white">
					<ul>
						<li>Молодая и динамичная компания, 150+ завершенных проектов</li>
						<li>Крупный штат профессианалов, знающих свое дело</li>
						<li>Всего выпито 2500+ кружек зернового кофе или 102 кг</li>
						<li>70 специалистов (планируем 100+ к конфу 2020)</li>
					</ul>
				</div>
			</div>
			<div class="intro__item">
				<div class="col__one">
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-1-1.jpg" alt="">
					</div>
					<div class="col__item col__item--center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-1-2.jpg" alt="">
					</div>
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-1-3.jpg" alt="">
					</div>
				</div>
				<div class="col__two">
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-2-1.jpg" alt="">
					</div>
					<div class="col__item col__item--center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-2-2.jpg" alt="">
					</div>
					<div class="col__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/picture/2-2-3.jpg" alt="">
					</div>
				</div>
			</div>
		</div> <!-- intro -->
	</div>

	<section>
		<div class="container">
			<div class="case case--team">
				<div class="case__inner">
					<div class="case__subtitle">
						О нас
					</div>
					<div class="case__title">
						<h5>Наша команда<span class="orange">.</span></h5>
					</div>
				</div>
				<div class="team">
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/1.jpg" alt="">
						</div>
						<div class="team__name">Kathryn Wilson</div>
						<div class="team__prof">CEO</div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/2.jpg" alt="">
						</div>
						<div class="team__name">Shawn Miles</div>
						<div class="team__prof">SEO-специалист</div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/3.jpg" alt="">
						</div>
						<div class="team__name">Guy Richards</div>
						<div class="team__prof">Project Manager</div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/4.jpg" alt="">
						</div>
						<div class="team__name">Norma Pena</div>
						<div class="team__prof">Копирайтер</div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/5.jpg" alt="">
						</div>
						<div class="team__name">Kathryn Wilson</div>
						<div class="team__prof">Аналитическое мышление </div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/6.jpg" alt="">
						</div>
						<div class="team__name">Shawn Miles</div>
						<div class="team__prof">SEO-специалист</div>
					</div>
					<div class="team__item">
						<div class="team__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/7.jpg" alt="">
						</div>
						<div class="team__name">Guy Richards</div>
						<div class="team__prof">Project Manager</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

























<?php 

get_footer();