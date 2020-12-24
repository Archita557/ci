<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'blog/index';
$route['aboutus'] = 'blog/aboutus';
$route['contactpage'] = 'blog/contactpage';
$route['knowmore'] = 'blog/knowmore';
$route['recipe'] = 'blog/recipe';
$route['readrecipe'] = 'blog/readrecipe';



$route['signup'] = 'blog/signup';


$route['admin'] = "admin/index";
$route['addheader'] = 'admin/addheader';


$route['foodfusion'] = 'admin/foodfusion';
$route['addfoodfusion'] = 'admin/addfoodfusion';

$route['about'] = 'admin/about';
$route['addabout'] = 'admin/addabout';

$route['addpost'] = 'admin/addpost';
$route['post'] = 'admin/post';

$route['editpost'] = 'admin/editpost';
$route['addeditpost'] = 'admin/addeditpost';

$route['author'] = 'admin/author';
$route['addauthor'] = 'admin/addauthor';

$route['information'] = 'admin/information';
$route['addinformation'] = 'admin/addinformation';

$route['message'] = 'admin/message';
$route['addmessage'] = 'admin/addmessage';

$route['ourteam'] = 'admin/ourteam';
$route['addourteam'] = 'admin/addourteam';

$route['popularstories'] = 'admin/popularstories';
$route['addpopularstories'] = 'admin/addpopularstories';


$route['addrecipe'] = 'admin/addrecipe';




$route['savehdr'] = 'admin/savehdr';
$route['savefood'] = 'admin/savefood';
$route['saveabout'] = 'admin/saveabout';
$route['saveadd'] = 'admin/saveadd';
$route['saveedit'] = 'admin/saveedit';
$route['saveauthor'] = 'admin/saveauthor';
$route['saveinfo'] = 'admin/saveinfo';
$route['savemsg'] = 'admin/savemsg';
$route['signin'] = 'blog/signin';
$route['saveteam'] = 'admin/saveteam';
$route['savestories'] = 'admin/savestories';
$route['saverecipe'] = 'admin/saverecipe';


