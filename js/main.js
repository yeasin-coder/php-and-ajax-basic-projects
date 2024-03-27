$(document).ready(function(){ 

    //check username availability
    $("#username").blur(function(){
        //get the username field value
        let username = $(this).val();
        
        //make the XMLHTTP request with ajax
        $.ajax({
            url: "check/check_user.php",
            method: "POST",
            data: {username:username},
            dataType: "text",
            success: function(data){
                $(".user-status").html(data);
            }
        });
    });


    //show password using ajax
    $("#show_password").on('click',function(){
        let password_field = $("#password");
        let field_type = password_field.attr('type');

        if(field_type == "password"){
            password_field.attr('type', 'text');
            $(this).text("Hide");
        }else{
            password_field.attr('type', 'password');
            $(this).text("Show");
        }
        
    });

    //autocomplete textbox
    $("#skill").keyup(function(){

        //get the value of the input filed
        let skill = $(this).val();

        if(skill != ""){

        
            $.ajax({
                url: "check/autocomplete_textbox.php",
                method: "POST",
                data: {skill:skill},
                dataType: "text",
                success: function(data){
                    $('#skill_status').fadeIn();
                    $('#skill_status').html(data);
                }
            });

        }
    });

    $(document).on('click', 'li', function(){
        $('#skill').val($(this).text());
        $('#skill_status').fadeOut();
    });


    //auto refresh div content
    $('#post').on('click', function(){
        let message = $('#body').val();

        if($.trim(message) != ''){
            $.ajax({
                url: "check/auto_refresh.php",
                method: "POST",
                data: {message:message},
                dataType: "text",
                success: function(data){
                    $('#body').val("");
                }
            });

            return false;
        }
    });



    //auto refresh div content with set interval
    setInterval(function(){
        $('#messages').load("check/get_messages.php").fadeIn("slow");
    }, 1000);


    //live search functionality with ajax
    $('#search').keyup(function(){
        let key = $(this).val();

        if($.trim(key) != ''){
            $.ajax({
                url: "check/live_search.php",
                method: "POST",
                data: {key: key},
                dataType: "text",
                success: function(data){
                    $('#live-search').html(data);
                }
            });
        }
    });

 });  