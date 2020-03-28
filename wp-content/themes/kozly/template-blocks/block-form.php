<?php   



if(CURRENT_LANG === 'ru'){

	if (is_404() ){
		
	} else {
		?>
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
		<?php
	}
?>





<?php
} else {

	if (is_404() ){

	} else {
	?>
		<div class="container">
			<div class="request">
				<div class="case__title case__title--white">
					<h6>Submit your application<span class="orange">.</span></h6>
				</div>
				<div class="request__form">
					<form action="/" method="post">
						<div class="request__inner">
							<div class="form__nick">How can I call you?*</div>
							<input class="form__input" type="text" name="name" placeholder="Name">
							<div class="form__description">Describe what interests you and the approximate budget</div>
							<textarea class="form__input form__input--ask" type="text" name="name" placeholder="A chain of motorcycle stores, we need analysis, targeted advertising and banner design. Budget around $ 7400" wrap="soft"></textarea>
							<input class="form__input" type="tel" name="tel" placeholder="Phone">
							<input class="form__input" type="email" name="email" placeholder="Email">
							<button class="form__btn" type="submit">Submit</button>
						</div>
						<div class="subscribe__info">
							Fields marked with * - are required<br>
							By filling out this form you agree to the privacy policy.
						</div>
					</form>
				</div>
				
			</div>
		</div>
	<?php
	}
}
?>


