# Organización de los archivos

En la carpeta _partial están los 'extractos' de código para ser incluidos desde las páginas.
En la carpeta _partial/shared van los 'extractos' que se repiten en muchas páginas.
Si se quiere extraer código para simplificar una página pero es un extracto que no se repite se crea una carpeta con el nombre de la página. 

# PHP Basics

Un archivo .php es practicamente idéntico a un archivo .html
La diferencia es que se puede poner un nuevo tag: <?php ?>

Todo lo que vaya dentro de ese tag es procesado por php para generar un html normal.

## <?php include 'un/archivo/x.php' ?>  

Esto lo que hace es _pegar_ ese archivo en este punto del html.

### Ejemplo

Si tengo un archivo hola.php que dice:

    hola mundo

Y en otro archivo index.php tengo:

    ahora digo <?php include 'hola.php' ?>

Cuando el navegador abra index.php se leerá:

    ahora digo hola mundo