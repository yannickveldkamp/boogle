// find beer styles directly in database 
$(document).ready(function(){
    $('#style__beer').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".result__style__beer");
        $(".result__style__beer").show();
        if(inputVal.length){
            $.get("../backend-search.php", {add_beer: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    $("#style__beer").focusout(function() {
        $(".result__style__beer > p").each(function() {
            var name = $(this).text();
            $(this).addClass("tag");
            $(this).wrap("<a href='"+name+"'>");
            $(this).click(function(e) {
                $("#style__beer").attr("placeholder", name);
                $("#style__beer").val(name);
                e.preventDefault();
                $(".result__style__beer").hide();
            });
        });
    });
    // Set search input value on click of result item
});