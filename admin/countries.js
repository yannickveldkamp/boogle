function fillCountry(Value) {
    $('#add__country').val(Value);
    $('.result__countries').hide();
}
$(document).ready(function () {
    $("#add__country").keyup(function () {

        var countryName = $('#add__country').val();

        if (countryName == "") {
            $(".result__countries").html("");
        }

        else {

            $.ajax({

                type: "POST",
                url: "../backend-search.php",
                data: {
                    countryName: countryName
                },
                success: function (html) {
                    $(".result__countries").html(html).show();
                }
            });
        }
    });
});
