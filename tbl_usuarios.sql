CREATE TABLE tbl_usuarios
(
  Id     INT AUTO_INCREMENT
    PRIMARY KEY,
  Nombre VARCHAR(25)  NOT NULL,
  Correo VARCHAR(50)  NOT NULL,
  Cedula VARCHAR(10)  NOT NULL,
  Clave  VARCHAR(100) NOT NULL,
  Activo BIT          NULL,
  CONSTRAINT tbl_usuarios_Id_uindex
  UNIQUE (Id),
  CONSTRAINT tbl_usuarios_Correo_uindex
  UNIQUE (Correo),
  CONSTRAINT tbl_usuarios_Cedula_uindex
  UNIQUE (Cedula)
)
  ENGINE = InnoDB;

