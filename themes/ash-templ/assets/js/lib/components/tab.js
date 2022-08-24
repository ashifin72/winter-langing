import Ash from '../../lib/core.js';

Ash.prototype.tab = function() {
  for (let i = 0; i < this.length; i++) {
    Ash(this[i]).on('click', () => {
      Ash(this[i])
          .addClass('tab-item--active')
          .siblings()
          .removeClass('tab-item--active')
          .closest('.tab')
          .find('.tab-content')
          .removeClass('tab-content--active')
          .eq(Ash(this[i]).index())
          .addClass('tab-content--active');
    });
  }
};

