DROP DATABASE IF EXISTS pnbstorage;

CREATE DATABASE pnbstorage;

USE pnbstorage;

CREATE TABLE users (
  idUser INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(20),
  pass VARCHAR(20)
);

INSERT INTO users VALUES (1, 'admin', 'admin');

CREATE TABLE apartado (
  idApartado INT PRIMARY KEY AUTO_INCREMENT,
  FechaRealizado DATE, 
  FechaEntrega DATE, 
  Estado BOOLEAN
);

CREATE TABLE categoria (
  idCategoria INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  descripcion VARCHAR(50)
);

CREATE TABLE item (
  idItem INT PRIMARY KEY AUTO_INCREMENT,
  idCategoria INT,
  nombre VARCHAR(50),
  descripcion VARCHAR(50),
  cantidad INT
);

ALTER TABLE item
  ADD CONSTRAINT fkIC FOREIGN KEY (idCategoria) REFERENCES categoria(idCategoria);

CREATE TABLE merma (
  idItem INT PRIMARY KEY AUTO_INCREMENT,
  idCategoria INT, 
  cantidad INT, 
   descripcion VARCHAR(50)
);

ALTER TABLE merma
  ADD CONSTRAINT fkMC FOREIGN KEY (idCategoria) REFERENCES categoria(idCategoria);

CREATE TABLE itemApartado (
  idApartado INT PRIMARY KEY AUTO_INCREMENT,
  idItem INT, 
  cantidad INT 
);

ALTER TABLE itemApartado
  ADD CONSTRAINT fkIA FOREIGN KEY (idApartado) REFERENCES apartado(idApartado) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE proveedor(
  idProveedor INT PRIMARY KEY AUTO_INCREMENT, 
  nombre VARCHAR(50), 
  descripcion VARCHAR(50), 
  direccion VARCHAR(50), 
  telefono VARCHAR(10)
);

CREATE TABLE entregaProveedor(
  idEntrega INT PRIMARY KEY AUTO_INCREMENT,
  idProveedor INT, 
  idItem INT, 
  cantidad INT,
  FechaEntrega DATE
);

ALTER TABLE entregaProveedor
  ADD CONSTRAINT fkEP FOREIGN KEY (idProveedor) REFERENCES proveedor(idProveedor),
  ADD CONSTRAINT fkEI FOREIGN KEY (idItem) REFERENCES item(idItem);