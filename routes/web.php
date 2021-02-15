<?php



Route::get('/', "MainController@index") ->name("main.index");

Route::get('/estudiantes', "EstudianteController@index") ->name("estudiantes.index");
Route::get('/estudiantes/ver/{id}', "EstudianteController@show") ->name("estudiantes.show");
Route::get('/estudiantes/editar/{id}', "EstudianteController@edit") ->name("estudiantes.editar");
Route::put('/estudiantes/editar/{id}', "EstudianteController@update") ->name("estudiantes.update");
Route::get('/estudiantes/crear', "EstudianteController@create") ->name("estudiantes.crear");
Route::post('/estudiantes/crear', "EstudianteController@store") ->name("estudiantes.add");
Route::delete('/estudiantes/eliminar/{id}', "EstudianteController@destroy") ->name("estudiantes.eliminar");

Route::get('/grupos', "GrupoController@index") ->name("grupos.index");
Route::get('/grupos/ver/{id}', "GrupoController@show") ->name("grupos.show");
Route::get('/grupos/editar/{id}', "GrupoController@edit") ->name("grupos.editar");
Route::put('/grupos/editar/{id}', "GrupoController@update") ->name("grupos.update");
Route::get('/grupos/crear', "GrupoController@create") ->name("grupos.crear");
Route::post('/grupos/crear', "GrupoController@store") ->name("grupos.add");
Route::delete('/grupos/eliminar/{id}', "GrupoController@destroy") ->name("grupos.eliminar");
