<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Customer')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Customer')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Customer')->create && hasPermission(getRouteName().'.customer.create', 1, 1))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.customer.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Customer') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Customer')->searchable())
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
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('name')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='name' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='name' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Name') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('lastName')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='lastName' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='lastName' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('LastName') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('email')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='email' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='email' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Email') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('country')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='country' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='country' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Country') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('region')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='region' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='region' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('Region') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('postalCode')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='postalCode' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='postalCode' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('PostalCode') }} </th>
                            <th scope="col" style='cursor: pointer; text-align: Center;' wire:click="sort('phoneNumber')"> <i class='fa @if($sortType == ' desc' and $sortColumn=='phoneNumber' ) fa-sort-amount-down ml-2 @elseif($sortType=='asc' and $sortColumn=='phoneNumber' ) fa-sort-amount-up ml-2 @endif'></i> {{ __('PhoneNumber') }} </th>

                            @if(getCrudConfig('Customer')->delete or getCrudConfig('Customer')->update)
                            <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($customers))
                            @foreach($customers as $customer)
                                @livewire('admin.customer.single', [$customer], key($customer->id))
                            @endforeach
                        @endif


                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $customers->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>