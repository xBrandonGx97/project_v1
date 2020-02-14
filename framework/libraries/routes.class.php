<?php
	use Core\Route;
	
	# Default Route
	Route::respond('/', function() {Home_Controller::index();});
	# Community
	Route::respond('/community/downloads',function() {Community_Controller::downloads();});
	Route::respond('/community/discord',function() {Community_Controller::discord();});
	Route::respond('/community/patchnotes',function() {Community_Controller::patchnotes();});
	Route::respond('/community/pvprankings',function() {Community_Controller::pvprankings();});
	Route::respond('/community/guildrankings',function() {Community_Controller::guildrankings();});
	Route::respond('/community/staffteam',function() {Community_Controller::staffteam();});
	# Server Info
	Route::respond('/serverinfo/about', function() {ServerInfo_Controller::about();});
	Route::respond('/serverinfo/drops', function() {ServerInfo_Controller::drops();});
	Route::respond('/serverinfo/dropfinder', function() {ServerInfo_Controller::dropfinder();});
	Route::respond('/serverinfo/bossrecords', function() {ServerInfo_Controller::bossrecords();});
	Route::respond('/serverinfo/terms', function() {ServerInfo_Controller::terms();});
	# User
	Route::respond( '/user/show/(any:id)', function($id) {echo 'You found user ' . $id;});
	Route::respond('/user/account', function() {User_Controller::account();});
	Route::respond('/user/donate', function() {User_Controller::donate();});
	Route::respond('/user/donate_complete', function() {User_Controller::donate_complete();});
	Route::respond('/user/donate_process', function() {User_Controller::donate_process();});
	Route::respond('/user/logout', function() {User_Controller::logout();});
	Route::respond('/user/messages', function() {User_Controller::messages();});
	Route::respond('/user/promotions', function() {User_Controller::promotions();});
	Route::respond('/user/pvprewards', function() {User_Controller::pvprewards();});
	Route::respond('/user/referers', function() {User_Controller::referers();});
	Route::respond('/user/support', function() {User_Controller::support();});
	Route::respond('/user/vote', function() {User_Controller::vote();});
	# Admin
	Route::respond('/admin/core/settings', function() {
		echo 'core settings';
	});
	Route::respond('/admin/core/user/(any:id)', function($id) {
		echo 'core settings: id: '.$id;
	});