<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Purchase') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.purchase.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Purchase')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
        <div class="card-body">
            <!-- User Input -->
            <div class='form-group'>
                <label for='user_id' class='col-sm-2 control-label'>{{ __('User') }}</label>
                <select class="form-control" id="user_id" wire:model="user_id">
                    <option value="">Select User</option>
                    @foreach($users as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('user_id') <div class='text-danger'>{{ $message }}</div> @enderror
            </div>
            <!-- Song Input -->
            <div class='form-group'>
                <label for='song_id' class='col-sm-2 control-label'>{{ __('Song') }}</label>
                <select class="form-control" id="song_id" wire:model="song_id">
                    <option value="">Select Song</option>
                    @foreach($songs as $id => $title)
                    <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
                @error('song_id') <div class='text-danger'>{{ $message }}</div> @enderror
            </div>

            <!-- Currency Input -->
            <div class='form-group'>
                <label for='currency' class='col-sm-2 control-label'>{{ __('Currency') }}</label>
                <select class="form-control" id="currency" wire:model.lazy="currency">
                    <option value="">Select Currency</option>
                    <option value="soles">Soles</option>
                    <option value="dolares">Dólares</option>
                </select>
                @error('currency') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

            <!-- Mountpayed Input -->
            <div class='form-group'>
                <label for='mountpayed' class='col-sm-2 control-label'>{{ __('Mount Payed') }}</label>
                <input type='text' id='mountpayed' wire:model.lazy='mountpayed' class="form-control @error('mountpayed') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('mountpayed') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">{{ __('Create') }}</button>
                        <button type="button" class="btn btn-secondary ml-2" wire:click="cancel">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>