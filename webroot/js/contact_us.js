var contactUs = function () {
};

contactUs.eventResize = function () {

    var document_height = document.documentElement.clientHeight - 40;
    var document_width = document.documentElement.clientWidth - 40;

    $(contactUs.container).css({
        'width': document_width,
        'height': document_height
    });
};

contactUs.eventScroll = function (e) {
    window.scrollTo(0,contactUs.scrollPosition);
};

contactUs.container = '';
contactUs.scrollPosition = '';

contactUs.show = function (obj) {

    $(obj).blur();

    var document_height = document.documentElement.clientHeight - 40;
    var document_width = document.documentElement.clientWidth - 40;

    var element = document.getElementsByTagName('body');

    var form_container = document.createElement('div');
    form_container.id = 'contact_us_popup';

    var form_head = document.createElement('div');
    form_head.className = 'form_popup_head';
    form_head.innerHTML = '<img src="/img/icons/cross.png" alt="close" onclick="contactUs.close()"/>'

    form_container.appendChild(form_head);

    var form_label = document.createElement('div');
    form_label.className = 'form_popup_label';
    form_label.innerHTML = 'Оставить заявку';

    form_container.appendChild(form_label);

    var form_inputs_container = document.createElement('div');
    form_inputs_container.className = 'input_container';

    var form_inputs_left = document.createElement('div');
    form_inputs_left.className = 'input_container_left';
    form_inputs_left.innerHTML = '<div><div class="label">*Ваше имя</div>' +
        '<div><input type="text" name="name"></div></div>' +
        '<div><div class="label">*Как с вами связатся?</div>' +
        '<div><input type="text" name="contact"></div></div>';

    form_inputs_container.appendChild(form_inputs_left);

    var form_inputs_right = document.createElement('div');
    form_inputs_right.className = 'input_container_right';
    form_inputs_right.innerHTML = '<div><div class="label">Коментарий</div><div>' +
        '<textarea class="comment"></textarea></div></div>';

    form_inputs_container.appendChild(form_inputs_right);
    form_container.appendChild(form_inputs_container);

    var form_submit_container = document.createElement('div');
    form_submit_container.className = 'form_submit';

    var form_submit_btn = document.createElement('button');
    form_submit_btn.textContent = 'Связаться с нами';
    form_submit_btn.className = 'button_gradient';

    form_submit_container.appendChild(form_submit_btn);
    form_container.appendChild(form_submit_container);


    $(form_container).css({
        'width': document_width,
        'height': document_height,
        'display': 'none'
    });

    element[0].appendChild(form_container);

    $(form_container).fadeIn(function () {
        $(this).css({
            'display': 'flex'
        });
    });

    this.container = form_container;
    this.scrollPosition = $(document).scrollTop();

    window.addEventListener('resize', this.eventResize);
    window.addEventListener('scroll',this.eventScroll)
};

contactUs.close = function () {

    window.removeEventListener('resize',this.eventResize);
    window.removeEventListener('scroll',this.eventScroll);
    $(this.container).fadeOut(function () {
        $(this).remove();
    });

};