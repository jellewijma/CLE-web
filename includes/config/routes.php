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
    'about' => 'WebHandler@about',
    'dashboard' => 'WebHandler@dashboard',
    'login' => 'AccountHandler@login',
    'logout' => 'AccountHandler@logout',
    'user' => 'AccountHandler@register'


];
