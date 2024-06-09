document.addEventListener('DOMContentLoaded', function () {
  $('.portfolio-img-show').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    variableWidth: true,
    asNavFor: '.portfolio-main-img, .review-sec', // Combine the classes with a comma
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.review-sec').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.portfolio-img-show, .portfolio-main-img', // Combine the classes with a comma
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.portfolio-main-img').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.portfolio-img-show, .review-sec', // Combine the classes with a comma
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });




  $('.roadmap-contain').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 3000,
    asNavFor: '.progressbar__number',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 860,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]

  });
  $('.progressbar__number').slick({
    // dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 3000,
    asNavFor: '.roadmap-contain',

    responsive: [{

      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }

    }
    ]
  });



  $('.roadmap-contain').on('afterChange', function (event, slick, currentSlide) {
    progressBar(currentSlide);
  });

  function progressBar(index = 0) {
    var progressBar = $('.progress-bar__inner');
    var itemWidth = 100 / $('.roadmap-contain .slick-dots li').length;
    var progress = (index + 1) * itemWidth;

    progressBar.css('width', progress + '%');
  }

  // Will be triggered on page load
  progressBar();

  // Will be triggered on slider click
  $('.roadmap-contain .slick-dots li').on('click', function () {
    var index = $(this).index();
    progressBar(index);
  });



  $('.our-team-cards').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});


$(document).ready(function () {
  const currentPath = window.location.pathname;

  // Remove trailing slash if present
  const currentPathCleaned = currentPath.replace(/\/$/, "");

  // Get the ID or class of the corresponding navigation link
  const linkIdentifier = currentPathCleaned.substring(1) + '-link';

  // Add "active" class to the corresponding navigation link
  $('#' + linkIdentifier).addClass('active');

  // Smooth scrolling when clicking on navigation links
  $('.nav-link').on('click', function (e) {
    e.preventDefault();
    var targetSection = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(targetSection).offset().top
    }, 1000); // Adjust the animation duration as needed
  });

  // Scroll event handling for section animations (if needed)
  $('.section').on('scroll', function () {
    // Your scroll event handling code here
  });
});




var layer = $('.layer');

var layer = $('.layer');
const layer2 = document.querySelector(".layer");

layer.mousemove(function (e) {
  var ivalueX = (e.pageX * -1 / 30);
  var ivalueY = (e.pageY * -1 / 30);
  var cvalueX = (e.pageX * -1 / 40);
  var cvalueY = (e.pageY * -1 / 30);

  console.log('ok');
  layer.css('transform', 'translate3d(' + ivalueX + 'px,' + ivalueY + 'px, 0)');
  // layer.css('transform', 'translate3d(' + (-ivalueX) + 'px, ' + (-ivalueY) + 'px, 0)');
  layer.css('background-position', `${cvalueX + 20}px ${cvalueY + 20}px`);


  gsap.to(layer, {
    x: cvalueX,
    y: cvalueY,
    duration: 0.6, // Adjust the duration (in seconds) for smoother or faster animation
    ease: 'power2.out' // Adjust the easing function for different animation styles (e.g., ease, linear, power2.inOut, etc.)
  });


});


// SLIDER

$(document).ready(() => {
  $('#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
  });



  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
})



$(document).ready(function () {


  var cursor = $(".cursor"),
    follower = $(".cursor-follower");

  var posX = 0,
    posY = 0;

  var mouseX = 0,
    mouseY = 0;

  TweenMax.to({}, 0.020, {
    repeat: -1,
    onRepeat: function () {
      posX += (mouseX - posX) / 6;
      posY += (mouseY - posY) / 6;

      TweenMax.set(follower, {
        css: {
          left: posX - 12,
          top: posY - 12
        }
      });

      TweenMax.set(cursor, {
        css: {
          left: mouseX,
          top: mouseY
        }
      });
    }
  });

  $(document).on("mousemove", function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  $(".link").on("mouseenter", function () {
    cursor.addClass("active");
    follower.addClass("active");
    follower.addClass("inverted");
  });
  $(".link").on("mouseleave", function () {
    cursor.removeClass("active");
    follower.removeClass("active");
    follower.removeClass("inverted");
  });

  $(".link2").on("mouseenter", function () {
    cursor.addClass("active2");
    follower.addClass("active2");
  });
  $(".link2").on("mouseleave", function () {
    cursor.removeClass("active2");
    follower.removeClass("active2");
  });
  $(".link3").on("mouseenter", function () {
    cursor.addClass("active3");
    follower.addClass("active3");
  });
  $(".link3").on("mouseleave", function () {
    cursor.removeClass("active3");
    follower.removeClass("active3");
  });

})


function handleWindowResize() {
  // Check if the target element is in the viewport after the window is resized
  const isIntersecting = targetElement.getBoundingClientRect().top < window.innerHeight;
  if (isIntersecting) {
    // const result = calculateSum(3, 5);
    // targetElement.textContent = result; // Display the result within the target element
  }
}


function addActiveClassToCurrentMenuItem() {
  const currentUrl = window.location.href;
  const menuItems = document.querySelectorAll('.nav ul li');

  menuItems.forEach(item => {
    const link = item.querySelector('a');

    if (link && link.href === currentUrl) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}



window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

function navigateToSection(page, sectionId) {
  // Assuming you want to navigate to "another-page.html" with the section identifier
  // Example: "another-page.html#section1"
  window.location.href = `${page}#${sectionId}`;
}


// function sayHello() {
//   console.log("Hello, " + this.name);
// }

// var person = {
//   name: "Alice",
//   say: sayHello,
// };

// person.say(); // Output: "Hello, Alice"

var person = {
  name: "Alice",
  greet: () => {
      let name2 = true;
      console.log("Hello, " + this.name2);
  }
};

person.greet(); // Output: "Hello, undefined"



function disableScroll() {
  // Get the current page scroll position
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

  // Store the scroll position and prevent scrolling
  window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
  };

  console.log('Scroll disabled');
  lenis.stop()
}

function enableScroll() {
  // Restore the ability to scroll
  window.onscroll = null; // Remove the event handler

  console.log('Scroll enabled');
  lenis.start()
}