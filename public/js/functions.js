$(document).ready(function(){
    $("#curp").focusout(function () {
        var curpText = $("#curp").val();
        $("#rfc").val(curpText.substring(0,10));
        $("#radio" + curpText.substring(10,11).toUpperCase()).attr('checked', true);
        $.ajax({
            url: "http://ensq.dev/estados/id/" + curpText.substring(11,13),
            type: "GET",
            dataType: "json",
            success: function(response){
                $.each(response,function(key,value){
                    $('#birthplace').val(value[0].id).change();
                });
            }
        });
    });
});

//Jquery Validate

