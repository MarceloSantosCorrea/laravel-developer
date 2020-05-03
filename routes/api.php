<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:api'],
    'namespace'  => 'Api',
    'as'         => 'api.',
], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    })->name('user.me');

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        $controller = 'UserController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_users');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_users');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_users');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_users');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_users');
    });

    Route::group(['prefix' => 'acl-roles', 'as' => 'acl.roles.'], function () {
        $controller = 'AclRoleController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_acl_roles');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_acl_roles');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_acl_roles');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_acl_roles');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_acl_roles');
    });

    Route::group(['prefix' => 'user-acl-roles', 'as' => 'user-acl.roles.'], function () {
        $controller = 'UserAclRoleController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_user_acl_roles');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_user_acl_roles');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_user_acl_roles');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_user_acl_roles');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_user_acl_roles');
    });

    Route::group(['prefix' => 'acl-permissions', 'as' => 'acl.permissions.'], function () {
        $controller = 'AclPermissionController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_acl_permissions');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_acl_permissions');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_acl_permissions');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_acl_permissions');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_acl_permissions');
    });

    Route::group(["prefix" => "acl-permissions-acl-roles", "as" => "acl.permission.roles."], function () {
        $controller = 'AclPermissionAclRoleController';
        Route::get('/', "{$controller}@index")->name('index');
        Route::post('/', "{$controller}@store")->name('store');
        Route::get('{uid}', "{$controller}@show")->name('show');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")->name('update');
    });

    Route::group(['prefix' => 'product-categories', 'as' => 'product-categories.'], function () {
        $controller = 'ProductCategoryController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_product_categories');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_product_categories');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_product_categories');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_product_categories');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_product_categories');
    });

    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        $controller = 'ProductController';
        Route::get('/', "{$controller}@index")
            ->name('index')->middleware('can:list_products');
        Route::post('/', "{$controller}@store")
            ->name('store')->middleware('can:store_products');
        Route::get('{uid}', "{$controller}@show")
            ->name('show')->middleware('can:show_products');
        Route::match(['put', 'patch'], '{uid}', "{$controller}@update")
            ->name('update')->middleware('can:update_products');
        Route::delete('{uid}', "{$controller}@destroy")
            ->name('destroy')->middleware('can:destroy_products');
    });
});