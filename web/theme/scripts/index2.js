jQuery(function($){
    $('.choice-form').on('click', '[type=radio]', function(){
        $.post('/price', $(this).parents('form').serialize(), function(response){
            $('.new-sum').html(response).show();
        });
    });
});
