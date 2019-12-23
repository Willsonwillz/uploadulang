@extends('layouts.logis')

@section('content')

                <div class="login100-form validate-form"> 
                <span class="login100-form-title">
                	Masuk
                    <p>Masukkan Email dan Kata Sandi anda</p>
                    </span>
                

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="wrap-input100 validate-input" data-validate = "Harap masukkan Email yang benar">
                                <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="focus-input100"></span>
        						<span class="symbol-input100">
		    					<i class="fa fa-envelope" aria-hidden="true"></i>
			        			</span>
                          
                
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            <div class="login100-form validate-input" data-validate = "Harap masukkan Password anda">
                                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                <span class="focus-input100"></span>
				        		<span class="symbol-input100">
			    				<i class="fa fa-lock" aria-hidden="true"></i>
						        </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert-validate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                         
                        

                            <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Masuk
						</button>
					</div>

                    @if (Route::has('password.request'))

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="{{ route('password.request') }}">
							Email / Password?
						</a>
					</div>
                    @endif

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('register') }}">
							Buat akun pengguna baru
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                       


                    </form>
                </div>
@endsection
