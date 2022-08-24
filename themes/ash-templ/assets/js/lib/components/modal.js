import Ash from '../../lib/core.js';


Ash.prototype.modal = function(created) {
  const scroll = scrollWidth();
  for (let i = 0; i < this.length; i++) {
    const target = this[i].getAttribute('data-target');
    Ash(this[i]).click((e) => {
      e.preventDefault();
      Ash(target).fadeIn(500);
      document.body.style.overflow = 'hidden';
      document.body.style.marginRight = scroll + 'px';
    });

    const closeElements = document.querySelectorAll(`Ash{target} [data-close]`);
    closeElements.forEach(elem => {
      Ash(elem).click(() => {
        Ash(target).fadeOut(500);
        document.body.style.overflow = '';
        document.body.style.marginRight = 0 + 'px';

        if (created) {
          document.querySelector(target).remove();
        }
      });
    });

    Ash(target).click(e => {
      if (e.target.classList.contains('modal')) {
        Ash(target).fadeOut(500);
        document.body.style.overflow = '';
        document.body.style.marginRight = 0 + 'px';
        if (created) {
          document.querySelector(target).remove();
        }
      }
    });
  }
};

Ash('[data-toggle="modal"]').modal();

Ash.prototype.createModal = function({text, btns} = {}) {
  for (let i = 0; i< this.length; i++) {
    let modal = document.createElement('div');
    modal.classList.add('modal');
    modal.setAttribute('id', this[i].getAttribute('data-target').slice(1));

    // btns = {count: num, settings: [[text, classNames=[], close, cb]]}
    const buttons = [];
    for (let j = 0;j < btns.count; j++){
      let btn = document.createElement('button');
      btn.classList.add('btn', ...btns.settings[j][1]);
      btn.textContent = btns.settings[j][0];
      if (btns.settings[j][2]) {
        btn.setAttribute('data-close', 'true');
      }
      if (btns.settings[j][3] && typeof(btns.settings[j][3]) === 'function') {
        btn.addEventListener('click', btns.settings[j][3]);
      }

      buttons.push(btn);
    }

    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" data-close>
                    <span>&times;</span>
                </button>
                <div class="modal-header">
                    <div class="modal-title">
                        Ash{text.title}
                    </div>
                </div>
                <div class="modal-body">
                    Ash{text.body}
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
        `;

    modal.querySelector(".modal-footer").append(...buttons);
    document.body.appendChild(modal);
    Ash(this[i]).modal(true);
    Ash(this[i].getAttribute('data-target')).fadeIn(500);
  }
};
// вычиляем ширину скрола
function scrollWidth() {
  let div = document.createElement('div');

  div.style.width = '50px';
  div.style.height = '50px';
  div.style.overflow = 'scroll';
  div.style.visibility = 'hidden';

  document.body.appendChild(div);
  let scrollWidth = div.offsetWidth - div.clientWidth;
  div.remove();
  return scrollWidth;
};
