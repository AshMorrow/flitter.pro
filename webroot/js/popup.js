var popUp = new function () {
};

popUp.width = '';
popUp.height = '';

popUp.show = function (html) {

    if (html == '' || html == 'undefined') return;

    var bg = document.createElement('div');
    bg.className = 'popup_bg';

    var container = document.createElement('div');
    container.className = 'popup_container';
    container.innerHTML = html;

    bg.appendChild(container);

    $('body').append(bg);


};

popUp.close = function () {
    $('.popup_bg').remove();
    $('body').removeAttr('style');
};

popUp.stopPropagation = function (e) {
    e.stopPropagation();
};

popUp.portfolioFull = function (folder, img_name) {

    if (img_name == '' || img_name == 'undefined') return;
    if (folder == '' || folder == 'undefined') return;

    var bg = document.createElement('div');
    bg.className = 'popup_bg';
    bg.onclick = function () {
        popUp.close()
    };

    var container = document.createElement('div');
    container.className = 'popup_container';
    container.innerHTML = "<img src='\\img\\portfolio\\full\\" + folder + "\\" + img_name + "' onclick='popUp.stopPropagation(event)'>";

    var close = document.createElement('div');
    close.className = 'popup_close';

    var close_inner = document.createElement('div');
    close_inner.className = 'popup_close_inner';
    close_inner.innerHTML = '<img src="/img/icons/cross.png" alt="close" onclick="popUp.close()"/>';

    close.prepend(close_inner);
    container.appendChild(close);
    bg.appendChild(container);

    $('body').append(bg).css('overflow', 'hidden');
    $('.popup_close_inner').css({
        'max-width': $('.popup_container').width()+'px',
        'width': '100%'
    })
};



