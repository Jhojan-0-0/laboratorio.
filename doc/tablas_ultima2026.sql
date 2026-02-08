CREATE TABLE productos(
  idproducto int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(100) NOT NULL,
	marca varchar(100),
	clasificacion varchar(100) NOT NULL,
	fecFabricacion date NOT NULL,
	fecVencimiento date NOT NULL,
	numlote varchar(30) NOT NULL,
	fecAdquisicion date NOT NULL,
	cantidadsin decimal(11) NOT NULL,
	um1 varchar(30) NOT NULL,
	cantidadcon decimal(11),
	um2 varchar(30),
	tipo varchar(30) NOT NULL,
	presentacion varchar(30) NOT NULL,
	precio decimal(10,2) NOT NULL,
	estante int,
	nivel int,
	codOC varchar(30),
	horainicio datetime,
	horafinal datetime,
	PRIMARY KEY (idproducto)
);

CREATE TABLE solicitud(
	idsolicitud int NOT NULL AUTO_INCREMENT,
	numdocumento varchar(30) NOT NULL,
	nombre varchar(100) NOT NULL,
	folios int NOT NULL,
	asunto varchar(100) NOT NULL,
	solicitante varchar(100) NOT NULL,
	fecha datetime NOT NULL,
	fecCreate datetime NOT NULL,
	PRIMARY KEY(idsolicitud)
);

CREATE TABLE login(
	idlogin int NOT NULL AUTO_INCREMENT,
	username varchar(100) NOT NULL,
	password varchar(100) NOT NULL,
	nivel int NOT NULL,
	estado int NOT NULL,
	idpersonal int NOT NULL,
	fecCreate datetime NOT NULL,
	PRIMARY KEY(idlogin),
	FOREIGN KEY(idpersonal) REFERENCES personal(idpersonal) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE personal(
	idpersonal int NOT NULL AUTO_INCREMENT,
	nombre varchar(100) NOT NULL,
	cargo varchar(100) NOT NULL,
	fecCreate datetime NOT NULL,
	PRIMARY KEY(idpersonal)
);

CREATE TABLE bitacora(
	idbitacora int NOT NULL AUTO_INCREMENT,
	idpersonal int NOT NULL,
	idsolicitud int NOT NULL,
	fecCreate datetime NOT NULL,
	fecCierre datetime,
	PRIMARY KEY(idbitacora),
	FOREIGN KEY(idsolicitud) REFERENCES solicitud(idsolicitud) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(idpersonal) REFERENCES personal(idpersonal) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE docentes(
  iddocente int NOT NULL AUTO_INCREMENT,
  nombre varchar(100) NOT NULL,
  especialidad varchar(100) NOT NULL,
  codEscuela int NOT NULL,
  PRIMARY KEY (iddocente),
  FOREIGN KEY (codEscuela) REFERENCES escuelas(codescuela) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE escuelas(
	codescuela int NOT NULL AUTO_INCREMENT,
	nombre varchar(100) NOT NULL,
	PRIMARY KEY (codescuela)
);

CREATE TABLE auditoria( 
	id int NOT NULL AUTO_INCREMENT,
	numauditoria int NOT NULL,
	idpersonal int NOT NULL,
	idproducto int NOT NULL,
  estadoproducto boolean NOT NULL,
  observacion text,
  estadoauditoria boolean NOT NULL,
	fecCreate datetime NOT NULL,
	fecCierre datetime,
	PRIMARY KEY(id),
	FOREIGN KEY(idpersonal) REFERENCES personal(idpersonal) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(idproducto) REFERENCES productos(idproducto) ON DELETE CASCADE ON UPDATE CASCADE
);