# Prueba de Desarrollo
## Instrucciones 

Mediante el uso de Laravel y MySQL, desarrollar una aplicación que permita la administración de un catálogo de productos.

Debe contener la siguiente información y características:

# 1. Marca
*   Nombre de la marca
*   Referencia (identificador, puede ser numérico o alfanumérico, especificar el utilizado)

# 2. Producto
*   Nombre del producto
*   Talla (S, M, L)
*   Observaciones
*   Marca del producto
*   Cantidad en inventario
*   Fecha de embarque

# 3. El desarrollo debe contar con:
*   Datos persistentes en la aplicación
*   Formulario de Creación de nuevos productos
*   Formulario de Edición de productos
*   Formulario de Creación de nuevas marcas
*   Formulario de Edición de marcas
*   Capacidad de eliminar productos
*   Capacidad de eliminar marcas

# 4. Información adicional
*   Los formularios deben tener validaciones de acuerdo al tipo de campo.
*   Todos los campos son obligatorios.

Debe entregarse los archivos fuente (html, js, css, etc.), puede hacerse mediante acceso a un repositorio o un zip al correo.

En caso de hacer uso de alguna librería o algún desarrollo previo, por favor comunicarlo e indicarn qué ayuda le prestó en el momento de la programación y la forma en que lo asoció a esta prueba.

# Instalacion:

* Clonar el repositorio

    ![Screenshot](screenshots/repositorio1.png)
    ![Screenshot](screenshots/repositorio2.png)
    ![Screenshot](screenshots/repositorio3.png)

* Ejecutar composer para las dependecias de php: composer install

    ![Screenshot](screenshots/composer1.png)
    ![Screenshot](screenshots/composer2.png)
* Configurar el archivo .env con la configuracion de la base de datos

    ![Screenshot](screenshots/env.png)

* Ejecutar las migraciones: php artisan migrate

    ![Screenshot](screenshots/migrate.png)

* Configurar el App Key: php artisan key:generate

    ![Screenshot](screenshots/key.png)

* Configurar el link simbolico para el almacenamiento de imagenes: php artisan storage:link

    ![Screenshot](screenshots/storage.png)

* Correr el servidor local: php artisan server

    ![Screenshot](screenshots/serve.png)


# Uso del Aplicativo

* Ingresar a la url del servidor: http://localhost:8000

    ![Screenshot](screenshots/tienda.png)

* Registrar un usuario

    ![Screenshot](screenshots/registro.png)

* Iniciar Sesión con el usuario registrado anteriormente para acceder al panel adminstrativo

    ![Screenshot](screenshots/inicio.png)

* Panel administrativo

    ![Screenshot](screenshots/panel.png)
    ![Screenshot](screenshots/panel2.png)

* Registrar las marcas deseadas (Menu de Marcas)

    ![Screenshot](screenshots/marcas1.png)
    ![Screenshot](screenshots/marcas2.png)
    ![Screenshot](screenshots/marcas3.png)

* Registrar los productos deseados (Menu de Productos)

    ![Screenshot](screenshots/producto1.png)
    ![Screenshot](screenshots/producto2.png)
    ![Screenshot](screenshots/producto3.png)

* Navegar hasta la pagina principal (Tienda)(Click Icono de "TiendApp")

    ![Screenshot](screenshots/tienda1.png)

* Verificar los Productos registrados...

    ![Screenshot](screenshots/tienda2.png)
