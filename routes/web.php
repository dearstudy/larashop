<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('', 'products')->name('home');

Route::get('products', 'ProductController@index')->name('products.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('email_verify_notice', 'PageController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::get('email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');

    Route::group(['middleware' => 'email_verified'], function() {
        Route::get('user_addresses', 'UserAddressController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressController@destroy')->name('user_addresses.destroy');

        Route::post('products/{product}/favorite', 'ProductController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductController@disfavor')->name('products.disfavor');
        Route::get('products/favorites', 'ProductController@favorites')->name('products.favorites');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        Route::get('orders', 'OrderController@index')->name('orders.index');
        Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
        Route::post('orders', 'OrderController@store')->name('orders.store');

        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
        Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');
    });
});

Route::get('products/{product}', 'ProductController@show')->name('products.show');
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
