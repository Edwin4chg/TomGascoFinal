<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Customer') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.customer.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Customer')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- LastName Input -->
            <div class='form-group'>
                <label for='input-lastName' class='col-sm-2 control-label '> {{ __('LastName') }}</label>
                <input type='text' id='input-lastName' wire:model.lazy='lastName' class="form-control  @error('lastName') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('lastName') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Email Input -->
            <div class='form-group'>
                <label for='input-email' class='col-sm-2 control-label '> {{ __('Email') }}</label>
                <input type='text' id='input-email' wire:model.lazy='email' class="form-control  @error('email') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('email') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Country Input -->
            <div class='form-group'>
                <label for='input-country' class='col-sm-2 control-label'> {{ __('Country') }}</label>
                <select id='input-country' wire:model.lazy='country' class="form-select @error('country') is-invalid @enderror" autocomplete='on'>
                    <option value="" selected disabled>{{ __('Select Country') }}</option>
                    <option value="Peru">Perú</option>
                    <!-- Agrega más opciones según tus necesidades -->
                </select>
                @error('country') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Region Input -->
            <div class='form-group'>
                <label for='input-region' class='col-sm-2 control-label'> {{ __('Region') }}</label>
                <select id='input-region' wire:model.lazy='region' class="form-select @error('region') is-invalid @enderror" autocomplete='on'>
                    <option value="" selected disabled>{{ __('Select Region') }}</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Ancash">Ancash</option>
                    <option value="Apurimac">Apurimac</option>
                    <option value="Arequipa">Arequipa</option>
                    <option value="Ayacucho">Ayacuchoa</option>
                    <option value="Cajamarca">Cajamarca</option>
                    <option value="Callao">Callao</option>
                    <option value="Cusco">Cusco</option>
                    <option value="Huancavelica">Huancavelica</option>
                    <option value="Huanuco">Huanuco</option>
                    <option value="Ica">Ica</option>
                    <option value="Junin">Junin</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Lambayeque">Lambayeque</option>
                    <option value="Lima">Lima</option>
                    <option value="Loreto">Loreto</option>
                    <option value="Madre de Dios">Madre de Dios</option>
                    <option value="Moquegua">Moquegua</option>
                    <option value="Pasco">Pasco</option>
                    <option value="Piura">Piura</option>
                    <option value="Puno">Puno</option>
                    <option value="San Martin">San Martín</option>
                    <option value="Tacna">Tacna</option>
                    <option value="Tumbes">Tumbes</option>
                    <option value="Ucayali">Ucayali</option>
                </select>
                @error('region') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- PostalCode Input -->
            <div class='form-group'>
                <label for='input-postalCode' class='col-sm-2 control-label '> {{ __('PostalCode') }}</label>
                <input type='number' id='input-postalCode' wire:model.lazy='postalCode' class="form-control  @error('postalCode') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('postalCode') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- PhoneNumber Input -->
            <div class='form-group'>
                <label for='input-phoneNumber' class='col-sm-2 control-label '> {{ __('PhoneNumber') }}</label>
                <input type='number' id='input-phoneNumber' wire:model.lazy='phoneNumber' class="form-control  @error('phoneNumber') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('phoneNumber') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.customer.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
