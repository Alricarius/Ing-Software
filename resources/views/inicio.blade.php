<!DOCTYPE html>
<html lang="en" style="min-height: 100%; height: 100%;">
    <head>
        <meta name= "csrf-token"    content = "{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/app.css">
        <title>Document</title>
    </head>
    <body style="height: inherit; min-height: 100%; width: 100%;">
        <div style = "display: flex; min-height: 100%; flex-direction: column;">
            <header id="header_comp"></header>
            <main style="flex:1;">
                    <div id="item"></div>
            </main>
            <footer id="footer_comp"></footer>
        </div>
    </body>
    <script type="text/javascript" src="js/global.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>