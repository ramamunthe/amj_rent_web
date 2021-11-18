<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/tentang-kami', 'Home::tentang');
$routes->get('/pelanggan-kami', 'Home::pelanggan');
$routes->get('/paket-wisata', 'Home::paket');
$routes->get('/armada', 'Home::armada');
$routes->get('/armada-category/(:segment)', 'Home::category/$1');

$routes->get('/admin-login', 'AdminArmadaControlle::login');
$routes->post('/admin-verify', 'AdminArmadaControlle::verify');
$routes->get('/admin-logout', 'AdminArmadaControlle::logout');


$routes->get('/admin', 'AdminArmadaControlle::index');
$routes->get('/admin-armada-create', 'AdminArmadaControlle::create');
$routes->post('/admin-armada-store', 'AdminArmadaControlle::store');
$routes->get('/admin-armada-edit/(:segment)', 'AdminArmadaControlle::edit/$1');
$routes->post('/admin-armada-update/(:segment)', 'AdminArmadaControlle::update/$1');
$routes->get('/admin-armada-delete/(:segment)', 'AdminArmadaControlle::delete/$1');

$routes->get('/admin-customer', 'AdminCustomerController::index');
$routes->post('/admin-customer-store', 'AdminCustomerController::store');
$routes->post('/admin-customer-update/(:segment)', 'AdminCustomerController::update/$1');
$routes->get('/admin-customer-edit/(:segment)', 'AdminCustomerController::edit/$1');
$routes->get('/admin-customer-delete/(:segment)', 'AdminCustomerController::delete/$1');

$routes->get('/admin-slider', 'AdminSliderController::index');
$routes->post('/admin-slider-store', 'AdminSliderController::store');
$routes->post('/admin-slider-update/(:segment)', 'AdminSliderController::update/$1');
$routes->get('/admin-slider-edit/(:segment)', 'AdminSliderController::edit/$1');
$routes->get('/admin-slider-delete/(:segment)', 'AdminSliderController::delete/$1');

$routes->get('/admin-pakage', 'AdminPakageController::index');
$routes->post('/admin-pakage-store', 'AdminPakageController::store');
$routes->post('/admin-pakage-update/(:segment)', 'AdminPakageController::update/$1');
$routes->get('/admin-pakage-edit/(:segment)', 'AdminPakageController::edit/$1');
$routes->get('/admin-pakage-delete/(:segment)', 'AdminPakageController::delete/$1');

$routes->get('/admin-category', 'AdminCategoryController::index');
$routes->post('/admin-category-store', 'AdminCategoryController::store');
$routes->get('/admin-category-delete/(:segment)', 'AdminCategoryController::delete/$1');
$routes->post('/admin-category-update/(:segment)', 'AdminCategoryController::update/$1');

$routes->get('/admin-profil', 'AdminProfileController::index');
$routes->post('/admin-profil/update/(:segment)', 'AdminProfileController::update/$1');







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
