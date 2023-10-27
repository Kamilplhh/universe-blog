import '../css/add.css';
import $ from 'jquery';
window.$ = $;

const firstS = '<div class="photo addPhoto col-6 offset-md-3 mt-1 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<textarea class="col-7 mt-2 addInput" placeholder="News main text"></textarea>' +
    '<div class="photo addPhoto offset-md-1 col-4 my-5 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<div class="photo addPhoto col-4 my-5 mb-4 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text"></textarea>';

const secondS = '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<div class="photo addPhoto col-6 offset-md-3 mt-1 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<div></div>' +
    '<div class="photo addPhoto col-4 mt-5 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<div class="photo addPhoto px-2 col-4 mt-5 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<div class="photo addPhoto col-4 mt-5 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<textarea class="col-12 my-4 addInput" placeholder="News main text"></textarea>' +
    '<div class="photo addPhoto col-4 my-5 mb-4 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text"></textarea>';

const thirdS = '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<div class="photo addPhoto col-10 offset-md-1 my-3 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>' +
    '<textarea class="col-10 offset-md-1 my-4 addInput" placeholder="News main text"></textarea>';

$(document).ready(style1());

$("#style-select").on("change", function () {
    let selected = $("#style-select option:selected").val();
    $('#addPanel').empty();

    if (selected == 1) style1();
    else if (selected == 2) style2();
    else style3();
});

function style1() {
    $('#addPanel').append(firstS);
}

function style2() {
    $('#addPanel').append(secondS);
}

function style3() {
    $('#addPanel').append(thirdS);
}

