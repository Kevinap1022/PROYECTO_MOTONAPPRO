CREATE DATABASE Base_de_datos_MotoNapp;

USE Base_de_datos_MotoNapp;

CREATE TABLE Usuarios(
Id_usuario INT AUTO_INCREMENT PRIMARY KEY,
Nombre VARCHAR(50) NOT NULL,
CorreoElectronico VARCHAR(50) NOT NULL,
Telefono INT NOT NULL,
Contraseña VARCHAR(25) NOT NULL,
Ciudad VARCHAR(30) NOT NULL,
TipoUsuario ENUM('Propietario', 'Mecanico'));

CREATE TABLE Motocicleta(
    ID_Motocicleta INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuario INT NOT NULL,
    Marca VARCHAR(50) NOT NULL,
    Modelo VARCHAR(50) NOT NULL,
    Fabricante VARCHAR(50) NOT NULL,
    Color VARCHAR(30) NOT NULL,
    KilometrajeActual INT NOT NULL,
    TipoMotor ENUM('Gasolina', 'Electrico') NOT NULL,
    CapacidadMotor VARCHAR(20) NOT NULL,
    TipoTransmision ENUM('Manual', 'Automatica') NOT NULL,
    NumeroPolizaSeguro VARCHAR(50) NOT NULL,
    FechaVencimientoSeguro DATE NOT NULL,
    FechaUltimaRevision DATE NOT NULL,
    AccesoriosInstalados TEXT NOT NULL,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuarios(ID_Usuario)
);


CREATE TABLE Mantenimiento(
    ID_Mantenimiento INT AUTO_INCREMENT PRIMARY KEY,
    ID_Motocicleta INT NOT NULL,
    TipoMantenimiento VARCHAR(100) NOT NULL,
    FechaMantenimiento DATE NOT NULL,
    KilometrajeMantenimiento INT NOT NULL,
    CostoMantenimiento DECIMAL(10, 2),
    FOREIGN KEY (ID_Motocicleta) REFERENCES Motocicleta(ID_Motocicleta));
    
ALTER TABLE Mantenimiento
ADD DetallesAdicionales TEXT;

CREATE TABLE Contactanos(
    ID_Contacto INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuario INT,
    Correo VARCHAR(50) NOT NULL,
    Asunto VARCHAR(50) NOT NULL,
    Nombre VARCHAR(50) NOT NULL,
    Mensaje TEXT NOT NULL,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuarios(ID_Usuario));