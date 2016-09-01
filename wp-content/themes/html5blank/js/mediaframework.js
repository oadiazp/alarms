
(function ($) {
  window.jQuerySMF = $;
  $(document).ready(function () {
    $("a.mf_mediaLink").bind('click', function () {
      var width = $(this).attr('frwidth');
      var height = $(this).attr('frheight');
      $.fancybox({
        'width': parseInt(width),
        'height': parseInt(height),
        'href': $(this).attr('href'),
        'type': 'iframe',
        'autoScale': 'false',
        'scrolling': 'no'
      });
      return false;
    });
    //allows dragging fancybox window
    if ($.fn.draggable) {
      $('#fancybox-outer').draggable({cursor:'move'});
    }
  });
})(jQuery);