<?php
	include("./ref-info.php");
	include("./lpm-ref-info.php");
	include("./lpm-city-info.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<meta name="viewport" content="width=1000">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/KitSlider.js"></script>
	<script type="text/javascript" src="js/KitHouse.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-491px"></li>
		<li class="v" style="margin-left:490px"></li>
		<li class="v" ></li>
	</ul>
	<div class="menu-overlay"></div>
	<ul class="top-menu">
		<!-- <li class="b-go" data-block=".b-3" data-hash="#company"><a href="#">О компании</a></li> -->
		<li class="b-go" data-block=".b-4" data-hash="#objects"><a href="#">Наши объекты</a></li>
		<li class="b-go" data-block=".b-5" data-hash="#stages">
			<a href="#">Этапы работы</a>
			<ul class="sub-menu">
				<li class="b-go b-click" data-click=".b-steps .step-1" data-block=".b-5" data-hash="#information"><a href="#">01<span>Сбор информации по 17 пунктам</span></a></li>
				<li class="b-go b-click" data-click=".b-steps .step-2" data-block=".b-5" data-hash="#visualisation"><a href="#">02<span>5 визуализаций бесплатно</span></a></li>
				<li class="b-go b-click" data-click=".b-steps .step-3" data-block=".b-5" data-hash="#test-drive"><a href="#">03<span>10 светильников на тест-драйв</span></a></li>
				<li class="b-go b-click" data-click=".b-steps .step-4" data-block=".b-5" data-hash="#delivery"><a href="#">04<span>Поставка светильников с гарантией срока</span></a></li>
				<li class="b-go b-click" data-click=".b-steps .step-5" data-block=".b-5" data-hash="#installation"><a href="#">05<span>Монтаж своей бригадой</span></a></li>
				<li class="b-go b-click" data-click=".b-steps .step-6" data-block=".b-5" data-hash="#service"><a href="#">06<span>Обслуживание</span></a></li>
			</ul>
		</li>
		<li class="b-go" data-block=".b-6" data-hash="#team"><a href="#">О компании</a></li>
		<li class="b-go" data-block=".b-7" data-hash="#guarantee"><a href="#">Гарантия сроков</a></li>
		<li class="b-go" data-block=".b-8" data-hash="#optimize"><a href="#">Оптимизируем смету на 35%</a></li>
		<li class="b-go" data-block=".b-9" data-hash="#contacts"><a href="#">Контакты</a></li>
	</ul>
	<div class="b b-1">
		<div class="b-block">
			<div class="b-top clearfix">
				<div class="b-logo-cont left clearfix">
					<div class="b-burger-button-cont left"><a href="#" class="b-burger-button"><span></span></a></div>
					<a href="#"><img src="i/logo.png" class="left" alt=""></a>
					<div class="b-logo-text left">ГРУППА<br>КОМПАНИЙ</div>
				</div>
				<div class="b-date-cont right clearfix">
					<!-- <p class="left">Звонок по России<br>бесплатный</p> -->
					<h2 class="left">+7 (495) 664-46-74</h2>
					<h3><a href="#" class="fancy b-white-link" data-block="#b-popup-callback">Заказать звонок</a></h3>
				</div>
			</div>
			<h1>Архитектурное<br>освещение зданий<br>и сооружений по<br>всей России</h1>
			<h4>Проектирование, поставка, монтаж.<br>Юридическая гарантия сроков</h4>
			<div class="b-line b-line-1"></div>
			<ul class="b-pips">
				<li class="b-pip-1">
					<h3>56</h3>
					<p>прямых контрактов с<br>заводами по всему миру</p>
					<span></span>
				</li>
				<li class="b-pip-2">
					<h3>1-е</h3>
					<p>Объекты с нашим<br>освещением принимают<br>1-е лица государства</p>
					<span></span>
				</li>
				<li class="b-pip-3">
					<span></span>
					<p>Поставили и смонтировали<br>светильники для здания<br>Сбербанка в г. Самара<br><a href='#' class="b-white-link b-go b-click" data-click=".sber" data-block=".b-4">Подробнее</a></p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block clearfix">
			<div class="left">
				<a href="#" class="fancy b-comm-butt" data-block="#b-popup-commerse">
					<b>Получить коммерческое<br>предложение</b>
					<span>pdf, 2.5 мб.</span>
				</a>
			</div>
			<div class="right">
				<img src="i/book-8.png" alt="">
			</div>
		</div>
	</div>
	<!-- <div class="b b-3" data-stellar-background-ratio="0.5">
		<div class="b-block">
			<h2 class="b-title">Почему архитектурное освещение<br>от 500lux — это лучший выбор для<br>вашего объекта?</h2>
			<h4 class="b-subtitle">Поставим светильники, либо решим задачу освещения «под ключ»</h4>
			<img src='i/logo.png' class="b-logo"/>
			<div class="b-line b-line-3"></div>
			<ul class="b-pips clearfix">
				<li>
					<span></span>
					<h3>Монтаж</h3>
					<p>За 3 дня выведем на ваш<br>объект до 12 монтажников<br>4-го разряда с опытом от<br>5 лет</p>
				</li>
				<li>
					<span></span>
					<h3>Поставка и логистика</h3>
					<p>Доставка по всей России за<br>наш счет. Также самолетные<br>доставки при необходимости</p>
				</li>
				<li>
					<span></span>
					<h3>Разработка</h3>
					<p>7 специалистов в команде<br>с нуля разработают проект<br>освещения для вашего<br>объекта</p>
				</li>
				<li>
					<span></span>
					<h3>Заводы-производители</h3>
					<p>56 прямых контрактов с<br>заводами-производителями в<br>России, Европе, США и Азии</p>
				</li>
			</ul>
		</div>
	</div> -->
	<div class="b b-5" id="b-5" data-stellar-background-ratio="0.5">
	<!-- <div class="b b-5"> -->
		<div class="b-block b-absolute b-top-block">
			<h2 class="b-title">Осуществляем полный цикл работ от<br>разработки технического задания до<br>обслуживания светильников</h2>
			<h4 class="b-subtitle">Ознакомьтесь с 6-ю этапами решения задачи по архитектурному освещению</h4>
			<div class="b-line b-line-5"></div>
			<ul class="b-steps">
				<li class="active step-1">
					<div><span>1</span></div>
					<p>Сбор информации</p>
				</li>
				<li class="step-2">
					<div><span>2</span></div>
					<p>Подготовка</p>
				</li>
				<li class="step-3">
					<div><span>3</span></div>
					<p>Проектирование</p>
				</li>
				<li class="step-4">
					<div><span>4</span></div>
					<p>Поставка</p>
				</li>
				<li class="step-5">
					<div><span>5</span></div>
					<p>Монтаж</p>
				</li>
				<li class="step-6">
					<div><span>6</span></div>
					<p>Обслуживание</p>
				</li>
			</ul>
			<span class="b-way-nav b-way-nav-left" onselectstart="return false;"></span>
			<span class="b-way-nav b-way-nav-right" onselectstart="return false;"></span>
		</div>
		<ul class="b-way-list">
			<li class="b-way b-way-1" id="b-way-1" data-height="909">
				<div class="b-block">
					<div class="b-book"></div>
					<div class="b-shine"></div>
					<div class="b-text-cont">
						<h3 class="step" data-delay="200">Собираем информацию и формируем техническое задание по 17 пунктам:</h3>
						<p class="step" data-delay="800"><span>01.</span>Выявление ключевых задач объекта</p>
						<p class="step" data-delay="900"><span>02.</span>Изучение объекта</p>
						<p class="step" data-delay="1000"><span>03.</span>Изучение истории бренда</p>
						<p class="step" data-delay="1100"><span>04.</span>Изучение световой и архитектурной среды территории</p>
						<a href="#" class="fancy b-white-link step" data-delay="1200" data-block="#b-popup-tz">Смотреть все пункты</a>
					</div>
				</div>
			</li>
			<li class="b-way b-way-2" id="b-way-2" data-height="1215">
				<div class="b-block">
					<div class="b-houses"></div>
					<div class="b-day"></div>
					<div class="b-text-cont">
						<div class="clearfix">
							<h3 class="left step" data-delay="200">Подготовим 5 вариантов<br>визуализации вашего<br>проекта в течение<br>7 дней — за свой счет</h3>
							<div class="right">
								<h4 class="step" data-delay="800">Вместе с визуализацией вы получите:</h4>
								<div class="clearfix">
									<p class="step" data-delay="1000"><span>01.</span>Подбор<br>оборудования</p>
									<p class="step" data-delay="1200"><span>02.</span>Расчет<br>сроков поставки</p>
									<p class="step" data-delay="1400"><span>03.</span>Расчет<br>сметной стоимости</p>
									<p class="step" data-delay="1600"><span>04.</span>Обоснование концепций<br>от руководителя проекта</p>
								</div>
							</div>
						</div>
						<div style="text-align:center;">
							<a href="#" class="b-green-butt step fancy" data-block="#b-popup-visual" data-delay="2200">Получить 5 визуализаций</a>
						</div>
						<ul class="b-house">
							<li><img src="i/b-5/2/1.png" alt=""></li>
							<li><img src="i/b-5/2/2.png" alt=""></li>
							<li><img src="i/b-5/2/3.png" alt=""></li>
							<li><img src="i/b-5/2/4.png" alt=""></li>
							<li><img src="i/b-5/2/5.png" alt=""></li>
						</ul>
						<div class="b-house-thumbs-cont">
							<h5>Переключите пример визуализации</h5>
							<ul class="b-house-thumbs clearfix">
								<li class="clearfix active">
									<img src="i/b-5/2/switch-night.png" alt="">
									<span>01.</span>
									<div></div>
								</li>
								<li class="clearfix">
									<span>02.</span>
									<div></div>
								</li>
								<li class="clearfix">
									<span>03.</span>
									<div></div>
								</li>
								<li class="clearfix">
									<span>04.</span>
									<div></div>
								</li>
								<li class="clearfix">
									<img src="i/b-5/2/switch-day.png" alt="">
									<span>05.</span>
									<div></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<li class="b-way b-way-3" id="b-way-3" data-height="909">
				<div class="b-block">
					<div class="b-lamp"></div>
					<div class="b-shine"></div>
					<div class="b-text-cont">
						<h3 class="step" data-delay="200">Предоставим до 10 светильников на тест-драйв бесплатно. В согласование проекта также входит:</h3>
						<p class="step" data-delay="800"><span>01.</span>Презентация образцов продукции.</p>
						<p class="step" data-delay="900"><span>02.</span>Экскурсия на фабрику-производителя</p>
						<p class="step" data-delay="1000"><span>03.</span>Монтаж нескольких светильников. Демонстрация,<br>как это будет выглядеть на фасаде.</p>
						<p class="step" data-delay="1100"><span>04.</span>Утверждение концепции.</p>
					</div>
				</div>
			</li>
			<li class="b-way b-way-4" id="b-way-4" data-height="1140">
				<div class="b-block">
					<div class="b-shine step" data-delay="200" data-duration="800"></div>
					<div class="b-map"></div>
					<div class="b-text-cont">
						<h3 class="step" data-delay="200">Подберем целесообразные вашей<br>задаче светильники из 11 000 изделий<br>на 56-ти заводах</h3>
						<div class="b-list clearfix">
							<p class="step" data-delay="800"><span>01.</span>Сохраняем качество и<br>экономим до 35% за счет<br>подбора аналогичных изделий.</p>
							<p class="step" data-delay="1200"><span>02.</span>Юридически гарантируем<br>срок поставки.</p>
							<p class="step" data-delay="1600"><span>03.</span>Поставляем на 5% больше,<br>чтобы сэкономить время<br>в случае поломки на стройке.</p>
						</div>
					</div>
				</div>
			</li>
			<li class="b-way b-way-5" id="b-way-5" data-height="909">
				<div class="b-block">
					<div class="b-workers"></div>
					<div class="b-text-cont">
						<h3 class="step" data-delay="200">За 3 дня выведем на ваш объект<br>до 12 монтажников 4-го разряда<br>с опытом от 5 лет</h3>
						<p class="step" data-delay="800">Экономим до 2-х недель. Начинаем монтажные работы параллельно<br>с производством светильников.</p>
					</div>
				</div>
			</li>
			<li class="b-way b-way-6" id="b-way-6" data-height="1024">
				<div class="b-block">
					<div class="b-lamps"></div>
					<div class="b-shine"></div>
					<div class="b-text-cont">
						<h3 class="step" data-delay="200">Если светильник вышел из строя,<br>мы заменим его за 5 дней</h3>
						<p class="step" data-delay="800">Вам не нужно звонить на завод, ждать 21 рабочий день пока ответят на рекламацию<br>и так далее. Если светильник перегорел, мы в тот же день отправим его на завод и<br>запустим производство нового. Через  5 рабочих дней проблема будет решена.</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="b b-4">
		<div class="b-block">
			<h2 class="b-title">Мы сэкономили на освещении<br>нашим заказчикам свыше 27 млн руб.<br>за последние полгода</h2>
			<h4 class="b-subtitle">Оптимизировали смету в каждом проекте в среднем на 29% за счет подбора<br>аналогичного оборудования на других заводах</h4>
			<div class="b-case clearfix">
				<div class="left">
					<ul class="b-left-thumbs b-case-thumbs">
						<li class="active">
							<h5>01.</h5>
							<h6>Сбербанк России</h6>
						</li>
						<li>
							<h5>02.</h5>
							<h6>Гранд-отель Mariott</h6>
						</li>
						<li style="padding: 25px 15px 25px 55px;">
							<h5 style="top: 24px;">03.</h5>
							<h6>Экспериментальный дом</h6>
						</li>
					</ul>
				</div>
				<div class="right b-slider b-case-slider">
					<div class="b-slide" style="display: block;">
						<div class="b-gallery">
							<div class="img" style="background-image:url('i/b-4/1/4.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/1/1.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/1/2.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/1/3.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/1/5.jpg');"></div>
						</div>
						<div class="b-case-desc">
							<h3>Сократили смету на 42% и поставили<br>светильники на 4 недели быстрее</h3>
							<div class="clearfix">
								<div class="left">
									<div class="b-task clearfix">
										<h5>Задача</h5>
										<h6>Фирменный стиль Сбербанка в освещении</h6>
										<p>Разработать архитектурно-художественное освещение, в котором узнавались бы фирменные цвета Сбербанка. Подчеркнуть контуры здания и уложиться в бюджет.</p>
									</div>
									<div class="b-task clearfix">
										<h5>Результат</h5>
										<h6>8 млн руб. экономии без изменения РД</h6>
										<p>1) Мы сэкономили 4 недели, так как.РД осталась в исходном виде.<br><br>2) На свет было выделено 33 кВт, наши светильники потребляют 19 кВт<br><br>3) Смета сократилась на 42%, с 19 млн руб. до 11 млн</p>
									</div>
									<div class="b-hidden-tasks">
										<div class="b-task clearfix">
											<h5>Особенности</h5>
											<h6>Уже была разработана Рабочая Документация</h6>
											<p>РД была изготовлена по другому оборудованию. Нужно было подобрать светильники 1 в 1 как в РД</p>
										</div>
										<div class="b-task clearfix">
											<h5>Решение</h5>
											<h6>Подобрали лучшие из 11 400 наименований светильников из ассортимента наших партнеров</h6>
											<p>В спецификации были светильники в виде трубки длиной 1 метр в количестве 1000 штук. Мы применили бестеневую систему непрерывного освещения General Electric длиной 1000 метров. Визуально никаких различий нет, однако наш вариант оказался энергоэффективнее на 43%. Заказчики были в восторге.</p>
										</div>
									</div>
									<div class="tleft">
										<a href="#" class="b-green-butt b-more">Подробнее</a>
									</div>
								</div>
								<ul class="right b-object">
									<li>
										<div class="b-img" style="background-image: url('i/b-4/1/man.jpg');"></div>
										<h5>Объект принимал</h5>
										<h6>Г.Греф</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-gallery">
							<div class="img" style="background-image:url('i/b-4/2/1.jpg');"></div>
						</div>
						<div class="b-case-desc">
							<h3>Поставили и смонтировали светильники на 2 месяца<br>раньше срока в историческом центре Москвы</h3>
							<div class="clearfix">
								<div class="left">
									<div class="b-task clearfix">
										<h5>Задача</h5>
										<h6>Вписаться в исторический центр Москвы</h6>
										<p>Подчеркнуть фасад, сохранив единую световую среду центра города Москва</p>
									</div>
									<div class="b-task clearfix">
										<h5>Результат</h5>
										<h6>Проект закрыт на 2 месяца раньше срока</h6>
										<p>1) На реализацию ушел 1 месяц, вместо 3-х, заложенных заказчиком.<br><br>2) Сократили смету на 38%, поставив аналогичное немецкое оборудование.<br><br>3) Запуск был в 2012 году, прожектора отлично работают и сегодня.</p>
									</div>
									<div class="b-hidden-tasks">
										<div class="b-task clearfix">
											<h5>Особенности</h5>
											<h6>Работа только в утреннее время</h6>
											<p>Работать возможно было только с 9 до 12 утра, чтобы не тревожить гостей отеля.<br>Количество световых приборов нужно было минимизировать, чтобы не испортить фасад.</p>
										</div>
										<div class="b-task clearfix">
											<h5>Решение</h5>
											<h6>Нужные светильники были у нас в наличии</h6>
											<p>41 светильник мы взяли из наличия, через 3 дня светильники были уже на объекте. Изготовили и смонтировали крепления для светильников за 2 недели. Еще 1 неделя ушла на монтаж.</p>
										</div>
									</div>
									<div class="tleft">
										<a href="#" class="b-green-butt b-more">Подробнее</a>
									</div>
								</div>
								<ul class="right b-object">
									
								</ul>
							</div>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-gallery">	
							<div><iframe width="727" height="444" src="https://www.youtube.com/embed/jNQXAC9IVRw" frameborder="0" allowfullscreen></iframe></div>
							<div class="img" style="background-image:url('i/b-4/3/2.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/1.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/3.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/4.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/5.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/6.jpg');"></div>
							<div class="img" style="background-image:url('i/b-4/3/7.jpg');"></div>
							
						</div>
						<div class="b-case-desc">
							<h3>На 1 месяц раньше срока поставили и смонтировали<br>светильники под контролем Администрации Москвы</h3>
							<div class="clearfix">
								<div class="left">
									<div class="b-task clearfix">
										<h5>Задача</h5>
										<h6>Поставить и смонтировать светильники быстрее конкурентов</h6>
										<p>Нам передали потрясающий дизайн объекта и задачу к нему: "чтобы в жизни было так же красиво, стоило недорого и было смонтировано сверхбыстро..." Мы сделали комплексное предложение на поставку оборудования + монтаж за 1,5 месяца</p>
									</div>
									<div class="b-task clearfix">
										<h5>Результат</h5>
										<h6>Проект закрыт в срок</h6>
										<p>1) Поставили светильники по всем требованиям на 1 месяц быстрее срока<br><br>2) Сократили смету на 27% за счет прямых контрактов с заводами-производителями<br><br>3) Оптимизировали Рабочую Документацию<br>за 10 дней<br><br>4) Смонтировали объект за 1 месяц</p>
									</div>
									<div class="b-hidden-tasks">
										<div class="b-task clearfix">
											<h5>Особенности</h5>
											<h6>Сверхсрочно и надежно</h6>
											<p>Объект был под контролем Администрации Москвы. Сдвигать сроки было нельзя.<br>К оборудованию были повышенные требования по коэффециенту пыле- и влагозащиты IP 67 (светильники крепились на 35 метровой высоте без навеса).<br>Минимальный срок гарантии на оборудование должен был составлять 5 лет</p>
										</div>
										<div class="b-task clearfix">
											<h5>Решение</h5>
											<h6>Повлияли на очередь на заводе</h6>
											<p>Так как мы можем влиять на производственную очередь у наших заводов-партнеров, мы совершили поставку на 1 месяц быстрее.<br>Пока производились светильники, мы параллельно оптимизировали Рабочую Документацию.<br>В то же время мы начали подготовку фасада к монтажу, собрали щит электропитания, закрепили посадочные места для светильников и сэкономили 2 недели.</p>
										</div>
									</div>
									<div class="tleft">
										<a href="#" class="b-green-butt b-more">Подробнее</a>
									</div>
								</div>
								<ul class="right b-object">
									<li>
										<div class="b-img" style="background-image: url('i/b-4/1/gerb.png');"></div>
										<h5>Объект принимала</h5>
										<h6>администрация г.&nbsp;Москвы</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="b b-6">
		<div class="b-block">
			<h2 class="b-title">Мы узко специализируемся на<br>архитектурном освещении</h2>
			<h4 class="b-subtitle">Опыт работы каждого специалиста в архитектурном освещении свыше 7 лет.<br>Разработали более 100 проектов за последние 3 года</h4>
			<div class="b-staff clearfix">
				<div class="left">
					<ul class="b-left-thumbs b-staff-thumbs">
						<li class="active">
							<div style="background-image: url('i/b-6/1.png');"></div>
							<h6>Сергей Ренжин</h6>
							<p>Генеральный директор</p>
						</li>
						<li>
							<div style="background-image: url('i/b-6/2.png');"></div>
							<h6>Татьяна Плаутина</h6>
							<p>Электропроектировщик</p>
						</li>
						<li>
							<div style="background-image: url('i/b-6/3.png');"></div>
							<h6>Сергей Линкин</h6>
							<p>Технический специалист</p>
						</li>
						<li style="padding: 17px 10px 16px 76px;">
							<div style="background-image: url('i/b-6/4.png');"></div>
							<h6>Ян Удалых</h6>
							<p>Руководитель<br>монтажной группы</p>
						</li>
						<li>
							<div style="background-image: url('i/b-6/5.png');"></div>
							<h6>Иван Петрунин</h6>
							<p>Архитектор</p>
						</li>
					</ul>
				</div>
				<div class="right b-slider b-staff-slider" onselectstart="return false;">
					<span class="b-staff-nav b-left-butt"></span>
					<span class="b-staff-nav b-right-butt"></span>
					<div class="b-slide" style="display: block;">
						<div class="b-image-cont">
							<div class="b-image" style="background-image: url('i/b-6/1.png');"></div>
							<h3>Сергей Ренжин</h3>
							<h5>Генеральный директор</h5>
						</div>
						<ul class="b-skill clearfix">
							<li>
								<p>7 лет<br>стажа</p>
							</li>
							<li>
								<p>51 успешно<br>выполненный<br>проект</p>
							</li>
							<li>
								<p>Осветил свыше<br>460  тыс. м²<br>фасадов зданий</p>
							</li>
						</ul>
						<div class="b-desc">
							<h3>«Наша основная задача — дать Вам не то решение,<br>которое Вы ожидали, а найти куда более выгодное.»</h3>
							<p>Cредняя экономия сметы на проекте достигает 29% — просто потому что мы знаем десятки заводов-производителей, весь их ассортимент, складские остатки, стоимость и сроки изготовления и можем подобрать наиболее оптимальный вариант.<br><br>Если хотите пообщаться со мной — оставьте заявку ниже, буду рад оказаться полезным для Вас.</p>
						</div>
						<div class="b-butt-cont">
							<a href="#" class="fancy b-green-butt" data-beforeShow="staff" data-name="Сергей" data-block="#b-popup-consult">получить консультацию у сергея</a>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-image-cont">
							<div class="b-image" style="background-image: url('i/b-6/2.png');"></div>
							<h3>Татьяна Плаутина</h3>
							<h5>Электропроектировщик</h5>
						</div>
						<ul class="b-skill clearfix">
							<li>
								<p>5 лет<br>стажа</p>
							</li>
							<li>
								<p>35 успешно<br>выполненных<br>проектов</p>
							</li>
							<li>
								<p>Сэкономила более<br>140 км кабеля</p>
							</li>
						</ul>
						<div class="b-desc">
							<h3>«Я очень рада, что мы намеренно берем до 3 проектов<br>в месяц: можно подробно вникнуть в каждый проект и уделить ему больше внимания»</h3>
							<p>Татьяна — эксперт в области электрической безопасности, имеет 2 высших образования по инженерным специальностям и богатый опыт. Она оптимизирует спецификации для наших клиентов — за последние полгода благодаря ей наши клиенты сэкономили около 4 миллионов рублей. Так как мы берем не более 3-х проектов в месяц, Татьяна глубоко погружается в каждый проект и предлагает несколько вариантов для более экономичной схемы прокладки кабеля.<br><br>Татьяна ответит на любой ваш вопрос, связанный с электропроектом.</p>
						</div>
						<div class="b-butt-cont">
							<a href="#" class="b-green-butt fancy" data-beforeShow="staff" data-name="Татьяна" data-block="#b-popup-consult">получить консультацию у татьяны</a>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-image-cont">
							<div class="b-image" style="background-image: url('i/b-6/3.png');"></div>
							<h3>Сергей Линкин</h3>
							<h5>Технический специалист</h5>
						</div>
						<ul class="b-skill clearfix">
							<li>
								<p>6 лет<br>стажа</p>
							</li>
							<li>
								<p>96 успешно<br>выполненных<br>проектов</p>
							</li>
							<li>
								<p>Осветил свыше<br>1 миллиона м²<br>фасадов зданий</p>
							</li>
						</ul>
						<div class="b-desc">
							<h3>«Мой опыт показывает: В 100% случаев можно подобрать более оптимальное оборудование и не только оптимизировать смету, но и срок поставки сделать короче»</h3>
							<p>Сергей последние 6 лет специализируется на архитектурном и спортивном освещении. По его проектам было освещено свыше 1 миллиона квадратных метров фасадов зданий.<br><br>Сергей держит в голове сроки изготовления светильников на 56 фабриках и знает 100% ассортимента каждой из них. За 6 лет благодаря подбору аналогичного оборудования в сумме ему удалось сэкономить более 30 миллионов рублей для его клиентов.<br><br>Сергей с удовольствием ответит на любой вопрос о наших партнерах-производителях и сориентирует по срокам изготовления светильников.</p>
						</div>
						<div class="b-butt-cont">
							<a href="#" class="b-green-butt fancy" data-beforeShow="staff" data-name="Сергей" data-block="#b-popup-consult">получить консультацию у сергея</a>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-image-cont">
							<div class="b-image" style="background-image: url('i/b-6/4.png');"></div>
							<h3>Ян Удалых</h3>
							<h5>Руководитель монтажной группы</h5>
						</div>
						<ul class="b-skill clearfix">
							<li>
								<p>7 лет<br>стажа</p>
							</li>
							<li>
								<p>74 успешно<br>выполненных<br>проектов</p>
							</li>
							<li>
								<p>Смонтировал<br>более 12 000<br>светильников</p>
							</li>
						</ul>
						<div class="b-desc">
							<h3>«Более всего нам важно, чтобы у заказчика всё работало идеально. Без сбоев. Поэтому мы готовы давать больше,<br>чем от нас ожидают. Мы любим создавать<br>"ореол надежности" на стройке»</h3>
							<p>Ян обладает большим опытом в строительстве. Он руководил монтажом более чем на 30 значимых для всей страны объектах. Например монтаж светильников в Центральном Детском Мире на Лубянке, где бригада из 9 человек смонтировала 917 светильников за 3 недели.<br><br>Ян налаживает контакты с остальными подрядными организациями на стройке — чаще всего это организации, занимающиеся монтажом фасадов и окон. Чтобы на стройке было полное взаимопонимание, Ян или его помощники обязательно присутствуют на всех рабочих совещаниях по стройке и отчитываются за проделанную работу.<br><br>Если у вас есть любой вопрос, касающийся монтажа и демонтажа светильников (кстати, демонтаж и утилизацию мы делаем за свой счет) — закажите консультацию Яна, и он с удовольствием бесплатно ответит на ваши вопросы.</p>
						</div>
						<div class="b-butt-cont">
							<a href="#" class="b-green-butt fancy" data-beforeShow="staff" data-name="Ян" data-block="#b-popup-consult">получить консультацию у яна</a>
						</div>
					</div>
					<div class="b-slide">
						<div class="b-image-cont">
							<div class="b-image" style="background-image: url('i/b-6/5.png');"></div>
							<h3>Иван Петрунин</h3>
							<h5>Архитектор</h5>
						</div>
						<ul class="b-skill clearfix">
							<li>
								<p>5 лет<br>стажа</p>
							</li>
							<li>
								<p>29 успешно<br>выполненных<br>проектов</p>
							</li>
							<li>
								<p>СПРОЕКТИРОВАЛ<br>4,4 МИЛЛИОНА М²<br>ФАСАДОВ ЗДАНИЙ</p>
							</li>
						</ul>
						<div class="b-desc">
							<h3>«Фасад  —  это как костюм. Это очень важно. Свет может испортить фасад, а может подчеркнуть его и сделать незабываемым. Архитектору всегда большой кровью дается согласование своего фасада с заказчиком и с городом»</h3>
							<p>Иван — тот человек, без кого наша работа невозможна. Мы всегда хотим быть уверены, что наши решения по свету подчеркнут фасад здания и нисколько ему не навредят с эстетической точки зрения. Иван, бронзовый призер Всероссийского архитектурного конкурса Территория-дизайна (Винзавод, 2013); золотой призер Всероссийского архитектурного конкурса Белая башня (ТАТЛИН, 2014).<br><br>Иван участвует во всех ключевых проектах, дает рекомендации и предлагает оригинальные решения. Если вы хотите проконсультироваться с архитектором — оставьте заявку ниже.</p>
						</div>
						<div class="b-butt-cont">
							<a href="#" class="b-green-butt fancy" data-beforeShow="staff" data-name="Иван" data-block="#b-popup-consult">получить консультацию у ивана</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-7">
		<div class="b-block">
			<h2 class="b-title">Даем гарантии, которые не могут<br>себе позволить 95% компаний</h2>
			<h4 class="b-subtitle">Юридически отвечаем перед вами за качество всей нашей работы</h4>
			<div class="clearfix b-gar">
				<div class="left anim fadeDown" data-anim="fadeDown" data-delay="0" data-cont=".b-7 .b-block .b-gar">
					<div><span class="years">10</span></div>
					<p>До 10 лет расширенная<br>гарантия на каждый<br>светильник</p>
				</div>
				<div class="right anim fadeDown" data-anim="fadeDown" data-delay="1000" data-cont=".b-7 .b-block .b-gar">
					<div><span>Гарантия<br>сроков</span></div>
					<p>Юридическая гарантия сроков<br>Мы вернем вам 0,1% от суммы<br>заказа за каждый день просрочки<br>поставки</p>
				</div>
			</div>
			<div class="b-line"></div>
			<div class="b-gars clearfix">
				<li class="anim fadeDown" data-anim="fadeDown" data-delay="2000" data-cont=".b-7 .b-block .b-gar">
					<div><img src="i/b-7/1.png" alt=""></div>
					<h3>Гарантия<br>фиксированной сметы</h3>
					<p>Все непредусмотренные<br>расходы компенсируем за<br>свой счет.</p>
				</li>
				<li class="anim fadeDown" data-anim="fadeDown" data-delay="3000" data-cont=".b-7 .b-block .b-gar">
					<div><img src="i/b-7/2.png" alt=""></div>
					<h3>Дополнительные светильники в той<br>же температуре (бинирование)</h3>
					<p>Бинирование позволяет получить партию<br>светодиодов со 100% попаданием<br>в предыдущую световую температуру.</p>
					<a href="#" class="fancy b-white-link" data-block="#b-popup-binir">Подробнее</a>
				</li>
				<li class="anim fadeDown" data-anim="fadeDown" data-delay="4000" data-cont=".b-7 .b-block .b-gar">
					<div><img src="i/b-7/3.png" alt=""></div>
					<h3>Гарантия<br>освещенности в люксах</h3>
					<p>Если уровень освещенности <br>не будет совпадать с нашими<br>расчетами, мы вернем деньги.</p>
				</li>
			</div>
			<a href="#" class="fancy b-green-butt" data-block="#b-popup-dogovor">Скачать пример договора<br><span>pdf, 2.5 мб.</span></a>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block clearfix">
			<div class="b-book"></div>
			<a href="#" class="fancy b-green-butt b-circle-butt" data-block="#b-popup-commerse-ex">Посмотреть<br>содержание</a>
			<div class="left">
				<h2>Получите коммерческое<br>предложение и узнайте,<br>как сократить смету на 35%</h2>
			</div>
		</div>
		<div class="right">
			<h3>Оставьте заявку</h3>
			<h4>на разработку коммерческого<br>предложения</h4>
			<form action="kitsend.php" method="POST" data-block="#b-popup-2">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required placeholder="Иван Иванов">
					<label for="email">Введите Ваш E-mail</label>
					<input type="text" id="email" name="email" required placeholder="mail@mail.ru">
					<label for="tel">Телефон для уточнения деталей</label>
					<input type="text" id="tel" name="phone" required placeholder="+7 (___) ___-__-__">
					<input type="hidden" name="subject" value="Консультация">
					<input type="submit" class="ajax b-green-butt" value="Получить предложение">
					<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
					<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
					<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
				</div>
			</form>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-block">
			<h2 class="b-title">Ответим на любой ваш вопрос</h2>
			<div class="clearfix">
				<div class="left">
					<!-- <h3>Звонок по России бесплатный</h3> -->
					<h4>+7 (495) 664-46-74</h4>
					<br><br>
					<a href="#" class="fancy b-green-butt" data-block="#b-popup-callback">Закажите звонок</a>
				</div>
				<div class="right">
					<h3>Наш офис находится по адресу</h3>
					<h4>г. Москва, ул. Большая Новодмитровская<br>д.36 к.12</h4>
					<a href="#" class="b-white-butt fancy" data-beforeShow="map" data-block="#b-popup-map">Смотреть на карте</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-footer">
		<div class="b-block clearfix">
			<div class="left b-logo-cont">
				<img src="i/logo.png" alt="">
				<p>© 2015</p>
				<p>Архитектурное освещение<br>для любых зданий и сооружений</p>
			</div>
			<div class="left b-contact-cont">
				<h3>+7 (495) 664-46-74</h3>
				<a href="mailto:sale@500lux.ru">sale@500lux.ru</a>
				<div class="b-bottom-links">
					<a href="#">Реквизиты</a>
					<a href="#" class="fancy" data-block="#b-popup-text">Политика конфиденциальности</a>
				</div>
			</div>
			<a href="#" class="left dev-link">Разработка сайта</a>
			<div class="left b-dev-cont">
				<p>Проект, маркетинг и тексты — <a href="https://vk.com/jenyarocketman" target="_blank">E. Киселев</a> и <a href="https://vk.com/surgay.marketing" target="_blank">В. Сургай</a></p>
				<p>Дизайн сайта — <a href="http://conversionart.ru/" target="_blank">Conversion<b>Art</b></a></p>
				<p>Верстка — <a href="http://line-up.ru/" target="_blank">LineUp</a></p>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="b-popup-map">
			<div id="map_canvas" class="b-map-canvas"></div>
		</div>
		<div id="b-popup-binir">
			<div class="for_all b-popup">
				<h3>Бинирование</h3>
				<p>Перед поставкой измеряем спектральные, колориметрические, фотометрические и электрические величины светодиодов и светодиодных матриц с последующей бин-классификацией.</p>
				<p>Сохраняем все эти данные на облаке, и при необходимости легко поставляем светильники с цветовой температурой 1 в 1 как в поставке</p>
			</div>
		</div>
		<div id="b-popup-consult">
			<div class="for_all b-popup">
				<h3>Получите консультацию специалиста 500lux</h3>
				<h4>Оставьте ваши данные, и <span class="b-name">Сергей</span><br>свяжется с Вами в течение 12 минут</h4>
				<form action="kitsend.php" method="POST" data-block="#b-popup-2">
					<div class="b-popup-form">
						<label for="name">Введите Ваше имя</label>
						<input type="text" id="name" name="name" required placeholder="Иван Иванов">
						<label for="email">Введите Ваш E-mail</label>
						<input type="text" id="email" name="email" required placeholder="mail@mail.ru">
						<label for="tel">Телефон для уточнения деталей</label>
						<input type="text" id="tel" name="phone" required placeholder="+7 (___) ___-__-__">
						<input type="hidden" name="subject" class="b-subject" value="Консультация">
						<input type="submit" class="ajax b-green-butt" value="Получить консультацию">
						<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
						<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
						<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
					</div>
				</form>
				<h5>или позвоните нам по телефону<br><span>+7 (495) 664-46-74</span></h5>
			</div>
		</div>
		<div id="b-popup-callback">
			<div class="for_all b-popup">
				<h3>Заказать обратный звонок</h3>
				<h4>Оставьте Ваши данные, и наш менеджер свяжется с Вами в течение 8 минут</h4>
				<form action="kitsend.php" method="POST" data-block="#b-popup-2">
					<div class="b-popup-form">
						<label for="name2">Введите Ваше имя</label>
						<input type="text" id="name2" name="name" required placeholder="Иван Иванов">
						<label for="tel2">Телефон для уточнения деталей</label>
						<input type="text" id="tel2" name="phone" required placeholder="+7 (___) ___-__-__">
						<input type="hidden" name="subject" value="Обратный звонок">
						<input type="submit" class="ajax b-green-butt" value="Перезвоните мне">
						<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
						<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
						<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
					</div>
				</form>
				<h5>или позвоните нам по телефону<br><span>+7 (495) 664-46-74</span></h5>
			</div>
		</div>
		<div id="b-popup-commerse">
			<div class="for_all b-popup commerse-cont">
				<h3>Получите коммерческое предложение<br>и узнайте, как сократить смету на 35%</h3>
				<div class="commerse clearfix">
					<a href="#" class="left b-watch-content" >Посмотреть содержание</a>
					<div class="right">
						<h4><span>Оставьте заявку</span><br>на разработку коммерческого предложения</h4>
						<form action="kitsend.php" method="POST" data-block="#b-popup-2">
							<div class="b-popup-form">
								<label for="name3">Введите Ваше имя</label>
								<input type="text" id="name3" name="name" required placeholder="Иван Иванов">
								<label for="email3">Введите Ваш E-mail</label>
								<input type="text" id="email3" name="email" required placeholder="mail@mail.ru">
								<label for="tel3">Телефон для уточнения деталей</label>
								<input type="text" id="tel3" name="phone" required placeholder="+7 (___) ___-__-__">
								<input type="hidden" name="subject" value="Коммерческое предложение">
								<input type="submit" class="ajax b-green-butt" value="Получить предложение">
								<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
								<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
								<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="b-popup-commerse2">
			<div class="for_all b-popup commerse-cont">
				<h3>Скачайте пример нашего<br>коммерческого предложения</h3>
				<div class="commerse clearfix">
					<a href="#" class="left b-watch-content" >Посмотреть содержание</a>
					<div class="right">
						<h4><span>Заполните форму,</span><br>и пример коммерческого предложения<br>будет выслан вам на почту</h4>
						<form action="kitsend.php" method="POST" data-block="#b-popup-2">
							<div class="b-popup-form">
								<label for="email4">Введите Ваш E-mail</label>
								<input type="text" id="email4" name="email" required placeholder="mail@mail.ru">
								<label for="tel4">Телефон для уточнения деталей</label>
								<input type="text" id="tel4" name="phone" required placeholder="+7 (___) ___-__-__">
								<input type="hidden" name="subject" value="Пример коммерческого предложения">
								<input type="submit" class="ajax b-green-butt" value="Скачать пример предложения">
								<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
								<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
								<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="b-popup-visual">
			<div class="for_all b-popup commerse-cont">
				<h3>Получите 5 вариантов визуализации Вашего<br>объекта стоимостью <span>47 000 руб.</span> за наш счет<br>в течение 7-ми дней</h3>
				<div class="commerse clearfix">
					
					<div class="right">
						<h4><span>Оставьте заявку,</span><br>на разработку визуализаций<br>прямо сейчас</h4>
						<form action="kitsend.php" method="POST" data-block="#b-popup-2">
							<div class="b-popup-form">
								<label for="name5">Введите Ваше имя</label>
								<input type="text" id="name5" name="name" required placeholder="Иван Иванов">
								<label for="email5">Введите Ваш E-mail</label>
								<input type="text" id="email5" name="email" required placeholder="mail@mail.ru">
								<label for="tel5">Телефон для уточнения деталей</label>
								<input type="text" id="tel5" name="phone" required placeholder="+7 (___) ___-__-__">
								<input type="hidden" name="subject" value="5 визуализаций">
								<input type="submit" class="ajax b-green-butt" value="Получить 5 визуализаций">
								<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
								<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
								<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="b-popup-dogovor">
			<div class="for_all b-popup commerse-cont">
				<h3>Скачайте пример договора в PDF</h3>
				<div class="commerse clearfix">
					<div class="right">
						<form action="kitsend.php" method="POST" data-block="#b-popup-2">
							<div class="b-popup-form">
								<label for="email6">Введите Ваш E-mail</label>
								<input type="text" id="email6" name="email" required placeholder="mail@mail.ru">
								<input type="hidden" name="subject" value="Скачать пример договора">
								<input type="submit" class="ajax b-green-butt" value="Скачать пример договора">
								<input class="" type="hidden" name="ref_info" value="<?=$ref_info; ?>">
								<input class="" type="hidden" name="lpm_ref_info" value="<?=$lpm_ref_info;?>">
								<input class="" type="hidden" name="lpm_city_info" value="<?=$lpm_city_info;?>">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="b-popup-commerse-ex">
			<div class="for_all b-popup commerse-cont">
				<h3>Коммерческое предложение содержит:</h3>
				<ul class="tz-list">
					<li><span>01.</span>До 10 визуализаций</li>
					<li><span>02.</span>Расчет срока поставки</li>
					<li><span>03.</span>Оптимизация сметы до 35%</li>
					<li><span>04.</span>Расстановка светильников на объекте</li>
					<li><span>05.</span>Пример внешнего вида светильников</li>
					<li><span>06.</span>Паспорта на светильники</li>
					<li><span>07.</span>Фотографии реализованных объектов с такими же светильниками</li>
					<li><span>08.</span>Пилотный светотехнический расчет</li>
				</ul>
				<input type="submit" class="ajax b-green-butt b-watch-comm" value="Получить предложение">
			</div>
		</div>
		<div id="b-popup-tz">
			<div class="for_all b-popup commerse-cont clearfix">
				<ul class="tz-list right">
					<li><span>01.</span>Выявление ключевых задач объекта</li>
					<li><span>02.</span>Изучение объекта</li>
					<li><span>03.</span>Изучение истории бренда</li>
					<li><span>04.</span>Изучение световой и архитектурной среды территории</li>
					<li><span>05.</span>Осмотр объекта</li>
					<li><span>06.</span>Снятие замеров</li>
					<li><span>07.</span>Получение чертежей</li>
					<li><span>08.</span>Проверка соответствия чертежей действительности</li>
					<li><span>09.</span>Изучение материалов фасада: цвет и текстура</li>
					<li><span>10.</span>Расчет энергобюджета и подбор светильников</li>
					<li><span>11.</span>Проверка разрешающих документов</li>
					<li><span>12.</span>Определение сроков реализации проекта</li>
					<li><span>13.</span>Определение допустимого финансового бюджета</li>
					<li><span>14.</span>Определение брендов-производителей</li>
					<li><span>15.</span>Формирование ТЗ для светодинамики</li>
					<li><span>16.</span>Формирование ТЗ для системы управления освещением</li>
					<li><span>17.</span>Утверждение ТЗ для разработки внешнего вида здания</li>  
				</ul>
			</div>
		</div>
		<div id="b-popup-text">
			<div class="for_all b-popup popup-text commerse-cont clearfix">
				<h3>Политика конфиденциальности:</h3>
				<p>Наши службы можно использовать разными способами — искать и распространять информацию, общаться с людьми, а также создавать новую информацию. Когда вы предоставляете нам данные, например регистрируя аккаунт Google, мы используем их для того, чтобы усовершенствовать свои службы. Благодаря этим данным мы показываем более релевантные результаты поиска и рекламу, способствуем вашему общению и обеспечиваем возможность легко и быстро делиться информацией. В то же время мы хотим, чтобы вы четко представляли себе, как используются ваши данные и каким образом вы можете защитить их конфиденциальность.</p>
				<h4>Политика конфиденциальности объясняет:</h4>
				<ul>
					<li>какие данные мы собираем и зачем;</li>
					<li>как мы используем собранные данные;</li>
					<li>какие существуют варианты доступа к данным и их обновления.</li>
				</ul>
				<p>Мы постарались изложить все как можно проще, но если вы не знаете, что такое файл cookie, IP-адрес, пиксельный тег или браузер, изучите сначала список основных терминов. Google серьезно относится к конфиденциальности ваших данных, поэтому независимо от того, новичок вы или опытный пользователь, обязательно ознакомьтесь с нашими правилами и при необходимости задайте вопросы.</p>
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h3>Спасибо за оказанное<br>доверие!</h3>
				<h4>Мы свяжемся с Вами в ближайшее время.<br>Время работы нашего офиса — c понедельника<br>по пятницу с 9:00 до 20:00 по Москве</h4>
				<h4>Если у Вас есть срочный вопрос, звоните<br>нам по телефону:<br><b></h4>
				<h5><span>+7 (495) 664-46-74</span></h5>
				<h6>С уважением,<br>Сергей Ренжин<br>директор ООО «500 люкс»</h6>
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h3>Ошибка отправки!</h3>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
				<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
	</div>
</body>
</html>
