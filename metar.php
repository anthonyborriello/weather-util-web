<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>METAR LIRN</title>
    <style>
        /* Just some styles for the bar */
        .loading-bar {
            margin-top: 120px;
            margin-left: auto;
            margin-right: auto;
            border: 10px solid #D8DFE5;
            border-radius: 50%;
            border-top: 10px solid #8396A7;
            width: 50px; height: 50px;
            -webkit-animation: spin 1s linear infinite; /* Safari */
            animation: spin 1s linear infinite;
            display:none;
        }
        /* Safari */
        @-webkit-keyframes spin { 0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        } @keyframes spin { 0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
        .loading-bar.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="loading-bar"></div>
    <div id="response"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Page load function
        $(document).ready(function(){
            console.log('this is run on page load');
            // Inmediately show your bar
            var $loadingBar = $('.loading-bar');
            $loadingBar.addClass('active');
            // Then execute Ajax
            $.ajax({
                url: "http://localhost/weather.php",
            })
            .done(function(data) {
               // show response from the php script
                $('#response').html(data);
            })
            .fail(function(error) {
               // Display error if it fails
                $('#response').html(error);
            })
            .always(function() {
                // Always hide loading bar when finish
                $loadingBar.removeClass('active');
            });
        });
    </script>
</body>
</html>
