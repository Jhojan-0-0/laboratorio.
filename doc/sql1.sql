CREATE TABLE login(
	idlogin INT NOT NULL auto_increment,
	idpersonal int not null,
	username VARCHAR(50) not null,
	passwd VARCHAR(100) not null,
	nivusu int default 2,
	estado boolean default true,
	PRIMARY KEY(idusuario)
);

CREATE TABLE personal(
   idpersonal int not null auto_increment,
   nombre VARCHAR(60) not null,
   apellidos VARCHAR(100) not null,
   sexo VARCHAR(20) not null,
   dni char(8) not null,
   telefono VARCHAR(20),
   idfacultad int not null,
   PRIMARY KEY(idpersonal)
);

CREATE TABLE facultades(
   idfacultad int not null auto_increment,
   facultad VARCHAR(80) not null,
   PRIMARY KEY(idfacultad)
);


CREATE TABLE quimicos(
idquimico int not null auto_increment,
nombre VARCHAR(100) not null,
concentracion VARCHAR(50),
tipoEnvace VARCHAR(20),
tamanio VARCHAR(20),
marca VARCHAR(70),
peso DECIMAL default 0.0,
cantidad INT default 0,
feFabricacion DATE default null,
feVencimiento DATE default null,
codProducto VARCHAR(50) not null,
advertencia TEXT,
foto VARCHAR(250),
tipo VARCHAR(20),
precio DECIMAL default 0.0,  
clasificacion VARCHAR(50),
PRIMARY KEY(idquimicos)
);

CREATE TABLE gastoQuimicos(
idgasto INT NOT null auto_increment,
idquimico int not null,
fecha DATE default CURRENT_TIMESTAMP,
cantidad INT default 0,
descripcion VARCHAR(200) not null,
PRIMARY KEY(idgasto)
);

CREATE TABLE  entregaquimicos(
identrega int not null auto_increment,
idquimico INT not null, 
feEntrega VARCHAR(50) not null default CURRENT_TIMESTAMP,
codSalida INT,
cantidad INT default 0,
descripcion TEXT,
marca VARCHAR(100),
facultad VARCHAR(200),
docente VARCHAR(100),
PRIMARY KEY(identrega)
);

falta tabla SALIDA
CREATE TABLE salida(

);