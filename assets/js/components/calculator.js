jQuery(document).ready(function($) {
    $('.calculator input, .calculator select').on('change', function () {
        $.ajax({
            url: '/wp-content/themes/pineparks/inc/components/ajax-calculator.php',
            method: 'post',
            dataType: 'html',
            data: $('#form_calculator').serialize(),
            success: function(data){
                $('#result').html(data);
            }
        });
    });
});