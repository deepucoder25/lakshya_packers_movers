<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

// Company Routes
$route['about-us'] = 'about/index';
$route['contact-us'] = 'contacts/index';
$route['faqs'] = 'about/faqs';
$route['photo-gallery'] = "gallery/photo_gallery";
$route['video-gallery'] = "gallery/video_gallery";
$route['testimonials'] = 'about/testimonials';
$route['reviews'] = 'reviews/index';
$route['about/submit_review'] = 'reviews/submit';
$route['blog/view'] = 'blog/view';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/([a-z0-9-]+)'] = 'blog/read/$1';
$route['blog'] = 'blog/view';
$route['pricing'] = 'about/price';
$route['price'] = 'about/price';
$route['shifting-charges'] = 'about/price';
$route['privacy-policy'] = 'about/privacy';
$route['privacy'] = 'about/privacy';
$route['terms-and-conditions'] = 'about/terms';
$route['terms'] = 'about/terms';
$route['terms-conditions'] = 'about/terms';


// City Services Routes
$route["home-shifting-in-(:any)"] = "city_services/home_shifting/$1";
$route["office-shifting-in-(:any)"] = "city_services/office_shifting/$1";
$route["car-transport-in-(:any)"] = "city_services/car_transport/$1";
$route["bike-transport-in-(:any)"] = "city_services/bike_transport/$1";
$route["local-shifting-in-(:any)"] = "city_services/local_shifting/$1";
$route["warehousing-and-storage-in-(:any)"] = "city_services/warehousing_storage/$1";
$route["warehousing-storage-in-(:any)"] = "city_services/warehousing_storage/$1";

// Services Routes
$route["our-services"] = "services/index";
$route["house-shifting"] = "services/houseShifting";
$route["office-relocation"] = "services/office";
$route["car-transportation"] = "services/car";
$route["bike-transportation"] = "services/bike";
$route["warehousing-and-storage"] = "services/warehousingStorage";
$route["local-shifting"] = "services/localShifting";
$route["intercity-moving"] = "services/intercityMoving";

// Legacy/Compatibility Routes
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";

// Branch/City Routes
$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["bihar"] = "packers_movers/state_services/bihar";
$route["tripura"] = "packers_movers/state_services/tripura";
$route["delhi"] = "packers_movers/state_services/delhi";
$route["west-bengal"] = "packers_movers/state_services/west-bengal";
$route["odisha"] = "packers_movers/state_services/odisha";
$route["gujarat"] = "packers_movers/state_services/gujarat";
$route["punjab"] = "packers_movers/state_services/punjab";
$route["maharashtra"] = "packers_movers/state_services/maharashtra";
$route["haryana"] = "packers_movers/state_services/haryana";
$route["rajasthan"] = "packers_movers/state_services/rajasthan";
$route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
$route["jharkhand"] = "packers_movers/state_services/jharkhand";
$route["assam"] = "packers_movers/state_services/assam";
$route["karnataka"] = "packers_movers/state_services/karnataka";
$route["bangalore"] = "packers_movers/state_services/bangalore";
$route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";
$route["(:any).htm"] = "home/error";
$route['translate_uri_dashes'] = FALSE;