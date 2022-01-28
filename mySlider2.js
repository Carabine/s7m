let viewport = document.querySelector('.viewport')
let slidesWrapper = document.querySelector('.slides-wrapper')
let items = document.querySelectorAll('.slides-wrapper .item')
let prev = document.querySelector('.portfolio .btn-left')
let next = document.querySelector('.portfolio .btn-right')

let itemMargin = 0

let animateSlide = (bool) => {

}

if(document.querySelector('.slides-wrapper')) {
	let slidesToShow = parseInt(slidesWrapper.getAttribute('data-slides-show'))
	let slidesDuration = parseInt(slidesWrapper.getAttribute('data-duration'))

	let test = (items.length + 1) - slidesToShow

	let translateWidth = (-items[0].clientWidth - itemMargin) * items.length

	window.addEventListener(`resize`, event => {
	  translateWidth = (-items[0].clientWidth - itemMargin) * items.length
	  slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
	}, false);


	slidesWrapper.style.transitionDuration = '0s'
	slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
	setTimeout(() => {
		slidesWrapper.style.transitionDuration = slidesDuration + 'ms'
	}, 30)

	let slideNow = 1


	for(let i = 0; i < items.length; i++) {

		let temp1 = items[i].cloneNode(true)
		temp1.classList.add('cloned-item')
		slidesWrapper.append(temp1)

		let temp2 = items[items.length - (i + 1)].cloneNode(true)
		temp2.classList.add('cloned-item')
		slidesWrapper.prepend(temp2)

	}





	animateSlide = (bool) => {

		prev.setAttribute('disabled', '')
		next.setAttribute('disabled', '')

		if(bool) {
			
			if(!(slideNow < items.length * 2 - slidesToShow)) {
			translateWidth += -items[0].clientWidth - itemMargin

			slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
			slideNow++

			setTimeout(() => {
				translateWidth = -(items[0].clientWidth + itemMargin) * (items.length * 2 - slidesToShow)
				slidesWrapper.style.transitionDuration = '0s'
				slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
			}, slidesDuration)
				setTimeout(() => {
					slidesWrapper.style.transitionDuration = slidesDuration + 'ms'
					prev.removeAttribute('disabled')
					next.removeAttribute('disabled')
					}, slidesDuration + 50)

				slideNow = test
			} else {
				translateWidth += -items[0].clientWidth - itemMargin

				slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
				slideNow++
				setTimeout(() => {
					prev.removeAttribute('disabled')
					next.removeAttribute('disabled')
				}, slidesDuration)
				
			}
		} else {

			if(slideNow < 2) {
			translateWidth -= -items[0].clientWidth - itemMargin

			slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
			slideNow--
			setTimeout(() => {
				translateWidth = -slidesWrapper.offsetWidth + (items[0].clientWidth + itemMargin) * (items.length + 1)
				slidesWrapper.style.transform = 'translate('+ translateWidth  + 'px)'

				slidesWrapper.style.transitionDuration = '0s'
			}, slidesDuration)
				setTimeout(() => {
					slidesWrapper.style.transitionDuration = slidesDuration + 'ms'
					prev.removeAttribute('disabled')
					next.removeAttribute('disabled')
			}, slidesDuration + 50)

				slideNow = items.length 
			} else {
				translateWidth -= -items[0].clientWidth - itemMargin

				slidesWrapper.style.transform = 'translate('+ translateWidth + 'px)'
				slideNow--

				setTimeout(() => {
					prev.removeAttribute('disabled')
					next.removeAttribute('disabled')
				}, slidesDuration)
			}
		}
	}
}







