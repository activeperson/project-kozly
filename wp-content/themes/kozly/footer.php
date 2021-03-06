<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kozly
 */

?>

	<footer>
		<div class="container">
			<div class="request">
				<div class="case__title case__title--white">
					<h6>Оставить заявку<span class="orange">.</span></h6>
				</div>
				<div class="request__form">
					<form action="/" method="post">
						<div class="request__inner">
							<div class="form__nick">Как к вам обращаться?*</div>
							<input class="form__input" type="text" name="name" placeholder="Мой властелин">
							<div class="form__description">Опишите, что вас интересует и примерный бюджет</div>
							<textarea class="form__input form__input--ask" type="text" name="name" placeholder="Сеть магазинов по продаже мотоциклов, нуждаемся в анализе, таргетинговой рекламе и дизайне баннеров. Бюджет около $7400" wrap="soft"></textarea>
							<input class="form__input" type="tel" name="tel" placeholder="Контактный телефон">
							<input class="form__input" type="email" name="email" placeholder="Электропочта">
							<button class="form__btn" type="submit">Отправить</button>
						</div>
						<div class="subscribe__info">
							Поля отмеченные * – обязательны для заполнения<br>
							Заполняя данную форму вы соглашаетесь с правилами конфиденциальности
						</div>
					</form>
				</div>
				
			</div>
		</div>

		<div class="container" id="contact">
			<div class="footer__contact">
				<div class="contact">
					<div class="contact__inner">
						<div class="case__title case__title--white">
							<h4>Контакты<span class="black">.</span></h4>
						</div>
						<div class="contact__subtitle">
							Телефон:
						</div>
						<div class="contact__text">
							<a href="javascript:void(0);">+ 380 99 12 34 999</a>
							<a href="javascript:void(0);">+ 380 66 34 21 999</a>
						</div>
						<div class="contact__subtitle">
							Электро-почта:
						</div>
						<div class="contact__text">
							<a href="javascript:void(0);">sale@kozly.agency</a>
						</div>
						<div class="contact__subtitle">
							Адрес:
						</div>
						<div class="contact__text">
							<a href="javascript:void(0);">г. Киев, Контрактовая площадь 12, офис 3</a>
						</div>
						<div class="contact__subtitle">
							Мы в соц. сетях:
						</div>
						<div class="contact__icon">
							<a href="javascript:void(0);">
								<svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.9204 6.83594C10.2167 6.83594 7.14795 9.85181 7.14795 13.6084C7.14795 17.365 10.1638 20.3809 13.9204 20.3809C17.6771 20.3809 20.6929 17.3121 20.6929 13.6084C20.6929 9.90472 17.6241 6.83594 13.9204 6.83594ZM13.9204 17.947C11.5395 17.947 9.58181 15.9894 9.58181 13.6084C9.58181 11.2275 11.5395 9.2698 13.9204 9.2698C16.3014 9.2698 18.2591 11.2275 18.2591 13.6084C18.2591 15.9894 16.3014 17.947 13.9204 17.947Z" fill="white"/>
								<path d="M20.9577 8.21136C21.8052 8.21136 22.4921 7.52439 22.4921 6.67697C22.4921 5.82955 21.8052 5.14258 20.9577 5.14258C20.1103 5.14258 19.4233 5.82955 19.4233 6.67697C19.4233 7.52439 20.1103 8.21136 20.9577 8.21136Z" fill="white"/>
								<path d="M24.9258 2.70886C23.5501 1.28029 21.5925 0.539551 19.3703 0.539551H8.47079C3.86761 0.539551 0.798828 3.60833 0.798828 8.21151V19.0581C0.798828 21.3332 1.53957 23.2909 3.02105 24.7194C4.44962 26.0951 6.35438 26.7829 8.5237 26.7829H19.3173C21.5925 26.7829 23.4972 26.0422 24.8729 24.7194C26.3015 23.3438 27.0422 21.3861 27.0422 19.111V8.21151C27.0422 5.98929 26.3015 4.08452 24.9258 2.70886ZM24.7142 19.111C24.7142 20.7512 24.1322 22.0739 23.1798 22.9734C22.2274 23.8729 20.9046 24.3491 19.3173 24.3491H8.5237C6.93639 24.3491 5.61364 23.8729 4.66126 22.9734C3.70888 22.021 3.23269 20.6983 3.23269 19.0581V8.21151C3.23269 6.62421 3.70888 5.30146 4.66126 4.34908C5.56073 3.4496 6.93639 2.97341 8.5237 2.97341H19.4232C21.0105 2.97341 22.3332 3.4496 23.2856 4.40199C24.1851 5.35437 24.7142 6.67712 24.7142 8.21151V19.111Z" fill="white"/>
								</svg>

							</a>
							<a href="javascript:void(0);">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.9823 26.1506C11.8593 26.1682 8.73622 26.1272 5.61904 25.9572C4.60536 25.8986 3.59169 25.8107 2.67177 25.3127C2.05654 24.9787 1.58193 24.5158 1.2831 23.8596C0.779193 22.7697 0.620989 21.6213 0.527239 20.4494C0.328021 18.0295 0.316302 15.6096 0.421771 13.1955C0.474505 11.9123 0.515521 10.6174 0.820208 9.35762C0.937396 8.86543 1.10732 8.38497 1.33583 7.92793C1.8749 6.85567 2.8124 6.32247 3.94326 6.09981C4.89247 5.91231 5.86513 5.91817 6.83193 5.87715C10.1073 5.74239 13.3886 5.67207 16.6698 5.70723C19.1952 5.73653 21.7265 5.80098 24.2519 5.92989C25.0311 5.9709 25.8163 5.98262 26.5604 6.25801C27.5683 6.63301 28.3183 7.26582 28.7226 8.29121C29.1151 9.27559 29.2675 10.2951 29.3495 11.3439C29.578 14.1916 29.5839 17.0393 29.3964 19.8869C29.3319 20.8479 29.2675 21.8088 29.0155 22.7522C28.4472 24.9201 27.0936 25.7697 25.1073 25.9045C22.9862 26.0451 20.8593 26.1213 18.7323 26.1506C17.4843 26.1623 16.2304 26.1506 14.9823 26.1506ZM11.9061 20.1564C14.7421 18.6037 17.5429 17.0686 20.3905 15.51C17.537 13.9455 14.7362 12.4162 11.9061 10.8635C11.9061 13.9865 11.9061 17.051 11.9061 20.1564Z" fill="white"/>
								</svg>

							</a>
							<a href="javascript:void(0);">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.3943 11.5033H17.3489V8.85009C17.3489 7.85367 18.0093 7.62137 18.4744 7.62137C18.9385 7.62137 21.3292 7.62137 21.3292 7.62137V3.24093L17.3975 3.22559C13.033 3.22559 12.0397 6.49266 12.0397 8.58339V11.5033H9.51562V16.0171H12.0397C12.0397 21.8099 12.0397 28.7896 12.0397 28.7896H17.3489C17.3489 28.7896 17.3489 21.7411 17.3489 16.0171H20.9313L21.3943 11.5033Z" fill="white"/>
								</svg>
							</a>
							<a href="javascript:void(0);">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 28.5C22.4558 28.5 28.5 22.4558 28.5 15C28.5 7.54416 22.4558 1.5 15 1.5C7.54416 1.5 1.5 7.54416 1.5 15C1.5 22.4558 7.54416 28.5 15 28.5Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.442 18.2263C14.9221 18.7327 14.4067 19.2307 13.8961 19.7326C13.7176 19.9084 13.5169 20.0056 13.2607 19.9921C13.0858 19.9828 12.988 19.906 12.9343 19.7401C12.5431 18.526 12.1462 17.3149 11.7571 16.0996C11.7193 15.9817 11.6635 15.9244 11.5441 15.8875C10.6225 15.6061 9.70266 15.3181 8.78436 15.0262C8.64306 14.9812 8.50056 14.9224 8.37846 14.8393C8.18976 14.7115 8.16216 14.503 8.33136 14.353C8.48766 14.2147 8.67426 14.0941 8.86806 14.0173C9.99456 13.5709 11.1271 13.1389 12.2578 12.703C15.1273 11.5951 17.9968 10.4881 20.8666 9.38024C21.4123 9.16934 21.8317 9.46634 21.775 10.0564C21.7387 10.4338 21.6409 10.8052 21.562 11.1778C20.9389 14.1199 20.3152 17.0623 19.6888 20.0038C19.54 20.7022 19.0495 20.8846 18.4747 20.4607C17.512 19.7512 16.5502 19.0393 15.5881 18.3286C15.5422 18.2953 15.4945 18.2632 15.442 18.2263ZM13.2811 19.1197C13.2919 19.1167 13.3027 19.1137 13.3135 19.111C13.3195 19.0834 13.3282 19.0564 13.3306 19.0291C13.3924 18.3622 13.4578 17.6956 13.5115 17.0275C13.5235 16.8787 13.5745 16.7731 13.6864 16.6729C14.5738 15.8794 15.4558 15.0808 16.3396 14.284C17.3179 13.4017 18.2965 12.5203 19.2712 11.6344C19.3315 11.5798 19.3567 11.4868 19.3981 11.4112C19.3063 11.4013 19.2079 11.3644 19.1245 11.386C19.0108 11.4154 18.9031 11.4814 18.8017 11.5453C16.6426 12.9052 14.4853 14.2675 12.3247 15.6247C12.2026 15.7015 12.1798 15.7666 12.2263 15.9007C12.3856 16.3582 12.5305 16.8199 12.6808 17.2807C12.8809 17.8939 13.081 18.5068 13.2811 19.1197Z" fill="#FF7246"/>
								</svg>

							</a>
						</div>
						<div class="subscribe__categ subscribe__categ--footer">
							<a class="categ" href="index.html">Главная</a>
							<a class="categ" href="services.html">Услуги</a>
							<a class="categ" href="#contact">Контакты</a>
							<a class="categ" href="who_we_are.html">О нас</a>
							<a class="categ" href="who_we_are.html">Кейсы</a>
						</div>
						<div class="footer__copyrite">
							© KozLy Studio 2010
						</div>
					</div>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.8586451944593!2d30.51614511573185!3d50.46235687947701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce41a0ae2003%3A0x3d70b42be82ba513!2z0JrQvtC90YLRgNCw0LrRgtC-0LLQsNGPINC_0LsuLCAxMiwg0JrQuNC10LIsIDA0MDcw!5e0!3m2!1sru!2sua!4v1581973400254!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>	
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="assets/js/app.js"></script> -->

</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
