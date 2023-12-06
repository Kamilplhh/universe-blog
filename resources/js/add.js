import '../css/add.css';
import $ from 'jquery';
window.$ = $;

const firstS = '<input type="hidden" name="format" value="1"></input>' +
    '<label for="upload1" class="col-6 offset-md-3 mt-1">' +      
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload1" style="display:none" name="photo1">' +
    '</label>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title" name="title" required></input>' +
    '<textarea class="col-7 mt-2 addInput" placeholder="News main text" name="mainText" required></textarea>' +
    '<label for="upload2" class="offset-md-1 col-4 my-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload2" style="display:none" name="photo2">' +
    '</label>' +
    '<label for="upload3" class="col-4 my-5 mb-4">' +  
    '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload3" style="display:none" name="photo3">' +
    '</label>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text" name="secondText"></textarea>';

const secondS = '<input type="hidden" name="format" value="2"></input>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title" name="title" required></input>' +
    '<label for="upload1" class="col-6 offset-md-3 mt-1">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +       
        '<input type="file" id="upload1" style="display:none" name="photo1">' +
    '</label>' +
    '<label for="upload2" class="col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload2" style="display:none" name="photo2">' +
    '</label>' +
    '<label for="upload3" class="px-2 col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload3" style="display:none" name="photo3">' +
    '</label>' +
    '<label for="upload4" class="col-4 mt-5">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload4" style="display:none" name="photo4">' +
    '</label>' +
    '<textarea class="col-12 my-4 addInput" placeholder="News main text" name="mainText" required></textarea>' +
    '<label for="upload5" class="col-4 my-5 mb-4">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +
        '<input type="file" id="upload5" style="display:none" name="photo5">' +
    '</label>' +
    '<textarea class="col-7 offset-md-1 mt-4 addInput" placeholder="Second main text" name="secondText"></textarea>';

const thirdS = '<input type="hidden" name="format" value="3"></input>' +
    '<input type="text" class="col-6 offset-md-3 mt-1 mb-4 addInput" placeholder="News title" name="title" required></input>' +
    '<label for="upload1" class="col-10 offset-md-1 my-3">' +
        '<div class="photo addPhoto d-flex flex-column justify-content-center align-items-center" aria-hidden="true">ADD PHOTO</div>' +  
        '<input type="file" id="upload1" style="display:none" name="photo1">' +
    '</label>' +
    '<textarea class="col-10 offset-md-1 my-4 addInput" placeholder="News main text" name="mainText" required></textarea>';

$(document).ready(style1());

$("#style-select").on("change", function () {
    let selected = $("#style-select option:selected").val();
    $('#addPanel').empty();

    if (selected == 1) style1();
    else if (selected == 2) style2();
    else style3();
});

function style1() {
    let format = $("#format-select option:selected").val();

    $('#addPanel').append('<input type="hidden" id="category" name="category" value="'+ format +'"></input>');
    $('#addPanel').append(firstS);
    $('#addPanel').append('<button type="submit">Test</button>');
}

function style2() {
    let format = $("#format-select option:selected").val();

    $('#addPanel').append('<input type="hidden" id="category" name="category" value="'+ format +'"></input>');
    $('#addPanel').append(secondS);
    $('#addPanel').append('<button type="submit">Test</button>');
}

function style3() {
    let format = $("#format-select option:selected").val();

    $('#addPanel').append('<input type="hidden" id="category" name="category" value="'+ format +'"></input>');
    $('#addPanel').append(thirdS);
    $('#addPanel').append('<button type="submit">Test</button>');
}

$("#format-select").on("change", function () {
    $('#category').val($(this).val());
});

$('#formPlanet').on("submit", function(event) {  
    if($('#upload1').val() === ""){
        event.preventDefault();
        alert("Please fill the fist photo bracket");
    }
})