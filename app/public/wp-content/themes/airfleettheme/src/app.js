jQuery(document).ready(function(jQuery){

  jQuery(".moreless-button").click(function() {
    jQuery(this).siblings('.moretext').slideToggle();
    jQuery(this).addClass('removeButton');
  });

});