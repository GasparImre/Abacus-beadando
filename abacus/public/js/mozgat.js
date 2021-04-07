

$(document).ready(function (){

    $('.rounded-pill').on('click', function(){
        if($(this).hasClass('float-left'))
        {
            $(this).removeClass('float-left').addClass('float-right')
        }
        else{
            $(this).removeClass('float-right').addClass('float-left')
        }

    });
})
