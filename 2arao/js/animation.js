var $window = $(window);

var $animation_left_right_elements = $('.bowl');
function check_if_facilites_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_left_right_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('animationToRight');
    } else {
      $element.removeClass('animationToRight');
    }
  });
}

var $animation_right_left_elements = $('.menu-introduction-img');
function check_if_facilites_in_view_1() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_right_left_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('animationToLeft');
    } else {
      $element.removeClass('animationToLeft');
    }
  });
}

$window.on('scroll resize', check_if_facilites_in_view);
$window.on('scroll resize', check_if_facilites_in_view_1);
$window.trigger('scroll');