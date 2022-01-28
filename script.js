let html 
let body
let sliderItems
let overlay
let overlayContent
let modalMenuLinks
let navBtn
let modalOverlay
let modalContent
let openModalEls
let navbar



document.addEventListener("DOMContentLoaded", function(event) { 
	$('.our-clients .slider-pc').slick({
	    infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.our-clients .pc-container .btn-left'),
		nextArrow: $('.our-clients .pc-container .btn-right'),
	  });

	$('.our-clients .slider-mobile').slick({
	    infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.our-clients .mobile-container .btn-left'),
		nextArrow: $('.our-clients .mobile-container .btn-right'),
	  });


	$('.our-clients .slider').on('afterChange', checkScale)

	$('.single-project .slider').slick({
	    infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: $('.single-project .btn-left'),
		nextArrow: $('.single-project .btn-right'),
		responsive: [
        	{
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
       	]

	  });
	

	$(".fancybox").fancybox({
		prevEffect: 'none',
		nextEffect: 'none',
		helpers: {
			title: {
				type: 'outside'
			}
		}
	})



  html = document.querySelector('html')
	
  	
  	body = document.querySelector('body')
	overlay = document.querySelector('.overlay')
	overlayContent = document.querySelector('.overlay-content')
	modalMenuLinks = document.querySelectorAll('.overlay a')
	navBtn = document.querySelector('.nav-icon')

	modalOverlay = document.querySelector('.custom-modal-overlay')
	modalContent = document.querySelector('.custom-modal-content')
	openModalEls = document.querySelectorAll('.openModalEl')
	navbar = document.querySelector('header .navbar')


	if(window.pageYOffset > 0) {
		navbar.style.background = 'rgba(63, 63, 63, 0.57)'
		navbar.classList.add('grey')
		navbar.classList.remove('trans')
	} else if(window.pageYOffset <= 0) {
		navbar.style.background = 'transparent'
		navbar.classList.remove('grey')
		navbar.classList.add('trans')
	}

	window.addEventListener('scroll', (e) => {
		if(window.pageYOffset > 0) {
			navbar.style.background = 'rgba(63, 63, 63, 0.57)'
			navbar.classList.add('grey')
			navbar.classList.remove('trans')
		} else if(window.pageYOffset <= 0) {
			navbar.style.background = 'transparent'
			navbar.classList.remove('grey')
			navbar.classList.add('trans')

		}	 		
	})


	checkRem()
	
	checkScale()
	

	navBtn.addEventListener('click', showMenu)
	overlay.addEventListener('click', hideMenu)
	for(let i = 0; i < modalMenuLinks.length; i++){
	  modalMenuLinks[i].addEventListener('click', hideMenu)
	}
	overlayContent.addEventListener('click', function(e) {
	  e.stopPropagation();
	  return false
	})



	window.addEventListener('resize', function(event){
		checkRem()
		checkScale()	
	});
});
	
let checkRem = () => {
	html.style.fontSize = html.offsetWidth / 100 + 'px'



}
setInterval(() => checkScale(), 2000)

let checkScale = () => {
	let sliderItems = document.querySelectorAll('.our-clients .slider .item .img-container')
	let detailsImg = document.querySelectorAll('.item .details img')
	

	let slideScale
	if(window.matchMedia("(max-width: 768px)").matches) {
		slideScale = html.offsetWidth * 2 / 1012
		detailsScale = html.offsetWidth * 7.5 / 1012 
		if(document.querySelector('.customized-publishing .custom-btn')) {
			let greenBtn = document.querySelector('.customized-publishing .custom-btn')
			let customizedPublishing = document.querySelector('.customized-publishing')

			customizedPublishing.append(greenBtn)
		}
		

		for(let i = 0; i < detailsImg.length; i++) {
			detailsImg[i].style.transform = "scale("+ detailsScale +")"
		}
	} else if(window.matchMedia("(min-width: 2000px)").matches) {
		slideScale = 2000 / 2400

	} else {
		if(document.querySelector('.customized-publishing .custom-btn')) {
			let greenBtn = document.querySelector('.customized-publishing .custom-btn')
			let customizedPublishingRow = document.querySelector('.customized-publishing .second-row .btn-container')
			
			customizedPublishingRow.append(greenBtn)
		}
		

		slideScale = html.offsetWidth / 2024
		let overlay = document.querySelector('.overlay')
		overlay.classList.add('no-active');
		for(let i = 0; i < detailsImg.length; i++) {
			detailsImg[i].style.transform = "scale(1)"
		}
	}

	for(let i = 0; i < sliderItems.length; i++) {
		sliderItems[i].style.transform = "scale("+ slideScale +")"

	}

	
}


function hideMenu(e) {
  e.stopPropagation()
  
  overlayContent.classList.add('close-menu')
  overlayContent.classList.remove('open-menu')
  setTimeout(() => {
  	overlay.classList.add('no-active')
  	body.classList.remove('overflow-hidden')
  	}, 300)
 
}

function showMenu(e) {
  e.stopPropagation()
  overlay.classList.remove('no-active')
  overlayContent.classList.add('open-menu')
  overlayContent.classList.remove('close-menu')
  body.classList.add('overflow-hidden')
}