$(document).ready(function() {
  // Включаем wow анимацию
  new WOW().init();

  // При клике на кнопку 'Заказать звонок' будет запускаться
  // функция, показывающая попап
  $('.button-modal-offer').on('click', function() {
    $('.overlay-offer').show();
  });

  // При клике на крестик будет запускаться
  // функция, скрывающая попап
  $('.popup-close').on('click', function() {
    $('.overlay').hide();
  });

  // слайдер Производство
  $('.production-slider_top').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.production-slider_bottom .slider-content',
  });

  $('.production-slider_bottom .slider-content').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.production-slider_top',
    prevArrow: '.production-slider_bottom .slider-arrow_prev',
    nextArrow: '.production-slider_bottom .slider-arrow_next',
    // адаптив под мобильные: при размере экрана менее 768px
    // будет показываться только один слайд
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
  });

  // слайдер Отзывы
  $('.reviews-slider-content').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '.slider-arrow_reviews_prev',
    nextArrow: '.slider-arrow_reviews_next',
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
  });

  // Гамбургер-меню
  var hamMenu_link = $('.hamMenu-link');
  var menu  = $('.menu');
  var nav_link = $('.menu a');

  // При клике на гамбургер будет добавляться класс hamMenu-link_active,
  // который заставляет гамбургер скручиваться в крестик
  // и добавляется класс menu_active, который
  // заставляет выползти меню
  hamMenu_link.click(function() {
    hamMenu_link.toggleClass('hamMenu-link_active');
    menu.toggleClass('menu_active');
  });

    // И наоборот: при клике на ссылку всё вернётся, как было
    // крестик станет гамбургером
    // меню скроется
  nav_link.click(function() {
    hamMenu_link.toggleClass('hamMenu-link_active');
    menu.toggleClass('menu_active');
  });

  // Маска для номера телефона
  let phoneMask = '+7 (999) 999-99-99';

  $('#main-phone-form').mask(phoneMask);
  $('#offer-form-phone').mask(phoneMask);
  $('#popup-phone').mask(phoneMask);
 });