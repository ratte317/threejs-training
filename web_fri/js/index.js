window.onload = function() {
  
  localStorage.clear();
  console.log('[index.js]: clear()');

};

var onMenu = function(event) {

	window.targetContent = event.dataset.target;

  $('.content-wrapper').fadeOut(600, function(e){

    setTimeout(function(){
      $('#'+window.targetContent).fadeIn(600);
    }, 600);
    
  });
  //$('#'+target).fadeIn(400);

}