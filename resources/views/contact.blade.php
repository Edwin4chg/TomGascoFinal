<!DOCTYPE html>
<html>

<head>
    <title>Tom Gasco</title>
    <link rel="icon" href="/img/main-logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="Tom Gasco, Música, Peru">
    <meta name="description" content="Tienda de Tom Gasco - Música">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600&family=Nunito:wght@700;800;900;1000&display=swap" rel="stylesheet">
    <!-- script
        ================================================== -->
    <script src="{{ asset('/js/modernizr.js') }}"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0" id="intro">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/symbol" id="cart" viewBox="0 0 21 21">
            <g fill="none" fill-rule="evenodd">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M5 6.5h12.5l-1.586 5.55a2 2 0 0 1-1.923 1.45h-6.7a2 2 0 0 1-1.989-1.78L4.5 4.5h-2" />
                <g fill="currentColor" transform="translate(2 4)">
                    <circle cx="5" cy="12" r="1" />
                    <circle cx="13" cy="12" r="1" />
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 167 130" fill="none">
            <g clip-path="url(#clip0_95_7)">
                <path d="M27 7.79997C31 2.59996 35 -0.200036 39 -0.60003C43.4 -1.40002 47 -0.600019 49.8 1.79997C53 3.79997 54.8 6.99997 55.2 11.4C55.6 15.8 53.8 20.6 49.8 25.8C43.4 34.2 38.8 42.8 36 51.6C33.6 60 32.4 67.8 32.4 75L30.6 63C41 63 49.4 66 55.8 72C62.2 77.6 65.4 85.4 65.4 95.4C65.4 105 62.4 113 56.4 119.4C50.4 125.4 42.6 128.4 33 128.4C22.6 128.4 14.4 125 8.4 118.2C2.8 111 0 100.8 0 87.6C0 79.2 0.6 70.6 1.8 61.8C3.4 52.6 6.2 43.4 10.2 34.2C14.6 25 20.2 16.2 27 7.79997ZM126.6 7.79997C130.6 2.59996 134.6 -0.200036 138.6 -0.60003C143 -1.40002 146.6 -0.600019 149.4 1.79997C152.6 3.79997 154.4 6.99997 154.8 11.4C155.2 15.8 153.4 20.6 149.4 25.8C143 34.2 138.4 42.8 135.6 51.6C133.2 60 132 67.8 132 75L130.2 63C140.6 63 149 66 155.4 72C161.8 77.6 165 85.4 165 95.4C165 105 162 113 156 119.4C150 125.4 142.2 128.4 132.6 128.4C122.2 128.4 114 125 108 118.2C102.4 111 99.6 100.8 99.6 87.6C99.6 79.2 100.2 70.6 101.4 61.8C103 52.6 105.8 43.4 109.8 34.2C114.2 25 119.8 16.2 126.6 7.79997Z" fill="#F7E4E4" />
            </g>
            <defs>
                <clipPath id="clip0_95_7">
                    <rect width="167" height="130" fill="white" />
                </clipPath>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="6" r="4" />
                <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="wishlist" viewBox="0 0 24 24">
            <path fill="currentColor" d="m8.962 18.91l.464-.588l-.464.589ZM12 5.5l-.54.52a.75.75 0 0 0 1.08 0L12 5.5Zm3.038 13.41l.465.59l-.465-.59Zm-5.612-.588C7.91 17.127 6.253 15.96 4.938 14.48C3.65 13.028 2.75 11.334 2.75 9.137h-1.5c0 2.666 1.11 4.7 2.567 6.339c1.43 1.61 3.254 2.9 4.68 4.024l.93-1.178ZM2.75 9.137c0-2.15 1.215-3.954 2.874-4.713c1.612-.737 3.778-.541 5.836 1.597l1.08-1.04C10.1 2.444 7.264 2.025 5 3.06C2.786 4.073 1.25 6.425 1.25 9.137h1.5ZM8.497 19.5c.513.404 1.063.834 1.62 1.16c.557.325 1.193.59 1.883.59v-1.5c-.31 0-.674-.12-1.126-.385c-.453-.264-.922-.628-1.448-1.043L8.497 19.5Zm7.006 0c1.426-1.125 3.25-2.413 4.68-4.024c1.457-1.64 2.567-3.673 2.567-6.339h-1.5c0 2.197-.9 3.891-2.188 5.343c-1.315 1.48-2.972 2.647-4.488 3.842l.929 1.178ZM22.75 9.137c0-2.712-1.535-5.064-3.75-6.077c-2.264-1.035-5.098-.616-7.54 1.92l1.08 1.04c2.058-2.137 4.224-2.333 5.836-1.596c1.659.759 2.874 2.562 2.874 4.713h1.5Zm-8.176 9.185c-.526.415-.995.779-1.448 1.043c-.452.264-.816.385-1.126.385v1.5c.69 0 1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16l-.929-1.178Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314Z" />
        </symbol>
        <symbol id="dj" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <!-- Disco de vinilo -->
            <circle fill="#000000" cx="12" cy="12" r="10"></circle>
            <circle fill="#FFFFFF" cx="12" cy="12" r="8"></circle>
            <!-- Líneas del disco -->
            <circle fill="#000000" cx="12" cy="12" r="1.5"></circle>
            <circle fill="#000000" cx="12" cy="12" r="0.5"></circle>
            <line x1="12" y1="2" x2="12" y2="4" stroke="#000000" stroke-width="1.5"></line>
            <line x1="12" y1="20" x2="12" y2="22" stroke="#000000" stroke-width="1.5"></line>
            <line x1="2" y1="12" x2="4" y2="12" stroke="#000000" stroke-width="1.5"></line>
            <line x1="20" y1="12" x2="22" y2="12" stroke="#000000" stroke-width="1.5"></line>
            <!-- Aguja del tocadiscos -->
            <line x1="12" y1="6" x2="12" y2="12" stroke="#666666" stroke-width="0.5"></line>
            <circle fill="#6666666" cx="12" cy="6" r="0.5"></circle>
        </symbol>
    </svg>
    <div class="preloader">
        <div class="loader">
            <div class="dot">
                <svg xmlns="http://www.w3.org/2000/svg" id="nuevo-svg" height="32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icon" fill="#FFFFFF">
                        <path d="M28.002,7c0,-0.796 -0.316,-1.559 -0.878,-2.121c-0.563,-0.563 -1.326,-0.879 -2.122,-0.879c-4.184,0 -13.818,0 -18.002,0c-0.796,-0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,4.184 0,13.816 0,18c-0,0.796 0.316,1.559 0.879,2.121c0.562,0.563 1.325,0.879 2.121,0.879c4.184,0 13.818,0 18.002,0c0.796,0 1.559,-0.316 2.122,-0.879c0.562,-0.562 0.878,-1.325 0.878,-2.121l0,-18Zm-2,0l0,18c0,0.265 -0.105,0.52 -0.292,0.707c-0.188,0.188 -0.442,0.293 -0.708,0.293l-18.002,0c-0.265,0 -0.52,-0.105 -0.707,-0.293c-0.188,-0.187 -0.293,-0.442 -0.293,-0.707l0,-18c-0,-0.265 0.105,-0.52 0.293,-0.707c0.187,-0.188 0.442,-0.293 0.707,-0.293l18.002,-0c0.266,-0 0.52,0.105 0.708,0.293c0.187,0.187 0.292,0.442 0.292,0.707Z" />
                        <path d="M14.006,8c-3.311,0 -6,2.689 -6,6c0,3.311 2.689,6 6,6c3.312,0 6,-2.689 6,-6c0,-3.311 -2.688,-6 -6,-6Zm0,2c2.208,0 4,1.792 4,4c0,2.208 -1.792,4 -4,4c-2.207,0 -4,-1.792 -4,-4c0,-2.208 1.793,-4 4,-4Z" />
                        <path d="M22,9.021l0,7.565c0,-0 -1.736,1.736 -1.736,1.736c-0.39,0.39 -0.39,1.024 -0,1.414c0.39,0.39 1.024,0.39 1.414,0l2.029,-2.029c0.188,-0.187 0.293,-0.442 0.293,-0.707l0,-7.979c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1Z" />
                        <circle cx="8.999" cy="22.999" r="1.001" />
                        <circle cx="12.999" cy="22.999" r="1.001" />
                        <circle cx="16.999" cy="22.999" r="1.001" />
                        <circle cx="14.006" cy="13.995" r="1.001" />
                    </g>
                </svg>
            </div>
            <div class="dot">
                <svg xmlns="http://www.w3.org/2000/svg" id="nuevo-svg" height="32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icon" fill="#FFFFFF">
                        <path d="M28.002,7c0,-0.796 -0.316,-1.559 -0.878,-2.121c-0.563,-0.563 -1.326,-0.879 -2.122,-0.879c-4.184,0 -13.818,0 -18.002,0c-0.796,-0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,4.184 0,13.816 0,18c-0,0.796 0.316,1.559 0.879,2.121c0.562,0.563 1.325,0.879 2.121,0.879c4.184,0 13.818,0 18.002,0c0.796,0 1.559,-0.316 2.122,-0.879c0.562,-0.562 0.878,-1.325 0.878,-2.121l0,-18Zm-2,0l0,18c0,0.265 -0.105,0.52 -0.292,0.707c-0.188,0.188 -0.442,0.293 -0.708,0.293l-18.002,0c-0.265,0 -0.52,-0.105 -0.707,-0.293c-0.188,-0.187 -0.293,-0.442 -0.293,-0.707l0,-18c-0,-0.265 0.105,-0.52 0.293,-0.707c0.187,-0.188 0.442,-0.293 0.707,-0.293l18.002,-0c0.266,-0 0.52,0.105 0.708,0.293c0.187,0.187 0.292,0.442 0.292,0.707Z" />
                        <path d="M14.006,8c-3.311,0 -6,2.689 -6,6c0,3.311 2.689,6 6,6c3.312,0 6,-2.689 6,-6c0,-3.311 -2.688,-6 -6,-6Zm0,2c2.208,0 4,1.792 4,4c0,2.208 -1.792,4 -4,4c-2.207,0 -4,-1.792 -4,-4c0,-2.208 1.793,-4 4,-4Z" />
                        <path d="M22,9.021l0,7.565c0,-0 -1.736,1.736 -1.736,1.736c-0.39,0.39 -0.39,1.024 -0,1.414c0.39,0.39 1.024,0.39 1.414,0l2.029,-2.029c0.188,-0.187 0.293,-0.442 0.293,-0.707l0,-7.979c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1Z" />
                        <circle cx="8.999" cy="22.999" r="1.001" />
                        <circle cx="12.999" cy="22.999" r="1.001" />
                        <circle cx="16.999" cy="22.999" r="1.001" />
                        <circle cx="14.006" cy="13.995" r="1.001" />
                    </g>
                </svg>
            </div>
            <div class="dot">
                <svg xmlns="http://www.w3.org/2000/svg" id="nuevo-svg" height="32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 32 32" width="100%" xml:space="preserve" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icon" fill="#FFFFFF">
                        <path d="M28.002,7c0,-0.796 -0.316,-1.559 -0.878,-2.121c-0.563,-0.563 -1.326,-0.879 -2.122,-0.879c-4.184,0 -13.818,0 -18.002,0c-0.796,-0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,4.184 0,13.816 0,18c-0,0.796 0.316,1.559 0.879,2.121c0.562,0.563 1.325,0.879 2.121,0.879c4.184,0 13.818,0 18.002,0c0.796,0 1.559,-0.316 2.122,-0.879c0.562,-0.562 0.878,-1.325 0.878,-2.121l0,-18Zm-2,0l0,18c0,0.265 -0.105,0.52 -0.292,0.707c-0.188,0.188 -0.442,0.293 -0.708,0.293l-18.002,0c-0.265,0 -0.52,-0.105 -0.707,-0.293c-0.188,-0.187 -0.293,-0.442 -0.293,-0.707l0,-18c-0,-0.265 0.105,-0.52 0.293,-0.707c0.187,-0.188 0.442,-0.293 0.707,-0.293l18.002,-0c0.266,-0 0.52,0.105 0.708,0.293c0.187,0.187 0.292,0.442 0.292,0.707Z" />
                        <path d="M14.006,8c-3.311,0 -6,2.689 -6,6c0,3.311 2.689,6 6,6c3.312,0 6,-2.689 6,-6c0,-3.311 -2.688,-6 -6,-6Zm0,2c2.208,0 4,1.792 4,4c0,2.208 -1.792,4 -4,4c-2.207,0 -4,-1.792 -4,-4c0,-2.208 1.793,-4 4,-4Z" />
                        <path d="M22,9.021l0,7.565c0,-0 -1.736,1.736 -1.736,1.736c-0.39,0.39 -0.39,1.024 -0,1.414c0.39,0.39 1.024,0.39 1.414,0l2.029,-2.029c0.188,-0.187 0.293,-0.442 0.293,-0.707l0,-7.979c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1Z" />
                        <circle cx="8.999" cy="22.999" r="1.001" />
                        <circle cx="12.999" cy="22.999" r="1.001" />
                        <circle cx="16.999" cy="22.999" r="1.001" />
                        <circle cx="14.006" cy="13.995" r="1.001" />
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasLogin" aria-labelledby="My Login">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="login-detail">
                <div class="login-form p-0">
                    <div class="col-lg-12 mx-auto">
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    <div>
                                        <a href="{{ url('/login/google') }}">Iniciar sesión con Google</a>
                                    </div>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center">
            </div>
        </div>
    </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="cart-container" class="list-group mb-3">
                <h4 class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
                    <span class="text-secondary">Your Cart</span>
                    <span class="badge bg-dark rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Cotton Outlay</h6>
                            <small class="text-body-secondary">Brief Description</small>
                        </div>
                        <span class="text-body-secondary">$320</span>
                    </li>

                    <li class="list-group-item border-0 d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$960</strong>
                    </li>
                </ul>
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Checkout</button>
            </div>
        </div>
    </div>

    <!-- BOTON DE SCROLL -->
    <div id="scroll-top-btn" class="bg-light rounded-pill text-primary position-fixed">
        <svg class="dj" width="50" height="50">
            <use xlink:href="#dj"></use>
        </svg>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasLogin" aria-labelledby="My Login">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="login-detail">


                @if (Auth::check())
                <!-- Mostrar mensaje de bienvenida para usuarios autenticados -->
                <div class="welcome-message">
                    <p>Bienvenido, {{ Auth::user()->name }}!</p>
                    <a href="//www.aliexpress.com/p/order/index.html?spm=a2g0o.cart.headerAcount.2.5c177a9dAYsjo9" data-spm-anchor-id="a2g0o.cart.headerAcount.2">
                        <span class="comet-icon comet-icon-orders my-account--icon--16yzkFW">
                            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/audio-wave--v1.png" alt="audio-wave--v1" />
                        </span>
                        <span class="my-account--menuText--1km-qni">Mis Descargas</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin-top: 15px;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Salir</button>
                    </form>
                </div>


                @elseif (session('google_name'))
                <!-- Mostrar mensaje de bienvenida para usuarios de Google -->
                <div class="welcome-message">
                    <p>Bienvenido, {{ session('google_name')}}!</p>
                    <a href="//www.aliexpress.com/p/order/index.html?spm=a2g0o.cart.headerAcount.2.5c177a9dAYsjo9" data-spm-anchor-id="a2g0o.cart.headerAcount.2">
                        <span class="comet-icon comet-icon-orders my-account--icon--16yzkFW">
                            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/audio-wave--v1.png" alt="audio-wave--v1" />
                        </span>
                        <span class="my-account--menuText--1km-qni">Mis Descargas</span>
                    </a>
                    <!-- ... Resto de tu código para usuarios de Google ... -->
                    <!-- ... -->
                </div>



                @else
                <!-- Mostrar formulario de inicio de sesión para usuarios no autenticados -->
                <div class="login-form p-0">
                    <div class="col-lg-12 mx-auto">
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0 secciongoogle">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    <div>
                                        <a href="{{ url('/login/google') }}">Iniciar sesión con Google</a>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center"></div>
        </div>
    </div>


    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="cart-container" class="list-group mb-3">
                <h4 class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
                    <span class="text-secondary">Your Cart</span>
                    <span class="badge bg-dark rounded-pill">{{ isset($cartSongs) ? $cartSongs->count() : 0 }}</span>
                </h4>

                <ul class="list-group mb-3">
                    @forelse($cartSongs ?? [] as $cartSong)
                    <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{ $cartSong->song_title }}</h6>
                            <small class="text-body-secondary">{{ $cartSong->song_description }}</small>
                        </div>
                        <span class="text-body-secondary">${{ $cartSong->price }}</span>
                        <a class="btn btn-danger btn-lg" href="{{ url('/cart/empty') }}">X</a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 text-center">
                        Your cart is empty.
                    </li>
                    @endforelse
                </ul>

                <a class="w-100 btn btn-primary btn-lg mb-1" href="{{ url('/cart') }}"> Ver Carrito</a>
                <a class="w-100 btn btn-primary btn-lg mb-1" href="{{ url('/checkout') }}">Ir a Pagar</a>
            </div>
        </div>
    </div>











    <!-- HEADER -->
    <header id="header" class="site-header bg-light py-3">
        <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
            <div class="container-lg">
                <a class="navbar-brand me-5" href="#">
                    <img src="{{ asset('/img/main-logo.png') }}" alt="Logotom">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <svg class="navbar-icon" width="35" height="35">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header justify-content-center">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body align-items-center">
                        <ul class="navbar-nav ms-5 flex-grow-1 pe-3">
                            <li class="nav-item ms-3">
                                <a class="nav-link text-dark active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link text-dark" href="{{ url('/about') }}">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item ms-3 dropdown text-darkk">
                                <a class="nav-link text-dark" href="{{ url('/store') }}"> Tienda</a>
                            </li>
                            <li class="nav-item ms-3 dropdown text-darkk">
                                <a class="nav-link text-dark" href="{{ url('/contact') }}"> Contáctanos</a>
                            </li>
                        </ul>
                        <div class="navbar-users">
                            <ul class="user-items list-unstyled d-none d-lg-flex justify-content-end align-items-center order-3 flex-grow-1 gap-4 m-0">
                                <li>
                                    <svg class="search" width="18" height="18">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                    <input type="text" placeholder="Search Here..." class="outline-none border-0 bg-transparent fst-italic">
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin" aria-controls="offcanvasLogin">
                                        <svg class="user" width="18" height="18">
                                            <use xlink:href="#user"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin" aria-controls="offcanvasLogin">
                                        <svg class="wishlist" width="18" height="18">
                                            <use xlink:href="#wishlist"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <section id="privacy-policy" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-heading text-center">Formulario de Contacto</h2>
                        <!-- Formulario de contacto -->
                        <div id="mc_embed_shell">
                            <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
                            <style type="text/css">
                                #mc_embed_signup {
                                    background: #fff;
                                    clear: left;
                                    font: 14px Helvetica, Arial, sans-serif;
                                    width: 600px;
                                }

                                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                            </style>
                            <div id="mc_embed_signup">
                                <form action="https://edwin4chg.us11.list-manage.com/subscribe/post?u=ce4ebaff0a9c915dd1ecd440c&amp;id=c05ae49dec&amp;f_id=00e29ae0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                                    <div id="mc_embed_signup_scroll">
                                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                        <div class="mc-field-group"><label for="mce-FNAME">Nombre </label><input type="text" name="FNAME" class=" text" id="mce-FNAME" value=""></div>
                                        <div class="mc-field-group"><label for="mce-LNAME">Apellido </label><input type="text" name="LNAME" class=" text" id="mce-LNAME" value=""></div>
                                        <div class="mc-field-group"><label for="mce-PHONE">Número Telefónico <span class="asterisk">*</span></label><input type="text" name="PHONE" class="REQ_CSS" id="mce-PHONE" value=""></div>
                                        <div class="mc-field-group"><label for="mce-EMAIL">Correo Electrónico <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text">gasco@gmail.com</span></div>
                                        <div id="mce-responses" class="clear foot">
                                            <div class="response" id="mce-error-response" style="display: none;"></div>
                                            <div class="response" id="mce-success-response" style="display: none;"></div>
                                        </div>
                                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                                            /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                                            <input type="text" name="b_ce4ebaff0a9c915dd1ecd440c_c05ae49dec" tabindex="-1" value="">
                                        </div>
                                        <div class="optionalParent">
                                            <div class="clear foot">
                                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
                                                <p style="margin: 0px auto;"><a href="http://eepurl.com/ih9t0n" title="Mailchimp: marketing por correo electrónico fácil y divertido"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                            <script type="text/javascript">
                                (function($) {
                                    window.fnames = new Array();
                                    window.ftypes = new Array();
                                    fnames[1] = 'FNAME';
                                    ftypes[1] = 'text';
                                    fnames[2] = 'LNAME';
                                    ftypes[2] = 'text';
                                    fnames[4] = 'PHONE';
                                    ftypes[4] = 'phone';
                                    fnames[0] = 'EMAIL';
                                    ftypes[0] = 'email';
                                    fnames[3] = 'ADDRESS';
                                    ftypes[3] = 'address';
                                    fnames[5] = 'BIRTHDAY';
                                    ftypes[5] = 'birthday';
                                }(jQuery));
                                var $mcj = jQuery.noConflict(true);
                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer id="footer" class="position-relative bg-light py-lg-7 my-lg-7 mb-lg-0">
        <div class="cloud-overlay position-absolute overflow-x-hidden w-100">
            <img src="{{ asset('img/cloud-pattern-overlay.png') }}" alt="icon overlay">
        </div>
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Enlaces Rapidos</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item pb-2">
                                <a href="{{ url('/') }}" class="item-anchor">Inicio</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="{{ url('/about') }}" class="item-anchor">Sobre Nosotros</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="{{ url('/store') }}" class="item-anchor">Tienda</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="#intro" class="item-anchor">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Ayuda</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item pb-2">
                                <a href="faqs.html" class="item-anchor">Preguntas Frecuentes</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="#" class="item-anchor">Privacidad</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="#" class="item-anchor">Terminos y Condiciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Redes Sociales</h5>
                        <div class="social-links">
                            <ul class="list-unstyled">
                                <li class="fw-medium pb-2">
                                    <a href="https://www.facebook.com/djtom.gasco" target="_blank">Facebook </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="https://www.instagram.com/tomgasco_oficial/" target="_blank">Instagram </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="https://www.youtube.com/@tomgasco" target="_blank">YouTube </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="https://open.spotify.com/intl-es/artist/1vOhZgMha9ipDuPboeQJ7E?si=12R9lKo8TYO0GZncgEgh7w" target="_blank">Spotify</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Contactanos</h5>
                        <div class="social-links">
                            <ul class="list-unstyled">
                                <li class="fw-medium pb-2">
                                    <a href="https://Wa.me/+51933757320" target="_blank">Whatsapp </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="mailto:info@tomgasco.com">info@tomgasco.com</a>
                                </li>
                                <li class="fw-medium pb-2">Trujillo - Perú</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-bottom py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 mb-3">
                    <div class="d-flex flex-wrap align-items-center">
                        <img src="{{asset('/img/main-logo.png')}}" alt="Logotom" class="pe-5">
                        <p class="m-0">©2023 TomGasco. Todos los derechos reservados.</p>
                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                            @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('/js/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>

</html>