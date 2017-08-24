$(document).ready(function(){
    $("#Enter").click(function(){
        var user = $("#username").val();
        var pass = $("#password").val();
        $.ajax({
            type: "POST",
            url: "includes/session/session.php",
            data: { user : user , pass : pass },
            dataType: "html",
            success: function(data){
              console.log(data);

                if (data == 1){
                  alert("Acceso denegado");
                }else{
                  window.location.href=data;
                  //alert("entrooo");
                }


            },
            error: function(response){
              alert('errorrrr');
              console.log(response);
            }
        });
    })
});
