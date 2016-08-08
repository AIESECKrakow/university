var $language = $('#sign_up_language');

// When language gets selected ...
$language.change(function() {
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
            for (var key in result) {
                if (result.hasOwnProperty(key)) {
                    lessons='';
                    lessons += '<div class="group_info">';
                    for (var k in result[key]){
                        if (result[key].hasOwnProperty(k)){
                            console.log(key + " / " + k + " -> " + result[key][k]['day'] + " " + result[key][k]['hour'] );
                            var tempday = result[key][k]['day']
                            var temphour = result[key][k]['hour']
                            lessons += '<div class="row_info">' + tempday + " \- " + temphour +'</div>'
                        }
                    }
                    lessons += '</div>';
                    var id = "sign_up_group_" + key;
                    document.getElementById(id).parentElement.insertAdjacentHTML('afterend',lessons);
                    $('.loader').hide();
                    $(document.getElementById('groups-choice')).slideDown(350);
                }
            }
        },
        dataType: 'json'
    });

}
