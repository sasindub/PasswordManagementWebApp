$(document).ready(function(){
    
    $("#secPassError").hide();
    getDetails();
    //get userdetails
    $.ajax({
        url: "../partials/ajax.php",
        type: "POST",
        data: {type: 'userdetails'},
        success: function(data){
            if(data == 1){
                window.location.replace("../index.php");
            }else{

                var dat = $.parseJSON(data);
                $("#nm").text(dat[0]);
                $("#mob").text(dat[2]);
                $("#mail").text(dat[1]);
                $("#nme").text(dat[0].slice(0,12));
                count();
            
                $("#p").text((dat[0].slice(0,1)).toUpperCase());
                $("#p1").text((dat[0].slice(0,1)).toUpperCase());
            }
        }
    });

    //get password details
    function getDetails(){
        $.ajax({
            url: "../partials/ajax.php",
            type: "POST",
            data: {type:'getdata'},
            success: function(data){
                if(data !== 1){
                $("#data").html(data);
                }else{
                    $("#data").html('<div class="alert alert-secondary" role="alert">No data!</div>');
                }
            },
        });
    }

    //add new passwords


    //add password when submits
    $("#addPassForm").submit(function(e){
        e.preventDefault();
        

        let pass = $("#ppass").val();
        let cpass = $("#cpass").val();
        const des = $("#des").val();
        const user = $("#user").val();
        let cat = $("#pcat").val();
        const slevel = $('input[name=radio]:checked').val();

        const catt = $("#catt").val();
        

        $.ajax({
            url:"../partials/ajax.php",
            type:"POST",
            data: {cat:cat,
                    type:'catCheck'
            
            },
            success:function(data){
              
                if(data == 0){
                    $("#err").hide();
                    $("#catt").val(data);
                    $("#pcat").css("backgroundColor","#e6e6e8");

                    //send data
                    if(pass !== cpass ){
                        
                        $("#err").show();
                        $("#err").html('<div class="alert alert-danger" role="alert">Password is not matching!</div>');
                        
                
                    }else{
                       
                        
                        let cpass = $("#cpass").val();
                        let des = $("#des").val();
                        let user = $("#user").val();
                        let catt = $("#pcat").val();
                        let slevel = $('input[name=radio]:checked').val();
                
                        let passw = $("#ppass").val();
                    
                
                    
                
                        $("#err").hide();
                
                        $.ajax({
                            url:"../partials/ajax.php",
                            type:"POST",
                            data: {des:des,
                                user:user,
                                catt:catt,
                                slevel:slevel,
                                passw:passw,
                                type:'pdata',
                            
                            },
                            success:function(data){
                            
                                if(data == 0){
                                    getDetails();
                                    $("#err").hide();
                                    $("#addPass .close").click();
                                    count();
                                    document.getElementById("addPassForm").reset();
                                    $("#smsg").show();
                                    $("#smsg").html('<div class="alert alert-success" role="alert">Password details has been saved successfully</div>');
                                    setTimeout(function(){  $("#smsg").hide(); }, 7000);

                                 
                                    
                                }else{
                                    $("#err").show();
                                    $("#err").html('<div class="alert alert-danger" role="alert">Something Went Wrong!</div>');
                                }
                
                            
                            }
                        });
                
                
                
                    }
                

                                
                }else{
                     $("#catt").val(1);
                     $("#err").show();
                     $("#err").html('<div class="alert alert-danger" role="alert">This category is already available!</div>');
                     $("#pcat").css("backgroundColor","#fad0cd");

                    }

                        
            }
     });



    });


    //get the count of passwords
    function count(){
        $.ajax({
            url: "../partials/ajax.php",
            type:"POST",
            data:{type:'count'},
            success:function (data){
                if(data !== 1) {
                if(data < 10){
                    $("#count").text("0"+data);
                }else{
                $("#count").text(data);
                }
            }else{
                alert("Something went wrong!");
            }
            },
        });
    }
    
    //log out
    $("#logoutbtn").on('click', function(e){
        e.preventDefault();

        $.ajax({
            url: "../partials/logout.php",
            type: "GET",
            data: {type:'logout'},
            success: function(data){
               
                    window.location.replace("../index.php");
            
            }
        });
        
    });


    //click on view 
    $(document).on("click", ".view", function(e){
        e.preventDefault();
        const id = this.id;

        $.ajax({
            url: "../partials/ajax.php",
            type: "post",
            data: {id:id,
                   type:"passView" },
            beforeSend: function(){
             
            },
            success: function(data){
                
                if(data == "high"){
                    alert("You should confirm the password!");
                jQuery.noConflict(); 
                jQuery('#secureModal').modal('show'); 
                }else if(data == 1){
                    alert("Something went wrong!");
                }else{
                    window.location.replace("../app/view.php");
                }
            },
            error: function(error){
                console.log(error);
            }       
        });
    });

    //click on secure alert close btn
    $("#clsModal").on("click", function(e){
        e.preventDefault();

        window.location.replace("../index.php");
    });
    
    //click on secure alert confirm and get the password details
    $("#passCon").on("click", function(e){
        e.preventDefault();
        
        var pasSecure = $("#securePass").val();
        $.ajax({
            url: "../partials/ajax.php",
            type: "post",
            data: {type : "confirmSecure",
                pasSecure: pasSecure},
            success: function(data){
                if(data != 1){
                    window.location.replace("../app/view.php");
                }else{
                    $("#secPassError").show();

                    setTimeout(function(){
                        window.location.replace("../index.php");
                    }, 2000);
                }
            },error: function(error){
                console.log(error);
            }
        });


    });
});