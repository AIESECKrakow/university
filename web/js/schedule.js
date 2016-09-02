/**
 * Created by Patryk on 02.09.2016.
 */
$(document).ready(function() {
   var languageName = $('.schedule-dropdown').val();

   $('.'+languageName).show();
   $('div.schedule-lesson:not(.'+languageName+')').hide();

   $('.schedule-dropdown').change(function () {
      var languageName = $('.schedule-dropdown').val();
      switch(languageName) {
         case languageName:
            $('.'+languageName).show();
            $('div.schedule-lesson:not(.'+languageName+')').hide();
            break;
      }
   });
});