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

  url = "https://spreadsheets.google.com/feeds/list/1O6kZq7zZOL8d8TBzyARirJA-wxu5oYXMXkpsfD1-KOA/"+tab+"/public/values?alt=json-in-script";
  //debugger
  $.ajax({
   type: 'GET',
   url: url,
   async: false,
   jsonpCallback: 'JSON_CALLBACK',
   contentType: "application/json",
   dataType: 'jsonp',
   success: function(json) {

     var  table = json.feed.entry,
     i = 0,
     row;
     for (i; i< table.length; i++){
      row = "<td>" + table[i]["gsx$diaentrada"]["$t"] + " " +
      month[table[i]["gsx$nummes"]["$t"]] + " - " +
      table[i]["gsx$diasalida"]["$t"] + " " +
      month[table[i]["gsx$nummes_2"]["$t"]] + "</td>" + 
      "<td>" + table[i]["gsx$precio"]["$t"] +"</td>"+
      "<td>" + table[i]["gsx$estanciamin"]["$t"] +"</td>";

      $("#calendar").append("<tr>" + row + "</tr>");

    }
  },
  error: function(e) {
   console.log(e.message);
 }
});



  if(!md.mobile() || window.innerWidth > 767){
    params = {
      auto:true,
      autoControls: true,
      video: true,
      useCSS: false
    }

    for(i=1; i<=num_photos_desktop; i++){
      $(".bxslider").append('<li><img src="photos/desktop_710/pic'+ i +'.jpg" /></li>')
    }
    $(".bxslider").append('<li><iframe width="560" height="409" src="https://www.youtube.com/embed/pSZGiLgROw4" frameborder="0" allowfullscreen></iframe></li>');
  }else{
    params = {
      useCSS: false
    }

    if(num_photos_mobile > 0){
      for(i=1; i<=num_photos_mobile; i++){
        $(".bxslider").append('<li><img src="photos/mobile_350/pic'+ i +'.jpg" /></li>')
      }
    }else{
      for(i=1; i<=num_photos_desktop; i++){
        $(".bxslider").append('<li><img src="photos/desktop_710/pic'+ i +'.jpg" /></li>')
      }
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