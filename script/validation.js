function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var dateandtime = $("#dateandtime");
    var message = $("#message");

    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(dateandtime) && isNotEmpty(message)) {
        $.ajax({
            url: 'reservation_mail.php',
            method: 'POST',
            dateType: 'json',
            data: {
                name: name.val(),
                email: email.val(),
                dateandtime: dateandtime.val(),
                message: message.val()
            },
            success: function(response) {
                $('#myForm')[0].reset();
                $('.sent-notification').text("Message sent successfully.");
            }
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else {
        caller.css('border', '');
        return true;
    }
}