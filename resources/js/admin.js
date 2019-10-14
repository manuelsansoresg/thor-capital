
/* confirm */
window.sendConfirm = function (url) {
    var ask = window.confirm("¿Desea eliminar el elemento?");
    if ( ask ==true){
        window.location.href= url;
    }
}
/* confirm */
