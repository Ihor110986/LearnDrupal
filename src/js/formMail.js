$("#sendMail").on("click", function() {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();


    if(email == "") {
        $("#errorMess").text("Enter email");
        return false;
    } else if(name == "") {
        $("#errorMess").text("Enter name");
        return false;
    } else if(phone == "") {
        $("#errorMess").text("Enter phone");
        return false;
    } else if(message.length < 5) {
        $("#errorMess").text("Enter a message that is at least 5 characters long");
        return false;
    }

    $("#errorMess").text("");

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'phone': phone, 'message' : message},
        dataType: 'html',
        beforeSend: function() {
            $("#sendMail").prop("disabled, true");
        },
        success: function(data) {
            if(!data)
                alert("Does not send the message because were errors there!");
            else
            $("#mailForm").trigger("reset");
            $("#sendMail").prop("disabled, false");
        }

    });


});