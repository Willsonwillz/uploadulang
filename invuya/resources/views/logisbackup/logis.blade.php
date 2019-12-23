<!DOCTYPE html>
<html lang="en">
<head>
	<title>Selamat Datang di INVUYA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('admin/plugins/logis/images/icons/invuya-head-logo.png   ')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/logis/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('admin\plugins\logis\images\invuya.png')}}" alt="IMG">
                    <span>"Diciptakan dan dikembangkan oleh AquaVest Company"</span>
                </div>




@yield('content')

            </div>
        </div>
    </div>

	
<!--===============================================================================================-->	
	<script src="{{asset('admin/plugins/logis/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/plugins/logis/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('admin/plugins/logis/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/plugins/logis/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/plugins/logis/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('admin/plugins/logis/js/main.js')}}"></script>

</body>
</html>