import '../css/add.css';
import $ from 'jquery';
window.$ = $;

$("#style-select").on("change", function () {
    let selected = $("#style-select option:selected").val();
    $('#addPanel').empty();

    if (selected == 1) style1();
    else if (selected == 2) style2();
    else style3();
});

function style1() {
    $('#addPanel').append("<p>1</p>");
}

function style2() {
    $('#addPanel').append("<p>2</p>");
}

function style3() {
    $('#addPanel').append("<p>3</p>");
}