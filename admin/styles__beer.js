function fill(Value) {
    $('#style__beer').val(Value);
    $('.result__style__beer').hide();
}
$(document).ready(function () {
    $("#style__beer").keyup(function () {

        var styleName = $('#style__beer').val();

        if (styleName == "") {
            $(".result__style__beer").html("");
        }

        else {

            $.ajax({

                type: "POST",
                url: "../backend-search.php",
                data: {
                    style__beer: styleName
                },
                success: function (html) {
                    $(".result__style__beer").html(html).show();
                }
            });
        }
    });
});
