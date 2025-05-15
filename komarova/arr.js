const btnUp = {
  el: document.querySelector('.btn-up'),
  show() {
      this.el.classList.remove('btn-up_hide');
  },
  hide() {
      this.el.classList.add('btn-up_hide');
  },
  addEventListener() {
      // при прокрутке содержимого страницы
      window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          const isMobile = window.innerWidth <= 480; // проверяем ширину окна

          if (isMobile) {
              // Если экран меньше или равен 520px, скрываем кнопку
              this.hide();
          } else {
              // Если экран больше 520px, показываем кнопку в зависимости от прокрутки
              scrollY > 100 ? this.show() : this.hide();
          }
      });

      // при нажатии на кнопку .btn-up
      this.el.onclick = () => {
          // переместим в начало страницы
          window.scrollTo({
              top: 0,
              left: 0,
              behavior: 'smooth'
          });
      }
  }
}

btnUp.addEventListener();