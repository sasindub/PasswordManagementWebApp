$(document).ready(function(){
   //get password details
   $.ajax({
        url: "../partials/ajax.php",
        type: "post",
        data: {type: "getPassData"},
        success: function(data){
            alert(data);
        },
        error: function(error){
            console.log(error);
        }
        
   });
});