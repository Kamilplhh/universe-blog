import '../css/add.css';
import $ from 'jquery';
window.$ = $;

const firstS = "<p>1</p>";

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

