import './bootstrap';
import '../css/app.css';
import '../css/background.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $ from 'jquery';
window.$ = $;

window.onload = function () {
    setTimeout(loadingPage, 2000);
    $('.navbar').css('display', 'flex');
    let w = window.innerWidth;
    let h = window.innerHeight;
    for (let i = 0; i < w / 4; i++) {

        let star = document.createElement('div');
        star.className = 'star';

        document.querySelector('#star-map').appendChild(star);
        let left = Math.round(Math.random() * w)
        let top = Math.round(Math.random() * h)
        let delay = Math.round(Math.random() * 10000)
        star.style.left = left + 'px'
        star.style.animationDelay = delay + 'ms'

        if (delay > 300) {
            star.style.top = top + 'px'
            star.style.animation = delay + 'ms blink infinite'
        } else {
            star.style.animation = delay + 's blink infinite,' + delay/2 + 's move infinite'
        }
    }
}

function loadingPage() {
    $('.loader').css("display","none");
    $('.content').css("display","flex");
}