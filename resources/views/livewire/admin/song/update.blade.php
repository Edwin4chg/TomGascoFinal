<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Song') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.song.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Song')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Title Input -->
            <div class='form-group'>
                <label for='input-title' class='col-sm-2 control-label '> {{ __('Title') }}</label>
                <input type='text' id='input-title' wire:model.lazy='title' class="form-control  @error('title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Price Input -->
            <div class='form-group'>
                <label for='input-price' class='col-sm-2 control-label '> {{ __('Price') }}</label>
                <input type='number' id='input-price' wire:model.lazy='price' class="form-control  @error('price') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('price') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description Input -->
            <div class='form-group'>
                <label for='input-description' class='col-sm-2 control-label '> {{ __('Description') }}</label>
                <textarea id="input-description" wire:model.lazy='description' class="form-control  @error('description') is-invalid @enderror" placeholder='' autocomplete='on'></textarea>
                @error('description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Audio Input -->
            <div class='form-group'>
                <label for='input-audio' class='col-sm-2 control-label '> {{ __('Audio') }}</label>
                <input type='file' id='input-audio' wire:model='audio' class="form-control-file  @error('audio') is-invalid @enderror">
                @if($audio and !$errors->has('audio') and $audio instanceof Illuminate\Http\UploadedFile and $audio->isPreviewable())
                    <a href="{{ $audio->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $audio->temporaryUrl() }}" alt=""></a>
                @endif
                @error('audio') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Photo Input -->
            <div class='form-group'>
                <label for='input-photo' class='col-sm-2 control-label '> {{ __('Photo') }}</label>
                <input type='file' id='input-photo' wire:model='photo' class="form-control-file  @error('photo') is-invalid @enderror">
                @if($photo and !$errors->has('photo') and $photo instanceof Illuminate\Http\UploadedFile and $photo->isPreviewable())
                    <a href="{{ $photo->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $photo->temporaryUrl() }}" alt=""></a>
                @endif
                @error('photo') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Keywords Input -->
            <div class='form-group'>
                <label for='input-keywords' class='col-sm-2 control-label '> {{ __('Keywords') }}</label>
                <input type='text' id='input-keywords' wire:model.lazy='keywords' class="form-control  @error('keywords') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('keywords') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Artist Input -->
            <div class='form-group'>
                <label for='input-artist' class='col-sm-2 control-label '> {{ __('Artist') }}</label>
                <input type='text' id='input-artist' wire:model.lazy='artist' class="form-control  @error('artist') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('artist') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.song.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
