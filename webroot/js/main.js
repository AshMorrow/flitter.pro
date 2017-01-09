$(document).ready(function () {
    // remove spinner
    setTimeout(function () {
        $('#load_in_process').fadeOut('normal',function () {
            this.remove();
        })
    },500);

    //show scroll menu
    show_scroll_menu();
    window.addEventListener('scroll',function () {
        // console.log($('#scroll_menu_wrap').is(':not(:visible)'));
        // console.log('dd');
        show_scroll_menu();

    });
});

function show_scroll_menu() {
    if($(document).scrollTop() > 250 && $('#scroll_menu_wrap').is(':not(:visible)')){
        $('#scroll_menu_wrap').slideDown(function () {
            $('#scroll_menu_wrap').css('display','flex');
        });
        console.log('rid');
    }else if($(document).scrollTop() < 250 && $('#scroll_menu_wrap').is(':visible')){
        $('#scroll_menu_wrap').slideUp();
        console.log('up');
    }
}

function portfolio_filter(obj) {
    if($(obj).hasClass('active')) return;

    $('.portfolio_menu .items').removeClass('active');
    $(obj).addClass('active');

    var type = $(obj).attr('data-type');
    if(type == 'all'){
        $('.portfolio_element').fadeIn();
        return;
    }

    $('.portfolio_element').hide();
    $('.portfolio_element[data-type="'+type+'"]').fadeIn();

}

/*** mobile menu open/close function ***/
function mobileMenuClose() {
    $('nav.mobile_menu_items').slideUp()
}

function mobileMenuOpen() {
    $('nav.mobile_menu_items').slideToggle()
}