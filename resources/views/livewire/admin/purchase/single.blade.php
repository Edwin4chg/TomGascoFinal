<tr x-data="{ modalIsOpen : false }">
    <td>{{ $purchase->user_id }}</td>
    <td>{{ $purchase->song_id }}</td>
    <td>{{ $purchase->currency }}</td>
    <td>{{ $purchase->mountpayed }}</td>

    @if(getCrudConfig('Purchase')->delete or getCrudConfig('Purchase')->update)
    <td>
        @if(getCrudConfig('Purchase')->delete && hasPermission(getRouteName().'.purchase.delete', 1, 0, $purchase))
        
        <a href="{{ route('purchase.edit', $purchase->id) }}" class="btn text-primary mt-1 ml-2">
            <i class="icon-pencil"></i>
        </a>
        <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
            <i class="icon-trash"></i>
        </button>

        <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
            <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false">
                <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Purchase') ]) }}</h5>
                <p>{{ __('DeleteMessage', ['name' => __('Purchase') ]) }}</p>
                <div class="mt-1 d-flex justify-content-between">
                    <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                    <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                </div>
            </div>
        </div>
        @endif
    </td>
    @endif
</tr>