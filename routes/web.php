<?php
use App\Http\Controllers\DiscussionController;
use Illuminate\Routing\RouteUrlGenerator;
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

Route::get('/', [DiscussionController::class, 'index'])->name('discussion.index');
Route::get('/discussions/{discussion:slug}', [DiscussionController::class, 'show'])->name('discuss.show');

require __DIR__.'/auth.php';
