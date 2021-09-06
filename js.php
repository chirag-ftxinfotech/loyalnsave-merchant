<!-- Scripts -->
<!-- Scripts - Page Loader -->
<script>
$(window).on("load", function() {
	// Animate loader off screen
	$(".page-loader").fadeOut("slow");
});
</script>
<!-- Scripts - Page Loader -->

<script>
{
	// equation of a line
	const lineEq = (y2, y1, x2, x1, currentVal) => {
		// y = mx + b
		const m = (y2 - y1) / (x2 - x1);
		const b = y1 - m * x1;

		return m * currentVal + b;
	}

	// from http://www.quirksmode.org/js/events_properties.html#position
	const getMousePos = (e) => {
		let posx = 0;
		let posy = 0;
		if (!e) {let e = window.event};
		if (e.pageX || e.pageY) 	{
			posx = e.pageX;
			posy = e.pageY;
		}
		else if (e.clientX || e.clientY) 	{
			posx = e.clientX + document.body.scrollLeft
				+ document.documentElement.scrollLeft;
			posy = e.clientY + document.body.scrollTop
				+ document.documentElement.scrollTop;
		}
		return {
			x : posx,
			y : posy
		};
	};

	// From https://davidwalsh.name/javascript-debounce-function.
	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};

	class MorphingBG {
		constructor(el) {
			this.DOM = {};
			this.DOM.el = el;
			this.DOM.el.style.opacity = 0;
			this.DOM.el.style.transition = 'transform 2s ease-out';
			this.DOM.pathEl = this.DOM.el.querySelector('path');
			this.paths = this.DOM.pathEl.getAttribute('pathdata:id').split(';')
			this.paths.splice(this.paths.length, 0, this.DOM.pathEl.getAttribute('d'));
			this.win = {width: window.innerWidth, height: window.innerHeight};
			this.animate();
			this.initEvents();
		}
		animate() {
			anime.remove(this.DOM.pathEl);
			anime({
				targets: this.DOM.pathEl,
				duration: 10000,
				easing: [0.5,0,0.5,1],
				d: this.paths,
				loop: true
			});
		}
		initEvents() {
			
			const onMouseMoveFn = (ev) => {
				requestAnimationFrame(() => {
					if ( !this.started ) {
						this.started = true;
						anime({
							targets: this.DOM.el,
							duration: 300,
							easing: 'linear',
							opacity: [0,1]
						});
					}
				});
			};

			// Window resize.
			const onResizeFn = debounce(() => this.win = {width: window.innerWidth, height: window.innerHeight}, 20);

			document.addEventListener('mousemove', onMouseMoveFn);
			document.addEventListener('touchstart', onMouseMoveFn);
			window.addEventListener('resize', ev => onResizeFn());
		}
	};

	new MorphingBG(document.querySelector('svg.scene'));	
};
</script>

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
var btnContainer = document.getElementById("blogBtn");
var btns = btnContainer.getElementsByClassName("click");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<!-- Blog Filter -->