const Ash = function (selector) {
  return new Ash.prototype.init(selector);
};
Ash.prototype.init = function (selector) {
  if (!selector){
    return this; //{}
  }
  // если приходит HTML элемент выбираем  только селектов
  if (selector.tagName){
    this[0] = selector;
    this.length = 1;
    return this;
  }
  Object.assign(this, document.querySelectorAll(selector));
  this.length = document.querySelectorAll(selector).length;
  return  this;
};

Ash.prototype.init.prototype = Ash.prototype;
window.Ash = Ash;

Ash.prototype.ForEachConstructor = function (callback, filter) {
  for (let i = 0; i < this.length; i += 1) {
    if (!filter(this[i])) {
      continue;
    }
    callback(i);
  }
};
export default Ash;
