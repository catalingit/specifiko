<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

//View single video page
$route['video/:num'] = "video";
$route['video/:num/(:any)'] = "video"; //(Helps us pass the video slug for SEO)
$route['video/worddetail/:num'] = "video/wordDetails"; //Invoke modal for vocabulary word
$route['video/addvocabulary/:num'] = "video/addVocabulary"; //Save a vocabulary word to list

//CMS Content
$route['howitworks'] = "cms/content/1";
$route['pricing'] = "cms/content/2";
$route['faq'] = "cms/content/3";
$route['about'] = "cms/content/4";
$route['terms'] = "cms/content/5";
$route['privacy'] = "cms/content/6";
$route['support'] = "cms/content/7";
$route['contact'] = "cms/content/8";

//View Video List page
$route['videolist/(:any)'] = "videolist";

//Login
$route['login'] = "login";
$route['login/validate'] = "login/logmein";

$route['login/admin'] = "login/admin";

//Signup
$route['signup'] = "signup";
$route['signup/register'] = "user/register";

//Profile
$route['profile'] = "user";
$route['profile/update'] = "user/updateProfile";
$route['profile/password'] = "user/password";
$route['profile/changepassword'] = "user/changePassword";
$route['forgotpass'] = "user/forgotPass";
$route['forgotpass/reset'] = "user/resetPass";
$route['activate/:num'] = "user/activate";
$route['logout'] = "user/logout";

$route['profile/setlang/(:any)'] = "user/changeLanguage";

//Admin Panel
$route['admin'] = "admin/login";
$route['admin'] = "admin";
$route['admin/videos'] = "admin";
$route['admin/video/view/:num'] = "admin/video";
$route['admin/video/update/:num'] = "admin/updateVideo";

//Admin: users
$route['admin/users'] = "admin/users";
$route['admin/users/update/:num'] = "admin/updateUser";
$route['admin/updateUser'] = "user/adminUpdate";

//Admin: terms
$route['admin/terms'] = "admin/terms";
$route['admin/terms/update/:num'] = "admin/termsView";
$route['admin/termsUpdate'] = "terms/update";

//Admin: biography
$route['admin/biography'] = "admin/biography";

//Admin: CMS
$route['admin/cms'] = "admin/cms";
$route['admin/cms/update/:num'] = "cms/updateView";
$route['admin/updatePage'] = "cms/update";

//Admin: Vocabulary
$route['admin/vocabulary'] = "admin/vocabulary";
$route['admin/vocabulary/view/:num'] = "admin/vocabularyView";
$route['admin/vocabulary/update/:num'] = "admin/vocabularyUpdate";
$route['admin/updateVocab'] = "vocabulary/updateVocab";

//Search for vocaburalry
$route['admin/vocsearch'] = "vocabulary/liveSearch";
$route['admin/videofilebrowser'] = "admin/fileTree";

//Listening Module
$route['listening/:num'] = "listening";

//JSON Data Routes
$route['homevideojson'] = "json/homeVideo";

/* End of file routes.php */
/* Location: ./application/config/routes.php */