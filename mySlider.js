let viewport2 = document.querySelector('.viewport2')
let slidesWrapper2 = document.querySelector('.slides-wrapper2')
let items2 = document.querySelectorAll('.slides-wrapper2 .item')
let prev2 = document.querySelector('.our-clients .btn-left')
let next2 = document.querySelector('.our-clients .btn-right')

let itemMargin2 = parseInt(getComputedStyle(items2[0]).marginLeft.replace("px", "")) + parseInt(getComputedStyle(items2[0]).marginRight.replace("px", ""))


let slidesToShow2 = parseInt(slidesWrapper2.getAttribute('data-slides-show'))
let slidesDuration2 = parseInt(slidesWrapper2.getAttribute('data-duration'))
let slidesToScroll2 = parseInt(slidesWrapper2.getAttribute('data-slides-to-scroll'))

let test2 = (items2.length) - slidesToShow2

let translateWidth2 = (-items2[0].clientWidth - itemMargin2) * items2.length

window.addEventListener(`resize`, event => {
  translateWidth2 = (-items2[0].clientWidth - itemMargin2) * items2.length
  slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
}, false);


slidesWrapper2.style.transitionDuration = '0s'
slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
setTimeout(() => {
	slidesWrapper2.style.transitionDuration = slidesDuration2 + 'ms'
	console.log(parseInt(slidesWrapper2.getAttribute('data-duration')))
}, 30)

let slideNow2 = 1


for(let i = 0; i < items2.length; i++) {

	let temp1 = items2[i].cloneNode(true)
	temp1.classList.add('cloned-item')
	slidesWrapper2.append(temp1)

	let temp2 = items2[items2.length - (i + 1)].cloneNode(true)
	temp2.classList.add('cloned-item')
	slidesWrapper2.prepend(temp2)

}



const animateSlide2 = (bool) => {

	prev2.setAttribute('disabled', '')
	next2.setAttribute('disabled', '')

	if(bool) {
		
		if(!(slideNow2 < items2.length * 2 - slidesToShow2)) {
		translateWidth2 += (-items2[0].clientWidth - itemMargin2) * slidesToScroll2

		slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
		slideNow2 += slidesToScroll2

		setTimeout(() => {
			translateWidth2 = -(items2[0].clientWidth + itemMargin2) * (items2.length * 2 - slidesToShow2)
			slidesWrapper2.style.transitionDuration = '0s'
			slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
		}, slidesDuration2)
			setTimeout(() => {
				slidesWrapper2.style.transitionDuration = slidesDuration2 + 'ms'
				prev2.removeAttribute('disabled')
				next2.removeAttribute('disabled')
				}, slidesDuration2 + 300)

			slideNow2 = test2
		} else {
			translateWidth2 += (-items2[0].clientWidth - itemMargin2) * slidesToScroll2

			slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
			slideNow2 += slidesToScroll2
			setTimeout(() => {
				prev2.removeAttribute('disabled')
				next2.removeAttribute('disabled')
			}, slidesDuration2)
			
		}
	} else {

		if(slideNow2 < 2) {
		translateWidth2 -= (-items2[0].clientWidth - itemMargin2) * slidesToScroll2

		slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
		slideNow2 -= slidesToScroll2
		setTimeout(() => {
			translateWidth2 = -slidesWrapper2.offsetWidth + (items2[0].clientWidth + itemMargin2) * (items2.length + 1)
			slidesWrapper2.style.transform = 'translate('+ translateWidth2  + 'px)'

			slidesWrapper2.style.transitionDuration = '0s'
		}, slidesDuration2)
			setTimeout(() => {
				slidesWrapper2.style.transitionDuration = slidesDuration2 + 'ms'
				prev2.removeAttribute('disabled')
				next2.removeAttribute('disabled')
		}, slidesDuration2 + 300)

			slideNow2 = items2.length 
		} else {
			translateWidth2 -= (-items2[0].clientWidth - itemMargin2) * slidesToScroll2

			slidesWrapper2.style.transform = 'translate('+ translateWidth2 + 'px)'
			slideNow2 -= slidesToScroll2

			setTimeout(() => {
				prev2.removeAttribute('disabled')
				next2.removeAttribute('disabled')
			}, slidesDuration2)
		}
	}

console.log(slideNow2)
}

const adaptive = () => {
	
}