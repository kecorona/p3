$(document).ready(function() {
    $("#uk-submit").click(function() {
        
        // Send form variables via JSON
        var user_count        = $('input[name=user_count]').val();
        var name              = document.getElementById('name').checked ? 1 : 0;
        var address         = document.getElementById('address').checked ? 1 : 0;
        var bio       = document.getElementById('bio').checked ? 1 : 0;

        var proceed = true;


        // Client-side verification for numeric value
        if ((user_count > 0) && (user_count < 100) && (user_count != '')) {} else {
            $('input[name=user_count]').css('border-color','red');
            proceed = false;
        }
        if(proceed)
        {
            // JSON data sent to PHP form for processing
            post_data = {'user_count':user_count};
            //Ajax response
            $.post('random_users', post_data, function(response){
                // Load JSON data and display
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                } else {
                    output = '<div class="success">'
                    for (i = 0; i < response.text.length; i++) {
                        output += "<h4>Name</h4>: " + response.text[i].name + "<br/>";
                        if (Address == 1)
                            output += "<h4>Address</h4>: " + response.text[i].address + "<br/>";
                        if (Bio == 1)
                            output += "<h4>Profile</h4>: " + response.text[i].bio + "<br/>";
                        output += "<br/>";
                    }
                    output += '</div>';
                }
                $("#result").hide().html(output).slideDown();
            }, 'json');
        }
    });
    //reset form when new options selected
    $("#uG_form input, #uG_form textarea").keyup(function() {
        $("#uG_form input, #uG_form textarea").css('border-color','#a41034');
        $("#result").slideUp();
    });
});