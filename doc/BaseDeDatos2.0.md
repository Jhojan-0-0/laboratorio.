# BASE DE DATOS LABORATORIO

## ENTIDADES - TABLAS

## ENTIDAD USUARIO

- idusuario -> identificador unico del usuario
- idpersonal -> identificador foraneo de pesonal
- nombre -> nombre del usuario 
- contraseña -> contraceña del usuario

### ENTIDAD QUIMICOS 

- idquimico -> identificador unico de los quimicos 
- nombreEspañol -> nombre del quimico en español
- nombreIngles -> nombre del quimico en ingles
- concentracion -> la pureza del quimico 
- tipoEnvace -> el tipo de envace del quimico (plastico o vidrio)
- tamaño -> el tamaño del envace si es grande o pequeño
- marca -> la marca del quimico 
- peso -> cuanto pesa el quimico
- cantidad -> la cantidad del quimico en el envace
- feFabricacion -> la fecha de fabricacion del quimico 
- feVencimiento -> la fecha de vencimiento del quimico
- codProducto -> el codigo del producto
- advertencia -> la advertencias del quimico
- foto -> la foto de referencia del quimico
- tipo -> tipo de quimico normalizado o fiscalizado
- precio -> el precio del quimico
- clasificacion -> la clasificacion del quimico si es Acido o Basico

## ENTIDAD GASTO-QUIMICO 

- idgasto -> identificador unico del los gastos de quimico
- identrega ->identificador foraneo de entrega de quimicos
- idquimico -> identificador foraneo del quimico
- fecha -> la fecha en la que se realizo el gasto del quimico
- cantidad -> la cantidad de quimico gastado
- descripcion -> descripcion detallado del gasto       

## ENTIDAD ENTREGA-QUIMICO

- identrega -> identificador unico del entrega de quimico
- feEntrega -> la fecha de entrega del quimico
- codSalida -> codigo unico de salida
- idquimico -> identificador foraneo de la tabla quimico
- cantidad -> cantidad de quimico entregado
- descripcion -> descripcion de la entrega del quimico
- marca -> marca del quimico
- facultad -> la facultad al que se esta entregando el quimico
- docente -> el nombre del docente al que se entrega el quimico

### ENTIDAD PERSONAL

- idpersonal -> identificador del personal del laboratorio
- nombre -> nombre del personal del laboratorio
- apellidos -> apellido del personal del laboratorio
- dni -> dni del personal de la empresa
- sexo -> sexo del personal de la empresa
- telefono -> telefono del personal de la empresa
- fechaNac -> fecha de nacimiento del personal de la empresa
- email -> email del personal de la empresa
- direccion -> direccion del personal de la empresa
- foto -> foto del personal de la empresa
- feCreate -> fecha de la creacion del registro
- feUpdate -> fecha de la actualizacion del registro

### ENTIDAD PERSONAL

- idpersonal -> identificador del personal de la empresa
- nombre -> nombre del personal de la empresa
- apellidos -> apellido del personal de la empresa
- dni -> dni del personal de la empresa
- sexo -> sexo del personal de la empresa
- telefono -> telefono del personal de la empresa
- fechaNac -> fecha de nacimiento del personal de la empresa
- email -> email del personal de la empresa
- direccion -> direccion del personal de la empresa
- foto -> foto del personal de la empresa
- feCreate -> fecha de la creacion del registro
- feUpdate -> fecha de la actualizacion del registro




### Descripción de las Relaciones:

- usuario - personal:
Cada usuario está asociado con un único registro de personal (idpersonal).

- gastoQuimicos - entregaquimico:
Cada registro de gasto de químicos (gastoQuimicos) está asociado con una entrega de químico (entregaquimico) a través de identrega.

- gastoQuimicos - regQuimicos:
Cada registro de gasto de químicos (gastoQuimicos) está asociado con un químico registrado (regQuimicos) a través de idquimico.

- entregaquimico - regQuimicos:
Cada entrega de químico (entregaquimico) está asociada con un químico registrado (regQuimicos) a través de idquimico.