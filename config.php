<?php
/*
 * Template name: Конфигуратор
 */

get_header();
?>
       <main id="primary" class="site-main">
		<div class="header-container">
			<section class="section banner">
				<?php get_template_part('template-parts/page/page-navigation'); ?>
				<a href="#" class="go-back"> 
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M15 18L9 12L15 6" stroke="#1C212D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<h1 class="page-title-configurator"> BMW 1-Series II (хэтчбек 5 дв / F20) 2017 - 2020 </h1>
			</section>
		</div> 
		   
		   
		<div class="section-container">	
				<div class="configurator-box">
				<div class="configurator">
					<!-- Вкладки -->
					<ul class="configurator-tabs">
						<li class="active" data-tab="material">Материал <span></span></li>
						<li data-tab="tab-edging">Окантовка <span></span></li>
						<li data-tab="tab-completion">Комплектация <span></span></li>
						<li data-tab="accessories">Аксессуары <span></span></li>
					</ul>

					<!-- Шаг 1: Материал -->
					<div class="configurator-tab-content" id="material">

						<!-- Материал коврика -->
						<div class="config-section">
							<h3>Материал коврика:</h3>
							<div class="config-choices-box">
								<button class="config-choice" data-type="material" data-price="500" data-value="Ворст">Ворст</button>
								<button class="config-choice" data-type="material" data-price="300" data-value="Eva">Eva</button>
							</div>
						</div>

						<!-- Высота ворста -->
						<div class="config-section" id="pile-height" style="display: none;">
							<h3>Высота ворста:</h3>
							<div class="config-choices-box">
								<button class="config-choice" data-type="pile" data-price="100" data-value="Стандарт">Стандарт <span> 4 мм, ρ 200 гр/м2 </span></button>
								<button class="config-choice" data-type="pile" data-price="150" data-value="Классик">Классик <span> 6 мм, ρ 250 гр/м2 </span> </button>
								<button class="config-choice" data-type="pile" data-price="200" data-value="Комфорт">Комфорт <span> 8 мм, ρ 300 гр/м2 </span> </button>
							</div>
						</div>
						
						<!-- Форма коврика -->
						<div class="config-section" id="mat-form" style="display: none;"> 
							<h3>Форма коврика:</h3>
							<div class="config-choices-box">
								<button class="config-choice" data-type="mat-form" data-price="400" data-value="Соты">Соты</button>
								<button class="config-choice" data-type="mat-form" data-price="500" data-value="Ромб">Ромб</button>
							</div>
						</div>




						<!-- Цвет коврика -->
						<div class="config-section">
							<h3>Цвет коврика:</h3>
							<div class="config-choices-box">
								<button class="config-choice color-choice" data-type="color" data-value="Черный" style="background-color: #000;"></button>
								<button class="config-choice color-choice" data-type="color" data-value="Серый" style="background-color: #CDD1DB;"></button>
								<button class="config-choice color-choice" data-type="color" data-value="Белый" style="background-color: #f9faff;"></button>
								<button class="config-choice color-choice" data-type="color" data-value="Синий" style="background-color: #4F91F5;"></button>
								<button class="config-choice color-choice" data-type="color" data-value="Красный" style="background-color: #E33D47;"></button>
							</div>
						</div>

						<!-- Основания коврика -->
						<div class="config-section">
							<h3>Основания коврика:</h3>
							<div class="config-choices-box">
								<button class="config-choice" data-type="base" data-value="Антислип">Антислип</button>
								<button class="config-choice" data-type="base" data-value="Резина">Резина</button>
							</div>
						</div>

						<!-- Кнопка "Далее" -->
						<button class="configurator-next-button" id="next-step">Продолжить</button>
					</div>

					<!-- Второй таб "Материал" -->	
					
					<div class="configurator-tab-content" id="tab-edging" style="display: none;">
					<!-- Материал окантовки -->
					<div class="config-section">
						<h3>Материал окантовки</h3>
						<div class="config-choices-box">
							<button class="config-choice" data-type="edging-material" data-value="Нить каблированная" data-price="100">Нить каблированная</button>
							<button class="config-choice" data-type="edging-material" data-value="Лента нубук" data-price="150">Лента нубук</button>
							<button class="config-choice" data-type="edging-material" data-value="Стропа" data-price="200">Стропа</button>
							<button class="config-choice" data-type="edging-material" data-value="Экокожа" data-price="250">Экокожа</button>
						</div>
					</div>

					<!-- Цвет окантовки -->
					<div class="config-section">
						<h3>Цвет окантовки</h3>
						<div class="config-choices-box">
							<button class="config-choice color-choice" data-type="edging-color"  data-value="Черный" style="background-color: #000;"></button>
							<button class="config-choice color-choice" data-type="edging-color"  data-value="Серый" style="background-color: #CDD1DB;"></button>
							<button class="config-choice color-choice" data-type="edging-color"  data-value="Белый" style="background-color: #f9faff;"></button>
							<button class="config-choice color-choice" data-type="edging-color"  data-value="Синий" style="background-color: #4F91F5;"></button>
							<button class="config-choice color-choice" data-type="edging-color"  data-value="Красный" style="background-color: #E33D47;"></button>
						</div>
					</div>

					<!-- Цвет строчки -->
					<div class="config-section">
						<h3>Цвет строчки</h3>
						<div class="config-choices-box">
							<button class="config-choice color-choice" data-type="stitching-color"  data-value="Черный" style="background-color: #000;"></button>
							<button class="config-choice color-choice" data-type="stitching-color"  data-value="Серый" style="background-color: #CDD1DB;"></button>
							<button class="config-choice color-choice" data-type="stitching-color"  data-value="Белый" style="background-color: #f9faff;"></button>
							<button class="config-choice color-choice" data-type="stitching-color"  data-value="Синий" style="background-color: #4F91F5;"></button>
							<button class="config-choice color-choice" data-type="stitching-color"  data-value="Красный" style="background-color: #E33D47;"></button>
						</div>
					</div>
						
						<!-- Кнопка "Далее" -->
						<button class="configurator-next-button" id="next-step">Продолжить</button>	
				</div>

				
					
					
				<!-- Третий таб "Комплектация" -->
				<div id="tab-completion" class="configurator-tab-content" style="display: none;">
					
					<!-- Выбор комплектации -->
					<div class="config-section">
						<h3>Комплектация</h3>
							<div class="config-choices-box">			
								<div class="config-choice" data-type="completion" data-value="Водительское" data-factor="1.2">Водительское</div>
								<div class="config-choice" data-type="completion" data-value="Пассажирское" data-factor="1.5">Пассажирское</div>
								<div class="config-choice" data-type="completion" data-value="Задний левый" data-factor="1.4">Задний левый</div>
								<div class="config-choice" data-type="completion" data-value="Задний правый" data-factor="1.7">Задний правый</div>
							</div>	
					</div>
					
					<!-- Дополнения -->		
					<div class="config-section">			
					<h3>Дополнения</h3>					
						<div class="config-choices-box">						
							<div class="config-choice" data-type="addition" data-price="100">Перемычка</div>
							<div class="config-choice" data-type="addition" data-price="150">3 ряд</div>
						</div>
					</div>
					
					<!-- Лапа, новый отдельный блок -->		
					<div class="config-section">			
					<h3>Лапа</h3>					
						<div class="config-choices-box">
							<div class="config-choice" data-type="some-type" data-price="0">Без лапы</div>
							<div class="config-choice" data-type="some-type" data-price="500">Слитная</div>
							<div class="config-choice" data-type="some-type"  data-price="750">Отдельная</div>
						</div>
					</div>
					
					<!-- Багажник -->
					<button class="configurator-add-trunk" id="add-trunk">+ багажник</button>
					
					<div class="config-section" id="trunk-details" style="display:none;">
					<h3>Багажник: <span id="trunk-default-settings"></span></h3>	
						
						<div class="config-choices-box config-choices-box-select">									
								<!-- Выпадающие списки для настройки багажника -->
								<div class="select-box"> 
									<div class="select-name">Материал</div>
									<select id="trunk-material"></select>
								</div>	
								<div class="select-box"> 
									<div class="select-name">Высота ворса</div>
									<select id="trunk-pile"></select>
								</div>
								<div class="select-box"> 
									<div class="select-name">Форма коврика</div>
									<select id="trunk-mat-form"></select>
								</div>
							
								<div class="select-box"> 
									<div class="select-name">Цвет коврика:</div>	
									<select class="select-color" id="trunk-color"></select>
								</div>
							
								<div class="select-box"> 
									<div class="select-name">Основания коврика:</div>	
									<select id="trunk-base"></select>
								</div>	
								<div class="select-box"> 
									<div class="select-name">Материал окантовки</div>
									<select id="trunk-border-material"></select>
								</div>
							
								<div class="select-box">
									<div class="select-name">Цвет окантовки</div>
									<select class="select-color" id="trunk-edging-color"></select>
								</div>	
							
								<div class="select-box">
									<div class="select-name">Цвет строчки</div>
									<select class="select-color" id="trunk-thread-color"></select>
								</div>	

								<button class="close-trunk" id="remove-trunk"><img src="<?php echo get_template_directory_uri() ?>/img/close-conf.svg" class="close-trunk-img"></button>
							</div>
						</div>
					
						<!-- Кнопка "Далее" -->
						<button class="configurator-next-button" id="next-step">Продолжить</button>
					</div>	
					
					
					<!-- Четвертый таб "Подпятник и дополнения" -->
						<div id="accessories" class="configurator-tab-content" style="display: none;">
							<!-- Подпятник -->
							<div class="config-section">
								<h3>Подпятник:</h3>
								<div class="config-choices-box">
									<button class="config-choice" data-type="heel-pad" data-price="0" data-value="Без подпятника">Без подпятника</button>
									<button class="config-choice" data-type="heel-pad" data-price="100" data-value="Ворсовой">Ворсовой</button>
									<button class="config-choice" data-type="heel-pad" data-price="150" data-value="Металлический">Металлический</button>
									<button class="config-choice" data-type="heel-pad" data-price="200" data-value="Полиуретан">Полиуретан</button>
								</div>
							</div>

							<!-- Цвет подпятника -->
							<div class="config-section" id="heel-pad-color-section" style="display: none;">
								<h3>Цвет подпятника:</h3>
								<div class="config-choices-box">
									<button class="config-choice color-choice" data-type="heel-pad-color"  data-value="Черный" style="background-color: #000;"></button>
									<button class="config-choice color-choice" data-type="heel-pad-color"  data-value="Серый" style="background-color: #CDD1DB;"></button>
									<button class="config-choice color-choice" data-type="heel-pad-color"  data-value="Белый" style="background-color: #f9faff;"></button>
									<button class="config-choice color-choice" data-type="heel-pad-color"  data-value="Синий" style="background-color: #4F91F5;"></button>
									<button class="config-choice color-choice" data-type="heel-pad-color"  data-value="Красный" style="background-color: #E33D47;"></button>
								</div>
							</div>

							<!-- Шильдик -->
							<div class="config-section config-section-line">
								<h3>Шильдик:</h3>
								<div class="config-choices-box">
									<button class="config-choice-decrement"><img class="quantity-img" src="<?php echo get_template_directory_uri() ?>/img/minus.svg"></button>
									<span class="config-choice-quantity" data-price-per-item="200">0</span>
									<button class="config-choice-increment"><img class="quantity-img" src="<?php echo get_template_directory_uri() ?>/img/plus.svg"></button>
								</div>
							</div>

							<!-- Крепления -->
							<div class="config-section">
								<h3>Крепления:</h3>
								<div class="config-choices-box">
									<button class="config-choice" data-type="fastener" data-price="100" data-value="Липучки">Липучки</button>
									<button class="config-choice" data-type="fastener" data-price="200" data-value="Люверсы">Люверсы</button>
									<button class="config-choice" data-type="fastener" data-price="50" data-value="Штатные крепления">Штатные крепления</button>
								</div>
							</div>

							<!-- Количество крепления -->
							<div class="config-section config-section-line">
								<h3>Количество крепления:</h3>
								<div class="config-choices-box">
									<button class="config-choice-decrement"><img class="quantity-img" src="<?php echo get_template_directory_uri() ?>/img/minus.svg"></button>
									<span class="config-choice-quantity-fastener">0</span>
									<button class="config-choice-increment"><img class="quantity-img" src="<?php echo get_template_directory_uri() ?>/img/plus.svg"></button>
								</div>
							</div>
						</div>	
					
				     </div>
					
					
						<!-- Итог -->
					<div class="final-section">
						<div class="final-img-box">
																					
							<svg xmlns="http://www.w3.org/2000/svg" width="224" height="280" viewBox="0 0 244 280" fill="none">
								
							<!-- Определение клиппинг-пути -->
						  <defs>
							<clipPath id="clip-path">
							  <path d="M202.188 260.825H120.731C96.0028 260.825 43.6376 276.33 43.6376 276.33C43.6376 276.33 24.0007 282.759 12.7276 278.599C1.45459 274.439 0 258.934 0 258.934L5.09106 161.744C5.09106 161.744 3.63647 131.49 9.45482 121.658C15.2732 111.826 23.6928 111.338 30.1827 111.338C36.6726 111.338 50.5469 114.095 55.638 101.237C60.7291 88.379 63.2746 43.7548 63.2746 43.7548C63.2746 43.7548 64.7292 27.1153 74.184 15.0138C83.6388 2.91236 90.844 0.861779 97.4574 0.265163C104.071 -0.331453 166.914 0.265163 166.914 0.265163C166.914 0.265163 192.006 -0.867936 200.006 5.1828C208.006 11.2335 207.279 25.2244 207.279 25.2244C207.279 25.2244 209.824 103.506 209.824 123.927C209.824 144.348 222.188 221.495 222.188 221.495C222.188 221.495 226.916 241.916 221.097 252.127C215.279 262.338 202.188 260.825 202.188 260.825Z"/>
							</clipPath>
						  </defs>
								
								
								<!-- Основной путь (для заливки) -->
								<path class="main-path" d="M202.188 260.825H120.731C96.0028 260.825 43.6376 276.33 43.6376 276.33C43.6376 276.33 24.0007 282.759 12.7276 278.599C1.45459 274.439 0 258.934 0 258.934L5.09106 161.744C5.09106 161.744 3.63647 131.49 9.45482 121.658C15.2732 111.826 23.6928 111.338 30.1827 111.338C36.6726 111.338 50.5469 114.095 55.638 101.237C60.7291 88.379 63.2746 43.7548 63.2746 43.7548C63.2746 43.7548 64.7292 27.1153 74.184 15.0138C83.6388 2.91236 90.844 0.861779 97.4574 0.265163C104.071 -0.331453 166.914 0.265163 166.914 0.265163C166.914 0.265163 192.006 -0.867936 200.006 5.1828C208.006 11.2335 207.279 25.2244 207.279 25.2244C207.279 25.2244 209.824 103.506 209.824 123.927C209.824 144.348 222.188 221.495 222.188 221.495C222.188 221.495 226.916 241.916 221.097 252.127C215.279 262.338 202.188 260.825 202.188 260.825Z" fill="white"/>
																						
														
								
	<!-- Фоновое изображение при выборе "Ворст"--> 
	<image id="vors-image" clip-path="url(#clip-path)" href="http://cg39988-wordpress-gcgcn.tw1.ru/wp-content/themes/sneakerstore/img/vors.svg" width="224" height="280" style="display:none;"/>
	<!-- Фоновое изображение при выборе "Сота"-->
	<image id="sota-image" clip-path="url(#clip-path)" href="http://cg39988-wordpress-gcgcn.tw1.ru/wp-content/themes/sneakerstore/img/sota.svg" width="224" height="280" style="display:none;"/>
	<!-- Фоновое изображение при выборе "Ромб"-->
	<image id="romb-image" clip-path="url(#clip-path)" href="http://cg39988-wordpress-gcgcn.tw1.ru/wp-content/themes/sneakerstore/img/romb.svg" width="224" height="280"style="display:none;"/>
	
	<!-- Путь для оконтовки -->							
	<path class="edging-path" stroke="#000" stroke-width="6" d="m206.28 25.29-.003-.085.004-.082v-.002l.001-.001v-.02l.004-.1c.003-.09.007-.228.009-.41a35.313 35.313 0 0 0-.617-6.74c-.787-4.092-2.474-8.497-5.879-11.072-1.641-1.242-4.356-2.232-7.758-2.96-3.346-.717-7.126-1.134-10.711-1.367a136.964 136.964 0 0 0-12.268-.224c-1.73-.015-8.089-.023-11.086-.046-5.994-.047-14.053-.103-22.319-.14-16.62-.075-33.837-.071-37.02.216-3.142.283-6.3.898-9.785 2.82-3.51 1.934-7.48 5.264-12.092 11.168-4.5 5.76-7.138 12.664-8.647 18.203a67.402 67.402 0 0 0-1.49 6.838 50.335 50.335 0 0 0-.34 2.485c-.007.057-.01.1-.013.126v.007l-.006.096-.015.25-.008.13a617.114 617.114 0 0 1-.449 6.694 638.005 638.005 0 0 1-1.436 16.798c-.639 6.401-1.439 13.228-2.402 19.273-.955 5.996-2.095 11.39-3.457 14.828-2.86 7.223-8.284 10.092-13.695 11.102-2.658.496-5.319.551-7.67.492a118.973 118.973 0 0 1-3.031-.125l-.27-.013a55.593 55.593 0 0 0-2.648-.091c-3.223 0-6.638.131-9.92 1.348-3.213 1.191-6.41 3.468-9.087 7.991-1.255 2.12-2.21 5.544-2.883 9.712-.665 4.11-1.024 8.727-1.204 13.082-.18 4.348-.18 8.397-.135 11.362C7.977 158.314 2.5 256 3.006 258.878c.011.099.03.25.058.447a32.012 32.012 0 0 0 1.927 7.134c1.682 4.17 4.562 8.468 9.429 10.264 5.102 1.882 12.368 1.411 18.65.33a89.977 89.977 0 0 0 7.808-1.716 76.746 76.746 0 0 0 2.937-.844c.392-.115 1.827-.539 2.57-.752a664.909 664.909 0 0 1 27.06-7.109c16.162-3.871 35.653-7.807 48.286-7.807H203.303l.11.013h.004l.012.001.083.008a20.146 20.146 0 0 0 1.785.055 23.291 23.291 0 0 0 4.726-.548c3.674-.826 7.803-2.77 10.337-7.217 2.587-4.541 2.922-11.658 2.47-18.013a83.728 83.728 0 0 0-1.41-10.332c-.057-.28-.103-.495-.134-.638l-.212-1.216-.393-2.487a2583.33 2583.33 0 0 1-1.401-9.026 2531.101 2531.101 0 0 1-4.254-28.776c-3.082-21.779-6.202-46.337-6.202-56.722 0-10.175-.635-34.817-1.272-56.952a12748.604 12748.604 0 0 0-1.163-38.283l-.081-2.52-.021-.658-.005-.168-.002-.043v-.014Zm0 0 1.999-.066-1.999.065Z"/>
								
		<!-- Путь для строчки -->							
	<path class="stitching-overlay" stroke="transparent" stroke-dasharray="5,5" stroke-width="2" d="m206.28 25.29-.003-.085.004-.082v-.002l.001-.001v-.02l.004-.1c.003-.09.007-.228.009-.41a35.313 35.313 0 0 0-.617-6.74c-.787-4.092-2.474-8.497-5.879-11.072-1.641-1.242-4.356-2.232-7.758-2.96-3.346-.717-7.126-1.134-10.711-1.367a136.964 136.964 0 0 0-12.268-.224c-1.73-.015-8.089-.023-11.086-.046-5.994-.047-14.053-.103-22.319-.14-16.62-.075-33.837-.071-37.02.216-3.142.283-6.3.898-9.785 2.82-3.51 1.934-7.48 5.264-12.092 11.168-4.5 5.76-7.138 12.664-8.647 18.203a67.402 67.402 0 0 0-1.49 6.838 50.335 50.335 0 0 0-.34 2.485c-.007.057-.01.1-.013.126v.007l-.006.096-.015.25-.008.13a617.114 617.114 0 0 1-.449 6.694 638.005 638.005 0 0 1-1.436 16.798c-.639 6.401-1.439 13.228-2.402 19.273-.955 5.996-2.095 11.39-3.457 14.828-2.86 7.223-8.284 10.092-13.695 11.102-2.658.496-5.319.551-7.67.492a118.973 118.973 0 0 1-3.031-.125l-.27-.013a55.593 55.593 0 0 0-2.648-.091c-3.223 0-6.638.131-9.92 1.348-3.213 1.191-6.41 3.468-9.087 7.991-1.255 2.12-2.21 5.544-2.883 9.712-.665 4.11-1.024 8.727-1.204 13.082-.18 4.348-.18 8.397-.135 11.362C7.977 158.314 2.5 256 3.006 258.878c.011.099.03.25.058.447a32.012 32.012 0 0 0 1.927 7.134c1.682 4.17 4.562 8.468 9.429 10.264 5.102 1.882 12.368 1.411 18.65.33a89.977 89.977 0 0 0 7.808-1.716 76.746 76.746 0 0 0 2.937-.844c.392-.115 1.827-.539 2.57-.752a664.909 664.909 0 0 1 27.06-7.109c16.162-3.871 35.653-7.807 48.286-7.807H203.303l.11.013h.004l.012.001.083.008a20.146 20.146 0 0 0 1.785.055 23.291 23.291 0 0 0 4.726-.548c3.674-.826 7.803-2.77 10.337-7.217 2.587-4.541 2.922-11.658 2.47-18.013a83.728 83.728 0 0 0-1.41-10.332c-.057-.28-.103-.495-.134-.638l-.212-1.216-.393-2.487a2583.33 2583.33 0 0 1-1.401-9.026 2531.101 2531.101 0 0 1-4.254-28.776c-3.082-21.779-6.202-46.337-6.202-56.722 0-10.175-.635-34.817-1.272-56.952a12748.604 12748.604 0 0 0-1.163-38.283l-.081-2.52-.021-.658-.005-.168-.002-.043v-.014Zm0 0 1.999-.066-1.999.065Z"/>	
								
	<!-- Путь для лапы -->								
	<path class="some-type-img" transform="translate(106, 72)" style="display:none;" fill="#1C212D" d="M8 0h64a8 8 0 0 1 8 8v24a8 8 0 0 1-8 8H8a8 8 0 0 1-8-8V8a8 8 0 0 1 8-8z"/>	
								
	<!-- Путь для шильдика -->	
	<path class="nameplate-img" transform="translate(22, 185)" style="display:none;" fill="#F6F7F9" d="M4 0h4a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z"/>							
							
							</svg>
						</div>
	
						
						<div class="price-box">
							<div class="total-price">
									<div class="total-price-name">Цена: </div> <div class="total-price-info"><span id="final-price">0</span> ₽</div>
							</div>
							<button class="configurator-add-to-cart">Добавить в корзину</button>
						</div>  
					</div>	
					
				</div>						
		</div>
    </main>
<?php
get_footer();