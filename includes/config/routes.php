<?php
// $routes = [
//     '' => 'AlbumHandler@index',
//     'detail' => 'AlbumHandler@detail',
//     'create' => 'AlbumHandler@create',
//     'edit' => 'AlbumHandler@edit',
//     'delete' => 'AlbumHandler@delete',
//     'login' => 'AccountHandler@login',
//     'logout' => 'AccountHandler@logout',
//     'user' => 'AccountHandler@register'
// ];

$routes = [
    '' => 'WebHandler@index',
    'index' => 'WebHandler@index',
    'about' => 'WebHandler@about',
    'open' => 'WebHandler@open',
    'dashboard' => 'WebHandler@dashboard',
    'login' => 'AccountHandler@login',
    'logout' => 'AccountHandler@logout',
    'user' => 'AccountHandler@register'


];
