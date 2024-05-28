# BASE DE DATOS LABORATORIO

## ENTIDADES - TABLAS

## ENTIDAD USUARIO

- idusuario -> identificador unico del usuario
- nombre -> nombre del usuario 
- contraseña -> contraceña del usuario

### ENTIDAD QUIMICOS 

- idquimico -> identificador unico de los quimicos 
- nombre -> nombre del quimico 
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
- idquimico -> identificador foraneo del quimico
- fecha -> la fecha en la que se realizo el gasto del quimico
- cantidad -> la cantidad de quimico gastado
- descripcion -> descripcion detallado del gasto        -----------

## ENTIDAD ENTREGA-QUIMICO

- identrega -> identificador unico del entrega de quimico
- feEntrega -> la fecha de entrega del quimico
- codSalida -> codigo unico de salida
- idquimico -> identificador foraneo del quimico
- cantidad -> cantidad de quimico entregado
- descripcion -> descripcion de la entrega del quimico
- marca -> marca del quimico
- facultad -> la facultad al que se esta entregando el quimico
- docente -> el nombre del docente al que se entrega el quimico