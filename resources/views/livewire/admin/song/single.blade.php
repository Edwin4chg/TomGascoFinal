<tr x-data="{ modalIsOpen : false }">
    <td class="" style="width:200px">{{ $song->title }}</td>
    <td class="">{{ $song->price }}</td>
    <!--<td class="">{{ $song->description }}</td> -->
    <td>
        @if($song->audio)
            <audio controls>
                <source src="{{ asset('storage/' . $song->audio) }}" type="audio/mp3">
                Tu navegador no soporta el elemento de audio.
            </audio>
        @else
            No Audio
        @endif
    </td>
    <td>
        @if($song->photo)
            <img src="{{ asset('storage/' . $song->photo) }}" alt="Song Photo" width="100" height="100">
        @else
            No Image
        @endif
    </td>
    <!-- <td class="">{{ $song->keywords }}</td>-->
    <td class="">{{ $song->artist }}</td>
    
    @if(getCrudConfig('Song')->delete or getCrudConfig('Song')->update)
        <td>

            @if(getCrudConfig('Song')->update && hasPermission(getRouteName().'.song.update', 1, 1, $song))
                <a href="@route(getRouteName().'.song.update', $song->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Song')->delete && hasPermission(getRouteName().'.song.delete', 1, 1, $song))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Song') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Song') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
