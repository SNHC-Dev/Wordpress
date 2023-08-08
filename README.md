=== Bloqueo de XML-RPC ===

Contribuyentes: SNHC SAS
Tags: seguridad, xml-rpc, bloqueo, ataques
Requiere como mínimo: 5.0
Probado hasta: 5.8
Versión estable: 1.0
Licencia: GPLv2 o posterior
Licencia URI: http://www.gnu.org/licenses/gpl-2.0.html

== Descripción ==

El plugin "Bloqueo de XML-RPC" desarrollado por SNHC SAS permite bloquear el archivo xmlrpc.php de WordPress ante posibles atacantes.

XML-RPC es una funcionalidad de WordPress que permite realizar peticiones y comunicarse con el sitio web mediante APIs. Sin embargo, esta característica puede ser explotada por atacantes para intentar realizar ataques de fuerza bruta y otras vulnerabilidades de seguridad.

Este plugin deshabilita el acceso al archivo xmlrpc.php en el archivo .htaccess, lo que ayuda a proteger tu sitio web WordPress de posibles ataques mediante XML-RPC.

== Instalación ==

1. Carga el plugin "Bloqueo de XML-RPC" a la carpeta `/wp-content/plugins/` o instálalo directamente desde el repositorio de plugins de WordPress.
2. Activa el plugin a través del menú 'Plugins' en WordPress.
3. El plugin bloqueará el acceso al archivo xmlrpc.php automáticamente al activarse.

== Aviso de seguridad ==

Antes de bloquear el acceso a XML-RPC, asegúrate de que tu sitio web no dependa de servicios o aplicaciones que requieran esta funcionalidad. Al deshabilitar XML-RPC, algunas funcionalidades específicas de ciertos plugins o aplicaciones pueden dejar de funcionar correctamente.

== Preguntas frecuentes ==

**¿Cómo puedo desactivar el bloqueo de XML-RPC si lo necesito nuevamente?**

Para desactivar el bloqueo de XML-RPC, simplemente desactiva el plugin "Bloqueo de XML-RPC" desde el menú 'Plugins' en WordPress. Esto restaurará el acceso a xmlrpc.php.

**¿El bloqueo de XML-RPC afectará el rendimiento de mi sitio web?**

No, el bloqueo de XML-RPC no debería afectar el rendimiento general de tu sitio web. Solo deniega el acceso a xmlrpc.php, lo que no debería tener un impacto significativo en el rendimiento.

**¿Dónde puedo obtener soporte o reportar problemas?**

Si tienes alguna pregunta o encuentras algún problema con el plugin, por favor, visita la página de soporte en WordPress.org: [link del foro de soporte].

**¿Puedo contribuir al desarrollo del plugin?**

¡Por supuesto! Si tienes habilidades de desarrollo y deseas contribuir al plugin, visita el repositorio en GitHub: [enlace al repositorio GitHub].

== Camblog ==

= 1.0 =
* Versión inicial del plugin "Bloqueo de XML-RPC".

== Enlaces útiles ==

- [Página del plugin en WordPress.org](https://wordpress.org/plugins/xmlrpc-blocker/)
- [Repositorio del plugin en GitHub] https://github.com/SNHC-Dev/Wordpress 
