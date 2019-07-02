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
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'Agro_home/agro_index_home';
$route['home'] = 'Agro_home/agro_index_home';
$route['about'] = 'Agro_home/agro_about';
$route['all_business_list'] = 'Agro_home/agro_services';
$route['parboiled-ricemill'] = 'Agro_home/agro_services';
$route['bio-chemicals'] = 'Agro_home/agro_services';
$route['agro-form'] = 'Agro_home/agro_services';
$route['trading'] = 'Agro_home/agro_services';
$route['ginning-mill'] = 'Agro_home/agro_services';
$route['contact'] = 'Agro_home/agro_contact';
$route['business-view/(:any)'] = 'Agro_home/agro_business_services/$1';



$route['dashboard'] = 'admin_controlers_aagro/Admincontroler/dashboard_indx';
$route['business-add'] = 'admin_controlers_aagro/Admincontroler/dashboard_business_add_form';
$route['business-list'] = 'admin_controlers_aagro/Admincontroler/dashboard_business_list';
$route['business-edit/(:num)'] = 'admin_controlers_aagro/Admincontroler/dashboard_business_edit/$1';
$route['business-update/(:num)'] = 'admin_controlers_aagro/Admincontroler/dashboard_business_update_form/$1';
$route['business-delete/(:num)'] = 'admin_controlers_aagro/Admincontroler/dashboard_delete_business/$1';


$route['slider-about-add'] = 'admin_controlers_aagro/Admincontroler/add_slider_images';
$route['slider-about-insert'] = 'admin_controlers_aagro/Admincontroler/add_slider_images_data_insert';
$route['slider-list'] = 'admin_controlers_aagro/Admincontroler/sliderimages_list';
$route['about-list'] = 'admin_controlers_aagro/Admincontroler/about_list';
$route['slider-about-list'] = 'admin_controlers_aagro/Admincontroler/slider_about_list';
$route['slider-about-edit/(:num)'] = 'admin_controlers_aagro/Admincontroler/edit_slider_images/$1';
$route['slider-about-update/(:num)'] = 'admin_controlers_aagro/Admincontroler/sliderimages_update/$1';
$route['delete-slider-image/(:num)'] = 'admin_controlers_aagro/Admincontroler/delete_sliderimage/$1';


$route['branch-contactdetails-add'] = 'admin_controlers_aagro/Admincontroler/add_branch_details';
$route['branch-contactdetails-insert'] = 'admin_controlers_aagro/Admincontroler/insert_branch_details';
$route['contact-branch-details-list'] = 'admin_controlers_aagro/Admincontroler/contact_and_branchdetails_list';
$route['contact-branch-details-edit/(:num)'] = 'admin_controlers_aagro/Admincontroler/single_branch/$1';
$route['contact-branch-details-update/(:num)'] = 'admin_controlers_aagro/Admincontroler/single_branch_update/$1';
$route['contact-branch-details-delete/(:num)'] = 'admin_controlers_aagro/Admincontroler/contact_branch_details_delete/$1';

$route['contactpage-list'] = 'admin_controlers_aagro/Admincontroler/contactpage_list';

$route['change-passowrd'] = 'admin_controlers_aagro/Admincontroler/change_password';
