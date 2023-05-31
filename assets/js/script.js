var snackxml;
var snacksChoosen = [];
var i = 0;
var rootPath = "/en/";

var CONFIG = (function() {
	var audi_type = {
		'G'			: 'Gold Class',
		'V'			: 'Velvet',
		'X'			: 'Sweetbox',
		'H'			: 'Sphere X',
		'Y'			: 'Satin Class',
		'4DX3D'		: '4DX 3D Cinema',
		'4DX2D'		: '4DX 2D Cinema',
		'N'			: 'Regular 2D',
		'3D'		: 'Regular 3D',
		'S'			: 'Starium',
        'ScreenX'	: 'Screen X'
	};

	var weekday = {
		0 : "Sun",
		1 : "Mon",
		2 : "Tue",
		3 : "Wed",
		4 : "Thu",
		5 : "Fri",
		6 : "Sat"
	};

	var month = {
		0 : "Jan",
		1 : "Feb",
		2 : "Mar",
		3 : "Apr",
		4 : "May",
		5 : "Jun",
		6 : "Jul",
		7 : "Aug",
		8 : "Sept",
		9 : "Oct",
		10 : "Nov",
		11 : "Dec"
	};

	return {
		auditype: function(name) { return audi_type[name]; },
		weekday: function(name) { return weekday[name]; },
		month: function(name) { return month[name]; },
	};
})();

var localCache = {
    /**
     * timeout for cache in millis
     * @type {number}
     */
    timeout: 30000,
    /** 
     * @type {{_: number, data: {}}}
     **/
    data: {},
    remove: function (url) {
        delete localCache.data[url];
    },
    exist: function (url) {
        return !!localCache.data[url] && ((new Date().getTime() - localCache.data[url]._) < localCache.timeout);
    },
    get: function (url) {
        console.log('Getting in cache for url' + url);
        return localCache.data[url].data;
    },
    set: function (url, cachedData, callback) {
        localCache.remove(url);
        localCache.data[url] = {
            _: new Date().getTime(),
            data: cachedData
        };
        if ($.isFunction(callback)) callback(cachedData);
    }
};

$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
    if (options.cache) {
        var complete = originalOptions.complete || $.noop,
            url = originalOptions.url;
        //remove jQuery cache as we have our own localCache
        options.cache = false;
        options.beforeSend = function () {
            if (localCache.exist(url)) {
                complete(localCache.get(url));
                return false;
            }
            return true;
        };
        options.complete = function (data, textStatus) {
            localCache.set(url, data, complete);
        };
    }
});

$(document).ready(function () {  
	var top = $('.top-menu-vertical').offset().top - parseFloat($('.top-menu-vertical').css('marginTop').replace(/auto/, 100));

	$(window).scroll(function (event) {
		var y = $(this).scrollTop();
        var footer = $(".bottom-banner").offset();

        if(y > footer.top - 656) {
            $('.top-menu-vertical').css("top", footer.top - 656);
        }
		else if (y >= top) {
            $('.top-menu-vertical').css("top", y + 20);
		}
        else {
            $('.top-menu-vertical').css("top", 252);
		}
	});

	$('[data-toggle="tooltip"]').tooltip();
});

function scrollTo(element, to, duration) {
    if (duration <= 0) return;
    var difference = to - element.scrollTop;
    var perTick = difference / duration * 10;

    setTimeout(function() {
        element.scrollTop = element.scrollTop + perTick;
        if (element.scrollTop == to) return;
        scrollTo(element, to, duration - 10);
    }, 10);
}

$('.slideshow').flexslider({
	animation: "slide",
	animationLoop: true,
	itemWidth: 730,
	pausePlay: true,
	slideshowSpeed: 3000,
	manualControls: ".flex-control-nav li",
	useCSS: false,
	start: function(slider){
		$('.slideshow').removeClass('slider-loading');
	}
});

$('.carousel-nav').on('click', 'a', function(event) {
	event.preventDefault();
	var carousel = $('.carousel').data('flexslider');

	if ( $(this).hasClass('new-flex-next') )
	{
		carousel.flexslider('next');
	}
	else if ( $(this).hasClass('new-flex-prev') )
	{
		carousel.flexslider('prev');
	}
});

$('.carousel').flexslider({
	animation: "slide",
	animationLoop: true,
	itemWidth: 240,
	slideshow: false,
	itemMargin: 9
});

$('.partner-box').flexslider({
	animation: "slide",
	animationLoop: true,
	itemWidth: 110,
	itemMargin: 9
});

$('.date-schedule .item-wrap').flexslider({
	animation: "slide",
	animationLoop: true,
	slideshow: false,
	itemWidth: 80,
	itemMargin: 0
});

$('.date-schedule').on('click', 'button', function(event) {
	event.preventDefault();
	var carousel = $('.date-schedule .item-wrap').data('flexslider');

	if ( $(this).hasClass('btn-next') )
	{
		carousel.flexslider('next');
	}
	else if ( $(this).hasClass('btn-prev') )
	{
		carousel.flexslider('prev');
	}
});

$('#complete_button').click(function (e) {
	e.preventDefault();
	$("li.hidden").removeAttr('class');
	$("#complete_button").addClass('hidden');
})

$('#home-event-tab a, #payment-option a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
})

$("#close-top-ads").click(function( event ) {
	event.preventDefault();
	$(".top-banner").hide("fast");
});

$(".sect-city > ul > li > a").click(function() {
	$(".sect-city ul > li.city").removeClass("on");
	$(this).parent('li.city').addClass('on');
});

$('#creditcardTab').click(function(event){
    if ($(this).hasClass('disabled')) {
        event.preventDefault();
        return false;
    }
});

$(".payment-option").on("change", "input[name='bcpin']", function() {
	$("input[name='pin']").val($("input[name='bcpin']").val());
});

$(".payment-option").on("change", "input[name='agree1'], input[name='agree2'], #bcno, #bcpno, #cclabel", function() {
	if($("input[name='agree1']").is(':checked') && $("input[name='agree2']").is(':checked') && ($("#bcpno").val() != '' || $("#bcno").val() != '' || $("#cclabel").val() != ''))
	{
        var card = $("#payment-card").val();
		$(".seat-next").prop('disabled', false);

		if(card == 'BP')
		{
			cardno = $("#bcpno").val();
		}
		else if(card == 'BC')
		{
			cardno = $("#bcno").val();
		}
        else if(card == 'CC')
        {
            cardno = $("#payment-cardno").val();
        }
        else
        {
            cardno = "11111111";
        }

		$("input[name='cardno']").val(cardno);
	}
	else
	{
		$(".seat-next").prop('disabled', true);
	}
});

$(".top-up-req").on("submit", "#top-up-form", function(e) 
{
	e.preventDefault();
	var bcno = $("#top-up-bcno").val();
	var amount = $("#top-up-amount").val();

	if(bcno == "") {
		alert("Please select your card.");
		return false;
	} else if(amount == "") {
        alert("Please select your amount of top up.");
        return false;
    } else {
		$("input[name='card_no']").val(bcno);
		$("input[name='amount']").val(amount);

		$(".top-up-req").addClass('hidden');
		$(".cc-form-wrapper").removeClass('hidden');
		$(".notif-msg").addClass('hidden');
	}
});

$(".payment-option").on("change", "input[name='cclastno'], select[name='expirymonth'], select[name='expiryyear'], input[name='cvvno']", function() {
	$("input[name='cclast']").val($("input[name='cclastno']").val());
	$("input[name='expirymonth']").val($("select[name='expirymonth']").val());
    $("input[name='expiryyear']").val($("select[name='expiryyear']").val());
	$("input[name='cvv']").val($("input[name='cvvno']").val());
});


$(".payment-option").on("change", "select[name='bankcd']", function() {
    $("input[name='bankva']").val($("select[name='bankcd']").val());
});

$(".tab-content").on("click", "a.snack-item", function(e) 
{
	e.preventDefault();

	$(".snack-item").removeClass("active");
	$(this).addClass("active");
	$(".snack-amount").removeClass("hidden");
	$(".snack-amount select").prop('selectedIndex',0);
});

$(".snack-tab").on("change", ".snack-amount select", function(e) 
{
	e.preventDefault();
	var snack_id 		= parseInt($(".snack-item.active").attr('id'));
	var amount 			= parseInt($(this).val());
	var price 			= parseInt($(".snack-item.active").attr('price')) * amount;
	

	//$(".snack-cost").html(current_price + (price * amount));
	$(".snack-info li").html("Snacks: ");
	$(".seat-next").removeAttr('disabled');
	$("#form-input #code-input").remove();
	$("#form-input #amount-input").remove();

	if(amount != 0)
	{
		if(snacksChoosen.length > 0)
		{
			for(var c = 0; c < snacksChoosen.length; c++)
			{
				if(parseInt(snacksChoosen[c][0]) == snack_id)
				{
					var duplicateKey = c;
					break;
				}
			}

			if(typeof duplicateKey === 'undefined')
			{
				snacksChoosen[i] = [snack_id, amount, price];
				i++;
			}
			else
			{
				snacksChoosen[duplicateKey] = [snack_id, amount, price];
			}
		}
		else
		{
			snacksChoosen[i] = [snack_id, amount, price];
			i++;
		}
	}

	var snackCost = 0;
	$.each(snacksChoosen, function(key, val){
		snackCost += val[2];

		$(".snack-info li").append("<span class='snack-cart'>" + getNamaSnack(val[0]) + ' X ' + val[1] + "</span>");
		$(".snack-cost").html(accounting.formatMoney(snackCost, " ", 0));

		$("#form-input").append("<input type='hidden' name='code[" + key + "]' value='" + val[0] + "' id='code-input' />");
		$("#form-input").append("<input type='hidden' name='amount[" + key + "]' value='" + val[1] + "' id='amount-input' />");
	});
});

function getNamaSnack(code)
{
	var temp = "snack";
	$.each(snackxml, function(kcat, vcat) {
		$.each(vcat, function(k, v){
			if(v.code == code)
			{
				temp = v.name;
			}
		});
	});
	return temp;
}

function isnum(event) 
{
	var charCode = (event.which) ? event.which : event.keyCode;
	if (event.shiftKey || (charCode < 48 || charCode > 57) && (charCode < 96 || charCode > 105))
	{
		if (charCode == 116 || charCode == 8 || charCode == 46 || charCode == 18 || charCode == 9)
		{

		}
		else
		{
			event.preventDefault();
		}
	}
}

$('input[name="cardno"]').keypress(function(e){
	var rawCardNo = $('input[name="cardno"]').val();
	if(rawCardNo.length >= 16)
	{
		if(e.keyCode != 8)
			e.preventDefault();
	}
	else
	{
		return isnum(e);
	}
});

$('.card-redeem').on('click', 'a', function(event) {
	event.preventDefault();
	// Show modal
	$("#redeemModal").modal({
			backdrop: 'static',
			keyboard: false
		});
});

$(".modal-footer").on("click", '#claimbutton', function(){
	if($("#claimcard").val() != '' && $("#claimpin").val() == '')
	{
		alert('Please insert your PIN.');
		return false;
	}
	else if($("#claimcard").val() != '' && $("#claimpin").val().length != 6)
	{
		alert('Invalid PIN number.');
		return false;
	}
	
	$(".payment-form #payment-claimcard").val($("#claimcard").val());
	$(".payment-form #payment-claimpin").val($("#claimpin").val());
});
