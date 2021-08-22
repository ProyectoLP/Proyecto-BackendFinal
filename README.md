
## INSTRUCCIONES

Para correr el api es necesario ejecutar este comando dentro de la carpeta del proyecot.
- php -S localhost:8000 -t public/

Finalmente las pruebas se realizaron solo en postman
Adjunto el link para que se pueda descargar la coleccion

https://www.getpostman.com/collections/1d50bb19df103f8cf470


## Requests completados

- Inicion de sesion (extraer de la respuesta el token de la sesion)
- Cerrar Sesion (enviar por headers variable "Autorizacion" con el valor de "Bearer "+ token entregado en el inicio de sesion)
- CRUD de Companias (requiere un inicio de sesion y enviar por los headers la variable "Autorizacion" con el valor de "Bearer "+ token entregado en el inicio de sesion)
- CRUD de empleados (no necesita token)

 *El .env fue adjuntado para mayor facilidad, se necesita crear base de datos db_laravel antes de correr el proyecto*

