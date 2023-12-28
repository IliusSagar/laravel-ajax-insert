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
    
                // Basic form validation (you can enhance this)
                if (!$('input[name="field1"]').val() || !$('input[name="field2"]').val()) {
                    alert('Please fill in all fields');
                    return;
                }
    
                $.ajax({
                    type: 'POST',
                    url: '/insert-data',
                    data: {
                        _token: '{{ csrf_token() }}',
                        field1: $('input[name="field1"]').val(),
                        field2: $('input[name="field2"]').val(),
                        // Add more fields as needed
                    },
                    success: function(response) {
                        // Handle the success response
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