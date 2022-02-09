$(document).ready(function() {
    if (document.getElementById("registerForm")) {
        $("#registerForm").validate({
            submitHandler: function(form) {
                $.ajax({
                    url: "/module/auth/registration.php",
                    method: "post",
                    dataType: "json",
                    data: $("#registerForm").serialize(),
                    success: function(data) {
                        console.log(data);
                    },
                });
            },
        });
    }
});