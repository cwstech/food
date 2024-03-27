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
//for Category
$('#add_cat').on('click', function() {
    let data = $('#category').val();
    console.log(data);
    $.ajax({
        url: '/category/add',
        type: 'POST',
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            'data': data,
        },
        success: function(response) {
            console.log(response);
            if (response.success) {
                $('#add_cat').val('');
                alert('Success!');
            } else {
                alert('Error: ' + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});