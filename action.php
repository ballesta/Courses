<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db Courses_db
		require('./resource/Courses_db/custom/UserCustom.php');
		require('./resource/Courses_db/User.php');
		require('./resource/Courses_db/custom/courseCustom.php');
		require('./resource/Courses_db/course.php');
		require('./resource/Courses_db/custom/sectionCustom.php');
		require('./resource/Courses_db/section.php');
	

$app->run();


?>
