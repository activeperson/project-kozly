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
<style>


.breadcrumb > span:before{
	content: '';
	width: 35px;
	height: 8px;
	display: inline-block;
	background-image: url('<?php echo ASSETS_URI; ?>/images/icons/navi-arrow.svg');
	margin-right: 15px;
}
.breadcrumb > span{
	background-repeat: no-repeat;
	background-position: center;
	display: inline-block;
}
.breadcrumb > span:not(:last-child){
	margin-right: 15px;
}
.breadcrumb {
	left: 12%;
    position: absolute;
    color: #ffffff;
    z-index: 10;
    top: 35px;
}
.breadcrumb span.current-item{
	color: rgba(255,255,255, .5);
}
.breadcrumb a, .breadcrumb span{
	font-family: Ubuntu;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #FFFFFF;
	text-decoration: none;
}

</style>
<div class="container">
<div class="breadcrumb">


<?php
	if(function_exists('bcn_display'))
	{
	bcn_display();
	}
?>
</div>
		<div class="intro" id="intro">
			<div class="intro__inner">
				<div class="case__title case__title--white">
				<?php the_field('zagolovok_onas', pll_current_language('slug')); ?>
				</div>
				<div class="case__list case__list--white">
					<ul>

					<?php
						if( have_rows('spisok_pod_zagolovkom', pll_current_language('slug')) ) {
							while ( have_rows('spisok_pod_zagolovkom', pll_current_language('slug')) ) { 
								the_row();
							?>
								<li><?php the_sub_field('element_onas', pll_current_language('slug')); ?></li>
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
					<?php the_field('nazvanie_bloka_onas', pll_current_language('slug')); ?>
					</div>
					<div class="case__title">
						<h5><?php the_field('zagolovok_bloka_o_nas', pll_current_language('slug')); ?><span class="orange">.</span></h5>
					</div>
				</div>
				<div class="team">
				<?php
						if( have_rows('nasha_komanda_spisok_sotrudnikov', pll_current_language('slug')) ) {
							while ( have_rows('nasha_komanda_spisok_sotrudnikov', pll_current_language('slug')) ) { 
								the_row();
							?>
								<div class="team__item">
									<div class="team__img">
										<img src="<?php the_sub_field('fotografiya_sotrudnika', pll_current_language('slug')); ?>" alt="">
									</div>
									<div class="team__name"><?php the_sub_field('imya_i_familiya_sotrudnika', pll_current_language('slug')); ?></div>
									<div class="team__prof"><?php the_sub_field('dolzhnost_sotrudnika', pll_current_language('slug')); ?></div>
								</div>

							<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	</section>	
<?php 
get_footer();