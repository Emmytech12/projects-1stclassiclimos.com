
$(window).scroll(function () {
	var scrollheight = $(window).scrollTop();
	if (scrollheight >= 100) {
	  $("#back2Top").fadeIn(1000);
	} else {
	  $("#back2Top").fadeOut(1000);
	  $(".sticky-div").css("position", "sticky");
	  $(".sticky-div").css("top", "140px");
	}
	if (scrollheight >= 400) {
	  $("header").css("position", "fixed");
	  $("header").css("background", "rgba(0, 0, 0, 0.9)");
	} else {
	  $("header").css("position", "absolute");
	  $("header").css("background", "none");
	}
	if (scrollheight >= 700) {
		$(".sticky-div").css("position", "sticky");
		$(".sticky-div").css("top", "140px");
		$(".sticky-div").css("min-height", "280px");
	  } else {
		$(".sticky-div").css("position", "relative");
		$(".sticky-div").css("top", "0");
		$(".sticky-div").css("overflow", "auto");
		$(".sticky-div").css("height", "auto");
	  }
  });

function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}
function scrolltodiv(divid, margintop){
	$('html, body').animate({
	scrollTop: $("#"+divid).offset().top - margintop}, 500);
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	   $('.index-menu-back-div').animate({'margin-left':'0'},400);
}
function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}

function _open_li(ids){
		 $('#'+ids+'-sub-li').toggle('slow');
}

function alert_close(){
		$('#get-more-div').html('').fadeOut(200);
}
function alert_secondary_close(){
		$('#get-more-div-secondary').html('').fadeOut(200);
}




///// for FAQs
function _collapse(div_id){
	var x = document.getElementById(div_id+"num");
	  if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
		  x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
		  $('#'+div_id).addClass('active-faq');
	  }else{
		x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
		  $('#'+div_id).removeClass('active-faq');
	  }
	$('#'+div_id+'answer').slideToggle('slow');
}


function setupShowMore(containerSelector, buttonId, maxItems) {
    const container = document.querySelector(containerSelector);
    const items = container.children; // This should now correctly refer to <a> elements
    const button = document.getElementById(buttonId);

    // Initially hide all items above maxItems
    Array.from(items).forEach((item, index) => {
        item.style.display = index < maxItems ? '' : 'none'; // Ensure this applies correctly to <a> tags
    });

    button.addEventListener('click', function() {
        const isShowingMore = button.textContent.trim() === 'Show More';
        button.textContent = isShowingMore ? 'Show Less' : 'Show More';

        Array.from(items).forEach((item, index) => {
            item.style.display = isShowingMore && index >= maxItems ? '' : (index < maxItems ? '' : 'none');
        });
    });
}



document.addEventListener('DOMContentLoaded', function() {
	setupShowMore('.main-services-back-div', 'toggleServicesButton', 3);
});

document.addEventListener('DOMContentLoaded', function() {
    setupShowMore('#locationList', 'toggleButton', 25);
});

document.addEventListener('DOMContentLoaded', function() {
	setupShowMore('.fleet-back-div', 'toggleFleetButton', 4);
});


document.addEventListener('DOMContentLoaded', function() {
	setupShowMore('.tour-packages-back-div', 'toggleTourButton', 2);
});


// Function to round a date to the nearest 15-minute interval
function roundToNearest15Minutes(date) {
	var coeff = 1000 * 60 * 15;
	return new Date(Math.round(date.getTime() / coeff) * coeff);
}
// JavaScript to set current date
document.addEventListener("DOMContentLoaded", function() {
	var currentDate = new Date().toISOString().substr(0, 10);
	document.getElementById('dateInput').value = currentDate;

	var currentTime = new Date();
	var nearest15Min = roundToNearest15Minutes(currentTime);
	var formattedTime = nearest15Min.getHours().toString().padStart(2, '0') + ':' + nearest15Min.getMinutes().toString().padStart(2, '0');
	document.getElementById('timeInput').value = formattedTime;
});



function _get_form(page){
	$('#get-more-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action='get-form';
		var dataString ='action='+ action+'&page='+ page;
		$.ajax({
		type: "POST",
		url: local_url,
		data: dataString,
		cache: false,
		success: function(html){$('#get-more-div').html(html);}
	});
}







