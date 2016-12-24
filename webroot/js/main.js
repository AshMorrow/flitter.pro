console.log('main js loaded');

$(document).ready(function () {

    var document_height = document.documentElement.clientHeight;
    var section_1 = document.getElementById('section_1');
    // section_1.height = document_height;
    section_1.style.height = document_height+'px';
    console.log(document_height);
});

function arrowDownClick() {
    $('html,body').animate({
        scrollTop: $("#section_2").offset().top
    });
}