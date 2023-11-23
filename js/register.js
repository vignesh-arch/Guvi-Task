$(document).ready(function(){
    
    $("#form").submit(function(event){
        $.ajax({
            type:"post",
            url: "http://localhost:8001/php/register.php",
            data:{
                fullname:$("#fullname").val(),
                email:$("#email").val(),
                password:$("#password").val(),
                contact:$("#contact").val()
            },
            success: function(data){
                console.log(data)
            },
            error:function(error){
                console.log(error)
            }
        })
        
        event.preventDefault();
    })
})