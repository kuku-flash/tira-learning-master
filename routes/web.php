<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminsLoginController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\AlphabetController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\GreetingController;
use App\Http\Controllers\Admin\GreetingResponseController;
use App\Http\Controllers\Admin\DayController;
use App\Http\Controllers\Admin\MonthController;
use App\Http\Controllers\Admin\NumberController;

use App\Http\Controllers\Teacher\TeachersController;
use App\Http\Controllers\Teacher\TeachersLoginController;
use App\Http\Controllers\Teacher\LessonTController;
use App\Http\Controllers\Teacher\QuestionTController;
use App\Http\Controllers\Teacher\OptionTController;


use App\Http\Controllers\UserLessonController;



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
    return view('homepage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin/login', [AdminsLoginController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminsLoginController::class, 'login'] )->name('admin.login');

Route::get('/teacher/login', [TeachersLoginController::class, 'loginForm'])->name('teacher.login');
Route::post('/teacher/login', [TeachersLoginController::class, 'login'] )->name('teacher.login');

Route::group(['middleware' => ['auth:teacher'], 'prefix' => 'teacher'], function () {
    Route::get('/dashboard', [TeachersController::class, 'index'])->name('teacher.dashboard');
    Route::resource('/lesson',LessonTController::class, ['as'=>'teacher']);
    Route::resource('/question',QuestionTController::class, ['as'=>'teacher']);
    Route::resource('/option',OptionTController::class, ['as'=>'teacher']);



});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminsController::class, 'index'])->name('dashboard');
    Route::resource('/user',UsersController::class, ['as'=>'admin']);
    Route::resource('/language',LanguageController::class, ['as'=>'admin']);
    Route::resource('/level',LevelController::class, ['as'=>'admin']);
    Route::resource('/topic',TopicController::class, ['as'=>'admin']);
    Route::resource('/lesson',LessonController::class, ['as'=>'admin']);
    Route::resource('/alphabet',AlphabetController::class, ['as'=>'admin']);
    Route::resource('/question',QuestionController::class, ['as'=>'admin']);
    Route::resource('/option',OptionController::class, ['as'=>'admin']);
    Route::resource('/teacher',TeacherController::class, ['as'=>'admin']);
    Route::resource('/greeting',GreetingController::class, ['as'=>'admin']);
    Route::resource('/greeting_response',GreetingResponseController::class, ['as'=>'admin']);
    Route::resource('/day',DayController::class, ['as'=>'admin']);
    Route::resource('/month',MonthController::class, ['as'=>'admin']);
    Route::resource('/number',NumberController::class, ['as'=>'admin']);


});
Route::group(['middleware' => ['auth:web']], function () {
Route::get('/user/level', [UserLessonController::class, 'level'])->name('user.level');
Route::get('/user/lesson_list/{topic}', [UserLessonController::class, 'lessons'])->name('user.lessons');
Route::get('/user/lesson/{lesson}', [UserLessonController::class, 'lesson_show'])->name('user.lesson');
Route::get('/user/alphabets', [UserLessonController::class, 'alphabets'])->name('user.alphabets');
Route::get('/user/greetings', [UserLessonController::class, 'greetings'])->name('user.greetings');
Route::get('/user/days', [UserLessonController::class, 'days'])->name('user.days');
Route::get('/user/months', [UserLessonController::class, 'months'])->name('user.months');
Route::get('/user/numbers', [UserLessonController::class, 'numbers'])->name('user.numbers');
Route::get('/user/greeting/{greeting}', [UserLessonController::class, 'greeting'])->name('user.greeting');
Route::get('/user/test/{topic}', [UserLessonController::class, 'quiz'])->name('user.test');
Route::post('/user/test/', [UserLessonController::class, 'store'])->name('user.test.store');
Route::get('/user/result/{result_id}', [UserLessonController::class, 'showresult'])->name('user.result.show');
Route::get('/user/letter/{alphabet}', [UserLessonController::class, 'letter'])->name('user.letter');
//Route::resource('/admin/language',LanguageController::class, ['as'=>'admin'])->middleware('auth:admin');

});