<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="api/producto" method="post" enctype="multipart/form-data">
        <label>Nombre</label>
        <input name ='nom' type="text"><br>
        
        <label>Descripcion</label>
        <input name='desc' type="text"><br>
        
        <label>Caracteristicas</label>
        <input name="carac" type="text"><br>
        
        <label>Precio</label>
        <input name= 'precio' type="number"><br>
        
        <label>tipo</label>
        <input name = 'tipo' type="text"><br>
        
        <label>imagen</label>
        <input name="img" type="file"><br>
        
        <label>cantidad</label>
        <input name="cant" type="text"><br>

        <button type="submit">enviar</button>
    </form>
</body>
</html>