@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis Descargas') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Canción</th>
                                <th>Imagen</th>
                                <th>Precio Pagado</th>
                                <th>Moneda</th>
                                <th>Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartSongsDetails as $song)
                                <tr>
                                <td>
                                    @if($song['audio'])
                                        <audio controls preload="metadata" controlsList="nodownload">
                                            <source src="{{ asset('storage/' . $song['audio']) }}" type="audio/mp3">
                                            Tu navegador no soporta el elemento de audio.
                                        </audio>
                                        <a href="{{ asset('storage/' . $song['audio']) }}" download>
                                            <button class="btn btn-primary">Descargar</button>
                                        </a>
                                    @else
                                        No Audio
                                    @endif
                                </td>

                                    <td>
                                        <div class="image-holder text-center p-3 mb-4 border rounded-4">
                                            <img src="{{ asset('storage/' . $song['photo']) }}" alt="{{ $song['title'] }}" class="img-fluid" style="width: 250px; height: 250px; object-fit: cover; border-top-left-radius: 7px; border-top-right-radius: 7px;" data-bs-toggle="modal" data-bs-target="#productModal{{ $song['id'] }}">
                                        </div>
                                    </td>
                                    <td>{{ $song['price'] }}</td>
                                    <td>{{ $latestCheckout->currency }}</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
