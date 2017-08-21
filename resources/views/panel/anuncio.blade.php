<html>
	<head>	
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="{{ url('public/js/announce_show.js') }}"></script>
		<style type="text/css">
			.btn-danger {
				background-image: -webkit-linear-gradient(top, #d9534f 0, #c12e2a 100%);
				background-image: -o-linear-gradient(top, #d9534f 0, #c12e2a 100%);
				background-image: -webkit-gradient(linear, left top, left bottom, from(#d9534f), to(#c12e2a));
				background-image: linear-gradient(to bottom, #d9534f 0, #c12e2a 100%);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc12e2a', GradientType=0);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
				background-repeat: repeat-x;
				border-color: #b92c28;
			}
			.btn {
				display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;
				font-weight: 400;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				background-image: none;
				border: 1px solid transparent;
				border-radius: 4px;
			}
		</style>
	</head>
	<body style="margin:0">

	<nav class="navbar navbar-default ">
		<div class="container" style="margin: 0; padding: 0; width: 100%; font-size:11px; ">
			<header class="row" style="margin: 0; padding: 0; width: 100%; background-color: #FFF; padding-top: 12px; padding-bottom: 12px;">
				<div class="row" style="margin: 0; padding: 0; width: 100%;">
					<div class="col-sm-6 col-md-6" style="float: left;margin-left: 15px;">
						<a href="/"><img src="{{ url('/public/imgs/logo.png') }}" alt="" height="56" width="229"></a>
					</div>

					<div class="col-sm-6 col-md-6" style="float: left;">
							<div class="wait" style="font-size: 18px;; font-weight: bold;line-height: 50px;">
								Espere...
							</div>
							<div class="valid_announce" style="display: none; font-size: 18px; font-weight: bold;line-height: 50px;">
								¡Anuncio validado!
								<button class="btn btn-danger">Cerrar</button>
							</div>
							<div class="timer" style="display: none;font-size: 25px;; font-weight: bold;line-height: 50px;">

							</div>
					</div>

					<div style="clear: both;"></div>

				</div>
			</header>
		</div>
		<hr style="background-color: red; border: 4px solid red; padding: 0; margin: 0; " />
	</nav>

	<div >
		<iframe id="load_announce"  style="border: none" width="100%" height="90%" src="{{Session::get('urlan')}}"></iframe>
	</div>
	</body>
</html>