@extends('layouts.logis')

@section('content')
<div class="login100-form">
     <span class="login100-form-title">
     	Reset Kata Sandi
        </span>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="container-login100-form-btn">
						        <button class="login100-form-btn">
							        Kirim Link Reset Kata Sandi
						        </button>
				        	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
