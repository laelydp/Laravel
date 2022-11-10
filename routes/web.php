<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\AkunContoller;
use\App\Http\Controllers\AccountController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     echo "<h1> Hi Saya Belajar Php </h1>";
// });

// Route::get('/', function () {
    // return ('<h1>Media Online</h1>
    // <h3>Sosial Media Developer</h3>
    // <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
    // <h4>Benefit Join di Media Online</h4>
    // <ul>
    //     <li>Mendapatkan motivasi dari sesama Developer</li>
    //     <li>Sharing knowledge</li>
    //     <li>Dibuat oleh calon web developer terbaik</li>
    // </ul>
    // <h4>Cara Bergabung ke media online</h4>
    // <ol>
    //     <li>Mengunjunig website ini</li>
    //     <li>Mendaftarkan di
    //         <a href="form.html"> Form Sign Up </a></li>
    //     <li>Selesai</li>
    // </ol>');
// });

// Route::get('/form', function () {
    // return ('<h1>Buat Account Baru</h1>
    // <h4>Sign Up Form</h4>
    // <form action="welocome.html" method="post">
    //     <label for="first-name">First Name : </label>
    //     <br>
    //     <input type="text" name="first-name" id="first-name" class="name" placeholder="dadhag">
    //     <br>
    //     <label for="last-name">Last Name :</label>
    //     <br>
    //     <input type="text" name="last-name" id="last-name">
    //     <br>
    //     <label for="gender">Gender :</label>
    //     <br>
    //     <input type="radio" name="gender" id="">Male
    //     <br> 
    //     <input type="radio" name="gender" id="">Female
    //     <br>
    //     <label for="Nationatity">Nationality</label>
    //     <br>
    //     <select name="Nationatity" id="Nationatity">
    //         <option value="wna">WNI</option>
    //         <option value="wni">WNA</option>
    //     </select>
    //     <br>
    //     <label for="language">Bahasa</label>
    //     <br>
    //     <input type="checkbox" name="language" id="">Bahasa Indonesia
    //     <br>
    //     <input type="checkbox" name="language" id="">English
    //     <br>
    //     <input type="checkbox" name="language" id="">Other
    //     <br>
    //     <label for="bio">Bio</label><br>
    //     <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
    //     <br>
    //     <input type="submit" value="Sign Up">');
// });

// Route::get('/akun', [AkunContoller::class, 'index']);
// Route::get('/akun/create', [AkunContoller::class, 'Form']);
Route::view('/', 'template.master');

Route::view('/home', 'template.master');

Route::get('/index', [AkunController::class, 'index'])->name('indexAkun');
Route::get('/form', [AkunController::class, 'Form'])->name('createAkun');

Route::get('/account', 
[AccountController::class, 'index']
)->name('indexAccount');

Route::get('/account/create', 
[AccountController::class, 'create']
)->name('createAccount');

Route::get('/account/show',
[AccountController::class, 'show']
)->name('showAccount');;

Route::get('/account/table',
[AccountController::class, 'table']
)->name('tableAccount');;

Route::get('/account/data_tables',
[AccountController::class, 'data_tables']
)->name('data_tablesAccount');;
