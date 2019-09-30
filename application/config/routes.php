<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Forntend
$route['default_controller'] = 'welcome';
$route['index'] = 'welcome/index';
$route['research'] = 'welcome/research';
<<<<<<< HEAD
$route['publication/(:any)'] = 'welcome/publication/$1';
$route['lab'] = 'welcome/lab';
$route['group'] = 'welcome/group';
=======
$route['publication'] = 'welcome/publication/';
$route['lab'] = 'welcome/lab';
$route['group/(:num)'] = 'welcome/group/$1';
>>>>>>> 76a11d6af723bb98dda5979d3280b50598cd0f28
$route['contact'] = 'welcome/contact';
$route['404_override'] = 'welcome/pageNotFound';
$route['translate_uri_dashes'] = false;



// Backend
$route['manage-website'] = 'admin/login/index';
$route['login'] = 'admin/login/checkLogin';
$route['logout'] = 'admin/login/logout';
$route['change-password'] = 'admin/dashboard/changePassword';
$route['dashboard'] = 'admin/dashboard/index';
$route['manage-slider'] = 'admin/home/sliderManagement';
$route['create-slider'] = 'admin/home/addSlider';
$route['manage-news'] = 'admin/home/newsManagement';
$route['create-news'] = 'admin/home/addNews';
$route['manage-research'] = 'admin/reseach_managment/index';
$route['create-research'] = 'admin/reseach_managment/create';

$route['manage-publication'] = 'admin/publication_managment/index';
$route['create-publication'] = 'admin/publication_managment/create';

$route['manage-group'] = 'admin/group_managment/index';
$route['create-group'] = 'admin/group_managment/create';
