# Tarea-Procesador-de-transacciones

Este parcial vale 10 puntos, Este sistema en PHP y debe ser diseñado utilizando bootstrap. 

En este sistema en la pantalla inicial tendré un listado(Tabla) con todas las transacciones guardada en el sistema, estas transacciones pueden ser mantenida osea que se pueden editar,eliminar y agregar. 

Las transacciones se pueden agregar de dos maneras distintas una con un típico formulario html y la otra seleccionado un fichero para realizar una subida masiva de información al sistema, los ficheros aceptados solo sera json o csv. 

Por otra parte las transacciones pueden ser descargada del sistema en un fichero json o csv, este fichero se generara con todos las transacciones que tenga el sistema en ese momento. Para realizar la descargar esto le puedes ayudar (https://www.tutorialrepublic.com/php-tutorial/php-file-download.php ) 

Al realizar algunas de las funcionalidades descripta anteriormente se debe guardar un log indicando la acción que se realizo (Edito,Borro o agrego), la fecha y hora que se realizo la acción y el id de la transacción sobre la que se realizo dicha acción.

Nota: Las transacciones debe almacenarse en un fichero físico, la data debe poder guardase de diferente manera en el sistema osea deben existir tres manejadores de archivos diferentes una para guardalo como Json, otra para hacerlo serializando la información y la otra guardándolo en un archivo csv. 
