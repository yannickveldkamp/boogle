// find beer styles directly in database 
$(document).ready(function(){
    $('#add__country').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".result__countries");
        $(".result__countries").show();
        if(inputVal.length){
            $.get("../backend-search.php", {add_country: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    $("#add__country").focusout(function() {
        $(".result__countries > p").each(function() {
            var name = $(this).text();
            $(this).addClass("tag");
            $(this).wrap("<a href='"+name+"'>");
            $(this).click(function(e) {
                $("#add__country").attr("placeholder", name);
                $("#add__country").val(name);
                e.preventDefault();
                $(".result__countries").hide();
            });
        });
    });
    // Set search input value on click of result item
});