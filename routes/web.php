<?php

Route::get('/', 'PageController@root')->name('root');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('addresses', 'UserAddressController@index')->name('user_addresses.index');
    Route::get('addresses/create', 'UserAddressController@create')->name('user_addresses.create');
});
