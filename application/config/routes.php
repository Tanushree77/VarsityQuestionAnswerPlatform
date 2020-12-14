<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';

$route['question/(:any)'] = 'question/list/$1';
$route['question/(:any)/(:any)'] = 'question/list/$1/$2';
$route['question/(:any)/(:any)/(:num)'] = 'question/list/$1/$2/$3';
$route['questions/most-view'] = 'questions/most_view';
$route['questions/most-popular'] = 'questions/most_popular';
$route['category/(:any)'] = 'category/index/$1';
$route['tag/(:any)'] = 'tag/index/$1';
$route['user/(:any)'] = 'user/index/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
