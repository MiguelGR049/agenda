CREATE TABLE t_contactos (
    id int auto_increment primary key,
    paterno varchar(20) not null,
    materno varchar(20),
    nombre varchar(20) not null,
    telefono varchar(20),
    email varchar(20),
    descripcion text
);


CREATE TABLE t_fotos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_contacto INT NOT NULL,
    nombre VARCHAR(50),
    ruta TEXT,
    FOREIGN KEY (id_contacto) REFERENCES t_contactos(id)
);