<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Song')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Song')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Song')->create && hasPermission(getRouteName().'.song.create', 1, 1))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.song.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Song') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Song')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin"></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style='cursor: pointer; width:200px; text-align: center;' wire:click="sort('title')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='title' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='title' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Title') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: center;'' wire:click="sort('price')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='price' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='price' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Price') }} </th>
                            <!--<th scope="col" style='cursor: pointer' wire:click="sort('description')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'description') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'description') fa-sort-amount-up ml-2 @endif'></i> {{ __('Description') }} </th> -->
                            <th scope="col" style='cursor: pointer; text-align: center;'' wire:click="sort('audio')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='audio' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='audio' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Audio') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: center;'' wire:click="sort('photo')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='photo' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='photo' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Photo') }} </th>
                            <!--<th scope="col" style='cursor: pointer' wire:click="sort('keywords')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'keywords') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'keywords') fa-sort-amount-up ml-2 @endif'></i> {{ __('Keywords') }} </th> -->
                            <th scope="col" style='cursor: pointer; text-align: center;'' wire:click="sort('artist')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='artist' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='artist' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Artist') }} </th>

                            @if(getCrudConfig('Song')->delete or getCrudConfig('Song')->update)
                            <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($songs as $song)
                        @livewire('admin.song.single', [$song], key($song->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $songs->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>