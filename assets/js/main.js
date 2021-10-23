// Start of Doc.ready
(function ($) {
  $(document).ready(function () {
    // Scrolling nav menu
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 20) {
        $(".site-header__bar-container").addClass("scrolling");
      } else {
        $(".site-header__bar-container").removeClass("scrolling");
      }
    });

    // Hamburger on nav menu
    $('.site-header__hamburger-container').click(function () {
      $(this).find("> div").toggleClass('open');
    });

    // Add "Menu" heading to nav menu
    $(".site-header__nav nav.top-level > ul").prepend("<li class=\"header-menu-title\">Menu</li>");

    popupNavSetup();

    // Toggle nav menu
    $("body").on("click", "div[data-action=\"toggle-nav\"]", function (e) {
      e.preventDefault();

      // Toggle the class to reveal
      $("body").toggleClass("nav-open");

      if ($("body").hasClass("nav-open")) {

      } else {
        setTimeout(function () { $("nav-pane").removeClass("current"); }, 750);
      }
    });

    // Nav setup
    function popupNavSetup() {
      // Create a subpane for each child menu
      $(".site-header__nav nav.top-level ul.sub-menu").each(function () {
        // Parent menu
        var parent = $(this).parent().attr("id");

        var hasLink = false;

        // Create parent link in submenu
        var label = $(this).parent().find("> a").text();
        var link = $(this).parent().find("> a").attr("href");

        if (link !== "" && link !== "#" && link !== undefined) { hasLink = true; }

        var base = $(".site-header__nav").attr("data-base");

        // Add subnav trigger
        $(this).parent().prepend("<button class=\"revealSubmenu\" data-action=\"reveal-submenu\">" + label + "<img class=\"site-header__icon site-header__icon--reveal\" src=\"" + base + "/assets/images/icons/arrow-right-white.svg\"/></button>");

        // Nav HTML
        var nav = $(this).html();

        // Construct HTML
        var html = "<nav-pane class=\"sub\" data-parent=\"" + parent + "\">";
        html += "<pane-content>";
        html += "<nav class=\"sub-level\"><ul>";
        html += "<li class=\"header-menu-back-button-container\"><button class=\"hideSubmenu\" data-action=\"hide-submenu\"><img class=\"site-header__icon site-header__icon--hide\" src=\"" + base + "/assets/images/icons/arrow-left-white.svg\" />Back</button></li>";
        if (hasLink) { html += "<li><a href=\"" + link + "\">" + label + "</a></li>"; }
        html += nav + "</ul></nav>";
        html += "</pane-content>";
        html += "</nav-pane>";

        // Append the subnav
        $(".site-header__nav").prepend(html);

        // Remove HTML
        $(this).parent().find("> a").remove();
        $(this).remove();
      });
    }

    // Slide in a subnav pane
    $("body").on("click", "button[data-action=\"reveal-submenu\"]", function (e) {
      e.preventDefault();

      var target = $(this).parent().attr("id");

      // Hide any old active
      $("nav-pane").removeClass("current");

      // Show the new
      $("nav-pane[data-parent=\"" + target + "\"]").addClass("current");
    });

    // Slide in a subnav pane
    $("body").on("click", "button[data-action=\"hide-submenu\"]", function (e) {
      e.preventDefault();

      // Hide any old active
      $("nav-pane").removeClass("current");
    });
  });
})(jQuery);
// End of Doc.ready