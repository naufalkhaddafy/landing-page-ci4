<?php

use CodeIgniter\Router\RouteCollection as Routes;
use Fluent\Auth\Facades\Auth;

/** @var \CodeIgniter\Router\RouteCollection $routes */

$routes->setAutoRoute(false);
$routes->get('/', 'Home::index');
$routes->get('/tes', 'Tes::index');


//AUTHENTICATION

$routes->post('/login', 'Auth\LoginController::login');
$routes->get('/logout', 'Auth\LoginController::logout');


//Admin setup
$routes->group('', ['filter' => 'guest'], function ($routes) {
    $routes->get('/login', 'Auth\LoginController::index');
});

$routes->group('', ['filter' => 'auth'], function ($routes) {
    //Dashboard
    $routes->get('/dashboard', 'Admin\DashboardController::index');
    //User
    $routes->get('/user', 'Admin\UserController::index');
    $routes->get('/create', 'Admin\UserController::readCreate');
    $routes->post('/create', 'Admin\UserController::create');
});

// // Socialite authentication
// $routes->get('socialite/(:alphanum)', 'SocialiteController::redirectProvider/$1');
// $routes->get('socialite/(:alphanum)/callback', 'SocialiteController::providerCallback/$1');

// // We get a performance increase by specifying the default
// // route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// // Example route dashboard.
// $routes->group('dashboard', ['filter' => 'auth:web'], function (Routes $routes) {
//     $routes->get('/', 'Home::dashboard', ['filter' => 'verified']);
//     $routes->get('confirm', 'Home::confirm', ['filter' => 'confirm']);
// });
