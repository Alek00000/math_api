<?php

//Grad
Route::resource('grads', 'Grad\GradController');

//User
Route::resource('users', 'User\UserController');

//Post
Route::resource('posts', 'Post\PostController');
Route::resource('posts.photos', 'Post\PostPhotoController', ['only' => ['index','show']]);
Route::resource('posts.categories', 'Post\PostCategoryController', ['only' => ['index','show', 'destroy']]);
Route::resource('posts.users', 'Post\PostUserController', ['only' => ['index','show']]);

//Kontakt
Route::resource('kontakts', 'Kontakt\KontaktController');

//Role
Route::resource('roles', 'Role\RoleController');

//Category
Route::resource('categories', 'Category\CategoryController');

//Photo
Route::resource('photos', 'Photo\PhotoController');
