$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.trigger').click(() => {
        $('.sidenav').sidenav('open');
    });
    
});