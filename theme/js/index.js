"use strict";
function lazyLoadImages(n, t) {
	if (!("IntersectionObserver" in window)) {
		n.forEach(n => {
			n.src = n.dataset.src, 
			n.classList.remove(t[0]), 
			n.classList.add(t[1]), 
			n.removeAttribute("data-src")
		});
		return
	}
	let i = new IntersectionObserver(n => {
		n.forEach(n => {
			if (n.isIntersecting) {
				let r = n.target;
				r.src = r.dataset.src;
				r.classList.remove(t[0]);
				r.classList.add(t[1]);
				r.removeAttribute("data-src");
				i.unobserve(r)
			}
		})
	});
	n.forEach(n => {
		i.observe(n)
	})
}
function swiper() {
	let t = document.createElement("script");
	t.src = "https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js";
	t.onload = function() {
		// document.querySelector("div.beforeSwiper").remove();
		// document.querySelector("div.sw").insertAdjacentHTML("afterbegin", n);
		new Swiper(".swiper", {
			slidesPerView: 'auto', //この設定にしないと端見せがバグる
			slidesPerGroup: 1,
      centeredSlides: true, //こいつが端見せには必要
			// breakpoints: {
			// 	971: {
			// 		slidesPerView: 2,
			// 		slidesPerGroup: 2
			// 	}
			// },
			loop: !0,
			spaceBetween: 0,
			autoplay: {
				delay: 1e4
			},
			speed: 500,
		});
		lazyLoadImages(document.querySelectorAll("img.swiper-lazy"), ["swiper-lazy","swiper-done"])
	};
	document.body.appendChild(t)
}

window.addEventListener("load", function() {
    swiper();
	lazyLoadImages(document.querySelectorAll("img.lazy"), ["lazy","done"])
})