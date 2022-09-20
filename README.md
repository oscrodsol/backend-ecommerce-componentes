<h1 align="center">Backend e-commerce.</h1>

<h4 align="center">Backend de una tienda de componentes informaticos, en la que el usuario se puede dar de alta y usar la web como si para comprar se tratase.<h4>

---
# Tech Stack:

Se han utilizado las siguientes tecnologías: <br/><br/>
 <code><img height="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" /></code> <code><img  height="50"  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/heroku/heroku-plain-wordmark.svg"></code> <code><img  height="50"  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"></code> 
</a></code> <br/>


## Acerca del proyecto:

Proyecto final realizado para el Bootcamp Full Stack Developer de GeeksHubs, donde se ha desarrollado el backend en php y laravel de un e-commerce funcional.

El proyecto tiene su seguimiento en este trello: https://trello.com/b/aB0E6OIw/proyecto-final

Puedes acceder a las rutas desde este link: https://immense-castle-69938.herokuapp.com/api/

## Inicializar el proyecto y la base de datos:

Para inicializar el proyecto en local, lo primero será descargarse el archivo y descomprimirlo en su pc, una vez hecho esto, si lo abre con visual studio code, tendra que instalar los componentes necesarios escribiendo en la consola `composer install`.<br/><br/>
Una vez nos instale todo lo necesario, tendremos que eliminar el .example del nombre del archivo `.env.example`, alli deberemos escribir las credenciales de nuestra base de datos y podemos ejecutar el comando `php artisan migrate`, si por cualquier cosa las tablas no se suben de forma correcta o se quiere hacer un cambio en el futuro esto se soluciona con el comando `php artisan migrate:rollback`,pero hay que tener en cuenta que se elimina absolutamente todo, menos la tabla migraciones.<br/>

Cuando hayamos migrado las tablas y sus relaciones, poblaremos las tablas con los seeders, que en este orden se deberan escribir y ejecutar estos comandos para evitar errores:<br/><br/>
`php artisan db:seed --class RoleSeeder`<br/>
`php artisan db:seed --class TypeSeeder`<br/>
`php artisan db:seed --class StateSeeder`<br/>
`php artisan db:seed --class UserSeeder`<br/>
`php artisan db:seed --class ProductSeeder`<br/><br/>

Una vez hecho esto, disponemos de un usuario super administrador, otro administrador y un usuario estandar, las credenciales para usarlos y trastear son:

<h4>Super Admin:</h4>
     email: sudo@gmail.com <br/>
     contraseña: 1234`
<h4>Admin:</h4>
     email: admin@gmail.com <br/>
     contraseña: 1234
<h4>Usuario:</h4>
     email: user@gmail.com <br/>
     contraseña: 1234

Con esto ya se podria usar la pagina con total libertad, si me he equivocado en cualquier cosa no dudes en decirmelo ;)

## Rutas de backend:

Página de bienvenida: `api/` <br/>

### Rutas de usuario:

Registro de usuario: `api/register`<br/>
Login de usuario: `api/login`<br/>

<h5>Rutas con auth:</h5>

Ver tus datos de usuario: `api/profile`<br/>
Desloguear tu usuario de la pagina: `api/logout`<br/>
Modificar tu usuario: `api/modify`<br/><br/>

### Rutas de producto:

Ver todos los productos: `api/get_all_products`<br/>
buscar un producto por su nombre: `api/product_by_title{title}` <br/>

<h5>Rutas con auth y super admin:</h5>

Crear un producto: `api/create_product`<br/>
Borrar un producto: `api/delete_product/{id}`<br/>
Modificar un producto: `api/update_product/{id}`<br/>

### Rutas de tipo de producto:

Obtener todos los tipos de producto: `api/get_all_Types`<br/>

<h5>Rutas con auth y super admin:</h5>

Crear un tipo de producto: `api/create_Type`<br/>
Borrar un tipo de producto: `api/delete_Type/{id}`<br/>
Modificar un tipo de rpoducto: `api/update_Type/{id}`<br/>

### Rutas de super administrador:

Añade el rol super admin a un usuario conociendo su id: `api/user/add_super_admin/{id}`<br/>
Retira el rol super admin a un usuario conociendo su id: `api/user/remove_super_admin/{id}`<br/>
Añade el rol admin a un usuario conociendo su id: `api/user/add_admin/{id}`<br/>
Retira el rol admin a un usuario conociendo su id: `api/user/remove_admin/{id}`<br/>
Borra a un usuario conociendo su id: `api/delete_user_by_id/{id}`<br/>

# Base de datos:

Ingenieria inversa de las relaciones entre las tablas:


![Entidad relacion proyecto final](https://user-images.githubusercontent.com/66917963/191113005-d71b623b-d7bf-4b7e-994f-3e12e3687d4f.png)


# Tareas pendientes:
  - [ ] Completar el crud en la parte de pedidos.
  - [ ] Completar el crud en la parte de direcciones.
  - [ ] Completar el crud en la parte de pagos.
  - [ ] Añadir middleware de admin.
  - [ ] Añadir rutas donde se emplee el middleware admin.
  - [ ] Mejorar la sintaxis y comprension de codigo.
      
