$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

function mouse(estado, num) {
    if (estado) {
        $('.circulo' + num).css("background-color", "#3B4480");
        $('.circulo' + num).css("border", "solid 4px #12AA9E");
        $('.icono' + num).css("-webkit-filter", "grayscale(100%)");
        $('.texto' + num).css("color", "#12AA9E");
    } else {
        $('.circulo' + num).css("background-color", "transparent");
        $('.circulo' + num).css("border", "solid 3px #3B4480");
        $('.icono' + num).css("-webkit-filter", "grayscale(0%)");
        $('.texto' + num).css("color", "#3B4480");
    }
}
