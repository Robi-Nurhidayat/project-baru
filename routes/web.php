<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\CiController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FlutterController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\kelas\PythonController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasPythonController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageUserController;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PhpController;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\ReactNativeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VueController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\AndroidJavaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TampilPesanContact;
use App\Http\Controllers\TampilUserController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'postLogin'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'postRegister'])->name('register.postRegister');



Route::group(['middleware' => 'auth', 'checkLevel:admin'], function () {
});




Route::get('/about', [AboutController::class, 'index'])->name('about');


// crud pelajar

// Route::get('/pelajar/home', [PelajarController::class, 'index'])->name('pelajar');


// Route::get('/course',[CourseController::class, 'index'])->name('course');



// lp user

Route::group(['middleware' => 'auth', 'checkLevel:user'], function () {
});



Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// halaman admin crud kelas




Route::get('/admin/kelas', [KelasController::class, 'index'])->name('kelas');

Route::post('/admin/kelas/tambahKelas', [KelasController::class, 'store'])->name('kelas.store');

Route::get('/admin/kelas/edit/{kelas}', [KelasController::class, 'edit'])->name('kelas.edit');

Route::put('/admin/kelas/update', [KelasController::class, 'update'])->name('kelas.update');

Route::delete('/admin/kelas/delete/{kelas}', [KelasController::class, 'destroy'])->name('kelas.delete');


// halaman admin crud pengajar

Route::get('/admin/pengajar', [PengajarController::class, 'index'])->name('pengajar');

Route::post('/admin/pengajar/tambah', [PengajarController::class, 'store'])->name('pengajar.store');

Route::get('/admin/pengajar/edit/{pengajar}', [PengajarController::class, 'edit'])->name('pengajar.edit');

Route::put('/admin/pengajar/update', [PengajarController::class, 'update'])->name('pengajar.update');

Route::delete('/admin/pengajar/delete/{pengajar}', [PengajarController::class, 'destroy'])->name('pengajar.delete');

Route::get('/halaman/user', [PageUserController::class, 'index'])->name('page.user');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('halaman/user/kelas/{kelas}', [PageUserController::class, 'show'])->name('halaman.user.kelas');


Route::get('halaman/user', [PageUserController::class, 'index'])->name('user');
Route::get('kelas/pyton', [KelasPythonController::class, 'index'])->name('piton');
Route::get('kelas/pyton', [KelasPythonController::class, 'index'])->name('piton');
Route::get('/kelas/flutter', [FlutterController::class, 'index'])->name('flutter');
Route::get('/kelas/php', [PhpController::class, 'index'])->name('php');
Route::get('/kelas/codeigniter', [CiController::class, 'index'])->name('ci');
Route::get('/kelas/laravel', [LaravelController::class, 'index'])->name('laravel');
Route::get('/kelas/javascript', [JsController::class, 'index'])->name('js');
Route::get('/kelas/vuejs', [VueController::class, 'index'])->name('vue');
Route::get('/kelas/reactjs', [ReactController::class, 'index'])->name('react');
Route::get('/kelas/reactnative', [ReactNativeController::class, 'index'])->name('reactnative');
Route::get('/kelas/css', [CssController::class, 'index'])->name('css');
Route::get('/kelas/html', [HtmlController::class, 'index'])->name('html');
Route::get('/kelas/androidjava', [AndroidJavaController::class, 'index'])->name('androidjava');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/sendMessage', [ContactController::class, 'store'])->name('contact.post');




// login admin

Route::get('/login/admin', [AdminLoginController::class, 'index'])->name('adminLogin');
// Route::post('/login/admin/berhasil', [AdminLoginController::class, 'postLogin'])->name('adminLogin.postLogin');
Route::get('/register/admin', [AdminRegisterController::class, 'index'])->name('registerAdmin');
// Route::post('/register/admin/register', [AdminRegisterController::class, 'postRegister'])->name('registerAdmin.register');


// pesan user

Route::get('/admin/pesan', [TampilPesanContact::class, 'index'])->name('tampilPesanUser');



// tampil user controller

Route::get('/admin/user/tampil', [TampilUserController::class, 'index'])->name('tampilUserAdmin');
Route::get('/admin/user/edit/{user}', [TampilUserController::class, 'edit'])->name('editUserAdmin');
Route::put('/admin/user/update', [TampilUserController::class, 'update'])->name('updateUserAdmin');
Route::delete('/admin/user/delete/{user}', [TampilUserController::class, 'destroy'])->name('deleteUserAdmin');


// setting user

Route::get('/halaman/user/setting/', [SettingController::class, 'index'])->name('setting');

Route::put('/halaman/user/setting/update', [SettingController::class, 'update'])->name('setting.update');
