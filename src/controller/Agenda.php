<?php
$Agenda = $app['controller'];
$Agenda->get('/',function(){return 'Portada de Agenda';});
return $Agenda;