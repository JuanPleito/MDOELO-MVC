-- Active: 1750671264608@@127.0.0.1@3306@tienda_web
drop database if exists tienda_web ; --- DANGER

create database if not EXISTS tienda_web character set latin1 COLLATE latin1_spanish_ci;


use tienda_web;

CREATE USER 'admin_tienda'@'localhost' IDENTIFIED BY '123';


GRANT ALL PRIVILEGES ON tienda_web.* to admin_tienda;
-- .* INDICA DENTRO DE LA BASE DE DATOS TIENDA_WEB TODOS LOS ITEMS OBJETOS Y ETC PRIVILEGIOS AL USUARIO EN CUESTION, ADMIN_TIENDA.

create table usuarios (
    id  int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario varchar(25) not null,
    email varchar(80) not null UNIQUE,
    contrasena varchar(255) not null

);