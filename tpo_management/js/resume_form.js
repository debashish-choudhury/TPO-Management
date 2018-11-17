$(document).ready(function() {
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_fields_button"); //Add button ID
    var wrapper2 = $(".input_fields_wrap2");
    var add_button2 = $(".add_fields_button2");
    var wrapper3 = $(".input_fields_wrap3");
    var add_button3 = $(".add_fields_button3");    
    var x = 1; //initlal text box count
    var y = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        x++; //text box increment
        $(wrapper).append('<div class="multiInput"><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        x--;
    });
    
    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        y++; //text box increment
        $(wrapper2).append('<div class="multiInput"><input type="text" name="mytext1[]"/><a href="#" class="remove_field2">Remove</a></div>'); //add input box
    });
    
    $(wrapper2).on("click",".remove_field2", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        y--;
    });
    $(add_button3).click(function(e){ //on add input button click
        e.preventDefault();
        y++; //text box increment
        $(wrapper3).append('<div class="multiInput"><input type="text" name="mytext1[]"/><a href="#" class="remove_field3">Remove</a></div>'); //add input box
    });
    
    $(wrapper3).on("click",".remove_field3", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        y--;
    });    
});
