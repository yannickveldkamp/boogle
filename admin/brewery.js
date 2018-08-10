function fillBrewery(Value) {
    $('#add__brewery').val(Value);
    $('.result__brewery').hide();
}
$(document).ready(function () {
    $("#add__brewery").keyup(function () {

        var breweryName = $('#add__brewery').val();

        if (breweryName == "") {
            $(".result__brewery").html("");
        }

        else {

            $.ajax({

                type: "POST",
                url: "../backend-search.php",
                data: {
                    breweryName: breweryName
                },
                success: function (html) {
                    $(".result__brewery").html(html).show();
                }
            });
        }
    });
});
