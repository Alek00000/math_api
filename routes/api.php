<?php

//Grad
Route::resource('grads', 'Grad\GradController', ['only' => ['index','show']]);

//User
Route::resource('users', 'User\UserController', ['only' => ['index','show']]);

//Post
Route::resource('posts', 'Post\PostController', ['only' => ['index','show']]);
Route::resource('posts.photos', 'Post\PostPhotoController', ['only' => ['index','show']]);

//Kontakt
Route::resource('kontakts', 'Kontakt\KontaktController', ['only' => ['index','show']]);

//Role
Route::resource('roles', 'Role\RoleController', ['only' => ['index','show']]);

//Category
Route::resource('categories', 'Category\CategoryController', ['only' => ['index','show']]);

//Photo
Route::resource('photos', 'Photo\PhotoController', ['only' => ['index','show']]);
