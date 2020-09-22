$(document).ready(function () {
    $('.transfer-note').hide();
    $('.cash-note').hide();
    if($('#cash').is(':checked')){
        $('.cash-note').show();
        $('.transfer-note').hide();
    }else if($('#transfer').is(':checked')){
        $('.cash-note').hide();
        $('.transfer-note').show();
    }
    $('#cash').click(function(){
        $('.cash-note').show();
        $('.transfer-note').hide();
        $('#cash').prop("checked", true);
    });
    $('#transfer').click(function(){
        $('.cash-note').hide();
        $('.transfer-note').show();
        $('transfer').prop("checked", true);
    });
    
});