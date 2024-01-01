import '../css/auth.css';
import $ from 'jquery';
window.$ = $;

$(document).ready(function () {
    $('.register').toggle();
});

$('.button').on("click", function () {
    let id = $(this).attr('id');
    $(this).removeClass('off-login');
    $(this).addClass('on-login');

    if (id === 'register') {
        register();
    }
    else {
        login();
    }
})

function register() {
    $('#login').removeClass('on-login');
    $('#login').addClass('off-login');
    $('.login').toggle();
    $('.register').toggle();
}

function login() {
    $('#register').removeClass('on-login');
    $('#register').addClass('off-login');
    $('.register').toggle();
    $('.login').toggle();
}