<!DOCTYPE html>
<html lang="en" style="min-height: 100%; height: 100%;">
    <head>
        <meta name= "csrf-token"    content = "{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/app.css">
        <title>RegistroProducto</title>
    </head>
    <body style="background-color: rgb(210,210,210); height: inherit; min-height: 100%; width: 100%;">
        <div style = "display: flex; min-height: 100%; flex-direction: column;">
            <header id="header_comp"></header>
                <main style="flex:1;">
                <div style ="margin-left: 40px;margin-top: 100px;margin-bottom:50px; margin-right:100px ;max-width:1200px ;min-width:230px" class = "card">
                    <div class="card-header">{{ __('Registro de Productos') }}</div>
                        <div style="padding-top:0%" id="form"></div>
                </div>
            </main>
            <footer id="footer_comp"></footer>
        </div>
    </body>
    @if(session()->has('id'))
        <script>
            let user_is_logged = true;
            let user_id = "{{session('id')}}";
            let user_name = "{{session('name')}}";
            let user_is_admin = "{{session('type_user')}}"; // 0 = false | 1 = true
        </script>
    @else
        <script>
            let user_is_logged = false;
        </script>
    @endif
    <script type="text/javascript" src="js/global.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>