$( "form" ).submit(function( event ) {

    var data = {
        name: $("#name").val(),
        email: $("#email").val(),
        message: $("#message").val()
    };

    $.ajax({
        type: "POST",
        url: "assets/php/send_email.php",
        data: data,
        success: function(data){
            $("span#mailSentMessage").text(data).fadeIn(500).fadeOut(4000);
        }
    } );

    event.preventDefault();
});
