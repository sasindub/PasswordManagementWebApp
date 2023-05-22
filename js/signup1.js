$(document).ready(function(){
    //hide the email confirmation form
    
    $("#emailConfirm").hide();
    
    //submit signup form
   $("#signup").submit(function(e){
    e.preventDefault();

    // $("#signup").hide();
    // $("#snipper").html('<div class="spinner-border m-5" role="status"></div>');

    const email = $("#semail").val();
   
   //email validation and send the email verification code
   $.ajax({
    url:"../partials/ajax.php",
    type:"POST",
    data:{email:email,type:'emailValid'},
    beforeSend:function(){
        console.log("waiting..");
    },success:function(data, status){
        if(data == 1){
            $("#err").text("You may have an account!");
            $("#semail").css("backgroundColor","#fad4d4");
            $("#semail").val("");
            $("#semail").attr("placeholder","Please try with another e-mail!");
            $("#err").show();
            $("#signup").show();
            $("#snipper").hide();
          
        }else{
            //insert data sending

                const pass = $("#spass").val();
                const cpass = $("#scpass").val();


                if(pass === cpass){
                    $("#err").hide();
                    $("#scpass").css("backgroundColor","white");

                    $("#semail").css("backgroundColor","white");

                    $.ajax({
                        url:'../partials/ajax.php',
                        type:'POST',
                        data: $("#signup").serialize(),
                        success:function(data,status){
                            if(data == 0){
                             $("#signup").show();
                            // $("#emailConfirm").show();

                            $("#er").html('<div class="alert alert-success" role="alert">You have signed up successfully!</div>');
                            $("#err").hide();

                            setTimeout(function(){window.location.replace(
                                "../index.php");},5000);
                            
                            
                            }
                            else{
                                $("#snipper").hide();
                                $("#signup").show();
                                $("#err").show();
                                $("#err").text("Something went wrong!");
                            }
                        },error:function(requirmet, error){
                            console.log(error);
                        }
                    });
                }else{
                    $("#er").html('<div class="alert alert-danger" id="err" role="alert"></div>');
                    $("#err").text("Password is not matching!");
                    $("#scpass").css("backgroundColor","#fad4d4");
                    $("#err").show();
                }

        }
    },error:function(requirmet, error){
        console.log(error);
    }
});





    
   });


   //insert data sending
   function insertData(){
    
   }


   //email confirmation code
   $("#code").on('keyup', function(e){
        const code = $("#code").val();

        $.ajax({
            url:"../partials/ajax.php",
            type: "POST",
            data: {code:code,
                   type:"confirmCode"         
            },
            beforeSend:function(){
                alert("waiting..");
            },
            success:function(data,status){
                alert(data);
            },
            error:function(error,requirement){
                console.log(error);
            }
        });

        // window.location.replace('../index.php');
   });
    
   

});