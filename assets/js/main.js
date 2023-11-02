const swipers = [];

const swiperContainers = document.querySelectorAll('.swiper');

swiperContainers.forEach((container, index) => {

	const swiper = new Swiper(container, {
		slidesPerView: 3,
		slidesPerSlide: 1,
		speed: 550,
		pagination: {
			el: container.querySelector('.swiper-pagination'),
		},
		navigation: {
			nextEl: container.querySelector('.swiper-button-next'),
			prevEl: container.querySelector('.swiper-button-prev'),
		},
		scrollbar: {
			el: container.querySelector('.swiper-scrollbar'),
		},
	});

	swipers.push(swiper);
});