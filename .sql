create database perez

create table productos(
producto_id serial primary key,
producto_nombre varchar(100) not null,
producto_cantidad integer not null,
producto_categoria char(1) not null,
producto_prioridad char(1) not null,
producto_situacion smallint default 1
)


