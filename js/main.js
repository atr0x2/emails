$(document).ready(function() {
    $("input.filestyled").uniform({'fileDefaultText': 'Выберите путь к файлу', 'fileBtnText': 'Выбрать файл'});

    $("#login-link").bind('click', function(event) {
        $('#login-window').toggle();
    });
    $("#login-window-close").bind('click', function(event) {
        $('#login-window').hide();
    });
    
});