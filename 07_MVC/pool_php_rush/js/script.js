$('.wrap').mousemove(function(e) {
    var x = (e.pageX * -1 / 25), y = (e.pageY * -1 / 30);
    $(this).css('background-position', x + 'px ' + y + 'px');
});
$(document).ready(function(){
    $('.sidenav').sidenav();
  });