<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'format_tiles', language 'es', branch 'MOODLE_37_STABLE'
 *
 * @package   format_tiles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Añadir mosaicos';
$string['all'] = 'Todo';
$string['allcomplete'] = 'Todo completo';
$string['allowlabelconversion'] = 'Permitir conversión de etiqueta a página (experimental)';
$string['allowlabelconversion_desc'] = 'Si se activa, a los profesores editores se les dará una opción en cada desplegable para configuración de edición de etiqueta para convertir la etiqueta a una página. Esta es una configuración experimental.';
$string['allowsubtilesview'] = 'Permitir vista de sub mosaicos';
$string['allowsubtilesview_desc'] = 'Permitir el uso de una configuración de curso, la cual, si se selecciona, muestra las actividades (excepto etiquetas) como sub mosaicos, en lugar de la lista estándar';
$string['asfraction'] = 'Mostrar como fracción';
$string['aspercentagedial'] = 'Mostrar como % en círculo';
$string['assumedatastoreconsent'] = 'Asumir consentimiento para almacenamiento local del navegador';
$string['assumedatastoreconsent_desc'] = 'Si se selecciona, al usuario <b>no</b> le será mostrado un diálogo que le solicite cosentimiento para almacenar datos en almacenamiento local del navegador';
$string['basecolour'] = 'Color para mosaicos';
$string['basecolour_help'] = 'El color aquí configurado será aplicado a todos los mosaicos en el curso';
$string['brandcolour'] = 'Color de la marca';
$string['close'] = 'Cerrar';
$string['collapse'] = 'Contraer sección';
$string['collapsesections'] = 'Contraer todas las secciones';
$string['colourblue'] = 'Azul';
$string['colourdarkgreen'] = 'Verde oscuro';
$string['colourgreen'] = 'Verde';
$string['colourlightblue'] = 'Azul claro';
$string['colourname_descr'] = 'Mostrar el nombre para el color (por ejemplo “Azul”) que se usará en menús desplegables al elegir un color para un curso';
$string['colournamegeneral'] = 'Mostrar nombre para color de arriba';
$string['colourpurple'] = 'Morado';
$string['colourred'] = 'Rojo';
$string['complete'] = 'completo';
$string['complete-n-auto'] = 'Ítem incompleto. Será marcado como completo cuando cumpla con los criterios de finalización. No puede cambiar esto manualmente.';
$string['complete-y-auto'] = 'Ítem completo. Se marcó como completo cuando cumplió los criterios de finalización. No puede cambiar esto manualmente.';
$string['completion_help'] = 'Una marca de verificación (V) a la derecha de una actividad puede ser usada para indicar cuando una actividad está completada (se mostrará un círculo vacío cuando no lo esté).<br><br>
Dependiendo de la configuración, una marca de verificación (V) puede aparecer automáticamente cuando haya completado la actividad de acuerdo a las condiciones configuradas por el profesor.<br><br>
En otros casos, puede hacer clic en el círculo vacío cuando piense que ha completado esta actividad y se cambiará a una marca de verificación (V) verde sólida. (El hacer clic nuevamente quita la V si cambia de opinión)';
$string['completionswitchhelp'] = '<p>Ha seleccionado mostrar el seguimiento de finalización en cada mosaico. Por lo tanto, hemos configurado "Seguimiento de finalización > Habilitar" más abajo en esta página a "Sí".</p>
<p>Además, necesita activar el seguimiento de finalización para <b>cada ítem</b> que esté monitorizando; por ejemplo para un PDF, haga clic en "Editar configuraciones", vaya a Finalización de actividad, y elija la configuración que necesite.</p>
<p>También puede hacer esto <b>masivamente</b> según se explica en  la <a href="https://docs.moodle.org/all/es/Configuraciones_de_finalizaci%C3%B3n_de_actividad" target="_blank">explicación detallada del seguimiento de finalización en moodle.org</a></p>';
$string['completionwarning'] = 'Tiene activado el seguimiento de finalización a nivel del curso, pero al nivel de la actividad individual ningún ítem tiene el seguimiento habilitado, por lo que no hay nada que monitorizar.';
$string['completionwarning_changeinbulk'] = 'Cambiar masivamente';
$string['completionwarning_help'] = 'Necesita hacer monitorizables los ítems individuales al editarlos (en Finalización de actividad > Seguimiento de finalización) o puede hacer esto masivamente en Administración del curso  > Finalización del curso > Editar masivamente finalización de actividad';
$string['contents'] = 'Contenidos';
$string['converttopage'] = 'Convertir a página';
$string['converttopage_confirm'] = '¿Está seguro? Esto no puede deshacerse (tendría que crear la etiqueta de nuevo manualmente si fuera necesario).';
$string['courseshowtileprogress'] = 'Progreso en cada mosaico';
$string['courseshowtileprogress_error'] = 'Tiene \'Seguimiento de finalización > Habilitar seguimiento de finalización\' configurado a \'No\' (vea más abajo en esta página) lo que provoca conflicto con esta configuración. Si quiere mostrar el progreso en los mosaicos, por favor configure \'Seguimiento de finalización > Habilitar seguimiento de finalización\' a \'Sí\'. En caso contrario, por favor ajuste esta configuración a \'No\'.';
$string['courseshowtileprogress_help'] = '<p>Cuando se selecciona, el progreso del usuario en las actividades será mostrado en cada mosaico, ya sea como una <em>fracción</em> (por ejemplo \'Progreso 2/10\' significa 2 de 10 actividades completadas), o como un <em>porcentaje</em> en un círculo.</p><p>Esto solamente puede ser usado si se ha activado la  \'Finalización > Habilitar seguimiento de finalización\' .</p><p>Si no hubiera actividades monitorizables dentro de un mosaico dado, no será mostrado el indicador para ese mosaico.</p>';
$string['courseusebarforheadings'] = 'Enfatizar encabezados con pestaña coloreada';
$string['courseusebarforheadings_help'] = 'Mostrar una pestaña coloreada a la izquierda del encabezado en el curso en todos los sitios donde esté seleccionado un estilo de encabezado en el editor de texto';
$string['courseusesubtiles'] = 'Usar sub mosaicos para actividades';
$string['courseusesubtiles_help'] = 'Dentro de cada mosaico, mostrar cada actividad como un sub mosaico, en lugar de una lista de actividades en la página. Esto no se aplica en etiquetas, las cuales no serán mostradas como sub mosaicos, por lo que pueden ser usadas como encabezados entre los mosaicos.';
$string['currentsection'] = 'Este mosaico';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'CSS personalizado que se aplicará a la sección de contenido del curso mientras es usado el formato de curso. Esto no será validado, por lo que debe tener cuidado de introducir un código válido. Por ejemplo: <p>.section { color: red; }</p><p>li.activity.subtile.resource.pdf { background-color: orange !important; }</p>';
$string['datapref'] = 'Preferencias de datos';
$string['datapreferror'] = 'La característica de preferencia de datos solamente está disponible si tiene JavaScript disponible en su navegador. En caso contrario, el almacenamiento de datos no puede ser habilitado.';
$string['dataprefquestion'] = '<p>Para hacer este sitio más fácil de usar, almacenamos información funcional en su navegador, como por ejemplo los contenidos del último mosaico que abrió. Esto permanece en su máquina por un breve periodo de tiempo por si visita la página de nuevo. No lo utilizamos para realizar un seguimiento. ¿Está de acuerdo?</p><p>Recordaremos su elección hasta que limpie el historial de su navegador. Decir "No" provocará en tiempos de carga de páginas más lentos.</p>';
$string['defaultthiscourse'] = 'Ajuste por defecto para este curso';
$string['defaulttileicon'] = 'Ícono del mosaico';
$string['defaulttileicon_help'] = 'El ícono aquí seleccionado aparecerá en <em>todos</em> los mosaicos en este curso. Los mosaicos individuales pueden tener un ícono diferente seleccionado, usando la configuración diferente en el nivel del mosaico.';
$string['deletesection'] = 'Eliminar mosaico';
$string['displayfilterbar'] = 'Barra de filtro';
$string['displayfilterbar_error'] = 'A menos que haya configurado resultados para este curso, solamente puede mostrar una barra de filtro en números de mosaico, y no basados en resultados. Cree algunos resultados primero y después regrese aquí. Vea';
$string['displayfilterbar_help'] = '<p>Cuando se selecciona, mostrará automáticamente una matriz de botones antes de la pantalla del mosaico en un curso, en donde los usuarios pueden hacer click para filtrar mosaicos acorde a ciertos rangos</p><p>Cuando está seleccionado \'basado en los números\', serán mostrados una serie de botones; por ejemplo, un botón para mosaicos del 1 al 4, un botón para mosaicos del 5 al 8, etc.</p><p>Cuando está seleccionado \'basado en resultados del curso\' habrá un botón por cada resultado del curso. Cada mosaico puede ser asignado a un resultado dado (y por ende a un botón dado) desde la página de configuraciones de ese mosaico.</p>';
$string['displaytitle_mod_doc'] = 'Documento de Word';
$string['displaytitle_mod_html'] = 'Página web';
$string['displaytitle_mod_jpeg'] = 'Imagen';
$string['displaytitle_mod_mp3'] = 'Audio';
$string['displaytitle_mod_mp4'] = 'Video';
$string['displaytitle_mod_pdf'] = 'PDF';
$string['displaytitle_mod_ppt'] = 'Presentación PowerPoint';
$string['displaytitle_mod_txt'] = 'Texto';
$string['displaytitle_mod_xls'] = 'Hoja de cálculo';
$string['displaytitle_mod_zip'] = 'Zip';
$string['download'] = 'Descargar';
$string['editsectionname'] = 'Editar nombre de mosaico';
$string['entersection'] = 'Introducir sección';
$string['expand'] = 'Expandir';
$string['expandsections'] = 'Revelar todas las actividades (todas las secciones)';
$string['fileaddedtobottom'] = 'Archivo añadido al fondo de la sección';
$string['filenoshowtext'] = 'Si el archivo no se muestra aquí, por favor use el botón a la derecha para descargar o ver en una ventana nueva';
$string['filterboth'] = 'Mostrar botones basados en números de mosaico y resultados del curso';
$string['filternumbers'] = 'Mostrar botones basados en números de mosaicos';
$string['filteroutcomes'] = 'Mostrar botones basados en resultados del curso';
$string['filteroutcomesrestore'] = 'El curso original empleaba resultados en la barra del filtro, lo que aun no está soportado durante el proceso de restauración. Por ello, la configuración de la barra del filtro ha sido cambiada en el curso restaurado. Si desea usar resultados para filtrar mosaicos en el curso restaurado, por favor configure los resultados nuevamente. El curso original no ha sido cambiado.';
$string['folderdisplayerror'] = 'Las carpetas configuradas para almacenar contenido en-línea no son compatibles con el formato de sub mosaicos. Por eso, esta <a href="{$a}">carpeta</a> ha sido cambiada para mostrarse en una página separada';
$string['followthemecolour'] = 'Forzar seguir el color del tema';
$string['followthemecolour_desc'] = 'Si se configura a sí, a los profesores no se les dará una opción y todos los colores de mosaicos debajo serán ignorados. En su lugar se hará un intento para obtener los colores principales de la marca del tema y usarlos';
$string['hidden'] = 'Oculto';
$string['hide'] = 'Ocultar';
$string['hidefromothers'] = 'Ocultar mosaico';
$string['highlightoff'] = 'Eliminar resaltado';
$string['home'] = 'Página inicial del curso';
$string['hovercolour'] = 'Color del mosaico al pasarle el ratón encima';
$string['hovercolour_descr'] = 'Color con el cual los mosaicos se mostrarán al pasarles el ratón encima';
$string['icontitle-address-book-o'] = 'Libro de direcciones';
$string['icontitle-assessment_graded'] = 'Evaluación A+';
$string['icontitle-assessment_timer'] = 'Reloj de evaluación';
$string['icontitle-asterisk'] = 'Asterisco';
$string['icontitle-award-solid'] = 'Roseta de premio';
$string['icontitle-balance-scale'] = 'Equilibrar escalas';
$string['icontitle-bar-chart'] = 'Gráfico de barras';
$string['icontitle-bell-o'] = 'Campana';
$string['icontitle-binoculars'] = 'Binoculares';
$string['icontitle-bitcoin'] = 'Bitcoin';
$string['icontitle-book'] = 'Libro';
$string['icontitle-bookmark-o'] = 'Marcador';
$string['icontitle-briefcase'] = 'Maletín';
$string['icontitle-building'] = 'Edificio';
$string['icontitle-bullhorn'] = 'Megáfono';
$string['icontitle-bullseye'] = 'Diana';
$string['icontitle-calculator'] = 'Calculadora';
$string['icontitle-calendar'] = 'Calendario';
$string['icontitle-calendar-check-o'] = 'Calendario con marca de verificación';
$string['icontitle-check'] = 'Marca de verificación';
$string['icontitle-child'] = 'Niño';
$string['icontitle-clock-o'] = 'Reloj';
$string['icontitle-clone'] = 'Clona';
$string['icontitle-cloud-download'] = 'Nube (descargar)';
$string['icontitle-cloud-upload'] = 'Nube (subir)';
$string['icontitle-comment-o'] = 'Comentario';
$string['icontitle-comments-o'] = 'Comentarios';
$string['icontitle-compass'] = 'Brújula';
$string['icontitle-diamond'] = 'Diamante';
$string['icontitle-dollar'] = 'Dólar';
$string['icontitle-euro'] = 'Euro';
$string['icontitle-exclamation-triangle'] = 'Exclamación dentro de triángulo';
$string['icontitle-feed'] = 'Canal RSS';
$string['icontitle-file-text-o'] = 'Archivo de texto';
$string['icontitle-film'] = 'Película';
$string['icontitle-flag-checkered'] = 'Bandera (a cuadros)';
$string['icontitle-flag-o'] = 'Bandera';
$string['icontitle-flash'] = 'Rayo';
$string['icontitle-flask'] = 'Matraz';
$string['icontitle-flipchart'] = 'Rotafolio';
$string['icontitle-frown-o'] = 'Carita triste';
$string['icontitle-gavel'] = 'Mazo';
$string['icontitle-gbp'] = 'Libra esterlina';
$string['icontitle-globe'] = 'Globo del mundo';
$string['icontitle-handshake-o'] = 'Saludo de manos';
$string['icontitle-headphones'] = 'Audífonos';
$string['icontitle-heartbeat'] = 'Latido cardíaco';
$string['icontitle-history'] = 'Reloj de historia';
$string['icontitle-home'] = 'Hogar';
$string['icontitle-id-card-o'] = 'Tarjeta ID';
$string['icontitle-info'] = 'Información';
$string['icontitle-jigsaw'] = 'Rompecabezas';
$string['icontitle-key'] = 'LLave';
$string['icontitle-laptop'] = 'Ordenador portátil';
$string['icontitle-life-buoy'] = 'Salvavidas';
$string['icontitle-lightbulb-o'] = 'Foco';
$string['icontitle-line-chart'] = 'Gráfica de líneas';
$string['icontitle-list'] = 'Lista (viñetas)';
$string['icontitle-list-ol'] = 'Lista (numerada)';
$string['icontitle-location-arrow'] = 'Flecha localización';
$string['icontitle-map-marker'] = 'Marcador de mapa';
$string['icontitle-map-o'] = 'Mapa';
$string['icontitle-map-signs'] = 'Signos de mapa';
$string['icontitle-microphone'] = 'Micrófono';
$string['icontitle-mobile-phone'] = 'Teléfono móvil';
$string['icontitle-mortar-board'] = 'Birrete';
$string['icontitle-newspaper-o'] = 'Periódico diario';
$string['icontitle-number_1'] = 'Número 1';
$string['icontitle-number_10'] = 'Número 10';
$string['icontitle-number_2'] = 'Número 2';
$string['icontitle-number_3'] = 'Número 3';
$string['icontitle-number_4'] = 'Número 4';
$string['icontitle-number_5'] = 'Número 5';
$string['icontitle-number_6'] = 'Número 6';
$string['icontitle-number_7'] = 'Número 7';
$string['icontitle-number_8'] = 'Número 8';
$string['icontitle-number_9'] = 'Número 9';
$string['icontitle-pencil-square-o'] = 'Lápiz en cuadro';
$string['icontitle-person'] = 'Persona';
$string['icontitle-pie-chart'] = 'Gráfica de tarta';
$string['icontitle-podcast'] = 'Podcast';
$string['icontitle-puzzle-piece'] = 'Pieza de rompecabezas';
$string['icontitle-question-circle'] = 'Signo de interrogación en círculo';
$string['icontitle-random'] = 'Aleatorio';
$string['icontitle-refresh'] = 'Refrescar';
$string['icontitle-road'] = 'Carretera';
$string['icontitle-search'] = 'Lupa de aumento';
$string['icontitle-sliders'] = 'Deslizadores';
$string['icontitle-smile-o'] = 'Sonrisa';
$string['icontitle-star'] = 'Estrella (sombreada)';
$string['icontitle-star-half-o'] = 'Estrella (medio sombreada)';
$string['icontitle-star-o'] = 'Estrella (sin sombrear)';
$string['icontitle-survey'] = 'Encuesta';
$string['icontitle-tags'] = 'Etiquetas';
$string['icontitle-tasks'] = 'Trabajos pendientes';
$string['icontitle-television'] = 'Televisión';
$string['icontitle-thinking-person'] = 'Persona con foco';
$string['icontitle-thumbs-o-down'] = 'Pulgar abajo';
$string['icontitle-thumbs-o-up'] = 'Pulgar arriba';
$string['icontitle-trophy'] = 'Trofeo';
$string['icontitle-umbrella'] = 'Sombrilla';
$string['icontitle-university'] = 'Universidad';
$string['icontitle-user-o'] = 'Persona (sin sombrear)';
$string['icontitle-users'] = 'Gente';
$string['icontitle-volume-up'] = 'Bocina';
$string['icontitle-wrench'] = 'LLave inglesa';
$string['items'] = 'ítems';
$string['jsactivate'] = 'Navegación animada activada';
$string['jsdeactivate'] = 'Navegación animada desactivada';
$string['jsdeactivated'] = 'Ha desactivado la navegación animada en su cuenta. Puede activarla de nuevo usando el menú de navegación';
$string['jsmaxstoreditems'] = 'Número máximo de elementos de contenido en el almacenamiento de la sesión en el navegador';
$string['jsmaxstoreditems_desc'] = 'Cuando los usuarios están navegando en la pantalla de mosaicos principal, el navegador almacenará el HTML para la pantalla de vista general de Mosaicos, y los contenidos de cada Mosaico, hasta el número máximo de ítems aquí seleccionado. Esto permite una respuesta muy rápida cuando un mosaico nuevo es elegido. Si elige un número demasiado alto podría resultar en que el almacenamiento del navegador se llene (aunque en pruebas hasta ahora esto no ha sido un problema)';
$string['jsnavsettings'] = 'Configuraciones de navegación JavaScript';
$string['jsreactivated'] = 'Ha activado la navegación animada en su cuenta. Esto podría ser más rápido de usar. Se requiere que JavaScript esté habilitado.';
$string['jsstoredcontentdeletemins'] = 'El contenido almacenado de la sesión se elimina después de (minutos)';
$string['jsstoredcontentdeletemins_desc'] = 'Después de cada clic en mosaico, para conservar espacio libre para el HTML actual, el navegador del usuario ejecutará una limpieza y <em>eliminación</em> del almacenamiento de la sesión para todo el contenido más viejo que esto (con base en que ya no es confiable, y que de todas formas será necesaria una copia nueva del servidor)';
$string['jsstoredcontentexpirysecs'] = 'El contenido almacenado de la sesión expira después de (segundos)';
$string['jsstoredcontentexpirysecs_desc'] = 'Cuando un usuario hace clic en un mosaico, si el contenido del mosaico en el almacenamiento de la Sesión del navegador es más antiguo que esto, se seguirá mostrando pero se hará una solicitud en segundo plano al servidor para solicitar una copia actual y remplazarla. Esto es para permitir las actualizaciones subsecuentes al curso después de que el navegador gardara su copia. Si el contenido almacenado es más reciente que esto, se asumirá que está actualizado y se mostrará, sin que se haga solicitud al servidor';
$string['labelconverted'] = 'Etiqueta convertida';
$string['loading'] = 'Cargando';
$string['modalmodules'] = 'Módulos modales';
$string['modalmodules_desc'] = 'Invocar estos módulos de curso en una ventana modal';
$string['modalresources'] = 'Recursos modales';
$string['modalresources_desc'] = 'Invocar estos recursos en ventana modal';
$string['newsectionname'] = 'Nuevo nombre para tópico {$a}';
$string['nexttopic'] = 'Siguiente tópico';
$string['noconnectionerror'] = 'No se puede cargar contenido. Revise su conexión a internet';
$string['nojswarning'] = 'Al parecer su navegador no soporta javascript o está deshabilitado. Si habilita javascript estará disponible una interfaz más completa';
$string['none'] = 'Ninguno';
$string['notcomplete'] = 'Incompleto';
$string['notrecommended'] = 'No recomendable';
$string['other'] = 'Otras';
$string['outcomes'] = 'resultados';
$string['outcomesunavailable'] = 'Resultados no disponibles';
$string['overall'] = 'General';
$string['overallprogress'] = 'Finalización de actividad - progreso general';
$string['overallprogressshort'] = 'Progreso general';
$string['pluginname'] = 'Formato mosaicos';
$string['previoustopic'] = 'Tópico anterior';
$string['privacy:metadata:preference:format_tiles_stopjsnav'] = 'Si el usuario ha desactivado o no la navegación animada por javascript.';
$string['progress'] = 'Progreso';
$string['reopenlastsection'] = 'Abrir de nuevo el último mosaico visitado';
$string['reopenlastsection_desc'] = 'Cuando se activa, si un usuario visita de nuevo un curso, la última sección que haya abierto será abierta al entrar';
$string['revealcontents'] = 'Revelar contenidos de mosaico';
$string['section0name'] = 'General';
$string['sectionerrorstring'] = 'Su sesión podría haber expirado. Intente refrescar la página.';
$string['sectionerrortitle'] = 'Error al cargar contenido';
$string['sectionname'] = 'Mosaico';
$string['sectionnumber'] = 'Número de mosaico / sección';
$string['selected'] = 'Seleccionado';
$string['show'] = 'Mostrar';
$string['showalltiles'] = 'Mostrar todos los mosaicos';
$string['showfromothers'] = 'Mostrar mosaico';
$string['showseczerocoursewide'] = 'Mostrar sección cero en la parte superior de todas las secciones';
$string['showseczerocoursewide_desc'] = 'Si se activa, la sección cero (la sección más superior) será mostrada en la página de inicio del curso y en la parte superior de <b>cada página de sección de curso</b> por ejemplo en la parte superior de cada contenido de mosaico). Si no se activa (recomendado), solamente será mostrado en la página inicial del curso';
$string['showseparatewin'] = 'Mostrar archivo en ventana separada';
$string['snapwarning'] = 'Sería posible editar su curso en formato Mosaicos usando otro tema, y después cambiar de regreso al tema Snap una vez que haya terminado de editar.';
$string['snapwarning_help'] = 'Theme_settings#Allow_user_themes';
$string['subtileszeczerotoggled'] = 'La sección superior alterna entre lista y formato sub mosaicos';
$string['tilecolourgeneral'] = 'Paleta de colores - color opcional';
$string['tilecolourgeneral_descr'] = 'Un color opcional será ofrecido a usuarios como el color de mosaico del curso en el menú desplegable debajo de Administración del curso > Editar Configuraciones - dejarlo vacío para deshabilitar este color';
$string['tileicon'] = 'Ícono a mostrar en este mosaico solamente';
$string['tileicon_help'] = 'El ítem aquí seleccionado anulará, solamente para este mosaico, cualquier ícono que haya sido configurado a nivel del curso.';
$string['tileoutcome'] = 'Resultado para este mosaico';
$string['tileoutcome_help'] = 'Si selecciona un resultado para este mosaico podrá mostrar, debajo de configuraciones del curso, un conjunto de <em>botones filtro</em>, uno para cada resultado, los cuales cuando son presionados, filtran los mosaicos mostrados de acuerdo a los resultados que han sido asignados';
$string['tileselecttip'] = 'No necesita preocuparse de usar este formato para cambiar un ícono de mosaico. Una manera más sencilla es, dentro del curso, hacer clic en el ícono que desea cambiar (con el modo de edición activado)';
$string['tip'] = 'Sugerencia';
$string['togglecompletion'] = 'Hacer clic para alternar estado de finalización';
$string['usejavascriptnav'] = 'Usar navegación javascript desde la página principal de Mosaicos';
$string['usejavascriptnav_desc'] = 'Cuando se activa, si un usuario hace clic en la página de vista general del curso, y tiene javascript habilitado, se usará JS para hacer la transición a contenidos de mosaico. Los contenidos serán almacenados localmente en el navegador de acuerdo a las otras configuraciones debajo. Si no se activa, JS no será usado y en su lugar se empleará la navegación antigua. Las otras configuraciones JS debajo serán ignoradas.';
$string['usejsnavforsinglesection'] = 'Usar navegación javascript para página de sección única';
$string['usejsnavforsinglesection_desc'] = 'Cuando se activa, cualquier llamada a una página de sección única (&section=xx) será manejada usando javascript, al invocar la página principal del curso para abrir la sección solicitada vía JS, en lugar de llamar a la página de sección única con el estilo PHP antiguo';
$string['usesubtilesseczero'] = 'Usar sub mosaicos en sección superior';
$string['usesubtilesseczero_help'] = 'Si se selecciona serán usados sub mosaicos en la sección superior del curso además de dentro de los mosaicos. Esto es porque los sub mosaicos usan mucho espacio en la parte superior del curso. Sería mejor dejar esto sin seleccionar, para que en vez de esto, cualquier ítem en la sección superior sea mostrado en formato de lista estándar.';
