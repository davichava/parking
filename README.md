parking


crear base de datos

CREATE DATABASE parcking /*!40100 DEFAULT CHARACTER SET utf8*/;

crear tabla users

CREATE TABLE users ( id int(11) NOT NULL AUTO_INCREMENT, cedula iny(50) DEFAULT NULL, nombre varchar(50) DEFAULT NULL, nombre varchar(50) DEFAULT NULL,tipoVehiculo varchar(50),
                    cilMoto varchar(50), tiemMoto varchar(50), plaMoto varchar(50), modCarro varchar(50),
                    pueCarro varchar(50), plaCarro varchar(50), fechayhora varchar(50), numCelda int(50) PRIMARY KEY (id))
                    
                   
Hice el ejercicio utilizando el framework codeigniter y php.
1. descargar xampp.
2. se abre la carpeta de xampp que se encuentra en el disco C:\xampp\htdocs\ en esta ruta se agrega el proyecto, ya que de ahi se ejecuta
3. se abre el xampp y se ejecuta dandole click en Start a Apache y Mysql.
4. se abre el navegador y se pone asi: localhost/packing/ y se ve el proyecto corriendo.


En le proyecto se evidencia todo execto los 2 puntos adicionales del punto 3, ya que me presento errores con las consultas a mysql.

En el parking report se encuentra en detalle que imforme mensual que se le debe presentar al administrador.
