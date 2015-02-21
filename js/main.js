$(document).ready(function(){
	$("#children").change(function(){
		
		var val = $(this).val();
		for(i=1; i<6; i++){
			if(i<=val)
				$("#child-ages li[data-child='"+i+"']").addClass('visible');
			else
				$("#child-ages li[data-child='"+i+"']").removeClass('visible');
		}	
	});

  var params;

  var md = new MobileDetect(window.navigator.userAgent);
  

  if(!md.mobile() || window.innerWidth > 767){
  	params = {
		auto:true,
	  	autoControls: true,
	  	video: true,
			useCSS: false
	  }

	  for(i=1; i<=num_photos; i++){
	  	$(".bxslider").append('<li><img src="photos/pic'+ i +'.jpg" /></li>')
	  }
	  $(".bxslider").append('<li><iframe width="560" height="409" src="https://www.youtube.com/embed/pSZGiLgROw4" frameborder="0" allowfullscreen></iframe></li>');
  }else{
  	params = {
			useCSS: false
	}
	
	for(i=1; i<=num_photos; i++){
	  	$(".bxslider").append('<li><img src="photos/mobile_350/pic'+ i +'.jpg" /></li>')
	  }
  }
  $('.bxslider').bxSlider(params);

  $('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
});

(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');