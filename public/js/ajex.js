$('#submit').on('click', function() {
    let data = $('#tables').val;
    console.log(data);
    $.ajax({
        url: '/', // Replace with the actual URL where you want to submit the form
        type: 'POST',
        // data: $('#tables').serialize(),
        data: $('#tables').val(),
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
});