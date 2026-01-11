function menu(n) {
	n.classList.toggle("active");
	document.querySelector("ul.navList").classList.toggle("active");
	n.blur()
}

function scrollToTop() {
window.scrollTo({
	top: 0,
	behavior: "smooth"
});
}
document.addEventListener("dblclick", function(n) {
	n.preventDefault()
}, {
	passive: !1
});