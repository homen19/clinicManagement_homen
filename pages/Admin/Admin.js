


$(document).ready(function () {
    $("#home").click(function () {
        
      
        $(".register-doctors").hide();
        $(".register-reciptionist").hide();
        $(".create-users").hide();
        $(".view-user").hide();
        $("#main-view").show();

    });
    $("#doctor").click(function(){
        $("#main-view").hide();
        $(".register-reciptionist").hide();
        $(".create-users").hide();
        $(".view-user").hide();
        $(".register-doctors").show();
        
    });
    $("#reciptionist").click(function(){
        $("#main-view").hide();
        $(".create-users").hide();
        $(".view-user").hide();
        $(".register-reciptionist").show();
        $(".register-doctors").hide();
        
    });
    $("#user").click(function(){
        $("#main-view").hide();
        $(".register-reciptionist").hide();
        $(".register-doctors").hide();
        $(".view-user").hide();
        $(".create-users").show();
        
    });
    $("#viewUser").click(function(){
        $("#main-view").hide();
        $(".register-reciptionist").hide();
        $(".register-doctors").hide();
        $(".create-users").hide();
        $(".view-user").show();
        
    });

    // doctor registration form functionality
    $(".btn").click(function(){
        $(".doctor-registration-form").hide();
       
        
    });

    $(".register").click(function(){
        $(".doctor-registration-form").show();
         
    });

    $(".btn-doctor-details").click(function(){
        $(".view-doctor-details").hide();
       
        
    });
    $(".view-doctors").click(function(){
        $(".view-doctor-details").show();
       
        
    });


    // -------register reciptioinist--------
    $(".btn-reciptionist").click(function(){
        $(".register-reciptionist-form").hide();
       
        
    });
    $("#rec-register").click(function(){
        $(".register-reciptionist-form").show();
       
        
    });


    // -----view reciptionis--------

    $(".btn-reciptionist-details").click(function(){
        $(".view-reciptionist-details").hide();
       
        
    });
    $("#view-reciptionist").click(function(){
        $(".view-reciptionist-details").show();
       
        
    });

    
    


})