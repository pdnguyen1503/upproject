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

Use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
	return view('admin.layout.index');
})->name('test1');

Route::get('layout', function(){
	return view('admin.categories.add');
});

Route::get('/thu', function(){
	$products = Product::find(1);
	foreach ($products->category as $category) {
		echo $category->name."</br>";
	}
})->name('thu');

Route::get('admin/login', 'UsersController@getLoginAdmin');
Route::post('admin/login', 'UsersController@postLoginAdmin'); 

Route::get('admin/singup', 'UsersController@getSingup');

Route::get('admin/logout', 'UsersController@getLogout');

Route::group(['prefix' => 'admin'], function(){
	Route::group(['prefix' => 'categories'], function(){
		Route::get('list', 'CategoriesController@getList')->name('categories.list');
		// route add category
		Route::get('add', 'CategoriesController@getAdd')->name('categories.add');
		Route::post('add', 'CategoriesController@postAdd');
		// route edit category
		Route::get('edit/{id}', 'CategoriesController@getEdit')->name('categories.edit');
		Route::post('edit/{id}', 'CategoriesController@postEdit');
		//route delete categories
		Route::get('delete/{id}', 'CategoriesController@deleteCategory')->name('categories.delete');
	});

	Route::group(['prefix' => 'author'], function(){
		Route::get('list', 'AuthorsController@getList')->name('author.list');
		// Route add author
		Route::get('add', 'AuthorsController@getAdd');
		Route::post('add', 'AuthorsController@postAdd');
		//route eidt author
		Route::get('edit/{id}', 'AuthorsController@getEdit');
		Route::post('edit/{id}', 'AuthorsController@postEdit');

		Route::get('delete/{id}', 'AuthorsController@deleteAuthor');

	});

	Route::group(['prefix' => 'customers'], function(){
		Route::get('list', 'CustomersController@getList')->name('customers.list');
		// Route add author
		Route::get('add', 'CustomersController@getAdd');
		Route::post('add', 'CustomersController@postAdd');
		//route eidt author
		Route::get('edit/{id}', 'CustomersController@getEdit');
		Route::post('edit/{id}', 'CustomersController@postEdit');

		Route::get('delete/{id}', 'CustomersController@deleteCustomers');

	});

	Route::group(['prefix' => 'orders'], function(){
		Route::get('list', 'OrdersController@getList')->name('orders.list');
		// Route add author
		Route::get('add', 'OrdersController@getAdd');
		Route::post('add', 'OrdersController@postAdd');
		//route eidt author
		Route::get('edit/{id}', 'OrdersController@getEdit');
		Route::post('edit/{id}', 'OrdersController@postEdit');

		Route::get('delete/{id}', 'OrdersController@deleteOrders');

	});

	Route::group(['prefix' => 'products'], function(){
		Route::get('list', 'ProductsController@getList')->name('products.list');
		// Route add author
		Route::get('add', 'ProductsController@getAdd');
		Route::post('add', 'ProductsController@postAdd');
		//route eidt author
		Route::get('edit/{id}', 'ProductsController@getEdit');
		Route::post('edit/{id}', 'ProductsController@postEdit');

		Route::get('delete/{id}', 'ProductsController@deleteProducts');
		route::get('deleteimg/{id}','ProductsController@deleteImg')->name('deleteImg');

	});

	Route::group(['prefix' => 'user'], function(){
		Route::get('list', 'UsersController@getList')->name('user.list');
		// Route add author
		Route::get('add', 'UsersController@getAdd');
		Route::post('add', 'UsersController@postAdd');
		//route eidt author
		Route::get('edit/{id}', 'UsersController@getEdit');
		Route::post('edit/{id}', 'UsersController@postEdit');

		Route::get('delete/{id}', 'UsersController@deleteUsers');

	});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/','Client\HomeController@index');
route::get('/{slug}','Client\HomeController@GetCategories')->name('category');
route::get('/detail/{name}','Client\HomeController@GetDetail')->name('getdetail');