<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

// Route::get('/', function () {
//     return view('welcome');
// });

// ADMIN
Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/trade-conditions', 'HomeController@trade_conditions')->name('trade_controller');
Route::get('/datapolitics', 'HomeController@datapolitics')->name('datapolitics');


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::get('/rent', 'PropertyController@index')->name('rent');

Route::get('/addFavourite/{id}', 'PropertyController@addFavourite')->name('addFavourite');
Route::get('/deleteFavourite/{id}', 'PropertyController@deleteFavourite')->name('deleteFavourite');


Route::get('/temporary', function () {
    return view('temporary');
})->name('temporary');

require __DIR__.'/auth.php';

// Check route names in order for the home view to work
Route::view('/', 'home')->name('home');
Route::view('/' . __('about'), 'about')->name('about');
Route::view('/' . __('contact'), 'contact')->name('contact');

Route::resource('properties', 'PropertyController')
    ->parameters(['property' => 'properties'])
    ->names('properties');

Route::get('/map/properties', 'PropertyController@showMap')->name('properties.map');

Route::get('/home', 'HomeController@index')->name('home2');

Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

// USERS
Route::resource('user', UserController::class)->only([
    'show', 'destroy'
]);

Route::put('/user', 'UserController@update')->name('user.update');

Route::get('/profile', 'UserController@show')->name('profile');

Route::get('/my/properties', 'PropertyController@myProperties')->name('properties.my');

Route::get('/privacy', function () {
    return view('privacy');
});

// Home seekers
Route::get('homeseekers/register', 'HomeseekerController@index')->name('homeseekers_register');
Route::post('homeseekers/register', 'HomeseekerController@store')->name('homeseekers_store');

// Agents
Route::get('agents', 'AgentController@index')->name('agent.index');
Route::get('agents/register', 'AgentController@agent_register')->name('agent.register');
Route::get('agents/welcome', 'AgentController@welcome')->name('welcome');
Route::get('agents/information', 'AgentController@information')->name('information');
Route::post('agents/register', 'AgentController@store')->name('agent_store');

// =========================
// AGENTS NAVIGATION VIEWS |
// =========================

// Agents- Dashboard
Route::get('agents/dashboard', 'AgentController@dashboard')->name('agents_dashboard');
// Agents- Buyers list
Route::get('agents/buyerslist', 'AgentController@buyers_list')->name('buyers_list');
// Agents- Favorite list
Route::get('agents/favoritelist', 'AgentController@favorite_list')->name('favorite_list');
// Agents- Seller list
Route::get('agents/sellerlist', 'AgentController@seller_list')->name('seller_list');

// Facebook
Route::get('auth/{driver}', 'SocialController@facebookRedirect')->name('social_auth');
Route::get('auth/{driver}/callback', 'SocialController@loginWithFacebook');

Route::group(['middleware' =>['auth']], function() {
    Route::get("credit-card", 'BillingController@creditCardForm')
        ->name("billing.credit_card_form");
    Route::post("credit-card", 'BillingController@processCreditCardForm')
        ->name("billing.process_credit_card");

    Route::get('/checkout', 'CheckoutController@index')
        ->name('checkout_form');
    Route::post('/checkout', 'CheckoutController@processOrder')
        ->name('process_checkout');

    Route::group(['prefix' =>'subscriptions'], function() {
        Route::get('/plans', 'SubscriptionController@plans')->name('subscriptions.plans');
        Route::get('/admin', 'SubscriptionController@admin')->name('subscriptions.admin');
        Route::post('/process_credit_card', 'SubscriptionController@processCreditCardForm')->name('subscriptions.process_credit_card');
        Route::post('/process_subscriptions', 'SubscriptionController@processSubscriptions')->name('subscriptions.process_subscriptions');
    });
});

Route::get('/add-property-to-cart/{property}', 'UserController@addPropertyToCart')
    ->name('add_course_to_cart');
Route::get('/cart', 'UserController@showCart')
    ->name('cart');

Route::get('/subscribe', 'SubscriptionController@showSubscription');
Route::post('/subscribe', 'SubscriptionController@processSubscription');
// welcome page only for subscribed users
//Route::get('/welcome', 'SubscriptionController@showWelcome')->middleware('subscribed');

Route::get('/welcome', 'Seller\SubscriptionController@showWelcome')->middleware('subscribed');

// Notifications
Route::get('/messages', 'MessageController@index')->name('messages.index');
Route::get('/messages/create', 'MessageController@create')->name('messages.create');
Route::post('/messages/store', 'MessageController@store')->name('messages.store');
Route::get('/messages/received', 'MessageController@received')->name('messages.received');
