var $language = $('#sign_up_language');
var city = $('#sign_up_city');

var selected_city;

city.change(function () {
    var e = document.getElementById('sign_up_city');
    selected_city = e.options[e.selectedIndex].text;
    $('#sign_up_language').prop('disabled', false)
});

// When language gets selected ...
$language.change(function() {
    console.log(selected_city);
    $('#groups-choice').hide();
    $('.loader').show();
    // ... retrieve the corresponding form.
    var $form = $(this).closest('form');
    // Simulate form data, but only include the selected sport value.
    var data = {};
    data[$language.attr('name')] = $language.val();
    console.log(data);

    // Submit data via AJAX to the form's action path.
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : data,
        success: function(html) {
            // Replace current position field ...
            $('#sign_up_group').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#sign_up_group')
            );
            getDescription(data["sign_up[language]"]);
            // Position field now displays the appropriate positions.
        }
    });
});


function getDescription(language){

    var lessonCall = '/getLessons/' + language;
    var lessons;
    $.ajax ({
        url: lessonCall,
        success: function(result){
            var same = 0;
            for (var key in result) {
                if (result.hasOwnProperty(key)) {
                    lessons='';
                    lessons += '<div class="group_info">';
                    same = 0;
                    for (var k in result[key]){
                        if (result[key].hasOwnProperty(k)){
                            if(result[key][k]['city'] == selected_city) {
                                same = 1;
                                console.log(key + " / " + k + " -> " + result[key][k]['day'] + " " + result[key][k]['hour']);
                                var tempday = result[key][k]['day'];
                                var temphour = result[key][k]['hour'];
                                lessons += '<div class="row_info">' + tempday + " \- " + temphour + '</div>'
                            }
                        }
                    }
                    var id = "sign_up_group_" + key;
                    if (same == 1) {
                        lessons += '</div>';
                        document.getElementById(id).parentElement.insertAdjacentHTML('afterend', lessons);
                    }
                    else {
                        $(document.getElementById(id).parentElement.parentElement).hide();
                    }
                }
            }
            $('.loader').hide();
            $(document.getElementById('groups-choice')).slideDown(350);
            $('#sign_up_save').prop('disabled', false);
        },
        dataType: 'json'
    });

}
