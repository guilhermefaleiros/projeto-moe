$(document).ready(function(){
    $('select').formSelect();
    $('.sidenav').sidenav();
    $('.trigger').click(() => {
        $('.sidenav').sidenav('open');
    });
})