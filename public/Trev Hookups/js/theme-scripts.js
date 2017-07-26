
$('body').css('display','none'); 
  $(document).ready(function(){
    $('body').fadeIn(600);
  });
setTimeout(function(){
  $('body').fadeIn(700);
},1000)
  // $('a').on('click', function(event){
  //   var target = this.getAttribute('href'); 
  //   var id = this.getAttribute('id');
  //   if (target !='_blank' && id!='postButton'){
  //       $('body').fadeOut('fast', function(){    
  //       });
  //   }
  // });
$("#postButton").click(function() {
    $('html, body').animate({
        scrollTop: $("#uploadSheet").offset().top
    }, 2000);
});

$('#checkout').on('click', function(){
  $('#cartBanner').animate({bottom:'60px'},1000);
  $('body').fadeOut(1000);
});
$('#cartBanner').animate({top:'60px'},1000);
$('#leroy').animate({width: '400',height:'300'},1000);
$('#frimpong').animate({width: '400',height:'300'},1000);
$('#soumaya').animate({width: '400',height:'300'},1000);
$('#seller').animate({width: '400',height:'500'},1000);
$('#helping').animate({width: '500',height:'300'},2000);
$('#newsBar').animate({top: '20px'},1000);
//$('#newsBar').animate({left: '930px'},2000);
$('#commcycleTitle').animate({fontSize: '40px'},700);
$('#thirdLadyB').animate({top: '10px'},2000);
$('#secondLadyB').animate({top: '10px'},2000);
$('#firstLadyB').animate({top: '10px'},2000);
$('#ladyBBanner').animate({left:'25px'},2000);
$('#ladyBBanner').animate({left:'25px'},2000);
$('#ladyB-Top').animate({left:'100px'},1000);

  // $('#lb1').animate({width:'270'},1000);
  // $('#lb2').animate({width:'270'},1000);
  // $('#lb3').animate({width:'270'},1000);



  // $(function() {
  // $('a[href*=#]:not([href=#])').click(function() {
  //   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  //     var target = $(this.hash);
  //     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  //     if (target.length) {
  //       $('html,body').animate({
  //         scrollTop: target.offset().top
  //       }, 1000);
  //       return false;
  //     }
  //   }
  // });
  // });

    // hide #back-top first
    $("#back-top").hide();

    //fade in #back-top

      $(window).scroll(function () {
      	if ($(this).scrollTop() > 100) {
      		$('#back-top').fadeIn();
      	} else {
      		$('#back-top').fadeOut();
      	}
      });

      // scroll body to 0px on click
      $('#back-top a').on("click", function(){
      	$('body,html').animate({
      		scrollTop: 0
      	}, 800);
      	return false;
      });

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});