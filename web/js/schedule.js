/**
 * Created by Patryk on 02.09.2016.
 */
$(document).ready(function() {
   var languageName = $('.schedule-dropdown').val();

    var p = window.location.href.split('?')[1];
    var parameters = p.split('=');
    var city = null;

    if(parameters[0] != null){
        if(parameters[0] == 'city'){
            city = parameters[1];
        }
    }

    languageName = city + "-" + languageName;

   $('.'+languageName).show();
   $('div.schedule-lesson:not(.'+languageName+')').hide();

   $('.schedule-dropdown').change(function () {
      var languageName = $('.schedule-dropdown').val();
       var p = window.location.href.split('?')[1];
       var parameters = p.split('=');
       var city = null;

       if(parameters[0] != null){
           if(parameters[0] == 'city'){
               city = parameters[1];
           }
       }

       languageName = city + "-" + languageName;
      switch(languageName) {
         case languageName:
            $('.'+languageName).show();
            $('div.schedule-lesson:not(.'+languageName+')').hide();
            break;
      }
   });
});

$('.btn-city').on('click', function(event){
    var link = window.location.href.split('?')[0];
    window.open(link + "?city=" + event.target.value, "_self");
});