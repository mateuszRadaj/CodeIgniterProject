<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Notes;

/**
 * @var RouteCollection $routes
 */

$routes->get('form', 'Form::index');
$routes->post('form', 'Form::index');

$routes->post('delete_note', 'Notes::delete_note');
$routes->post('edit_note', 'Notes::edit_note');
$routes->get('notes/(:segment)', [Notes::class, 'show_note']);

$routes->get('/', 'Home::index');