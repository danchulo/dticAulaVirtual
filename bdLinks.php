<?php 

	$bdLnks = '{ 
		"bdCols"  : { "idZoom",      "idPlayList" },
		"1roICI-" : { "92023658063", "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV" }
		}';

	$bdLnks = json_decode($bdLnks);


	echo '<pre>'.print_r( $bdLnks, true ).'</pre>';
	exit
	// echo ( isset( $bdLnks->{'dticServTec'} ))? "Existe" : "NoExiste";
	// echo $bdLnks->{'dticServTec'}->desc;

	// exit;

 ?>