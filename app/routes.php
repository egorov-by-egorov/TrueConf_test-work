<?php
use Slim\App, Jenssegers\Blade\Blade, Psr\Http\Message\ResponseInterface as Response, Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app)
{

    function view (Response $response, $template, $data = []) {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $data);

        $response->getBody()->write($blade->render());

        return $response;
    }
    $app->get('/add-user', function (Request $request, Response $response, $args) {
        return view($response, 'user.user-add');
    });
    $app->get('/', function (Request $request, Response $response, $args) {
        $data = 'test';
        return view($response, 'user.user-list', compact('data'));
    });
};