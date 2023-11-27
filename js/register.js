$(document).ready(function() {
    $("#submitBtn").click(function() {
        var username = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();

        if (password != confirmPassword) {
            alert("Password not match")
        }
        $.ajax({
            type: "POST",
            url: "php/register.php",
            data: {
                username: username,
                email: email,
                password: password
            },
            success: function(response) {
                $("#result").html(response);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + status, error);
                $("#result").html("An error occurred while processing your request.");
            }
        });
    });
});
