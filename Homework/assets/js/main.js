var val;

$(document).ready(function() {
	$("a").click(function() {
		window.val = $(this).attr("href");
		// alert(window.val);

		$(window.val).toggleClass('accordion-content--show', 'accordion-content');	
	});
});