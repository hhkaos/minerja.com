# MiNerja.com

Este sitio ha sido desarrollada para gestionar una web de alquileres en un servidor con Apache y PHP.

**Requisitos:**

* Soporte multi-idioma
* Soporte muldisitpositivo
* Actualización de reservas por: Google Calendar y Google Spreadsheets

## Instalación y configuración

### Instalación

Este sitio no utiliza bases de datos por lo que no es necesario ningún proceso de instalación, basta con alojar los ficheros en una carpeta en un servidor web.

### Configuración

Lo primero que tendrás que hacer es personalizar con tus propias casas, para ello deberás cambiar:

1. Cambia el logotipo y la página principal
2. Haz un duplicado de [esta hoja de Drive](https://docs.google.com/spreadsheets/d/1O6kZq7zZOL8d8TBzyARirJA-wxu5oYXMXkpsfD1-KOA/edit?usp=sharing) y hazla pública
3. Sustituye el ID en la variable URL en el fichero common/header.php por el ID de la hoja que acabas de crear.
4. Modifica las cadenas de texto y las fotos por las de las nuevas viviendas
5. En script/utils.php cambia las direcciones de correo a las que quiere que envíe el formulario de contacto

#### Añadir casa nueva
1. Añade la traducción del nombre del piso en el fichero common/string.php
2. Duplica alguna de las carpetas de las casas
3. Cámbiale el nombre, cadenas y fotos (pàginas de fans, calendarios, localización en Google Maps etc.)
4. Añade en el fichero index.php del fichero raíz la referencia a la nueva casa
5. Añade una pestaña nueva a tu hoja de cálculo con el mismo formato que las anteriores.
6. Añade en el fichero common/header.php una línea donde se hara referencia a la pestaña, por ej: if(window.location.href.indexOf("laplaya")){ tab = 4; }
7. Cambia las referencias en los footer para que haga referencias a las demás propiedades

#### Añadir fotos nuevas
_Pendiente_

#### Añadir nuevo idioma
_Pendiente_

#### Actualizar cadenas
_Pendiente_
