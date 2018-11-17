
/******** Navbar Dropdown *********/ 
function dropdownMenu() {
     var x = document.getElementById("dropdownClick");
     if(x.className === "topnav responsive") {
         x.className += " active";
         /*change topnav to topnav.responsive*/
     }else {
         x.className == "topnav";
     }
};
/******** Navbar Dropdown *********/ 

/******** user Dropdown *********/ 

$(document).ready(function() {
	var arrow = $('.arrow-up');
	var form = $('.dropdownUser');
	var status = false;
	$('#userLogin').click(function(event) {
		event.preventDefault();
		if(status == false) {
			arrow.fadeIn();
			form.fadeIn();
			status = true;
		}
		else {
			arrow.fadeOut();
			form.fadeOut();
			status = false;
		}
	});
});

/******** user Dropdown *********/ 
