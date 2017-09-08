
$(document).ready(function () {

	jQuery(window).load(function() {
		jQuery("#preloader").delay(300).fadeOut("slow");
		jQuery("#load").delay(0).fadeOut("slow");
	});
})


var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("preloader").style.display = "none";
  // document.getElementById("myDiv").style.display = "block";
}


//
// $(document).ready(function () {
//
//   // preloader
//   $(window).load(function(){
//     $('.preloader').delay(400).fadeOut(500);
//   })
//
// })
