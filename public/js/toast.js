function toast() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 3000);
}
function ftest() {
    console.log('ftest');
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 3000);
}
$(document).ready(function () {
    var foo = (document.cookie).split(';');
    console.log(foo);
    ftest();
});