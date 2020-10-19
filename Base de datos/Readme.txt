1.- Usuarios
Administrador (root) : Control total sobre la base de datos
Invitado: Solo visualizar imágenes, información de productos, nombre y foto de otros usuarios, insertar sobre usuario
Cliente: Insertar y actualizar sobre sus propios datos, visualizar todo
2.- Descripción de la base de datos
Usuario (Cuenta)
id_us  INT primary key not null autoincrement //id del usuario
nom_us  VARCHAR(40) not null //nombre del usuario
ape_us  VARCHAR (40) not null // apellido del usuario
telf_us INTEGER(15)  //teléfono del usuario ()
cel_us  INTEGER(8)// celular del usuario 
dep_us VARCHAR(30)  //departamento para el usuario
dir_us VARCHAR(70) //dirección del usuario
tipo_us TINY default  0 (“no entiendo esto”) //tipo de usuario – administrador,  cliente
ced_us INTEGER(8) not null //carnet del usuario
emai_us VARCHAR(50) not null //correo electrónico del usuario
pass_us VARCHAR(15) not null //contrasenia del usuario, lo mas recomendable es q esté encriptado 

(para el final, aun no hecho)
Factura
Id_fac  INT not null primary key auto_increment //identificador de la factura
fecha_fac  Date  NOW() //fecha de la factura
hora_fac Time NOW()// hora de la factura
precio_tot_fac INT(8) not null //precio total de la factura, con un procedimiento almacenado generas el total o bien puedes calcular el total e ingresar el valor
usuario fk



Producto
Id_prod INT not null primery key auto_increment //identificador del producto
Nom_prod VARCHAR(50) not null//nombre del producto
Desc_prod VARCHAR(1000) not null//descripción del producto
Carac_prod VARCHAR(1000) not null //Caracteristicas técnicas del producto
Precio_prod INTEGER(10) not null//precio del producto
Tipo_prod VARCHAR(20) not null//tipo de producto
fecha_reg_prod DATETIME now() // fecha de actualizacion
Cant_prod INTEGER(4) not null default 0//cantidad de ese producto que actualmente está en vigencia
/* tengo dudas sobre esto*/

Imagen_prod
Id_img INT primary key not null auto_increment //identificador de la imagen
Img BLOB primary key not null //imagen en datos binarios
fk_prod INT not null;//foránea del producto
(aun no hecho)
+Carrito
Id_car INT primary key not null auto_increment//identificador del carrito
Vistas

1.- Mostrar los 20 primeros productos por orden de fecha con id, nombre, imagen, precio
CREATE OR REPLACE view prod_portal as 
SELECT id_prod  , nom_prod, precio_prod, img 
FROM Producto Left Join Imagen ON producto.id_prod = imagen.fk_prod
ORDER BY FECHA_PROD DESC
LIMIT 20

Procedimientos
//opcional si lo usan
1.- obtener datos de un producto de un parámetro id (Portal)
Create procedure obtener_datos(IN id INT)
Begin
	Select * FROM Productos WHERE id_prod =  id;
END
Habían mas pero mejor manejan las sentencias SQL en los documentos
	
Para llamar una vista
	Select * from Vista
Para llamar un procedimiento
	call Procedimiento();

Usuarios aun no realizados
