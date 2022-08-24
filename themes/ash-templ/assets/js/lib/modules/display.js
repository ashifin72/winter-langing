import Ash from '../../lib/core.js';

Ash.prototype.show = function () {
  for (let i = 0; i < this.length; i++) {
     if (!this[i].style){
       continue;
     }
     this[i].style.display = '';
  }
  return this;
};

Ash.prototype.hide = function () {
  for (let i = 0; i < this.length; i++) {
    if (!this[i].style){
      continue;
    }
    this[i].style.display = 'none';
  }
  return this;
};

Ash.prototype.toggle = function () {
  for (let i = 0; i < this.length; i++) {
    if (!this[i].style){
      continue;
    }
    if (this[i].style.display === 'none'){
      this[i].style.display = '';
    } else {
      this[i].style.display = 'none';
    }
  }
  return this;
};
