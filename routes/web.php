<?php

use IceTea\Routing\Route;

Route::any("/", function() {
	return view('welcome');
});

Route::any("/profile/{user}", function($a){	
	
});