document.addEventListener('DOMContentLoaded', function() {
    var toggleButton = document.querySelector('.hiro-nav-popup-toggle');
    var menu = document.querySelector('.hiro-nav-popup-modal');

    // Добавляем обработчик события для кнопки
    toggleButton.addEventListener('click', function() {
      // Переключаем класс, скрывая или отображая меню
      menu.classList.toggle('show-menu');
    });

  });



