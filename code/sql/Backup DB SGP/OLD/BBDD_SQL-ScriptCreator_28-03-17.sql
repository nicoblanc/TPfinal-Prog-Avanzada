-- Comienzo Creacion Base de Datos Prog. Avanzada --


-- REVISION: 28-03-2017 --

-- 1) Reformulacion de Tablas relacionadas a Items (Eliminacion de ItemStateType y Creacion de ItemType)
-- 2) Creacion Tabla historica de cambios de Items (Pedido en la consigna)
-- 3) Simplificacion de Tabla Item (Se reemplaza PK Compuesta por Atomica)
-- 4) Eliminacion de Claves Foraneas en todas las tablas
-- 5) Agrega campo Priority para definir la prioridad de un Item (Pedido en la consigna)

-- REVISION: 28-03-2017 --


drop database if exists sgp;
create database sgp;
use sgp;



create table user (

-- TABLA DE USUARIOS DEL SISTEMA

usercode varchar(20) not null, -- Codigo de usuario
password varchar(20) not null, -- Contraseña
profileid int not null, -- Id. de Perfil, hardcodeado en aplicacion?

primary key (usercode)
);



create table client (

-- TABLA DE CLIENTES

clientcode varchar (20) not null, -- Codigo de Cliente
description varchar (50) not null, -- Descripcion de Cliente

primary key (clientcode)
);



create table project (

-- TABLA DE LOS PROYECTOS PARA CADA CLIENTE, COMPUESTOS POR ITEMS

projectcode varchar (20) not null, -- Codigo del Proyecto
clientcode varchar (20) not null, -- Codigo del Cliente
description varchar (50) not null, -- Descripcion del Proyecto (Sis de Gestion, Sis de Negocio..)

primary key (projectcode)
);



create table item (

-- TABLA DE ITEMS QUE PUEDE TENER UN PROYECTO

itemcode varchar (20) not null, -- Codigo de Item
itemtype varchar (20) not null, -- Codigo de Tipo de Item (Bug, Nuevo req..)
description varchar (50) not null, -- Descripcion de Item (Integracion de sistemas, Funcionalidad X,...)
projectcode varchar (20) not null, -- Codigo del Proyecto (Sis. de Gestion, de Negocio..)
prioriry int not null, -- Prioridad del Item.

primary key (itemcode) 
);



create table itemtype (

-- TABLA DE TIPOS POSIBLES DE ITEMS DE CADA PROYECTO

itemtypecode varchar (20) not null, -- Codigo de Tipo de Item 
description varchar (50) not null, -- Descripcion del Tipo de Item (Bug, Nuevo Requerimiento, Actualizacion...)

primary key (itemtypecode)
);



create table itemstate (

-- TABLA DE TODOS LOS ESTADOS POR LOS QUE PUEDE ATRAVESAR UN ITEM

itemstatecode varchar (20) not null, -- Codigo del Estado del Item
description varchar (50) not null, -- Descripcion del Estado (Desarrollado, Testing, Finalizado...)

primary key (itemstatecode)
);



create table itemhistory (

-- HISTORIAL DE CAMBIOS DE UN ITEM

historyid int not null, -- ID del registro, autoincremental
creationdate date not null, -- Fecha de cambio de estado del Item
itemcode varchar (20) not null, -- Codigo de Item
seqstate int not null, -- Secuencia, por cada cambio de estado del item se incrementa para el estado historico
itemstate varchar (20) not null, -- Codigo de estado del Item (En desarrollo, finalizado...)
description varchar (50) not null, -- Descripcion del Historial de cambios
responsibleuser varchar (20) not null, -- Codigo del usuario responsable del estado del Item

primary key (historyid) 
);



create table userproject (

-- TABLA DE RELACION PARA ASOCIAR/PERMITIR ACCESO DE USUARIOS A PROYECTOS E ITEMS.

usercode varchar (20) not null, -- Codigo de Usuario
projectcode varchar (20) not null, -- Codigo del Proyecto
itemcode varchar (20) not null, -- Codigo del Item

primary key (usercode,projectcode,itemcode)
);


-- Fin Creacion Base de Datos Prog. Avanzada --