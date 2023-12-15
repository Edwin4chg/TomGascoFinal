<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Song;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard with purchase history.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Get the latest checkout for the user
        $latestCheckout = Purchase::where('user_id', $user->id)->latest()->first();

        if (!$latestCheckout) {
            return redirect()->route('store')->with('error', 'No se encontró información de compra.');
        }

        // Get the song IDs from the checkout
        $songIds = explode(',', $latestCheckout->song_ids);

        // Initialize an array to store song details
        $cartSongsDetails = [];

        // Get information for each song based on IDs
        foreach ($songIds as $songId) {
            $song = Song::find($songId, ['id', 'title', 'description', 'audio', 'price', 'photo']);

            // Check if the song is found
            if ($song) {
                // Add song information to the array
                $cartSongsDetails[] = [
                    'id' => $song->id,
                    'title' => $song->title,
                    'description' => $song->description,
                    'audio' => $song->audio,
                    'price' => $song->price,
                    'photo' => $song->photo,
                ];
            }
        }

        // Pass the song details to the view
        return view('home', ['cartSongsDetails' => $cartSongsDetails, 'latestCheckout' => $latestCheckout, 'user'=> $user]);
    }
}
