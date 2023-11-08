jQuery(document).ready(function ($) {
	
    // Инициализация Select2 на всех селектах на сайте
    $('select').select2({
		minimumResultsForSearch: Infinity,
		width: '100%'
	});
	
	

    // Дополнительные настройки для селектов с цветами
    $('.select-color').select2({
		minimumResultsForSearch: Infinity,
        templateResult: formatStateWithColor, // Функция для форматирования вывода с цветными кружками
        templateSelection: formatStateWithColor, // Та же функция для выбранного значения
		width: '100%'
    });
	


    // Функция для создания шаблона с цветным кружком
    function formatStateWithColor(state) {
        if (!state.id) {
            return state.text;
        }
        var color = $(state.element).data('color');
        var $state = $(`<span><span class="color-circle" style="background-color: ${color};"></span>${state.text}</span>`);
        return $state;
    }
	
	
	
	
	function initializeTrunkMaterial() {
		populateOptions("#trunk-material", "material");

		// Устанавливаем значение селекта в соответствии с выбором пользователя на первом табе
		var selectedMaterial = $('.config-choice[data-type="material"].selected').data('value');
		if (selectedMaterial) {
			$("#trunk-material").val(selectedMaterial);
		}
	}

	
    // Включим первый выбор комплектации по умолчанию
    $('.config-choice[data-type="completion"]:first').addClass('selected');
	
	// Инициализируем селект trunk-material
    initializeTrunkMaterial();
	
	
	
// таб 4 коплектация (багажник), обрабатываем селекты	
function populateOptions(selector, type) {
    var options = '';
    $('.config-choice[data-type="' + type + '"]').each(function() {
        var value = $(this).data('value');
        var color = $(this).css('background-color');
        options += '<option value="' + value + '" data-color="' + color + '">' + value + '</option>';
    });
    $(selector).html(options);
}
	
	

// таб 4 коплектация (багажник), обрабатываем селекты
function populateTrunkSelects() {
    populateOptions("#trunk-pile", "pile");
    populateOptions("#trunk-mat-form", "mat-form");
    populateOptions("#trunk-base", "base");
    populateOptions("#trunk-border-material", "edging-material");
	populateOptions("#trunk-color", "color");
	populateOptions("#trunk-edging-color", "edging-color");
    populateOptions("#trunk-thread-color", "stitching-color");

    // Скрываем все блоки с селектами формы коврика, они будут показаны на основе выбранного материала
    $('#trunk-pile').closest('.select-box').hide();
    $('#trunk-mat-form').closest('.select-box').hide();

    // Обработчик изменения селекта материала багажника
    $('#trunk-material').change(function() {
        var selectedMaterial = $(this).val(); // Получаем выбранный материал

        // Скрываем все блоки с селектами
        $('#trunk-pile').closest('.select-box').hide();
        $('#trunk-mat-form').closest('.select-box').hide();

        // Показываем соответствующий блок на основе выбранного материала
        if(selectedMaterial === 'Ворст') {
            $('#trunk-pile').closest('.select-box').show();
        } else if(selectedMaterial === 'Eva') {
            $('#trunk-mat-form').closest('.select-box').show();
        }
        
    });

    // Инициализация правильного состояния селектов при загрузке страницы
    $('#trunk-material').change();
}



	

	
// Обработчик для материала
$('.configurator').on('click', '.config-choice[data-type="material"]', function() {
    $('.config-choice[data-type="material"]').removeClass('selected');
    $(this).addClass('selected');

    // Если выбран Ворст, показываем высоту ворста и скрываем форму коврика
    if ($(this).data('value') == 'Ворст') {
        $('#pile-height').show();
        $('#mat-form').hide(); // Скрываем новый раздел "Форма коврика"
        $('.config-choice[data-type="mat-form"]').removeClass('selected');
    }
    // Если выбран Eva, показываем форму коврика и скрываем высоту ворста
    else if ($(this).data('value') == 'Eva') {
        $('#pile-height').hide();
        $('#mat-form').show(); // Показываем новый раздел "Форма коврика"
        $('.config-choice[data-type="pile"]').removeClass('selected');
    } 
    // Если ни один из этих материалов не выбран, скрываем оба раздела
    else {
        $('#pile-height').hide();
        $('#mat-form').hide();
        $('.config-choice[data-type="pile"]').removeClass('selected');
        $('.config-choice[data-type="mat-form"]').removeClass('selected');
    }

    updatePrice();
});


	// Обработчик для выбора комплектации, дополнений и нового блока "Лапа"
	$('.configurator').on('click', '.config-choice[data-type="completion"], .config-choice[data-type="addition"], .config-choice[data-type="some-type"]', function() {
		$(this).toggleClass('selected');
		updatePrice();
	});

    // Обработчик для всех остальных параметров, кроме материала, комплектации и дополнений
    $('.configurator').on('click', '.config-choice:not([data-type="material"]):not([data-type="completion"]):not([data-type="addition"])', function() {
        var choiceType = $(this).data('type');
        $('.config-choice[data-type="' + choiceType + '"]').removeClass('selected');
        $(this).addClass('selected');

        updatePrice();
    });

	// Обработчик для добавления/удаления багажника
	$('.configurator').on('click', '#add-trunk, #remove-trunk', function() {
		if ($(this).attr('id') === 'add-trunk') {
			// Инициализируем селект trunk-material перед тем, как показать детали багажника
			initializeTrunkMaterial();

			$('#trunk-details').addClass('selected').show();
			$('#add-trunk').hide();
			populateTrunkSelects();
	
		} else if ($(this).attr('id') === 'remove-trunk') {
			$('#trunk-details').removeClass('selected').hide();
			$('#add-trunk').show();
		}
		updatePrice();
	});
	
	
	
// При выборе "Ворсовой" подпятника, показать раздел выбора цвета.	
	$('.configurator').on('click', '.config-choice[data-type="heel-pad"]', function() {
		$('.config-choice[data-type="heel-pad"]').removeClass('selected');
		$(this).addClass('selected');

		if ($(this).data('value') == 'Ворсовой') {
			$('#heel-pad-color-section').show();
		} else {
			$('#heel-pad-color-section').hide();
		}

		updatePrice();
	});
	
	
	// Новая Функция для обновления картинки видимости шильдика
	function updateNameplateVisibility() {
	  var quantity = parseInt($('.config-choice-quantity').text(), 10);
	  if (quantity > 0) {
		$('.nameplate-img').show();
	  } else {
		$('.nameplate-img').hide();
	  }
	}

	//Обработка кнопок "+" и "-" для шильдика и креплений.
	function adjustQuantity(buttonClass, spanClass) {
		$('.configurator').on('click', buttonClass, function() {
			var $span = $(this).siblings(spanClass);
			var currentQuantity = parseInt($span.text(), 10);

			if ($(this).hasClass('config-choice-decrement') && currentQuantity > 0) {
				$span.text(currentQuantity - 1);
			} else if ($(this).hasClass('config-choice-increment')) {
				$span.text(currentQuantity + 1);
			}
			
		// Обновляем видимость шильдика после изменения количества
    	updateNameplateVisibility();

			updatePrice();
		});
	}
	
	// Инициализация начального состояния шильдика
	updateNameplateVisibility();

	adjustQuantity('.config-choice-decrement', '.config-choice-quantity');
	adjustQuantity('.config-choice-decrement', '.config-choice-quantity-fastener');
	adjustQuantity('.config-choice-increment', '.config-choice-quantity');
	adjustQuantity('.config-choice-increment', '.config-choice-quantity-fastener');



// Обновление итоговой цены
function updatePrice() {
    var basePrice = 0;

    // Считаем базовую цену из выбранных параметров
    $('.config-choice.selected:not([data-type="completion"])').each(function() {
        var price = $(this).data('price');
        if(price) {
            basePrice += price;
        }
    });

    // Добавляем стоимость комплектации
    $('.config-choice.selected[data-type="completion"]').each(function() {
        basePrice += basePrice * $(this).data('factor');
    });
	
	// Добавляем стоимость 'Лапа'
    $('.config-choice.selected[data-type="some-type"]').each(function() {
        basePrice += $(this).data('price');
    });

    // Добавляем стоимость багажника, если он выбран
    if ($('#trunk-details').hasClass("selected")) {
        basePrice += 500;
    }

    // Добавляем стоимость подпятника
    $('.config-choice.selected[data-type="heel-pad"]').each(function() {
        basePrice += $(this).data('price');
    });

    // Добавляем стоимость шильдика
    basePrice += $('.config-choice-quantity').text() * 200;

    // Добавляем стоимость креплений
	var fastenerQuantity = parseInt($('.config-choice-quantity-fastener').text(), 10);
	if (fastenerQuantity > 0) {
		$('.config-choice.selected[data-type="fastener"]').each(function() {
			basePrice += $(this).data('price') * fastenerQuantity;
		});
	}

    $('#final-price').text(basePrice);
}

		
	
	// Переключение между вкладками при нажатии
		$('.configurator-tabs li').click(function() {
			var selectedTabId = $(this).data('tab');

			// Удаляем классы активности с предыдущих вкладок
			$('.configurator-tabs li').removeClass('active');
			$('.configurator-tab-content').hide();

			// Добавляем класс активности и отображаем соответствующую вкладку
			$(this).addClass('active');
			$('#' + selectedTabId).show();
		});

		// Переход к следующему шагу
		$('#next-step').click(function() {
			var nextTabLi = $('.configurator-tabs li.active').next();

			// Если следующая вкладка существует
			if (nextTabLi.length) {
				$('.configurator-tabs li').removeClass('active');
				nextTabLi.addClass('active');

				$('.configurator-tab-content').hide(); // скрываем все содержимое вкладок
				$('#' + nextTabLi.data('tab')).show(); // отображаем содержимое следующей вкладки
			}
		});
	
	
	


	
	
	// Конфигуратор изображения
	
	// Изначально скрываем все фоновые изображения
		function hideAllBackgroundImages() {
		  $('#vors-image').hide();
		  $('#sota-image').hide();
		  $('#romb-image').hide();
		}

		// Показываем фоновое изображение в зависимости от выбора пользователя
		$(".config-choices-box .config-choice[data-type='material'], .config-choices-box .config-choice[data-type='mat-form']").click(function() {
		  // Скрываем все фоновые изображения
		  hideAllBackgroundImages();

		  let value = $(this).data("value");

		  switch (value) {
			case 'Ворст':
			  $('#vors-image').show();
			  break;
			case 'Соты':
			  $('#sota-image').show();
			  break;
			case 'Ромб':
			  $('#romb-image').show();
			  break;
		  }
		});


	

		// Для изменения цвета SVG:
		$(".config-choices-box .config-choice[data-type='color']").click(function() {
			let selectedColor = $(this).css("background-color");
			$(".final-img-box .main-path").css("fill", selectedColor);
		});
	

	  // Обработчик кликов для цвета окантовки
	  $('button[data-type="edging-color"]').click(function() {
		var color = $(this).css('background-color');
		$('.edging-path').css('stroke', color);
		// Установить прозрачный цвет для пунктирной линии, если она уже присутствует
		$('.stitching-overlay').css('stroke', 'transparent');
	  });

	  // Обработчик кликов для цвета строчки
	  $('button[data-type="stitching-color"]').click(function() {
		var color = $(this).css('background-color');
		$('.stitching-overlay').css({
		  'stroke': color,
		  'stroke-dasharray': '5,5', // Пример пунктира
		  'stroke-width': '2'       // Тонкая линия
		});
	  });
	
	$('.some-type-img').hide();

	// Обработчик кликов для выбора типа лапы
		$('.config-choices-box .config-choice[data-type="some-type"]').click(function() {
		  // Получаем значение data-price атрибута выбранного элемента
		  var price = $(this).data('price');

		  // Если цена не равна 0, показываем элемент с классом some-type-img
		  if (price !== 0) {
			$('.some-type-img').show();
		  } else {
			// Если цена равна 0, скрываем элемент
			$('.some-type-img').hide();
		  }
	});




	
});
