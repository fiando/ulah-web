<!DOCTYPE html>
<html lang="en">
<head>
	<title>ULAH LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{url("img/logo.png")}}"/>
	<link rel="stylesheet" type="text/css" href="{{url("/login/vendor/bootstrap/css/bootstrap.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{url("/login/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{url("/login/css/main.css")}}">
	<style media="screen">
		.input100.disabled {
			background: #b9b9b9 !important;
		  cursor: not-allowed;
		}
	</style>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post" action="{{url("verifikasi_otp")}}">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-33">
						Verifikasi OTP
						<br><br>
						<p>Silahkan masukkan kode verifikasi yang sudah dikirimkan ke nomor HP</p>
					</span>


					<div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="text" name="otpstr" placeholder="Kode OTP" value="">
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit">
							Lanjut
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>
