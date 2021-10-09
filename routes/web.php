<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

//$router->get('/', ['uses' => 'UserController@index']);
$router->put('/ubahUser/{id}', ['uses' => 'UserController@ubahUser']);




//$router->get('/tambahUser', ['uses' => 'UserController@tambahUser']);
//$router->get('/hello', ['uses' => 'UserController@hello']);

/*
$router->get('/key', function () {
    return Str::random(32);
});

$router->get('/test', function () {
    $d = new DateTime();
    $d->format("Y-m-d H:i:s.v");
    $time = array('Time' => $d); 
    return $time;
});

$router->get('/get', function () {
    return 'GET';
});

$router->post('/post', function () {
    return 'POST';
});

$router->post('/test', function () use ($router) {
    if (isset ($_GET['jari'])) {
        $r = $_GET['jari'];
    } 
    else {
        $r = 0;
    } 
    return response()->json(['Luas Lingkaran' => (3.14 * pow($r, 2))]);
});

$router->put('/put', function () {
    return 'PUT';
});

$router->patch('/patch', function () {
    return 'PATCH';
});

$router->delete('/delete', function () {
    return 'DELETE';
});

$router->options('/options', function () {
    return 'OPTIONS';
});

$router->get('/user/{id}', function ($id) {
    return 'User Id = ' . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Post ID = ' . $postId . ' Comments ID = ' . $commentId;
});

/*$router->get('/users[/{userId}]', function ($userId = null) {
    return $userId === null ? 'Data semua users' : 'Data user dengan id ' . $userId;
});*/

/*
$router->get('/auth/login', ['as' => 'route.auth.login', function () {
    return 'Ini halaman login';
}]);

$router->get('/profile', function (Request $request) {
    if ($request->isLoggedIn == null) {
        return redirect()->route('route.auth.login');
    }
    return 'Ini halaman profile';
});

$router->group(['prefix' => 'users'], function () use ($router) {
    
    $router->get('/', function () { // menjadi /users/, /users => prefix, / => path
        return "GET /users";
    });

    $router->get('/mahasiswa', function () { 
        return "GET /mahasiswa";
    });

});

$router->get('/admin/home/', ['middleware' => 'age', function () {
    return 'Dewasa';
}]);

$router->get('/fail', function () {
    return 'Dibawah umur';
});

//API menampilkan list post
$router->get('/posts', 'PostController@index');

//API menampilkan view post by id
$router->get('/posts/{id}', 'PostController@show');

//API membuat post baru
$router->post('/posts', 'PostController@store');

//API update post by id
$router->put('/posts/{id}', 'PostController@update');

//API menghapus post by id
$router->delete('/posts/{id}', 'PostController@delete');

$router->get('/sistem_registrasi', 'SistemRegistrasiController@index');

$router->get('/sistem_registrasi/{id}', 'SistemRegistrasiController@show');

$router->post('/sistem_registrasi', 'SistemRegistrasiController@store');

$router->put('/sistem_registrasi/{id}', 'SistemRegistrasiController@update');

$router->delete('/sistem_registrasi/{id}', 'SistemRegistrasiController@delete');

$router->get('/sistem_akademik_login', ['middleware' => 'akses', function () {
    return redirect('/sistem_registrasi');
}]);

$router->get('/sistem_akademik', 'SistemAkademikController@index');

$router->get('/sistem_akademik', 'SistemAkademikController@CekNIM');
    
$router->get('/sistem_akademik/homepage', function () {
    return redirect('/sistem_akademik');
});
*/