<?php

Route::get('demo', 'PublicPagesController@demo');

Route::get('bar-chart', 'ChartController@index');

Route::get('/', ['as'=>'index','uses'=> 'PublicPagesController@getIndex']);

Route::get('/products', ['as'=>'products','uses'=> 'PublicPagesController@getProducts']);

Route::get('/offers', ['as'=>'offres','uses'=> 'PublicPagesController@getOffers']);

Route::get('/family-combo', ['as'=>'family-combo','uses'=> 'PublicPagesController@getFamilyCombo']);

Route::get('/pre-order', ['as'=>'preorder ','uses'=> 'PublicPagesController@getPreorder']);

Route::get('/search', ['as'=>'search ','uses'=> 'PublicPagesController@getSearch']);

Route::get('/category/{slug}', ['as'=>'category-product ','uses'=> 'PublicPagesController@getCategory']);

Route::get('/single/{id}', ['as'=>'single','uses'=> 'PublicPagesController@getSingleProduct']);

Route::get('/category', ['as'=>'category','uses'=> 'PublicPagesController@getCategoryProduct']);

Route::get('/about-us','PublicPagesController@getAboutUs');
Route::get('/contact-us','PublicPagesController@getContactUs');
Route::get('/faq','PublicPagesController@getFaq');
    
    
Route::get('/add-item/{id}','CartController@addItem');

Route::get('/my-items','CartController@myItems');

Route::post('update-item/{rowId}','CartController@updateItem');

Route::get('delete-item/{rowId}','CartController@itemDelete');


Route::post('subscribe','PublicPagesController@postSub');  


// Route::group(['middleware' => ['isLogin'], 'prefix'=>'customer'], function(){
    
    Route::get('/checkout','CheckOutController@getCheckOut');
    Route::get('/checkout-final','CheckOutController@getCheckOutfinal');
    Route::get('/invoice/{id}','CheckOutController@getInvoice');
    Route::post('orders','CheckOutController@postOrders');  
    Route::get('/order-compact','CheckOutController@getOrderComplete');
    
// });


Route::group(['prefix'=>'users'], function(){
    
    Route::get('/login','PublicPagesController@getLogin');
    
    Route::post('/login','PublicPagesController@postLogin');
    
    Route::post('/registation','PublicPagesController@postReg');
    
    Route::get('/logout','PublicPagesController@logout');
    
    Route::get('/profile','PublicPagesController@getProfile');
    
    Route::get('/account-information','PublicPagesController@getUserAccount');
    
    Route::get('/account-information/{id}/edit','PublicPagesController@getUserAccountEdit');
    
    Route::PUT('/account-information/{id}/edit','PublicPagesController@putUserAccountEdit');
    
    
    
    Route::get('/my-account','PublicPagesController@getMyAccount');
    
    Route::get('/change-password','PublicPagesController@getChangePassword');
    Route::post('/change-password','PublicPagesController@updatePassword');
    
    Route::get('/order-history','PublicPagesController@getOrderHistory');
    
    
    Route::get('forgot-password','PublicPagesController@forgotPassword');
    Route::post('forgot-password','PublicPagesController@postForgotPassword');
    
});


/*
|
|-----------------------------------------------------------------------------------
|User Login, Logout
|-----------------------------------------------------------------------------------    
|
|   3 sets of Routes:
|           - GET   - login landing page
|           - POST  - login form post route
|           - GET   - logout through get
|
|           - GET   - forgot password landing page
|           - POST  - forgot password form post route
|
|           - GET   - Signup landing page
|           - POST  - Signup form post route
|
*/


Route::group(['prefix'=>'auth'], function(){
    
    Route::get('signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    Route::post('signup',                           'AccessController@postSignup');
    
    Route::get('social/{name}',                 'AccessController@social');
    
    Route::get('login', ['as'=>'login','uses'=> 'AccessController@login']);
    Route::post('login',                        'AccessController@postLogin');
    
    Route::get('/logout', [
        'as'=>'logout',
        'uses'=> 'AccessController@logout'
    ]);
    
    Route::get('forgot-password',               'AccessController@forgotPassword');
    Route::post('forgot-password',              'AccessController@postForgotPassword');
    
});


// Route::group(['middleware' => ['auth','permission'], 'prefix'=>'admin'], function(){
Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function(){
    
    
    Route::get('/dashboard', ['as'=>'dashboard','uses'=> 'DashboardController@getDashboard']);
    
    //  All Users route
    Route::get('/all-user', ['as'=>'alluser','uses'=> 'UsersController@getAllUser']);
    
    Route::get('/block-user', ['as'=>'blockuser','uses'=> 'UsersController@getBlockUser']);
    
    Route::get('/block-users/{id}', ['as'=>'blockusers','uses'=> 'UsersController@getBlockUsers']);
    
    Route::get('/subscriber', ['as'=>'subscriber','uses'=> 'UsersController@getSubscriber']);
    
    Route::get('/user-create', ['as'=>'usercreate','uses'=> 'UsersController@getUserCreate']);
    
    Route::post('/user-create', ['as'=>'userstore','uses'=> 'UsersController@storeuser']);
    
    Route::get('/role-to-permissions/{id}', ['as'=>'roletopermissions','uses'=> 'UsersController@roleToPremissions']);
    
    Route::PUT('/role-to-permissions', ['as'=>'setpermissions','uses'=> 'UsersController@postSetPremissions']);
    
    
    //  my profile route
    
    Route::get('/my-profile/edit/{id}', ['as'=>'myprofileedit','uses'=> 'MyProfile@getEditProfile']);
    
    Route::get('/my-profile/{id}', ['as'=>'myprofile','uses'=> 'MyProfile@getProfile']);
    
    Route::PUT('/my-profile/{id}', ['as'=>'myprofile','uses'=> 'MyProfile@postProfileUpdate']);
    
    Route::get('/my-profile-change-password', ['as'=>'changepassword','uses'=> 'MyProfile@changePassword']);
    
    Route::post('/my-profile-change-password', ['as'=>'changepassword','uses'=> 'MyProfile@updatePassword']);
    
    //  my profile route
    
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RolesController', ['except' => 'destroy']);
    
    Route::resource('/settings', 'SettingsController',['except' => 'destroy']);
    Route::resource('/meta-tag', 'MetaSettingsController',['except' => 'destroy']);
    
    Route::resource('/products', 'ProductsController');
    Route::post('/products-search','ProductsController@searchIndex');
    Route::post('/product-search','ProductsController@searchByDate');
    
    
    
    Route::resource('/offer-sliders', 'SlidersController');
    
    Route::get('/orders', ['as'=>'orders','uses'=> 'AdminOrder@index']);
    Route::post('/orders-search','AdminOrder@search');
    Route::post('/order-search','AdminOrder@searchByDate');
    
    Route::put('/delivered/{id}','AdminOrder@Delivered');
    
    Route::get('/orders/{id}','AdminOrder@Details');
    
    
    // strock
    Route::get('/my-strock','StockManagement@index');
    Route::post('/my-strock-search','StockManagement@search');
    Route::post('/my-strock-search-by-date','StockManagement@searchByDate');
    Route::get('/my-strock/{id}','StockManagement@addProductNumber');
    Route::post('/my-strock/{id}','StockManagement@update');
    
    
    Route::get('/subscriber','DashboardController@subscriber');
    
    
    // costing 
    Route::get('/costing','CostingController@index');
    Route::get('/costing-add-new-item','CostingController@addNewItem');
    
    Route::get('/all-costing','CostingController@getAllCosting');

});

