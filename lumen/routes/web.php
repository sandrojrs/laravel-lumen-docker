<?

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/crawler/{page:[0-9]+}','CrawlerController@index' );
