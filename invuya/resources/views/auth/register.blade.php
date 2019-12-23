@extends('layouts.logis')

@section('content')
<div class="login100-form validate-form">
     <span class="login100-form-title">
     	Buat Akun Baru
         <p>Silahkan isi Nama,Email ,dan Kata Sandi anda
        </span>
 
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="wrap-input100 validate-input" data-validate = "Masukkan nama yang benar">
                                <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ old('name') }}" required autocomplete="name">
                                <span class="focus-input100"></span>
        						<span class="symbol-input100">
		    					<i class="fa fa-id-card" aria-hidden="true"></i>
			        			</span>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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
                        

                            <div class="wrap-input100 validate-input" data-validate = "Harap masukkan password anda">
                                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
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
							        Buat Akun
						        </button>
				        	</div>
                        
                    </form>
                </div>
@endsection
