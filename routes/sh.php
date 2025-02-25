<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShellController;

Route::get('/setup/{server_id}', [ShellController::class, 'setup']);
Route::get('/deploy/{site_id}', [ShellController::class, 'deploy']);
Route::get('/servers/rootreset', [ShellController::class, 'serversrootreset']);
Route::get('/newsite', [ShellController::class, 'newsite']);
Route::get('/newalias/{alias_id}', [ShellController::class, 'newalias']);
Route::get('/delsite', [ShellController::class, 'delsite']);
Route::get('/sitepass', [ShellController::class, 'sitepass']);
