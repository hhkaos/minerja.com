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

#### Añadir casa nueva
1. Duplica alguna de las carpetas de las casas
2. Cámbiale el nombre, cadenas y fotos
3. Añade en el fichero index.php del fichero raíz la referencia a la nueva casa
4. Añade una pestaña nueva a tu hoja de cálculo con el mismo formato que las anteriores.

#### Añadir fotos nuevas
_Pendiente_

#### Añadir nuevo idioma
_Pendiente_

#### Actualizar cadenas
_Pendiente_
