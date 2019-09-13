# Combobox
Lista en HTML, con PHP y MySQL

#El nombre de la base de datos, es que ustedes deseen.
#Estructura de la tabla ESPECIALIDAD.
create table ESPECIALIDAD(
codigoespecialidad int auto_increment primary key not null,
nombreespecialidad varchar(255) not null unique
);
