$(document).ready(function() {
    $("#submit").click(function() {
        
        // Send form variables via JSON
        var user_count        = document.getElementById('user_count').val();
        var name              = document.getElementById('name').checked ? 1 : 0;
        var address         = document.getElementById('address').checked ? 1 : 0;
        var bio       = document.getElementById('bio').checked ? 1 : 0;

        var proceed = true;


        // Client-side verification for numeric value
        if ((user_count > 0) && (user_count < 100) && (user_count != '')) {} else {
            $('input[id=user_count]').css('border-color','red');
            proceed = false;
        }
        if(proceed)
        {
            // JSON data sent to PHP form for processing
            post_data = {'user_count':user_count};
            //Ajax response
            $.post('random_users', post_data, function(response){
                // Load JSON data and display
                if(response.type == 'error') {
                    output = '<div class="error">'+response.text+'</div>';
                } else {
                    output = '<div class="success">'
                    for (i = 0; i < response.text.length; i++) {
                            output += response.text[i].title;
                        if (firstName == 1)
                            output += response.text[i].firstName;
                        if (lastName == 1)
                            output += response.text[i].lastName;
                        if (suffix == 1)
                            output += response.text[i].suffix;
                        if (address == 1)
                            output += response.text[i].address;
                        if (bio == 1)
                            output += response.text[i].bio;
                        output += "<br/>";
                    }
                    output += '</div>';
                }
                $("#results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    //reset form when new options selected
    $("#uG_form input, #uG_form textarea").keyup(function() {
        $("#uG_form input, #uG_form textarea").css('border-color','#a41034');
        $("#results").slideUp();
    });
});