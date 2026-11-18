-- 1. Crear la base de datos si no existe
IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = 'bdalumno')
BEGIN
    CREATE DATABASE bdalumno;
END
GO

USE bdalumno;
GO

-- 2. Tabla de Clientes (Ejercicio 1)
CREATE TABLE tcliente (
  id INT IDENTITY(1,1) PRIMARY KEY,
  dni CHAR(8) NOT NULL UNIQUE,
  apellidos VARCHAR(50) NOT NULL,
  nombres VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  celular CHAR(9) NOT NULL,
  direccion VARCHAR(50) NOT NULL
);
GO

-- 3. Tabla de Trabajadores (Ejercicio 2)
CREATE TABLE ttrabajador (
  codigo VARCHAR(10) PRIMARY KEY,
  apellidos_nombres VARCHAR(100) NOT NULL,
  cargo VARCHAR(50) NOT NULL,
  area VARCHAR(50) NOT NULL,
  fecha_ingreso DATE NOT NULL
);
GO

-- Insertar un trabajador inicial de prueba
INSERT INTO ttrabajador (codigo, apellidos_nombres, cargo, area, fecha_ingreso) 
VALUES ('T001', 'Pérez Gómez, Juan Carlos', 'Analista de Créditos', 'Finanzas', '2022-03-15');
GO

-- 4. Tabla de Sanciones (Ejercicio 2)
CREATE TABLE tsancion (
  num_sancion INT IDENTITY(1,1) PRIMARY KEY,
  cod_trabajador VARCHAR(10) NOT NULL,
  tipo_sancion VARCHAR(50) NOT NULL,
  fecha DATE NOT NULL,
  accion VARCHAR(100) NOT NULL,
  dias INT NOT NULL,
  motivo TEXT NOT NULL,
  FOREIGN KEY (cod_trabajador) REFERENCES ttrabajador(codigo)
);
GO