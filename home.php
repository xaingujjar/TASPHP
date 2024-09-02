<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Tooltip with jQuery</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (optional) -->
    <style>
        .custom-tooltip {
            background-color: #333;
            color: #fff;
            border: 1px solid #666;
            padding: 10px;
            border-radius: 5px;
            max-width: 200px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Element with Tooltip -->
<button type="button" class="btn btn-primary" id="tooltip-button" title="Tooltip content here!">
    Hover over me
</button>

<!-- jQuery, Bootstrap JS, and Popper.js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Initialize Tooltip with jQuery -->
<script>
    $(document).ready(function() {
        $('#tooltip-button').tooltip({
            title: '<strong>Custom Tooltip</strong><br>Dynamic content here!',
            html: true, // Allow HTML content
            placement: 'bottom', // Position: 'top', 'bottom', 'left', 'right'
            delay: { "show": 500, "hide": 100 } // Delay for showing and hiding
        });
    });
</script>
</body>
</html>
