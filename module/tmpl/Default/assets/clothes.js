/**
 * @package     Joomshopping Clothes Fitting
 *
 * @copyright   Copyright (C) 2019 Joomcar extensions. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */

jQuery(document).ready(function($) {
	$(".clothes-select select").on("change", function(e) {
		var select = $(e.target);
		if(select.find(":selected").val() == "") {
			return false;
		}
		var data = 'getClothes=1&' + select.serialize();
		select.parents('.clothes-select').find(".loading").show();
		$.ajax({
			data: data,
			type: 'get',
			url: '',
			success: function(response) {
				var res = JSON.parse(response);
				if(res.length) {
					var path = window.location.href + "components/com_jshopping/files/img_products/";
					$(res).each(function(k, product) {
						var slide = "<div class='slide'>" +
										"<img src='"+ path + product.image+"' alt='"+product.name+"' />" +
										"<span class='title'>"+product.name+"</span>" +
									"</div>";
						$(slide).appendTo(select.parents('.clothes-select').find('.slider-wrapper'));
					});
					setTimeout(function() {
						select.parents('.clothes-select').find('.slider-wrapper').slick({
							infinite: false,
							slidesToShow: 5,
							slidesToScroll: 1
						});
					}, 500);
					select.parents('.clothes-select').find('.slider-container').show();
				}
				select.parents('.clothes-select').find(".loading").hide();
			},
			fail: function() {
				select.parents('.clothes-select').find(".loading").hide();
			},
		});
	});
	
	$("body").on("click", ".slide img", function(e) {
		var img = $(e.target);
		var width = img.width();
		var height = img.height();
		var src = img.attr('src');
		var direction = img.parents(".clothes-list").hasClass("clothes-list-top") && "top" || "bottom";
		$(".clothes-place-" + direction).css({
			//"width": width,
			//"height": height,
			"background": "url("+src+") center center/cover no-repeat"
		});
	});
});