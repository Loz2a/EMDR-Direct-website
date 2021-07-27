<script>

// header - add class to change background when scroll

// When the user scrolls the page, execute myFunction
window.onscroll = function() {headerFunction()};

// Get the header
var header = document.querySelector(".site-header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function headerFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


// cursor time
// const cursor = document.querySelector(".cursor");

// document.addEventListener('mousemove', e => {
// 	cursor.setAttribute("style", "top: "+(e.pageY - 12)+"px; left:" +(e.pageX - 12)+"px;");
// });

///////////

var observer = new IntersectionObserver(function(entries) {
	// isIntersecting is true when element and viewport are overlapping
	// isIntersecting is false when element and viewport don't overlap
  var body = document.querySelector('body');
  // check if the footer is on screen
	if(entries[0].isIntersecting === true)
  // add this class which then shifts the header up and off screen whilst the footer is on screen
  body.classList.add('footerVisible');

  // if the footer is not on screen, remove the noSticky class so the header is still on screen.
  if(entries[0].isIntersecting === false)
  body.classList.remove('footerVisible');

}, { threshold: [0] });

observer.observe(document.querySelector(".footer"));

//checking if elements on on screen

(function($) {

$.fn.visible = function(partial) {
  
	var $t            = $(this),
		$w            = $(window),
		viewTop       = $w.scrollTop(),
		viewBottom    = viewTop + $w.height(),
		_top          = $t.offset().top,
		_bottom       = _top + $t.height(),
		compareTop    = partial === true ? _bottom : _top,
		compareBottom = partial === true ? _top : _bottom;
  
  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

};
  
})(jQuery);

// these are to run just once. So the second any of these are 1px on screen, the class will be added. No toggles or removes.

jQuery(window).scroll(function(event) {


jQuery(".simpleActive").each(function(i, el) {
  var el = jQuery(el);
  if (el.visible(true)) {
	el.addClass("active"); 
  }
});

jQuery(".simpleActiveTwo").each(function(i, el) {
  var el = jQuery(el);
  if (el.visible(true)) {
	el.addClass("turnOn"); 
  }
});

});

jQuery("a").hover(function(){

  jQuery(".cursor").addClass("expand");  //Add the active class to the area is hovered
}, function () {
  jQuery(".cursor").removeClass("expand");
});


jQuery("input").hover(function(){

jQuery(".cursor").addClass("expand");  //Add the active class to the area is hovered
}, function () {
jQuery(".cursor").removeClass("expand");
});

// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("toggle").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("toggleButton").classList.toggle("show");
  document.querySelector(".navbar").classList.toggle("show");
  document.querySelector(".logoWrapper").classList.toggle("show");

}

jQuery('.input-field input').keyup(function(){
  
  if(jQuery(this).val()){
    jQuery(this).parent().find('label').addClass("active");
    jQuery(this).parent().find('span').addClass("active");

  }else{
    jQuery(this).parent().find('label').removeClass("active");
    jQuery(this).parent().find('span').removeClass("active");

  }
});

</script>

<?php if(is_page(2)) { ?>


    <script>



// end of checking if elements are on screen.

gsap.registerPlugin(ScrollTrigger);

let container = document.querySelector(".portfolio");
let tl = gsap.timeline({
scrollTrigger: {
    pin: true,
    scrub: 1,
    trigger: container,
    end: () => container.scrollWidth - document.documentElement.clientWidth + container.offsetWidth
},
invalidateOnRefresh: true,
defaults: { ease: "none", duration: 1 }
});

tl.to(".parallax", { x: 300 })
.to(".panel", {
    x: () => -(container.scrollWidth - document.documentElement.clientWidth)
    },
    0
);

</script>

<?php } ?>

<script>

ScrollTrigger.matchMedia({
	
  // desktop
  "(min-width: 800px)": function() {
    // setup animations and ScrollTriggers for screens 800px wide or greater (desktop) here...
    // These ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
  },

  // mobile
  "(max-width: 799px)": function() {
    // The ScrollTriggers created inside these functions are segregated and get
    // reverted/killed when the media query doesn't match anymore. 
  },
	
  // all 
  "all": function() {
    // ScrollTriggers created here aren't associated with a particular media query,
    // so they persist.

    ScrollTrigger.create({
      trigger: ".vision",
      start: 'top 90%',
      toggleClass: "activeSection",
      pin: false, 
      markers:false,
      pinSpacing: false,
      endTrigger: 'html',
      end: 'bottom top'
    });

    // add class to each header to reveal from below

    const reveal = gsap.utils.toArray('.reveal');
    reveal.forEach((text, i) => {
      ScrollTrigger.create({
        trigger: text,
        toggleClass: 'active',
        start: 'top 95%',
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        endTrigger: 'html',
        end: 'bottom top'
      })
    })

    // add class for opacity

    const opacity = gsap.utils.toArray('.justOpacity');
    opacity.forEach((text, i) => {
      ScrollTrigger.create({
        trigger: text,
        toggleClass: 'active',
        start: 'top 98%',
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        endTrigger: 'html',
        end: 'bottom top'
      })
    })

    // add class for opacity

    const removeAtFooter = gsap.utils.toArray('.opacityUntilFooter');
    removeAtFooter.forEach((text, i) => {
      ScrollTrigger.create({
        trigger: text,
        toggleClass: 'active',
        start: 'top 98%',
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        endTrigger: 'html',
        end: 'bottom top'
      })
    })

    // add class to each section

    const sectionReveal = gsap.utils.toArray('.sectionReveal');
    sectionReveal.forEach((sec, i) => {
      ScrollTrigger.create({
        trigger: sec,
        toggleClass: 'active',
        start: 'top 90%',
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        endTrigger: 'html',
        end: 'bottom top'
      })
    })

    // add class to each item

    const revealText = gsap.utils.toArray('.revealText');
    revealText.forEach((sec, i) => {
      ScrollTrigger.create({
        trigger: sec,
        toggleClass: 'active',
        start: 'top 95%',
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        endTrigger: 'html',
        end: 'bottom top'
      })
    })

     // add class to each item

    const showSideNav = gsap.utils.toArray('.showDots');
    showSideNav.forEach((sec, i) => {
      ScrollTrigger.create({
        trigger: sec,
        toggleClass: 'active',
        start: 'top 95%'
        // endTrigger and end set to stop it removing the class once you go past the elements. 
        //In other words, it doesn't reverse the transitions on the way back up.
        // endTrigger: 'html',
        // end: 'bottom top'
      })
    })


    // home page logos reveal and move up

    gsap.utils.toArray('.logosWrapper').forEach(logoWrapper => {
      const logos = logoWrapper.querySelectorAll('.logoWrapper');
      
      // Set things up
      gsap.set(logos, { y: 50, opacity: 0 });
      
      ScrollTrigger.create({
        trigger: '.logosWrapper',
        start: 'top 90%',
        markers: false,
        onEnter: () => gsap.to(logos, {
          y: 0,
          opacity: 1,
          duration: 0.3,
          stagger: 0.2,
          delay: 0,
          ease: 'expo',
          overwrite: 'auto'
        }),
        onLeaveBack: () => gsap.to(logos, {
          y: 50,
          opacity: 0,
          duration: 0.1,
          stagger: 0.1,
          delay: 0,
          ease: 'expo',
          overwrite: 'auto'
        })
      });
    })


  }
	
}); 

</script>