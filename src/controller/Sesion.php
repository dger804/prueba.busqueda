<?php
$Sesion = $app['controllers_factory'];
$Sesion->get('/',function(){return 'Portada de Ingreso';});
return $Sesion;

interface Sesion {
	function connect(Application $app);
}