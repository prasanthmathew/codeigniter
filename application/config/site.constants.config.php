<?php


 /**
 * Site constants
 * @filesource
 */
 
$config['SITE_NAME'] = 'Dashboard'; // Site title
//$config['PATH_SEPERATOR'] = ''; // Site title
//$config['SITE_PATH'] = $_SERVER['DOCUMENT_ROOT'].$config['PATH_SEPERATOR'].'framework'; // Diractory path to the site root

//USER ROLE

$config['ADMIN'] = "ADMIN";
$config['USER'] =  "2";

//ADMIN ASSETS

$config['BACKEND_ASSETS'] = "assets/backend/";

//FRONTEND ASSETS

$config['FRONTEND_ASSETS'] = "assets/frontend/";

//FILE UPLOAD INFO

$config['EXT_ALLOWED_IMAGES'] = 'gif|jpg|png|jpeg';
$config['EXT_ALLOWED_VIDEOS'] = 'mp4|gif|jpg|png|jpeg';
$config['IMAGES_UPLOAD_SIZE'] = '200'; // 2100 KB
$config['VIDEOS_UPLOAD_SIZE'] = '10000'; // 10000 KB
$config['IMAGES_UPLOAD_PATH'] = 'uploads/images/';
$config['VIDEOS_UPLOAD_PATH'] = 'uploads/videos/';

$config['QUARTER_START'] = "1";

//EMAIL CONFIG INFO


//COPY RIGHT

$config['COPY_RIGHT']  = '&copy; ' . date("Y") . ' All rights reserved. ';
$config['ENABLE_PROFILER'] = TRUE;//FALSE



/* End of file site.constants.php */
/* Location: ./application/config/site.constants.php */
