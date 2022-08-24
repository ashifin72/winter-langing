import Ash from '../../lib/core.js';

Ash.prototype.addClass = function (...classNames) {

   for (let i = 0; i< this.length; i++){
     if (!this[i].classList){
       continue;
     }
     this[i].classList.add(...classNames);
   }
   return this;
};

Ash.prototype.removeClass = function (...classNames) {
  for (let i = 0; i< this.length; i++){
    if (!this[i].classList){
      continue;
    }
    this[i].classList.remove(...classNames);
  }
  return this;
};

Ash.prototype.toggleClass = function (classNames) {
  for (let i = 0; i< this.length; i++){
    if (!this[i].classList){
      continue;
    }
    this[i].classList.toggle(classNames);
  }
  return this;
};

