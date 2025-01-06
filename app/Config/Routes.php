<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Homepage: Display all blog posts
$routes->get('/blog', 'BlogController::index');

// Blog Detail Page: View a specific blog post
$routes->get('/blog/(:num)', 'BlogController::detail/$1');

// Submit a comment on a blog post
$routes->post('/blog/comment', 'BlogController::comment');

// Admin Authentication Routes
$routes->get('/admin', 'AdminAuthController::index'); // Show Login/Signup Page
$routes->post('/admin/signup', 'AdminAuthController::signup'); // Handle Signup
$routes->post('/admin/login', 'AdminAuthController::login'); // Handle Login

// Admin routes
$routes->get('/admin/home', 'AdminController::index'); // Admin Dashboard
$routes->get('/admin/add', 'AdminController::add'); // Show Add Post Form
$routes->post('/admin/store', 'AdminController::store'); // Save New Post
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1'); // Show Edit Post Form
$routes->post('/admin/update/(:num)', 'AdminController::update/$1'); // Update Post
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1'); // Delete Post


$routes->get('/about_us', 'BlogController::about_us');  // Ensure this route is correct


$routes->get('/contact', 'BlogController::contact');
$routes->post('/contact', 'BlogController::contact');

$routes->get('/', 'AuthController::index'); // Show Login/Signup Page
$routes->post('/auth/signup', 'AuthController::signup'); // Handle Signup Form
$routes->post('/auth/login', 'AuthController::login'); // Handle Login Form
$routes->post('/auth/logout', 'AuthController::logout'); // Handle Logout

$routes->get('/admin/contact', 'AdminController::contact');
$routes->post('/admin/contact/respond', 'AdminController::respond');
$routes->get('/admin/contact/delete/(:num)', 'AdminController::deleteContact/$1');

// Admin Authentication Routes
$routes->post('/admin/logout', 'AdminAuthController::logout'); // Handle Logout




