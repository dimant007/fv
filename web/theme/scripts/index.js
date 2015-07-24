$(document).ready(

    function checkColor() {
        $("#isCheck").click(function () {

            alert($('input:checkbox[name=checkme]').is(':checked'));

        });

        $("#checkIt").click(function () {

            $('input:checkbox[name=checkme]').attr('checked',true);

        });

        $("#UnCheckIt").click(function () {

            $('input:checkbox[name=checkme]').attr('checked',false);

        });
    });

    function get() {
        $.post('data.php', { name: form.name.value },
            function(output) {
                $('#age').html(output).show();
            });
    }