<!-- Scripts -->
<!-- Scripts - Page Loader -->
<script>
$(window).on("load", function() {
	// Animate loader off screen
	$(".page-loader").fadeOut("slow");
});
</script>
<!-- Scripts - Page Loader -->

<!-- Scripts - Sticky Header -->
<script>
$(window).scroll(function(){
  var sticky = $('#header'),
      scroll = $(window).scrollTop();

  if (scroll >= 160) sticky.addClass('header-sticky');
  else sticky.removeClass('header-sticky');
});
</script>
<!-- Scripts - Sticky Header -->

<script>
var mw = document.body.clientWidth;
$(function (){
	adjustHeaderMenu();
	
	$('.accordion .accordion-title').on('click' ,function(){
		$(this).parent('.accordion-item').toggleClass('active');
	});
});

$(window).bind('resize orientationchange', function () {
	mw = document.body.clientWidth;
	adjustHeaderMenu();
});

var $topheadermenu = $('#mobile-nav');
var adjustHeaderMenu = function (){
	if (mw >= 992) 
	{
		$($topheadermenu).empty();
	}
	else 
	{
		$($topheadermenu).empty();
		$topheadermenu.html($(".navigation").html());
		$(document).on('click', '.mobile-nav__toggle', function(){
			$('.mobile-nav').addClass('open');
			$('body').addClass('hidden');
		});
		$(document).on('click', '.mobile-nav__close', function(){
			$('.mobile-nav').removeClass('open');
			$('body').removeClass('hidden');
		});		
	}
}
</script>

<!-- Blog Filter -->
<script>
filterSelection("all")

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
/* var btnContainer = document.getElementById("blogBtn");
var btns = btnContainer.getElementsByClassName("click");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
} */
</script>
<!-- Blog Filter -->