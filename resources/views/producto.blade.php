<!DOCTYPE html>
<html lang="en">
<head>
    <meta name= "csrf-token"    content = "{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <h1>{{$id_prod}}</h1>
    <div id='tabnav' ></div>
    
    <script>
        var id = "{{$id_prod}}"
    </script>
    <script type="text/javascript" src="../js/app.js"></script>
    
</body>
</html>