var $language = $('#sign_up_language');

// When sport gets selected ...
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
            $('.loader').hide();
            $(document.getElementById('groups-choice')).slideDown(350);
            // Position field now displays the appropriate positions.
        }
    });
});