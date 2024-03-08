$(document).ready(function() {
    $(document).on('click', '.setting-input', function() {
        var bio = $(this).find('span').text();
        $('#offcanvasBottom22 input[name="bio"]').val(bio);
    });

    $('#offcanvasBottom22 form').submit(function(e) {
        e.preventDefault();
        var bio = $('#offcanvasBottom22 input[name="bio"]').val();
        var userId = '. echo $_GET['userId'] .';
        $.ajax({
            url: 'your_update_bio_php_file.php',
            type: 'POST',
            data: { userId: userId, bio: bio },
            success: function(response) {
                alert(response); // Show success message or handle it as needed
                $('#offcanvasBottom22').offcanvas('hide');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

  $(document).on('click', '.setting-input', function() {
    var address = $(this).find('span').text();
    $('#offcanvasBottom3 input[name="address"]').val(address);
    var country = $('#offcanvasBottom3 input[name="country"]').val();
});

$('#offcanvasBottom3 form').submit(function(e) {
    e.preventDefault();
    var address = $('#offcanvasBottom3 input[name="address"]').val();
    var country = $('#offcanvasBottom3 input[name="country"]').val();
    var userId = '. echo $_GET['userId'].';
    $.ajax({
        url: 'your_update_bio_php_file.php',
        type: 'POST',
        data: { userId: userId, address: address, country: country },
        success: function(response) {
            alert(response); 
            $('#offcanvasBottom3').offcanvas('hide');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});


    $(document).on('click', '.setting-input', function() {
        var phone = $(this).find('span').text();
        $('#offcanvasBottom1 input[name="phone"]').val(phone);
    });

    $('#offcanvasBottom1 form').submit(function(e) {
        e.preventDefault();
        var phone = $('#offcanvasBottom1 input[name="phone"]').val();
        var userId = '. echo $_GET['userId'] .';
        $.ajax({
            url: 'your_update_bio_php_file.php',
            type: 'POST',
            data: { userId: userId, phone: phone },
            success: function(response) {
                alert(response); 
                $('#offcanvasBottom1').offcanvas('hide');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.setting-input', function() {
        var email = $(this).find('span').text();
        $('#offcanvasBottom2 input[name="email"]').val(email);
    });

    $('#offcanvasBottom2 form').submit(function(e) {
        e.preventDefault();
        var email = $('#offcanvasBottom2 input[name="email"]').val();
        var userId = '. echo $_GET['userId'] .';
        $.ajax({
            url: 'your_update_bio_php_file.php',
            type: 'POST',
            data: { userId: userId, email: email },
            success: function(response) {
                alert(response); 
                $('#offcanvasBottom2').offcanvas('hide');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

  
});

