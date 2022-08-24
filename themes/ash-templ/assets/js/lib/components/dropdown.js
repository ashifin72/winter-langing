import Ash from '../../lib/core.js';

Ash.prototype.dropdown = function () {
  for (let i = 0; i<this.length; i++){
    const id = this[i].getAttribute('id');
    Ash(this[i]).click(()=>{
      Ash(`[data-toggle-id = "Ash{id}"]`).fadeToggle(300);
    });
  }
};
