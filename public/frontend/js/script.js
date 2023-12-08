$(document).ready(function(){
     var list_item = $('.list_item');
     list_item.on('click',function(e){
        $('.list_item').removeClass('active');
        $(this).addClass('active');
     })
})
