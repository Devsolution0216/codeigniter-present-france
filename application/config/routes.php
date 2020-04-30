<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['login_action'] = "auth/login";
$route['logout'] = "auth/logout";
$route['home'] = "home";
$route['list'] = "home/table";
$route['punch_in'] = "auth/punch";
$route['punch_out'] = "auth/punch";
$route['validate'] = "auth/validate_do";
$route['upload'] = "auth/do_upload";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
