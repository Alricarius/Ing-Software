<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name= "csrf-token"    content = "{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <title>Document</title>
    </head>
    <body>
        <div id='form'></div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
