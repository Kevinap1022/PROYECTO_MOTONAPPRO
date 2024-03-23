-- crear base de datos
-- DDL
create database motonapp;
show databases;
-- borrar base de datos 
drop database motonapp;

use motonapp;

create table usuarios (
		id int primary key not null auto_increment,
        nombres varchar(60) not null,
        apellidos varchar(60) not null,
        correo_electronico varchar(100),
        celular int 
);


 
 -- muestra las tablas y la el interior de la tabla
show tables;
show columns from usuarios;
describe usuarios;

-- creando tabla marcas
 
create table marcas (
		id int primary key not null auto_increment,
        descripcion varchar(60) not null

);

-- creamos la tabla relacional referencias

create table referencias (
		id int primary key not null auto_increment,
        descripcion varchar(60) not null,
        motor varchar(60) ,
        cilindraje varchar(100),
        transmision varchar(50),
        id_marcas int,
        foreign key (id_marcas) references marcas(id) -- id marcas es una llave foranea que toma como referencia la tabla de marcas y la llave primaria id
);

describe referencias;
 
create table motos(
id int primary key not null auto_increment,
id_usuario int,
id_referencia int,
modelo int,
color varchar(60),
soat date,
tecnomecanica date,
foreign key (id_usuario) references usuarios (id),
foreign key (id_referencia) references referencias (id)
);




describe motos;

-- tipos de mantenimiento

create table tipos_mantenimientos(
id int primary key not null auto_increment,
descripcion varchar(400) not null
);


-- hacer tabla mantenimiento
create table mantenimientos(
id int primary key not null auto_increment,
id_moto int,
id_tiposMantenimientos int,
fecha date,
valor int,
kilometraje int,
descripcion varchar(500),

foreign key (id_moto) references motos (id),
foreign key (id_tiposMantenimientos) references tipos_mantenimientos (id)
);


show tables;


-- agrega campos a la tabla

ALTER TABLE usuarios ADD genero varchar(40);  
show columns from usuarios;




show databases;






