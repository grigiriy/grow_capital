//console.log('start');

$ = jQuery;

$( document ).ready(function() {
  //console.log( "ready!" );
  sendMetrikaEvent();
});

function sendMetrikaEvent() {
  
  //Номер счетчика
  const yaCounterNumber = 71616154;
  
  //<цель в Метрике>: "<селектор элемента на сайте>"
  //Здесь указываем элементы, при клике по которым запускается отправка событий в Метрику
  const triggers = {
    ym_vk: ".vk",
    ym_tg: ".tg",
    ym_wa: ".wa",
    ym_phone: 'a[href*="tel:"]',
    ym_form: 'button[type="submit"]',
    ym_email: 'a[href*="mailto:"]',
    ym_a: "a"
  };
  //Костыль для учета ссылок, не учтенных при инициализации объекта triggers выше. То есть, это событие для ссылок, ведущих на другую страницу или на #id внутри страницы, а не ссылка на соцсеть, телефон, емейл.
  triggers.ym_a = `a:not(${triggers.ym_vk},${triggers.ym_tg},${triggers.ym_wa},${triggers.ym_phone},${triggers.ym_email})`;

  //Здесь указываем элементы, обозначающие область страницы, в которой произошел клик по ссылке или кнопке, например, сайдбар или слайдер
  const regions = {
    ym_card: ".card",
    ym_top: ".logo-wrap",
    ym_menu: "#mainnav",
    ym_bottom: "footer",
    ym_left: ".left-sidebar",
    ym_page_menu: ".list-sidebar",
    ym_slider: ".image_bg",
    ym_courses: "#webinars",
    ym_free: ".index-webinar-widget",
    ym_other: ".materials-widget",
    ym_subscription: ".index-bottom-widget",
    ym_sidebar_download: ".sidebar-download-widget",
    ym_right: ".sidebar-widget",
    ym_text: ".inread-widget",
    ym_text_bottom: ".bottom-widget"
  };

  $.each(triggers, function(triggerGoal, triggerSelector){
    $(triggerSelector).on('click', function(event){
      
      const clickedElement = $(event.target);
      const targetElement = clickedElement.closest(triggerSelector);
      let complexGoal = [];
      
      if(triggerGoal == "ym_a"){
        let url = new URL(targetElement.prop('href'));
        complexGoal = [url.hostname + url.pathname.replaceAll('/', '%2B')]; //Добавляем в составное событие адрес ссылки, если клик был по обычной ссылке, а не по кнопке соцсети.
      } else {
        complexGoal = [triggerGoal];
      }
      ym(yaCounterNumber, 'reachGoal', triggerGoal); //Отправляем событие типа «клик по кнопке или ссылке
      
      $.each(regions, function(regionGoal, regionSelector){
        if( targetElement.closest(regionSelector).length ){
          
          ym(yaCounterNumber, 'reachGoal', regionGoal); //Отправляем событие типа «клик произошел в такой-то области страницы»
          complexGoal.push(regionGoal);
        
        }
      });
      
      ym(yaCounterNumber, 'reachGoal', complexGoal.join('-')); //Отправляем составное событие
    });
  });
}
