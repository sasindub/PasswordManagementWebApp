$(document).ready(function(){


    $("#login").submit(function(e){
        e.preventDefault();
        $("#snipper").show();
        

        $("#logreg-forms").hide();
        $("#snipper").html('<div class="spinner-border m-5" role="status"></div>');


        $.ajax({
            url:"partials/ajax.php",
            type:"POST",
            data: $("#login").serialize(),
            beforeSend:function(){
            },
            success:function(data){
                if(data == 1){
                    alert("Something went wrong!");
                    $("#er").html('<div class="alert alert-danger" role="alert">Invalid password or e-mail address!!</div>');
                    $("#logreg-forms").show();
                    $("#snipper").hide();
                }else{
                    alert("You are successfully logged in!");
                    window.location.replace("app/account.php");
                }
                
            },
        
           });
    });
   

});