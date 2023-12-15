<?php


use App\CRUD\SongComponent;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Models\Purchase;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;


Route::group(['prefix' => ''], function () {
    Route::get('/addToCart/{songId}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');    
    Route::get('/', [CartController::class, 'showStore'])->name('store');
    Route::get('/', function () {
        $allArtists = Song::latest()->take(4)->select('artist')->get();
        $featuredSongs = Song::latest()->take(6)->select('id','title', 'price', 'photo')->get();    
        $oldSongs = Song::oldest()->take(6)->select('id', 'title', 'price', 'photo')->get();
        
        // Llamar a las 3 canciones del inicio
        $latestSong1 = Song::latest()->first();
        $latestSong2 = Song::latest()->skip(1)->first();
        $latestSong3 = Song::latest()->skip(2)->first();
    
        // Filtra artistas
        $uniqueArtists = $allArtists->unique('artist');
        // 4 artistas únicos
        $uniqueArtists = $uniqueArtists->count() >= 4 ? $uniqueArtists->take(4) : $uniqueArtists;
    
        // Asignar
        $artist1 = $uniqueArtists->get(0);
        $artist2 = $uniqueArtists->get(1);
        $artist3 = $uniqueArtists->get(2);
        $artist4 = $uniqueArtists->get(3);
    
        return view('welcome', [
            'latestSong1' => $latestSong1,
            'latestSong2' => $latestSong2,
            'latestSong3' => $latestSong3,
            'artist1' => $artist1,
            'artist2' => $artist2,
            'artist3' => $artist3,
            'artist4' => $artist4,
            'featuredSongs' => $featuredSongs,
            'oldSongs' => $oldSongs,
        ]);
    });
});

Route::group(['prefix' => 'store'], function () {
    Route::get('/', [CartController::class, 'showStore'])->name('store');
    Route::get('/addToCart/{songId}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');    
    Route::get('/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    // Agrega otras rutas relacionadas con el carrito aquí según tus necesidades
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'viewCart'])->name('cart');
    Route::get('/empty', [CartController::class, 'emptyCart'])->name('emptyCart');
    Route::get('/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');    
    Route::get('/remove/{cartItemId}', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::get('/tcheckout', [CartController::class, 'tcheckout'])->name('tcheckout');
});

Route::group(['prefix' => 'checkout', 'middleware' => ['auth']], function () {
    Route::get('/', [CheckoutController::class, 'viewCard'])->name('viewCard');
    Route::get('/empty', [CartController::class, 'emptyCart'])->name('emptyCart');
    // Add the route for processing the payment
    // Procesar la compra
    Route::get('/process/{orderId}', [CheckoutController::class, 'process'])->name('process');
    Route::get('/checkout', [CheckoutController::class, 'viewCard'])->name('checkout');
    

});

Route::get('/about', function() {return view('about');});
Route::get('/contact', function() {return view('contact');});
Route::get('/policy', function() {return view('policy');});
Route::get('/terms', function() {return view('terms');});
Route::get('/faqs', function() {return view('faqs');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/users/{user}/edit', 'UserController@edit')->name('admin.user.edit');
Route::get('/purchases/{purchaseId}/edit', \App\Http\Livewire\Admin\Purchase\Update::class)->name('purchase.edit');


Route::resource('songs', SongComponent::class);
Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/login/google/callback', function () {
    $user = Socialite::driver('google')->user();
    // Haz lo que necesites con la información del usuario autenticado con Google
});

Route::get('/cartRedirect', function () {
    if (Auth::check()) {
        return redirect()->route('cart');
    } else {
        return redirect()->route('login');
    }
})->name('cartRedirect');