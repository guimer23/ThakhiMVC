<?php
/* Controllers */
$router->controller('/home', 'App\\Controllers\\Home');
//$router->controller('/auth', 'App\\Controllers\\AuthController'); 
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

$router->get('/', function(){
    if(!\Core\Auth::isLoggedIn()){
        \App\Helpers\UrlHelper::redirect('auth');
    } else {
        \App\Helpers\UrlHelper::redirect('home');
    }
});

$router->get('/welcome', function(){
    return 'Welcome page';
}, ['before' => 'auth']);

$router->get('/test', function(){
    return 'Welcome page';
}, ['before' => 'auth']);