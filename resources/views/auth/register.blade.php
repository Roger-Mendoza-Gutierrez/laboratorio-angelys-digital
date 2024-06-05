{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin_template/assets/images/favicon-32x32.png') }}" type="image/png"/>
	<!--plugins-->
	<link href="{{ asset('admin_template/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
	<link href="{{ asset('admin_template/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"/>
	<link href="{{ asset('admin_template/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<!-- loader-->
	<link href="{{ asset('admin_template/assets/css/pace.min.css"') }} rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('admin_template/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_template/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('admin_template/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_template/assets/css/icons.css') }}" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="assets/images/logo-icon.png" width="60" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Registrate</h5>
										<p class="mb-0">Laboratorio Angely's Digital</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action="{{ route('register') }}" method="POST">
                                            @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Nombre</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Correo</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Contraseña</label>
												<div class="input-group" id="show_hide_password">
                                                    <input id="password" type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Repetir contraseña</label>
												<div class="input-group" id="show_hide_password">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
											</div>
											{{-- <div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end"><a href="auth-basic-forgot-password.html">Forgot Password ?</a>
											</div> --}}
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Registrarse</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span>O REGISTRATE CON</span>
										<hr/>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="#" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="#" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="#" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="#" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin_template/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('admin_template/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_template/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin_template/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin_template/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('admin_template/assets/js/app.js') }}"></script>
</body>

</html>
