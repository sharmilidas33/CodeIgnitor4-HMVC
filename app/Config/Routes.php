<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/site', 'SiteController::index');
$routes->get('/students','SiteController::listStudents');
$routes->get('/add-students','SiteController::insertStudent');
$routes->get('/update-students','SiteController::updateStudent');
$routes->get('/delete-students','SiteController::deleteStudent');
$routes->get('/single-student','SiteController::readSpecificStudent');




