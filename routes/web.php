<?php

$app->get('/', 'PagesController@index');

$app->get('/get/ip', 'GetController@ip');
$app->get('/get/user-agent', 'GetController@userAgent');
$app->get('/get/headers', 'GetController@headers');
$app->get('/get', 'GetController@get');

$app->post('/post', 'PostController@post');
$app->put('/put', 'PostController@put');
$app->patch('/patch', 'PostController@patch');
$app->delete('/delete', 'PostController@delete');

$app->get('/respond/{status}', 'StatusController@respond');

$app->get('/redirect', 'RedirectController@redirect');

$app->get('/html', 'HtmlController@html');

$app->get('/links/{links}', 'LinkController@link');

$app->get('/cookies', 'CookieController@cookies');
$app->get('/cookies/set', 'CookieController@set');
$app->get('/cookies/delete', 'CookieController@delete');