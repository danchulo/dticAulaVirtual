<?php  
	/**
	 * rmRedir: Redirecciona a una URL diferente.
	 * @param  string  $titu Título del link de destino.
	 * @param  string  $desc Descripción del contenido de destino.
	 * @param  string  $dest Url de destino donde se redirecciona.
	 * @param  string  $imag Imágen miniatura para mostrar.
	 * @param  integer $time Tiempo en segundos que espera para redireccionar si esta en 0 solo redirecciona automáticamente.
	 * @return HTML          Código html retornado en realción a las variables entregadas.
	 */
	

	$titu = 'DTIC-Pública'; 
	
	$desc = 'Carpeta de archivos públicos compartidos por DTIC.';
	
	$dest = 'https://drive.google.com/drive/folders/1CTu4fD9amgFWMKM-39id9B-crVzWH16v?usp=sharing';

	$imag = rmMyURL() . 'publica.jpg';
	
	$time = 0.1;
	

		
	if (!$time) header('Location: '.$dest);
	else {
		$pag = <<<HTML
	<html>
		<head>
			<meta name="description" content="$desc">
			<meta property="og:title" content="$titu"/>
			<meta property="og:image" content="$imag"/>
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<p>Redirección automática en $time segundos o puedes acceder haciendo click <a href="$dest">aquí</a></p>
			<p><a href="$dest"><img src="$imag" alt="$desc" width="400"></a></p>
		</body>
	</html>
HTML;
			echo $pag;
		}

	/**
	 * Analiza ubicación actual de la uri actual y la retorna completa con su protocolo correspondiente.
	 * @return [string] [URL completa con su protocolo correspondiente.]
	 * @author Ricardo MONLA <rmonla@gmail.com>
	 */
	function rmMyUrl(){
	    if(isset($_SERVER['HTTPS']))
	        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	    else 
	    	$protocol = 'http';
	    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}

	die();
?>
