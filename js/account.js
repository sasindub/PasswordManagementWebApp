$(document).ready(function(){

    
    var cc;
    //add new passwords
    //check category
   function checkCategory(){

        var out;
        const cat = $("#pcat").val();

        $.ajax({
            url:"../partials/ajax.php",
            type:"POST",
            data: {cat:cat,
                    type:'catCheck'
            
            },
            success:function(data){
                alert(data);
              $("#catt").val(data);
            }
        });
       
    }

    //insert ned data


});