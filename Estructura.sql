create database MEDICOS;

create table ESPECIALIDAD(
codigoespecialidad int auto_increment primary key not null,
nombreespecialidad varchar(255) not null unique
);
