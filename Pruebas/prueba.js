$(function() {
  var slider = $('.container > div');
  
  $('.content').click(function() {
    var left = -$(this).position().left;
    left -= $(this).outerWidth() / 2;
    left += $('.container').width() / 2;
    
    slider.css('left', left + 'px');
  });
});