<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form id="yourFormId">
        <input type="text" name="field1" placeholder="Field 1">
        <input type="text" name="field2" placeholder="Field 2">
        <!-- Add more fields as needed -->
        <button type="submit">Submit</button>
    </form>
    
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    $('#yourFormId').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/insert-data', // Replace with the actual URL
            data: $(this).serialize() + '&_token=' + '{{ csrf_token() }}',
            success: function(response) {
                // Handle the success response
                setTimeout(function() {
                    window.location.href = '/';
                }, 100);
                console.log(response);
            },
            error: function(error) {
                // Handle the error response
                console.log(error);
            }
        });
    });
});


</script>

    
    
    
</body>
</html>