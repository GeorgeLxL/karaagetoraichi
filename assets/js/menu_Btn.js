function myFunction(x) {
	x.classList.toggle("change");
  	document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {	
	var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
    var menu_btn = document.getElementsByClassName("menu_btn");
    var i;
    for (i = 0; i < menu_btn.length; i++) {
      var openDropdown = menu_btn[i];
      if (openDropdown.classList.contains('change')) {
        openDropdown.classList.remove('change');
      }
    }
}


function menuclick(underline) {
	var focused = document.getElementsByClassName("focused");
    var i;
    for (i = 0; i < focused.length; i++) {
	    var under = focused[i];
	    if (under.classList.contains('focused')) {
	        under.classList.remove('focused');
	    }
    }
    if (!underline.parentElement.classList.contains('focused')) {
        underline.parentElement.classList.add('focused');
    }
}
