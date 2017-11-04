$(document).ready(function() {
    $("#hideLogin").click(function() {
        console.log("asdfasdf");
        $("#loginForm").hide();
        $("#registerForm").show();
    });

    $("hideRegister").click(function() {
        $("#loginForm").show();
        $("#registerForm").hide();
    });
});