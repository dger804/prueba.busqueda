<?php

include __DIR__ . '/../app/bootstrap.php';



$app->get('/', function() {
    return 'Hello!';
});

/*
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'path'     => __DIR__.'/app.db',
    	),
	);
*/
/*
$app->get('/sesion/', function() {
		return 'Portada de sesion'
});
*/

#$app->get('/hola/{name}', function ($name) use ($app) {
#    return 'Holla '.$app->escape($name);
#});



$app['debug'] =true;
$app->run();

$app->mount('/Sesion', include 'Sesion.php');
$app->mount('/Agenda', include 'Agenda.php');
