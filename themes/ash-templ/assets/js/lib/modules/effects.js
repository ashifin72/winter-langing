import Ash from '../../lib/core.js';

// запуск анимации
Ash.prototype.animateOverTime = function (dur, callback, fin,) {
  let timeStart;

  function _animateOverTime(time) {
    if (!timeStart) {
      timeStart = time;
    }
    // отслеживаем прогресс
    const timeElapsed = time - timeStart;
    const complection = Math.min(timeElapsed / dur, 1);

    callback(complection);

    if (timeElapsed < dur) {
      requestAnimationFrame(_animateOverTime);
    } else {
      if (typeof (fin) === 'function') {
        fin();
      }
    }
  }

  return _animateOverTime;
};

Ash.prototype.fadeIn = function (dur, display = 'block', fin) {
  for (let i = 0; i < this.length; i++) {
    this[i].style.display = display;

    const _fadeIn = (complection) => {
      this[i].style.opacity = complection;
    };

    const anim = this.animateOverTime(dur, _fadeIn, fin);
    requestAnimationFrame(anim);
  }
  return this;
};
Ash.prototype.fadeOut = function (dur, fin) {
  for (let i = 0; i < this.length; i++){
    const _fadeOut = (complection) => {
      this[i].style.opacity = 1 - complection;
      if (complection === 1) {
        this[i].style.display = 'none';
      }
    };
    const anim = this.animateOverTime(dur, _fadeOut, fin);
    requestAnimationFrame(anim);
  }
};
