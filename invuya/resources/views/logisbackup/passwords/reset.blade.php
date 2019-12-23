@extends('layouts.logis')

@section('content')
<div class="login100-form">
     <span class="login100-form-title">
     	Reset Kata Sandi
        </span>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        
                        <div class="wrap-input100 validate-input" data-validate = "Masukkan email yang benar">
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

                        <div class="wrap-input100 validate-input" data-validate = "Harap masukkan kata sandi anda">
                                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" placeholder="Kata Sandi" required autocomplete="new-password">
                                <span class="focus-input100"></span>
				        		<span class="symbol-input100">
			    				<i class="fa fa-lock" aria-hidden="true"></i>
						        </span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Harap masukkan ulang kata sandi anda">
                                <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                                <span class="focus-input100"></span>
				        		<span class="symbol-input100">
			    				<i class="fa fa-lock" aria-hidden="true"></i>
						        </span>
                            </div>

                            
                            <div class="container-login100-form-btn">
						        <button class="login100-form-btn">
							        Reset Kata Sandi
						        </button>
				        	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
