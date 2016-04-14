$(window).load(function () {
        // apply dropdownHover to all elements with the data-hover="dropdown" attribute
        $('[data-hover="dropdown"]').dropdownHover().dropdown();
});

$(window).load(function () {
	$('.slide').carouFredSel({
		items: 1, direction: "left", width:"100%",
        scroll : {items: 1, easing: "linear", fx: "crossfade", duration: 1500,}});
        $('.carou-linget').carouFredSel({
		items: 3, direction: "left", width: 960, prev : "#lw-prev", next : "#lw-next",
        scroll : {items: 1, easing: "linear", duration: 1000, pauseOnHover: true}});
	$('.news-flash').carouFredSel({
					items: 2,
					width: 627,
					height: 100,
					circular: true,
					infinite: false,
					auto 	: true,
					prev	: "#prev-nf",			
					next	: "#next-nf",			
					scroll: {
						pauseOnHover: 'immediate'
					}
				});
	$('#galeri .galery-kota').carouFredSel({
		items: 1, direction: "up",
		prev : "#left",
		next : "#right",
        scroll : {items: 1, easing: "elastic", duration: 1000, pauseOnHover: true}});

        //$('.carou-up').carouFredSel({
		//items: 1, direction: "up",
		//prev : "#left",
		//next : "#right",
        //scroll : {items: 1, easing: "elastic", duration: 1000, pauseOnHover: true}});
	//$('.carou-simple').carouFredSel({
		//items: 1, direction: "up",
        //scroll : {items: 1, easing: "linear", fx: "crossfade", duration: 1000, pauseOnHover: true}});
})

$( document ).ready(function() {
	$('#gal-1 a').lightBox();
	$('#gal-2 a').lightBox();
});

$( document ).ready(function() {
    $('#select-gear').selectize({
        sortField: 'text'
    });
});

$(window).load(function(){
        $('#myModal').modal('show');
    });
