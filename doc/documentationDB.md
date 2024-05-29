# BASE DE DATOS SQL

## TABLAS 

### usuario

- idusuario **(PK): INT AUTO INCREMENT UNIQUE**
- nombre **VARCHAR(50)**
- contraceña **VARCHAR(100)**

### quimicos

- idquimicos **(PK): INT AUTO INCREMENT UNIQUE**
- nombre **VARCHAR(100)**
- concentracion **VARCHAR(50)**
- tipoEnvace **VARCHAR(20)**
- tamaño **VARCHAR(20)**
- marca **VARCHAR(70)**
- peso **DECIMAL**
- cantidad **INT**
- feFabricacion **DATE**
- feVencimiento **DATE**
- codProducto **VARCHAR(50)**
- advertencia **TEXT**
- foto **VARCHAR(250)**
- tipo **VARCHAR(20)**
- precio **DECIMAL**     
- clasificacion **VARCHAR(50)**

### gastoQuimicos

- idgasto **(PK): INT AUTO INCREMENT UNIQUE**
- idquimico **(FK): INT**
- fecha **DATE**
- cantidad **INT**
- descripcion **VARCHAR(200)**

### entregaquimico

- identrega **(PK): INT AUTO INCREMENT UNIQUE**
- feEntrega **VARCHAR(50)**
- codSalida **INT**
- idquimico **(FK): INT**
- cantidad **INT**
- descripcion **TEXT**
- marca **VARCHAR(100)**
- facultad **VARCHAR(200)**
- docente **VARCHAR(100)**