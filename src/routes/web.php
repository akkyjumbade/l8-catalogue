<?php
use AkshayJumbade\Admin\Core\Controllers\AdminController;

Route::group([ 'prefix' => 'admin', 'middleware' => ['web', 'auth'] ], function() {
    Route::get('/', [AdminController::class, 'index']);
});
