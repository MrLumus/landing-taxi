<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="section-header"><a id="header"></a>
		<div class="section-header-head container">
			<div class="section-header-head__logo light upper">
				<span class="extrabold">Оклейка авто</span> под такси
			</div>
			<div class="section-header-head__phone">
				<i class="fa fa-phone"></i>
				<div class="phone extrabold"><?php the_field('телефон_в_шапке', options); ?></div>
			</div>
		</div>
		<div class="section-header-nav">
			<div class="container">
				<div class="burger">
					<a href="#" class="menu-btn">
						<span></span>
					</a>
				</div>
				<div class="navbar">
					<ul class="navbar__items bold upper">
						<a href="#header"><li>Оклейка авто</li></a>
						<a href="#price"><li>Цены</li></a>
						<a href="#rent"><li>Сроки</li></a>
						<a href="#about"><li>Примеры</li></a>
						<a href="#feedback"><li>Отзывы</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class="section-header-content">
			<div class="container">
				<div class="section-header-content__title bold upper">
				только до конца февраля!
			</div>
			<div class="section-header-content__promo-text light">
				Только до конца февраля! Брендирование автомобиля под Яндекс + светодиодный “Light Box” всего за 8 500 руб! Получите дополнительный приоритет заказов установив фирменный Light Box Яндекс!
			</div>
			<div class="section-header-content__price">
				<img src="<?php echo get_template_directory_uri();?>/img/mark.png" alt="" height="28px">
				<div class="price extrabold upper">
					<?php the_field('цена_в_баннере', options); ?>
				</div>
			</div>
			<div class="section-header-content__formblock">
				<div class="title upper bold">
					оставьте заявку на оклейку авто, и мы вам перезвоним
				</div>
				<div class="form">
					<label for="name" class="label-name">Ваше имя</label>
					<input type="text" id="name" placeholder="Иван" class="name">

					<select name="" id="" class="select">
						<option value="1">Выберите оклейку</option>
						<option value="2">ГОСТ</option>
						<option value="3">Яндекс</option>
						<option value="4">Яндекс + Light Box</option>
					</select>
					<label for="phone" class="label-phone">Ваш телефон</label>
					<input type="text" id="phone" placeholder="+7 --- -- --" class="phone">
					<button class="button upper bold">Отправить заявку</button>
				</div>
			</div>
			</div>
		</div>
	</div>
		
	

	<div class="section-price"><a id="price"></a>
		<div class="container">
			<div class="section-price-inner">
				<div class="section-price-title upper bold">
					Стоимость оклейки авто под такси
				</div>
				<div class="section-price-promo-text regular">
					Выберете подходящий для себя вариант оклейки автомобиля и закажите оклейку 
					автомобиля через сайт или позвоните по номеру телефона +7 (909) 981-71-71
				</div>
				<div class="section-price-grid">
					<?php if( have_rows('варианты_оклейки',options) ): ?>


	<?php while( have_rows('варианты_оклейки',options) ): the_row(); 

		// vars
		$image = get_sub_field('картинка');
		$price = get_sub_field('цена');
		$title = get_sub_field('название');

		?>

					<div class="section-price-grid__wrapper item">
						<div class="price-block">
							<div class="price-block__title">
								<div class="header-img">
									<img src="<?php echo get_template_directory_uri();?>/img/product-box-logo.jpg" alt="" width="60px">
								</div>
								<div class="title">
									<?php echo $title; ?>
								</div>
							</div>
							<div class="price bold">
								<?php echo $price; ?>
							</div>
							<div class="bg-img">
								<img src="<?php echo $image['url'];?>" alt="" width="236px" height="124px">
							</div>
						</div>
						<div class="button">
							<button class="upper bold">
								заказать обклейку
							</button>
						</div>
					</div>

	<?php endwhile; ?>

<?php endif; ?>
</div>		

					

				<div class="section-price__request-box">
					<div class="text">
						Моментальное подключение к Яндекс и Гетт в день обращения! Быстрый вывод денег! Приезжать не нужно, подключим дистанционно. 3%
					</div>
					<div class="wrapper">
						<div class="button">
							<button class="upper bold">
								Оставить заявку на подключение
							</button>
						</div>
						<div class="phone">
							<i class="fa fa-phone"></i>
							<div class="phone-number extrabold">
								<?php the_field('телефон_в_блоке_заявки', options); ?>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

	<div class="section-license">
		<div class="container">
			<div class="container-inner">
				<div class="title upper extrabold">
					Лицензия такси. Быстро и надежно
				</div>
				<div class="price extrabold">
					<?php the_field('цена_лицензии', options); ?>
				</div>
				<div class="button">
					<button class="bold">
						Заказать лицензию
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="section-about-us"><a id="about"></a>
		<div class="container">
			<div class="section-about-us-inner">	
				<div class="section-about-us-inner__title-first upper extrabold centered">
					Наши преимущества
				</div>
				<div class="section-about-us-inner__promo light centered">
					 Мы давольно давно работаем с сфере оклейки и брендирования автомобилей 
					 и выявили большое колличество фактов,которые помогли нам стать одними из лучших в своем деле
				</div>
				<div class="section-about-us-inner__icon-grid">
					<div class="item-1">
						<img src="<?php echo get_template_directory_uri();?>/img/icon-1.png" height="52px" alt="">
						<div class="title upper bold">Многолетний опыт</div>
					</div>
					<div class="item-2">
						<img src="<?php echo get_template_directory_uri();?>/img/icon-2.png" height="52px" alt="">
						<div class="title upper bold">Профессиональные мастера</div>
					</div>
					<div class="item-3">
						<img src="<?php echo get_template_directory_uri();?>/img/icon-3.png" height="52px" alt="">
						<div class="title upper bold">Низкие цены</div>
					</div>
					<div class="item-4">
						<img src="<?php echo get_template_directory_uri();?>/img/icon-4.png" height="52px" alt="">
						<div class="title upper bold">Дополнительные бонусы</div>
					</div>
				</div>
				<div class="section-about-us-inner__title-second extrabold upper centered">
					Фото наших работ
				</div>
				<div class="section-about-us-inner__subtitle light centered">
					Автомобили, которые обклеивали наши специалисты
				</div>
				<div class="section-about-us-inner__grid-photos">


				<?php if( have_rows('наши_работы',options) ): ?>


					<?php while( have_rows('наши_работы',options) ): the_row(); 

						// vars
						$image = get_sub_field('картинка');
						$price = get_sub_field('цена');
						$title = get_sub_field('название');

						?>
					
					<div class="item">
						<img src="<?php echo $image['url'];?>" width="100%" height="60%" alt="" class="bg">
						<div class="inner">
							<div class="title upper extrabold"> <?php echo $title ?></div>
							<div class="price">
								<img src="<?php echo get_template_directory_uri();?>/img/mark1.png" height="18px" alt="">
								<div class="price-text extrabold"><?php echo $price ?></div>
							</div>
						</div>
					</div>

					<?php endwhile; ?>

				<?php endif; ?>

					
				</div>
			</div>
		</div>
	</div>

	<div class="section-rent"><a id="rent"></a>
		<div class="container">
			<div class="section-rent-inner">	
				<div class="section-rent-inner__title upper extrabold">Аренда авто под такси</div>
				<div class="section-rent-inner__rent-block">
					<div class="item">
						<img src="<?php echo get_template_directory_uri();?>/img/car2-1.jpg" alt="">
						<div class="text upper bold">Машины класса эконом</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri();?>/img/car2-2.jpg" alt="">
						<div class="text upper bold">Класса комфорт</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri();?>/img/car2-2.jpg" alt="">
						<div class="text upper bold">Класса комфорт +</div>
					</div>
				</div>
				<div class="section-rent-inner__subtitle bold">По самым выгодным ценам!</div>
				<div class="section-rent-inner__promo light">Всегда в наличии свободные авто!</div>
				<div class="section-rent-inner__button">
					<button class="upper extrabold">
						Оставить заявку на аренду авто
					</button>
				</div>
			</div>
		</div>
	</div>
		
	<div class="section-feedbacks"><a id="feedback"></a>	
		<div class="container">
			<div class="section-feedbacks-inner">
				<div class="section-feedbacks-inner__title upper extrabold centered">
					Отзывы наших клиентов
				</div>
				<div class="section-feedbacks-inner__subtitle centered">
					Напишите свой отзыв на почту info@mail.ru
				</div>
				<div class="section-feedbacks-inner__feedbacks">

					<?php if( have_rows('отзывы',options) ): ?>

						<?php while( have_rows('отзывы',options) ): the_row(); 

							// vars
							$image = get_sub_field('картинка');
							$feedback = get_sub_field('отзыв');
							$title = get_sub_field('название');

						?>
					
						<div class="feedback-block">
							<img src="<?php echo $image['url']; ?>" alt="">
							<div class="feedback">
								<div class="title italic bold"><?php echo $title; ?></div>
								<div class="text light"><?php echo $feedback; ?></div>
							</div>
						</div>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

	<div class="section-contact">
		<div class="container">
			<div class="section-contact-inner">
				<div class="main">
					<div class="title upper">
					<span class="upper extrabold">оклейка авто</span> под такси
					</div>
					<div class="addres">
					Адрес: Химки, Ленинский проспект 23 А
					</div>
				</div>
				<div class="phone">
					<i class="fa fa-phone"></i>
					<div class="text upper extrabold"><?php the_field('телефон_в_контактах', options)?></div>
				</div>

			</div>
		</div>
	</div>

	<div class="section-footer">
		<div class="container">
			<div class="section-footer-inner">
				<div class="title upper extrabold">
					Текст для продвижения
				</div>
				<div class="text">
					This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.

					<br><br>

					This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
				</div>
				<hr>
				<div class="footer-text centered light">
					Сайт разработан студией IS ART
				</div>
			</div>
		</div>
	</div>
	<script src="https://use.fontawesome.com/c94be3dc73.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
</body>
</html>