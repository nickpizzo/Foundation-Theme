(function ($) {

	$(document).ready(function () {
		$(document).foundation();

    //Clear selection button text
    $(".facetapi-active").text("Clear Selection");
    $("#sidebar-first-collapsible .facetapi-active").text("X");
    $("#block-current-search-standard .content a").text("X");

    //clear fulltext search button
    var searchField = $('#edit-search-api-views-fulltext').attr('value');
    if (searchField) {
      $('#views-exposed-form-products-page .form-item').append("<a id='fulltext-clear-search' href='/products'>X</a>");
    }

		setSize();
		$(window).on("resize", function () {
			setSize();
		});
		$( "#filter-button" ).click(function() {
			$("#sidebar-first-collapsible").slideToggle({ duration: 400 });
		});

	});

	function facets_mobile() {
		if(!$("#sidebar-first-collapsible .region-sidebar-first").data("uiAccordion")) {
			$("#sidebar-first-collapsible .region-sidebar-first").accordion({
				collapsible:true,
				active: false,
				header: ".block-facetapi h2",
				heightStyle: "content",
				animate: 200,
				create: function() {
					mobileFacet = true;
				}
			});
			$( "#mobile-sidebar-wrapper" ).css("display","none");
		};
	};

	function facets_desktop() {
		if($("#sidebar-first-collapsible .region-sidebar-first").data("uiAccordion")) {
			$("#sidebar-first-collapsible .region-sidebar-first").accordion("destroy");
			$( "#sidebar-first-collapsible" ).css("display","block");
		};
	};

	function setSize() {
		if($(window).width() < 896){
			$(".block-facetapi > .contextual-links-wrapper").remove();
			$("#mobile-sidebar-wrapper").css("display","block");
			$("#sidebar").css("display","none");
			facets_mobile();
		} else {
			$("#mobile-sidebar-wrapper").css("display","none");
			$("#sidebar").css("display","block");
			facets_desktop();
		};
	};

})(jQuery);
