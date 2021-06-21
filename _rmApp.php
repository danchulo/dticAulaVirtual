<?php 

    define('APPAUT', 'Ricardo MONLA <rmonla@gmail.com>');
    define('APPDEV', 'https://github.com/rmonla/dticAulaVirtual');
    define('APPPUB', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual');

    define('APPNOM', 'dtcAulaVirtual');
    define('APPDET', '

      ## Servicio de aulas virtuales de la UTNLaRioja. ## 
      El objetivo principal es el de dar acceso a las clases no presenciales a los distintos integrantes de la comunidad educativa de la Facultad.

      ');

    $logVERs = [
      '4.31' => '0623IEL - Actualiza información de enlaces.',
      '4.30' => 'GAIA.CONFS - Actualiza enlaces zoom y youtube.',
      '4.29' => 'GAIA.CONFS - Agrega acceso gaia/confs.',
      '4.28' => 'PFinal.0611 - Actualiza enlaces zoom y youtube.',
      '4.27' => 'PFinal.0611 - Actualiza enlaces fotos, doc y press.',
      '4.26' => 'bdAULAs - Agrega funsión getAulaDat.',
      '4.25' => 'PPFinal.0611 - Agrega accesos iniciales.',
      '4.24' => 'GAIA.CONFS - Agrega acceso gaia/zoom y gaia/youtube.',
      '4.23' => 'GAIA.CONFS - Re-direcciona /gaia... -> presentador Genialy + accesos zoom y ytube.',
      '4.22' => 'GAIA.CONFS - Re-direcciona /0603/insc -> ../../inscriptos.',
      '4.21' => 'GAIA.CONFS - Agrega enlace 21/gaia/inscriptos.',
      '4.20' => 'ADMIN.AD - Agrega enlace a Admin de Archivo Digital.',
      '4.19' => '21.IEM.5to - Se cambio Id de Aula bloquead.',
      '4.18' => 'GAIA.CONFS.0603 - Corrige enlaces y Agrega enlace asistencias.',
      '4.17' => 'GAIA.CONFS.0603 - FORM INSC Si time=0 no refresca página.',
      '4.16' => 'GAIA.CONFS - Agrega, Edita y Actualiza enlaces.',
      '4.15' => 'GAIA.CONFS.0603 - Agrega enlace a inscripción.',
      '4.14' => 'CURSOS.EXCELN1 - Agrega, Edita y Actualiza enlaces.',
      '4.13' => 'CURSOS.EXCELN1 - Agrega enlaces.',
      '4.12' => 'CURSOS.CONFERENCIAS.EVENTOS - Agrega enlaces.',
      '4.11' => 'GAIA.CONFS - Actualiza logos e información.',
      '4.10' => 'YOUTUBE - Crea acceso al canal youtube.',
      '4.9' => 'GAIA.CONFS - Corrige Bug SITIO.xxx.',
      '4.8' => 'GAIA.CONFS - Agrega 0617 y Actualiza Enlaces.',
      '4.7' => 'GAIA.CONFS - Agrega 0603/pub.',
      '4.6' => 'GAIA.CONFS - Actualiza y Corrige Enlaces.',
      '4.5' => 'GAIA.CONFS - Agraga Celendario y Conferencia 0606.',
      '4.4' => 'Cambia iconos youtube y Google Calendar segun día.',
      '4.3' => 'Agrega Iconos y enlaces Google Calendar.',
      '4.2' => 'Regenera función getGrupos para contenido.',
      '4.1' => 'bdAs - Re-estructura la base de datos de aulas y archivos.',
      '3.26' => 'PMEF21 - Agrega posg/mef/doc - Formulario de Alta de Documentación.',
      '3.25' => 'rmAPP - Cambia ubicación del archivo.',
      '3.24' => 'PMEF21 - 
        Agrega posg/mef/inscs - Planilla de inscriptos.
        Agrega posg/mef/insc - Formulario de Pre-Inscripción.
        Agrega posg/mef/insc - Planilla y Formulario de Documentación.',
      '3.23' => 'PMEF21 - Agrega S al nombre del curso.',
      '3.22' => 'PMEF21 - Crea carpeta y enlace principal al curso.',
      '3.21' => 'TUSV21.2do - Crea carpeta y enlace principal.',
      '3.20' => 'Final210423-ICI - Actualiza enlaces e imágenes.',
      '3.19' => 'Final210423-ICI - Se crea carpeta y enlace principal del final.',
      '3.18' => 'versión PHP - Se retorna al modo PHP.',
      '3.17' => 'verHTML - Soluciona htmls de carreras a término.',
      '3.16' => 'verHTML - Por caída de enlace se arma y publica esta versión HTML en https://rmonla.github.io/dticAulaVirtual.',
      '3.15' => '21/lagies - Agrega accesos zoom, clases y campus.',
      '3.14' => 'INDEX - Limpia código de Mobirice y Google.',
      '3.13' => 'BUG - Soluciona error de refresh y retorno a página (URL).',
      '3.12' => 'Enlaces - Cambia POSG-MEF por POSG-EMIA.',
      '3.11' => 'Enlaces - Soluciona 21/ca/thst2do 21/ca/thst2do.',
      '3.10' => 'Enlaces - Actualiza Curso LTE1ro, LTE2do, LHST1ro y POSG-MEF.',
      '3.9' => 'bdAulas - Actualiza lista de aulas.',
      '3.8' => 'INDEX - appVER redirecciona a appPUB.',
      '3.7' => 'IDZOOM - Si no es entero el IDZ coloca URL y saca logo zoom.',
      '3.6' => 'BUG - Corrige error de ids de ZOMM.',
      '3.5' => 'IDZOOM - Si no es entero el IDZ coloca URL y saca logo zoom.',
      '3.4' => 'bdAulas - Actualiza lista de aulas.',
      '3.3.1' => 'Sitio - Se publica en sitio sin problemas.',
      '3.2.5' => 'logVERs - Toma automáticamente el valor de versión desde la keys de logVERs.',
      '3.2.4' => 'Enlaces - Saca el icono sin playlist.',
      '3.2.3' => 'Enlaces - Agrega iconos de acceso a zoom y youtube.',
      '3.2.2' => 'bdAulas - Cambia nombres de aulas.',
      '3.2.1' => 'logVERs - Actualiza lista de logs de versiones.',
      '3.2.0' => 'bdAulas - Agrega Aula Pública Octógono.',
      '3.1.1' => 'Actualiza registros de la bdAulas.php',
      '3.0.3' => 'Optimiza y limpia código.',
      '3.0.2' => 'Divide en secciones de código HTML con las funciones getHTMLs.php.',
      '3.0.1' => 'Actualiza y re-genera la bdAULAs.php',
      '3.0.0' => 'Inicia codificación de la versión 3.0'
    ];
    
    $vers = array_keys($logVERs);
    
    define('APPVER', $vers[0]);

 ?>
