    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('change.language');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/terms', function () {
    return view('legal.terms');
})->name('terms');

Route::post('/user/register', [UserController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/email/verification-code', [UserController::class, 'showVerificationForm'])->name('verification.code');
    Route::post('/email/verify', [UserController::class, 'verify'])->name('verification.verify');
    Route::post('user/logout', [UserController::class, 'logout'])->name('user.logout');
});
