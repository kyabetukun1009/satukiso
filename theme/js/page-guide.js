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

window.addEventListener("load", function() {
	lazyLoadImages(document.querySelectorAll("img.lazy"), ["lazy","done"])
    lazyLoadImages(document.querySelectorAll("img.key-lazy"), ["key-lazy","key-done"])
})