import '../css/add.css';
import $ from 'jquery';
window.$ = $;

const firstS = '<div class="photo addPhoto col-6 offset-md-3 mt-1 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>'+
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4" placeholder="News title"></input>'+
'<textarea class="col-7 mt-2" placeholder="News main text"></textarea>'+
'<div class="photo addPhoto offset-md-1 col-4 my-5 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>'+
'<div class="photo addPhoto col-4 my-5 mb-4 d-flex flex-column justify-content-center align-items-center">ADD PHOTO</div>'+
'<textarea class="col-7 offset-md-1 mt-4" placeholder="Second main text"></textarea>';

const secondS = "<p>2</p>";

const thirdS = "<p>3</p>";

$( document ).ready(style1());

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

