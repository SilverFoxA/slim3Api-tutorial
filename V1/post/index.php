<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

require_once '../../include/DBOps/DBConnection.php';


$conn= new DBConnection();
$db = $conn->mConnect();
$app = new \Slim\App;

//Latest post// Recommended post -- sort post based on previous views // 
	$app->get('/recent', function (Request $request, Response $response, array $args) use($db){
		$response->getBody()->write("GET");

		return $response;
	});

	$app->post('/',function(Request $request, Response $response, array $args){
		$body = $request->getParsedBody();
		return json_encode($body);
	});

	$app->put('/',function(Request $request, Response $response, array $args){

		$body = $request->getParsedBody();
		return json_encode($body);
	});

	$app->delete('/',function(Request $request, Response $response, array $args){
		$body = $request->getParsedBody();
		return json_encode($body);
	});

$app->run();