<?php
/*
Template Name: Шаблон детальной страницы кейса

Template Post Type: post
*/


get_header();
?>

<?php
    
    $metas = get_post_meta(  $post->ID);
    $big_image = wp_get_attachment_image_src( $metas['kartinka_na_ves_ekran_pervyj_ekran'][0], 'full' );
    $imgForVideo = wp_get_attachment_image_src( $metas['kartinka_dlya_video'][0], 'full' );
?>


<div class="container single-case">
        <?php 
			// get_template_part('template-blocks/block', 'grid');
		?>
        <?php 
			get_template_part('template-blocks/block', 'breadcrumb');
		?>
		<div class="intro" style="background-image: url(<?php echo $big_image[0]; ?>)">
			<div class="intro__inner">
				<div class="case__title case__title--white">
				<?php the_title(); ?><span class="orange">.</span>
				</div>
			</div>
        </div>
        


        <div class="wrapper-case">
        <div class="case">
				<div class="case__inner">
					<div class="case__subtitle"><?php echo $metas['tekst_nad_zagolovkom_detail_case'][0]; ?></div>
					<div class="case__title">
						<h5><?php echo $metas['zagolovok_bloka_detail-case'][0]; ?><span class="orange">.</span></h5>
                    </div>
                    <div class="case__text"><?php echo $metas['opisanie_pervogo_bloka_detail_case'][0]; ?></div>
                    <div class="case__subtitle"><?php echo $metas['tekst_nad_navigacziej'][0]; ?></div>

                    <?php
						if( have_rows('navigacziya_po_kejsu') ) {
							while ( have_rows('navigacziya_po_kejsu') ) { 
                                the_row();
                            ?>
                            <div class="case__links">
                                <a href="#<?php the_sub_field('unikalnyj_id_dlya_nazvaniya'); ?>"><?php the_sub_field('nazvanie_detail_case'); ?></a>
                            </div>
							<?php
							}
						}
					?>
				</div>
			</div>
        </div>


        <?php if($metas['pokazyvat_video_blok'][0]) { ?>
            <div class="case__video-block" style="background: url(<?php echo $imgForVideo[0]; ?>">
                <div class="video-block__background">
                    <span class="video-block__play"></span>
                </div>
            </div>
        <?php } ?>

        <div class="case">
				<div class="case__inner">
                <div class="case__title">
						<h5 id="design"><?php echo $metas['zagolovok_bloka_v3'][0]; ?><span class="orange">.</span></h5>
                    </div>
                    <div class="case__text"><?php echo $metas['opisanie_bloka_v2'][0]; ?></div>
				</div>
			</div>
        </div>


        <div class="block-stages case">

                    <?php
                        $idSS = 1;
						if( have_rows('etapy_detail_new') ) {

							while ( have_rows('etapy_detail_new') ) { 
                                the_row();

                            ?>
                               <div class="block-stages__item">
                                    <div class="block-stages__count"><?php echo $idSS++;?></div>
                                    <div class="block-stages__text"><?php the_sub_field('opisanie_detail_new'); ?></div>
                                </div>
							<?php
							}
						}
					?>
        </div>

        <div class="block-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image2-for-case.jpg" alt="Image">
        </div>

        <div class="block-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-3-for-case.jpg" alt="Image">
        </div>

        <div class="some-pictures">
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image30.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image31.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image32.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image33.jpg" alt="Image">
            </div>
        </div>

        <div class="case">
				<div class="case__inner">
                <div class="case__title">
						<h5 id="poligrafiya">Полиграфия<span class="orange">.</span></h5>
                    </div>
                    <div class="case__text">Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента. Двно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации</div>
				</div>
			</div>
        </div>

        <div class="some-pictures">
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image35.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image36.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image37.jpg" alt="Image">
            </div>
            <div class="pictures_elem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image38.jpg" alt="Image">
            </div>
        </div>

        <div class="block-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/image28.jpg" alt="Image">
        </div>


        <div class="case">
				<div class="case__inner pb-0">
                <div class="case__title">
						<h5 id="rezultat">Результаты<span class="orange">.</span></h5>
                    </div>
                    <div class="case__text">Ведем социальные сети брендов, разрабатываем сайты, запускаем эффективные рекламные кампании и масштабные проекты с лидерами мнений. Комбинируем все digital-инструменты, чтобы эффективно решить задачи клиента. Двно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации</div>
				</div>
			</div>
        </div>


        <div class="table-case">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td></td>
                    <td>До</td>
                    <td>После</td>
                </tr>

                <?php
						if( have_rows('tablicza_rezultatov') ) {
							while ( have_rows('tablicza_rezultatov') ) { 
                                the_row();
                            ?>
                                <tr>
                                    <td><?php the_sub_field('nazvanie_v23'); ?></td>
                                    <td><?php the_sub_field('do'); ?></td>
                                    <td><?php the_sub_field('posle'); ?></td>
                                </tr>
							<?php
							}
						}
					?>
            </table>
            <div class="case__text">Как мы видим, чтобы эффективно решить задачи клиента. Двно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации</div>
        </div>

</div>


<script>
var blockWithVideo = document.querySelector('.case__video-block');
var startVideoButton = document.querySelector('.video-block__play');

    startVideoButton.addEventListener('click', function(){
        blockWithVideo.style.background = 'none';
        var parentVideoBlock = this.parentNode.parentNode
        parentVideoBlock.innerHTML = '<iframe width="100%" height="768px" src="https://www.youtube.com/embed/<?php echo $metas['iframe_dlya_video'][0]; ?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    });
</script>

<?php
get_footer();