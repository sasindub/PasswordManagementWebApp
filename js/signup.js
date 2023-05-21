$(document).ready(function(){

    //hide the email confirmation form
    $("#emailConfirm").hide();
    
    //submit signup form
   $("#signup").submit(function(e){
    e.preventDefault();

    $.ajax({
        url:'../partials/ajax.php',
        type:'POST',
        data: $("#signup").serialize(),
        success:function(data,status){
            alert(data);
            $("#signup").hide();
            $("#emailConfirm").show();
        }
    });

    
   });

   //email confirmation code
   $("#code").on('keyup', function(e){
        const code = $("#code").val();

        window.location.replace('../index.php');
   });
    
   

});