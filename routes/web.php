<?php

/*
|-------------------------------| ALL COMMCYCLE LINKS |-----------------------------------------|
| 																								|
| 																								|                     
| 																								|
|  																								|
| 																								|
*/

Route::get('/', function () {
    return view('commcycle-pages.index');
});

Route::get('commcycle', function(){
	return view('commcycle-pages.index');
});

Route::get('admin', 'AdminController@showAdminMain');

Route::get('subscribers', 'AdminController@showSubscribers');

Route::get('orders', 'AdminController@showOrders');

Route::get('admincommcycleitems', 'AdminController@showAdminCommItems');

Route::get('adminshopitems', 'AdminController@showAdminShopItems');

Route::get('admin-deletion/{admin}/{section}/{id}','AdminController@deleteItem');

Route::get('admin-delete-order/{admin}/{id}','AdminController@deleteOrder');

Route::get('admin-communication/{admin}','AdminController@communicate');

Route::get('admin-signin',['uses'=>'AdminController@adminSignIn','as'=>'admin.signin']);

Route::post('admin-authentication','AdminController@adminAuthentication');

Route::get('admin-log-out',['uses'=>'AdminController@adminLogout','as' => 'admin.logout']);

//-----------------------CART and CHECKOUT ---------------------

Route::get('add-to-cart/{page}/{id}','CartController@trialAddToCart');

Route::get('clearall','CartController@clearSession');

Route::get('checkout','CartController@goToCheckout');

Route::get('docheckout','CartController@checkout');

Route::get('goback','CartController@continueShopping');

Route::get('delete-cart-item/{product_quantity}/{product_price}/{id}','CartController@deleteCartItem');
//----------------------------------------------------------------
	// Route::get('selected-item/shop/{id}','CartController@addToCartShop');

	// Route::get('selected-item/commcycle/{id}','CartController@addToCartCommcycle');

	// Route::get('selected-item/commcycleB/{id}','CartController@addToCartCommcycleB');

	// Route::get('selected-item/shopB/{id}','CartController@addToCartShopB');

Route::get('showcart','CartController@showCart');

Route::get('show','CartController@showStuff');

//------------------------------------------------------------------
Route::post('freeupload','UploadController@uploadFree');

Route::post('shopupload','UploadController@uploadShop');
//------------------------------------------------------------------

Route::get('subscribe','CommcycleController@subscribe');

Route::get('commcycleshop','CommcycleController@showCommcycleShop');

Route::get('commcycleshopB','CommcycleController@showNoPicCommcycleShop');

Route::get('shop','CommcycleController@showShop');

Route::get('shopB','CommcycleController@showNoPicShop');

//-------------------LADYB LINKS ---------------------------------

//Route::get('ladyB','LadyBController@index');
Route::get('ladyB-main','LadyBController@index');

Route::get('ladyB-office','LadyBController@showMainOffice');

Route::get('ladyB-sign-in','LadyBController@showSignIn');

Route::post('ladyB-authentication','LadyBController@adminSignIn');

Route::get('ladyBshop','LadyBController@showShop');

Route::get('uploadcenter','LadyBController@showUploadCenter');

Route::post('ladyB-upload','UploadController@ladyBUpload');

Route::get('ladyB-stock','LadyBController@showStock');

Route::get('ladyB-order','LadyBController@showOrders');

Route::get('ladyB-order-delete/{id}','LadyBController@deleteOrder');

Route::get('ladyB-sign-out','LadyBController@signOut');

Route::get('ladyB-profile','LadyBController@getProfile');

Route::get('ladyB-admin-sign-up',['uses'=>'LadyBController@adminSignUp','as'=>'lb.admin.signup']);

Route::get('ladyB-admin-password-change/{id}','LadyBController@adminPasswordChange');

Route::get('ladyB-news-post',['uses'=>'LadyBController@adminNewsPost','as'=>'lb.news.post']);

Route::get('ladyB-message','LadyBController@sendMessage');

//-----------------------------------------------------------------

Route::get('aboutus','CommcycleController@showAbout');

Route::get('sendmessage','CommcycleController@sendMessage');
