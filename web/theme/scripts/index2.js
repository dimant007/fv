/**
 * Created by ditry_000 on 07.07.2015.
 */

jQuery(function($){
    $('.choice-form').on('click', '[type=radio]', function(){
        $.post('pdo.php', $(this).parents('form').serialize(), function(response){
            $('.new-sum').html(response).show();
        });
    });
});
