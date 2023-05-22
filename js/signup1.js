$(document).ready(function(){
    //hide the email confirmation form
    $("#emailConfirm").hide();
    $("#err").hide();
    
    //submit signup form
   $("#signup").submit(function(e){
    e.preventDefault();

    const email = $("#semail").val();
   
   //email validation
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
            
        }
    },error:function(requirmet, error){
        console.log(error);
    }
});


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
                $("#signup").hide();
                $("#emailConfirm").show();}
                else{
                    $("#err").show();
                    $("#err").text("Something went wrong!");
                }
            },error:function(requirmet, error){
                console.log(error);
            }
        });
    }else{
        $("#err").text("Password is not matching!");
        $("#scpass").css("backgroundColor","#fad4d4");
        $("#err").show();
    }



    
   });


   //insert data sending
   function insertData(){
    
   }

   //email validation
   function emailValidation(email){
   
   }

   //email confirmation code
   $("#code").on('keyup', function(e){
        const code = $("#code").val();

        window.location.replace('../index.php');
   });
    
   

});