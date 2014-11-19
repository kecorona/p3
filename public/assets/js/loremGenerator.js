$(document).ready(function() {
    $("#submit").click(function() {
        
        // Send form variables via JSON
        var paragraph_count        = document.getElementById('paragraph_count').value = 1;
        var paragraphs        = document.getElementById('paragraphs').checked ? 1:0;

        var proceed = true;

        if ((paragraph_count > 0) && (paragraph_count < 50) && (paragraph_count != '')) {} else {
            $('input[name=paragraph_count]').css('border-color','red');
            proceed = false;
         }
	    if(proceed)
	    {
	        // JSON data sent to PHP form for processing
	        post_data = {'paragraph_count':paragraph_count};
	        //Ajax response
	        $.post('lorem_ipsum', post_data, function(response){
	            // Load JSON data and display
	            if(response.type == 'error') {
	                output = '<div class="error">'+response.text+'</div>';
	            } else {
	                output = '<div class="success">'
	                
	                for (i = 0; i < response.text.length; i++) {
                        output += "<h3>Lorem Ipsum</h3> <br />"
                        if(paragraphs == 1)
	                        output += response.text[i].paragraphs;
                        output += "<br/>";
                    }
            	output += '</div>';
       			}
        		$("#results").hide().html(output).slideDown();
    		}, 'json');
 		}
    });
    //reset form when new options selected
    $("#li_form input, #li_form textarea").keyup(function() {
        $("#li_form input, #li_form textarea").css('border-color','#a41034');
        $("#results").slideUp();
    });
});