<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name= "csrf-token"    content = "{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="../css/app.css"> -->
        <title>Document</title>
    </head>
    <body>
        <header id="header_comp"></header>
        <main>
                <div id="tabnav"></div>
        </main>
        <footer id="footer_comp"></footer>
    </body>
    
    <script>
        var id = "{{$id_prod}}"
    </script>
    <script type="text/javascript" src="../js/app.js"></script>
</html>