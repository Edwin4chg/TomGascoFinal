<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Checkout;
use App\Models\Song;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function viewCard(Request $request)
{
    $user = auth()->user();

    // Obtiene el checkout del usuario
    $latestCheckout = Checkout::where('user_id', $user->id)->latest()->first();

    if (!$latestCheckout) {
        return redirect()->route('store')->with('error', 'No se encontró información de compra.');
    }

    // Obtiene los IDs de canciones desde la cadena en la tabla de checkouts
    $songIds = explode(',', $latestCheckout->song_ids);

    // Inicializa un array para almacenar la información de cada canción
    $cartSongsDetails = [];

    // Obtiene la información de las canciones basada en los IDs
    foreach ($songIds as $songId) {
        $song = Song::select('id', 'title', 'description', 'price', 'photo')->find($songId);

        // Verifica si se encontró la canción
        if ($song) {
            // Agrega la información al array
            $cartSongsDetails[] = [
                'id' => $song->id,
                'title' => $song->title,
                'description' => $song->description,
                'price' => $song->price,
                'photo' => $song->photo,
            ];
        }
    }

    // Obtén el orderId
    $orderId = $latestCheckout->orderId;

    // Calcula el precio total del carrito desde la tabla de checkouts
    $totalPrice = $latestCheckout->price;

    // Obtén el email y el nombre del usuario
    $userEmail = $user->email;
    $fullName = $user->name;

    // Divide el nombre en palabras
    $nameParts = explode(' ', $fullName);

    // Asigna las palabras a las variables $namee y $lastname
    $namee = isset($nameParts[0]) ? $nameParts[0] : ''; // Primer nombre
    $lastname = isset($nameParts[1]) ? $nameParts[1] : 'Apellido'; // Segundo nombre o 'Apellido' si no hay segundo nombre

    return view('checkout', compact('cartSongsDetails', 'orderId', 'totalPrice', 'userEmail', 'namee', 'lastname'));
}

    
    public function process($orderId)
    {
        // Asegúrate de que $orderId esté presente antes de continuar
        if (!$orderId) {
            return redirect()->route('home')->with('error', 'Error processing the purchase. Invalid orderId.');
        }

        // Obtiene el usuario autenticado
        $user = Auth::user();

        // Registra la compra en la tabla purchases
        $purchaseSuccess = $this->registerPurchase($orderId, $user);

        if ($purchaseSuccess) {
            // Elimina la entrada correspondiente en la tabla checkouts
            Checkout::where('orderId', $orderId)->delete();

            return redirect()->route('home')->with('success', 'Purchase completed successfully.');
        } else {
            return redirect()->route('home')->with('error', 'Error processing the purchase. Please try again.');
        }
    }

    private function registerPurchase($orderId, $user)
    {
        try {
            // Obtén el checkout correspondiente al orderId
            $checkout = Checkout::where('orderId', $orderId)->first();

            // Verifica si se encontró el checkout
            if (!$checkout) {
                return false;
            }
            // Inserta la compra en la tabla purchases
            Purchase::create([
                'user_id' => $checkout->user_id,
                'song_ids' => $checkout->song_ids,
                'currency' => 'USD', // Puedes ajustar la moneda según tus necesidades
                'mountpayed' => $checkout->price,
            ]);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}
