<?php
require '../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
	$queryParams = $request->getQueryParams();

	$name = isset($queryParams['user']) ? $queryParams['user'] : 'world';
	$response->getBody()->write("Hello, $name!");

	return $response;
});

$app->run();