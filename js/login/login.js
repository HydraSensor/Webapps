$(document).ready(function(){
    $("#Enter").click(function(){
        var user = $("#username").val();
        var pass = $("#password").val();
        $.ajax({
            type: "POST",
            url: "includes/login/login.php",
            data: { user : user , pass : pass },
            dataType: "html",
            success: function(data){
                alert(data);
                
            },
            error: function(){
            }
        });
    })
});