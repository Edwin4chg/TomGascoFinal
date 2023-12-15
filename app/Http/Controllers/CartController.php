<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Models\Cart;
use App\Models\Checkout;

class CartController extends Controller
{
    public function addToCart($songId)
    {
        $song = Song::find($songId);

        if (!$song) {
            return redirect()->route('store')->with('error', 'Song not found');
        }

        $user = Auth::user();

        if (!$user) {
            // El usuario no está autenticado, redirígelo al inicio de sesión
            return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para comprar.');
        }

        if ($user) {
            // Verifica si la canción ya está en el carrito del usuario
            $existingCartItem = Cart::where('user_id', $user->id)->where('song_id', $song->id)->first();

            if ($existingCartItem) {
                // Si la canción ya está en el carrito, muestra un mensaje de error
                return redirect()->route('store')->with('error', 'Solo puedes comprar una copia por vez.');
            }

            // Agrega la canción al carrito del usuario
            Cart::create([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_email' => $user->email,
                'user_photo' => $user->photo,
                'song_id' => $song->id,
                'song_title' => $song->title,
                'song_price' => $song->price,
                'song_description' => $song->description,
                'song_audio' => $song->audio,
                'song_photo' => $song->photo,
                'song_keywords' => $song->keywords,
                'song_artist' => $song->artist,
                'price' => $song->price,
            ]);

            return redirect()->route('store')->with('success', 'Canción agregada al carrito.');
        } else {
            // El usuario no está autenticado, puedes manejar este caso según tus necesidades
            return redirect()->route('register')->with('error', 'Necesitar Iniciar Sesion para comprar.');
        }
    }

    public function viewCart()
    {
        $cartSongs = Cart::where('user_id', auth()->id())->get();

        return view('cart', compact('cartSongs'));
    }

    public function showStore()
    {
        $allSongs = Song::select('id', 'title', 'description', 'audio', 'price', 'photo')->get();
        $cartSongs = Cart::where('user_id', auth()->id())->get();

        return view('store', ['allSongs' => $allSongs, 'cartSongs' => $cartSongs]);
    }

    public function emptyCart()
    {
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('store')->with('success', 'Carrito vaciado exitosamente.');
    }

    public function removeFromCart($cartItemId)
    {
        $user = Auth::user();

        if ($user) {
            // Busca el elemento del carrito por su ID y el ID del usuario
            $cartItem = Cart::where('user_id', $user->id)->where('id', $cartItemId)->first();

            if ($cartItem) {
                // Elimina el elemento del carrito
                $cartItem->delete();

                return redirect()->route('store')->with('success', 'Producto eliminado del carrito exitosamente.');
            } else {
                return redirect()->route('store')->with('error', 'El producto no se encuentra en tu carrito.');
            }
        } else {
            return redirect()->route('register')->with('error', 'Necesitas iniciar sesión para eliminar productos del carrito.');
        }
    }

    public function removeCart($cartItemId)
    {
        $user = Auth::user();

        if ($user) {
            // Busca el elemento del carrito por su ID y el ID del usuario
            $cartItem = Cart::where('user_id', $user->id)->where('id', $cartItemId)->first();

            if ($cartItem) {
                // Elimina el elemento del carrito
                $cartItem->delete();

                return redirect()->route('cart')->with('success', 'Producto eliminado del carrito exitosamente.');
            } else {
                return redirect()->route('cart')->with('error', 'El producto no se encuentra en tu carrito.');
            }
        } else {
            return redirect()->route('register')->with('error', 'Necesitas iniciar sesión para eliminar productos del carrito.');
        }
    }

    public function tcheckout()
    {
        // Obtén al usuario autenticado
        $user = Auth::user();
    
        // Verifica si el usuario está autenticado
        if (!$user) {
            return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para comprar.');
        }
    
        // Obtén las canciones en el carrito del usuario actual
        $cartSongs = Cart::where('user_id', $user->id)->get();
    
        // Verifica si hay canciones en el carrito
        if ($cartSongs->isEmpty()) {
            return redirect()->route('store')->with('error', 'Tu carrito está vacío.');
        }
    
        // Obtiene una colección de IDs de canciones
        $songIds = $cartSongs->pluck('song_id')->toArray();
    
        // Verifica si se obtuvieron IDs de canciones
        if (empty($songIds)) {
            return redirect()->route('store')->with('error', 'No se pudieron obtener los IDs de las canciones.');
        }
    
        // Calcula el precio total del carrito
        $totalPrice = $cartSongs->sum('price');
    
        // Crea un nuevo checkout para el usuario
        $customCheckoutVariableName = Checkout::create([
            'user_id' => $user->id,
            'song_ids' => implode(',', $songIds), // Almacena los IDs de canciones como una cadena separada por comas
            'price' => $totalPrice,
        ]);
    
        // Vacía el carrito después de realizar el checkout
        Cart::where('user_id', $user->id)->delete();
    
        // Redirige a la vista checkout
        return redirect()->route('checkout');
    }
    


}
