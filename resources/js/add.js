import '../css/add.css';
import $ from 'jquery';
window.$ = $;

const firstS = '<input type="hidden" name="style" value="1"></input>' +
    '<label for="upload1" class="col-6 offset-md-3 mt-1">' +      
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload1" style="display:none">' +
    '</label>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<textarea class="col-7 mt-2 addInput" placeholder="News main text"></textarea>' +
    '<label for="upload2" class="offset-md-1 col-4 my-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload2" style="display:none">' +
    '</label>' +
    '<label for="upload3" class="col-4 my-5 mb-4">' +  
    '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload3" style="display:none">' +
    '</label>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text"></textarea>';

const secondS = '<input type="hidden" name="style" value="2"></input>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<label for="upload1" class="col-6 offset-md-3 mt-1">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +       
        '<input type="file" id="upload1" style="display:none">' +
    '</label>' +
    '<label for="upload2" class="col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload2" style="display:none">' +
    '</label>' +
    '<label for="upload3" class="px-2 col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload3" style="display:none">' +
    '</label>' +
    '<label for="upload4" class="col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload4" style="display:none">' +
    '</label>' +
    '<textarea class="col-12 my-4 addInput" placeholder="News main text"></textarea>' +
    '<label for="upload5" class="col-4 my-5 mb-4">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload5" style="display:none">' +
    '</label>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text"></textarea>';

const thirdS = '<input type="hidden" name="style" value="3"></input>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title"></input>' +
    '<label for="upload1" class="col-10 offset-md-1 my-3">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +  
        '<input type="file" id="upload1" style="display:none">' +
    '</label>' +
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

