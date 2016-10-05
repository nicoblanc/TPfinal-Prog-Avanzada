-- Comienzo Creacion Base de Datos Prog. Avanzada --

drop database if exists sgp;

create database sgp;

use sgp;


create table user (

usercode varchar(20) not null,
password varchar(20) not null,
profileid int not null,

primary key (usercode)
);

create table client (

clientcode varchar (20) not null,
description varchar (20) not null,

primary key (clientcode)
);

create table itemstatetype (

itemstatetypecode varchar (20) not null,
description varchar (20) not null,

primary key (itemstatetypecode)
);

create table itemstate (

itemstatecode varchar (20) not null,
itemstatetypecode varchar (20) not null,
description varchar (20) not null,

foreign key (itemstatetypecode)
references itemstatetype (itemstatetypecode),

primary key (itemstatecode, itemstatetypecode)
);

create table project (

projectcode varchar (20) not null,
clientcode varchar (20) not null,
description varchar (20) not null,

foreign key (clientcode)
references client (clientcode),

primary key (projectcode)
);

create table item (

itemcode varchar (20) not null,
seqstate int not null,
projectcode varchar (20) not null,
itemstate varchar (20) not null,

foreign key (itemstate)
references itemstate (itemstatecode),

foreign key (projectcode)
references project (projectcode),

primary key (itemcode, seqstate, projectcode) 
);

create table userproject (

usercode varchar (20) not null,
projectcode varchar (20) not null,
itemcode varchar (20) not null,

foreign key (usercode)
references user (usercode),

foreign key (projectcode)
references project (projectcode),

foreign key (itemcode)
references item (itemcode),

primary key (usercode,projectcode,itemcode)
);

-- Fin Creacion Base de Datos Prog. Avanzada --
