jQuery(document).ready(function(){
    /* accordion */
    jQuery('.js-accordion-trigger').bind('click', function(e){
    jQuery(this).parent().find('.submenu').slideToggle('fast');  // apply the toggle to the ul
    jQuery(this).parent().toggleClass('is-expanded');
    e.preventDefault();
    });
  /* Tabs */
  jQuery('.ig-accordion-tabs').each(function(index) {
    jQuery(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
  });
  jQuery('.ig-accordion-tabs').on('click', 'li > a.tab-link', function(event) {
    if (!jQuery(this).hasClass('is-active')) {
      event.preventDefault();
      var accordionTabs = jQuery(this).closest('.ig-accordion-tabs');
      accordionTabs.find('.is-open').removeClass('is-open').hide();

      jQuery(this).next().toggleClass('is-open').toggle();
      accordionTabs.find('.is-active').removeClass('is-active');
      jQuery(this).addClass('is-active');
    } else {
      event.preventDefault();
    }
  });
  /* Toggle */
  jQuery('.expander-trigger').click(function(){
    jQuery(this).toggleClass("expander-hidden");
  });
 //MODAL
  jQuery("#modal-1").on("change", function() {
    if (jQuery(this).is(":checked")) {
      jQuery("body").addClass("modal-open");
    } else {
      jQuery("body").removeClass("modal-open");
    }
  });

  jQuery(".modal-fade-screen, .modal-close").on("click", function() {
   jQuery(".modal-state:checked").prop("checked", false).change();
  });

  jQuery(".modal-inner").on("click", function(e) {
    e.stopPropagation();
  });
    
});