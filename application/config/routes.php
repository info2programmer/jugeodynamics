<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Forntend
$route['default_controller'] = 'welcome';
$route['index'] = 'welcome/index';
$route['404_override'] = 'welcome/pageNotFound';
$route['translate_uri_dashes'] = FALSE;



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

