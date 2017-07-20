$('body').css('display','none'); 
  $(document).ready(function(){
    $('body').fadeIn(600);
  });
setTimeout(function(){
  $('body').fadeIn(700);
},1000)



$('#signInBar').animate({top: '25px'},1500);

$('#comText').animate({left: '320px'},1500);