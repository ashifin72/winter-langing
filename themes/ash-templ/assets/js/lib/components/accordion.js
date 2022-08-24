import Ash from '../../lib/core.js';

Ash.prototype.accordion = function (headdAxtive = 'accordion-head--active',
                                  contentActive = 'accordion-content--active',
                                  paddings = 40) {
  for (let i = 0; i < this.length; i++) {
    Ash(this[i]).click(() => {
      Ash(this[i]).toggleClass(headdAxtive);
      Ash(this[i].nextElementSibling).toggleClass(contentActive);

      if (this[i].classList.contains(headdAxtive)) {
        this[i].nextElementSibling.style.maxHeight = this[i].nextElementSibling.scrollHeight + paddings + 'px';
      } else {
        this[i].nextElementSibling.style.maxHeight = '0px';
      }
    });
  }

};
