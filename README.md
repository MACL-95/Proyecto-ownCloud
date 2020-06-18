# Proyecto ownCloud
Una servicio de nube privada online y seguro.
## Autores
Miguel Ángel Coleto López y David Toro Martínez

## Requisitos
Se debe de preparar una pila LAMP en la máquina donde se desee montar este proyecto.
Es necesario obtener el software de ownCloud en https://owncloud.org/download/

## Montaje
Este proyecto incluye los archivos de configuración que se han modificado. Están organizados de forma que al volcar en la raíz de un Ubuntu Server funcione pero hay que tener en cuenta que hay que modificar direcciones IPs, nombres y otros parámetros para que se ajusten a cada entorno.

- Se asume que el directorio data se encuentra en /var/www/html/
- El servidor de respaldo es opcional, puede haber mas de 1 servidor pero se debe de modificar la configuración de KeepAlived para que funcione
- Para utilizar KeepAlived es necesario configurar una IP flotante, puede ser una nueva red interna o una IP secundaria en el mismo adaptador, el fichero de configuración varia según la distribución de Linux
