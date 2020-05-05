<?php


    Route::get('/', 'SessionController@index');
    Route::post('/', 'SessionController@create');

    Route::get('/registro', 'RegistroController@create');
    Route::post('/registro', 'RegistroController@store');

    Route::get('/psicologo/index', 'PsicologoController@index');

    Route::get('/psicologo/{id}/profile', 'PsicologoController@profile');

    Route::get('/psicologo/create', 'PsicologoController@create');
    Route::post('/psicologo/create', 'PsicologoController@store');

    Route::get('/psicologo/{id}/update', 'PsicologoController@getUpdate');
    Route::post('/psicologo/{id}/update', 'PsicologoController@update');

    Route::get('/paciente/index', 'PacienteController@index');
    Route::get('/paciente/profile/{psicologoId}/index', 'PacienteController@profile');


    Route::get('/paciente/{id}/create', 'PacienteController@create');
    Route::post('/paciente/{id}/create', 'PacienteController@store');

    Route::get('/paciente/{id}/update', 'PacienteController@getUpdate');
    Route::post('/paciente/{id}/update', 'PacienteController@update');

    Route::delete('/paciente/{id}', 'PacienteController@delete');

    Route::get('/consulta/index', 'ConsultaController@index');
    Route::get('/consulta/profile/{pacienteId}/index', 'ConsultaController@profile');

    Route::get('/consulta/{id}/create', 'ConsultaController@create');
    Route::post('/consulta/{id}/create', 'ConsultaController@store');

    Route::get('/logout', function (){
       \Illuminate\Support\Facades\Auth::logout();
       return redirect('/session');
    });



    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
