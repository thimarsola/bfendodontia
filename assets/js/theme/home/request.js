// var $j = jQuery.noConflict();

$(document).ready(function () {

    const host = $(location).attr("host");

    if(host == "localhost"){
        var path = $(location).attr("origin").concat('/').concat($(location).attr("pathname").split("/", 2).reverse().join(''));
    }else{
        var path = $(location).attr("origin");
    }

    const file = 'wp-content/themes/bfendodontia/source/Support/Sender.php';

    $('#form').submit(function () {
        $(".contact__row__form__status").removeClass("d-none");

        $.ajax({
            url: path.concat('/').concat(file),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__row__form__status').append(data);

                setTimeout(function (){
                    $(".contact__row__form__status").addClass("d-none");
                }, 3000);
            },
            error: function(){
                $('.contact__row__form__status').append('Erro');
            }
        });
        return false;
    });
});