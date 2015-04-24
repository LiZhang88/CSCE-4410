(function($) {

  $.fn.menumaker = function(options) {
      
      var Vmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        Vmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        Vmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          Vmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          Vmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else Vmenu.addClass('dropdown');

        if (settings.sticky === true) Vmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            Vmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            Vmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#Vmenu").menumaker({
    title: "Menu",
    format: "multitoggle"
  });

  $("#Vmenu").prepend("<div id='menu-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menuLine = $("#Vmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

$("#Vmenu > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#Vmenu > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menuLine.css("width", lineWidth);
menuLine.css("left", linePosition);

$("#Vmenu > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menuLine.css("width", lineWidth);
  menuLine.css("left", linePosition);
}, 
function() {
  menuLine.css("left", defaultPosition);
  menuLine.css("width", defaultWidth);
});

});


});
})(jQuery);
