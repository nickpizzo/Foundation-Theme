(function ($) {

	$(document).ready(function () {

    $("#om-leaf-om-u1-359049470-2 a").attr("data-toggle","shop-category-dropdown");

		$(document).foundation();

    // Add is-open, for debugging mega-menu only
    // $("#shop-terrain-dropdown").addClass("is-open");

    //Clear selection button icons
    $(".facetapi-active").text("Clear Selection");
    $("#sidebar-first-collapsible .facetapi-active").empty();
    $("#sidebar-first-collapsible .facetapi-active").append("<i class=\"fa fa-times\"></i>");
    $("#block-current-search-standard .content a").html('<i class="fa fa-times"></i>');

    //clear fulltext search button
    var searchField = $('#edit-search-api-views-fulltext').attr('value');
    if (searchField) {
      $('#views-exposed-form-products-page .form-item').append("<a id='fulltext-clear-search' href='/products'><i class=\"fa fa-times\"></i></a>");
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
			$( ".page-products #mobile-sidebar-wrapper" ).css("display","block");
		};
	};

	function setSize() {
		if($(window).width() < 896){
			$(".block-facetapi > .contextual-links-wrapper").remove();
			$("#mobile-sidebar-wrapper").css("display","block");
			$("#sidebar").css("display","none");
      $("#block-facetapi-xwrpannvxdtrrdtlytadz1ghmwpdmcj0").detach().appendTo(".mobile-filters-wrap");
      $("#block-fitment-base-fitment-base").detach().appendTo(".mobile-filters-wrap");
			facets_mobile();
		} else {
			$("#mobile-sidebar-wrapper").css("display","none");
			$("#sidebar").css("display","block");
      $("#block-facetapi-xwrpannvxdtrrdtlytadz1ghmwpdmcj0").detach().prependTo(".region-searchbar-left");
      $("#block-fitment-base-fitment-base").detach().prependTo(".region-searchbar-left");
			facets_desktop();
		};
	};

})(jQuery);
