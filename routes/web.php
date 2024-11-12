<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/500', function () {
    return view('500');
});

Route::get('/blank_template', function () {
    return view('blank_template');
});

Route::get('/boxed_layout_v2', function () {
    return view('boxed_layout_v2');
});

Route::get('/boxed_layout', function () {
    return view('boxed_layout');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/calender', function () {
    return view('calender');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/dashboard_v1', function () {
    return view('dashboard_v1');
});

Route::get('/datatables', function () {
    return view('datatables');
});

Route::get('/draft', function () {
    return view('draft');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/extended_layout', function () {
    return view('extended_layout');
});

Route::get('/form_elements', function () {
    return view('form_elements');
});

Route::get('/form_validations', function () {
    return view('form_validations');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/google_map', function () {
    return view('google_map');
});

Route::get('/grids_draggable', function () {
    return view('grids_draggable');
});

Route::get('/grids_simple', function () {
    return view('grids_simple');
});

Route::get('/group_list', function () {
    return view('group_list');
});

Route::get('/horizontal_menu_boxed', function () {
    return view('horizontal_menu_boxed');
});

Route::get('/horizontal_menu', function () {
    return view('horizontal_menu');
});

Route::get('/icons', function () {
    return view('icons');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/layout_options', function () {
    return view('layout_options');
});

Route::get('/lockscreen', function () {
    return view('lockscreen');
});

Route::get('/login_v2', function () {
    return view('login_v2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/messages_notifications', function () {
    return view('messages_notifications');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/RTL', function () {
    return view('RTL');
});

Route::get('/search_results', function () {
    return view('search_results');
});

Route::get('/send_email', function () {
    return view('send_email');
});

Route::get('/sent', function () {
    return view('sent');
});

Route::get('/sliders', function () {
    return view('sliders');
});

Route::get('/support_ticket', function () {
    return view('support_ticket');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/tabs_accordian', function () {
    return view('tabs_accordian');
});

Route::get('/theme_coporate', function () {
    return view('theme_coporate');
});

Route::get('/theme_default', function () {
    return view('theme_default');
});

Route::get('/theme_elegant', function () {
    return view('theme_elegant');
});

Route::get('/theme_simple', function () {
    return view('theme_simple');
});

Route::get('/time_line', function () {
    return view('time_line');
});

Route::get('/trash', function () {
    return view('trash');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/vector_map', function () {
    return view('vector_map');
});

Route::get('/widgets', function () {
    return view('widgets');
});