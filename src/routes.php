<?php

use Slim\App;
use Slim\Http\Uri;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Slim\Http\Environment;
use Slim\Views\TwigExtension;
use Medoo\Medoo;

return function (App $app) {

	

	

$app->get('/', function ($request, $response) {

		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'noticias.html',[
			'noticias'=> $db->noticias(),
			'noticiass'=> $db->noticiass(),
		]);
	});





};
