<!DOCTYPE html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Boda Itzel & Nacho</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Boda Itzel & Nacho 7 Junio 2024" />
	<meta name="keywords" content="fBoda Itzel & Nacho" />
	<meta name="author" content="WebTech" />
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('wedding/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('wedding/css/icomoon.css')}}">
	<!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('wedding/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('wedding/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('wedding/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('wedding/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('wedding/css/style.css')}}">


	<!-- Modernizr JS -->
    <script src="{{ asset('wedding/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
    <audio autoplay loop controls preload="auto" volume="0.5">
        <source src="{{ asset('wedding/stand.mp3')}}" type="audio/mpeg">
        <source src="{{ asset('wedding/stand.wav')}}" type="audio/wav">
    </audio>
	</head>
	<body >

	<div class="fh5co-loader"></div>

	<div id="page">
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('{{ asset('wedding/images/4.jpg')}}');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row"></div>
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 class="">Itzel &amp; Nacho</h1>
                            <h2 class="text-white">
                            Ya que vivimos juntos
                            tenemos lo necesario, pero si algo nos quieres obsequiar con dinero lo sabremos apreciar.
                             </h2>
							<div class="simply-countdown simply-countdown-one"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	 <div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Confirma  tu asistencia</h2>
                    @if ($client->num_invitados_confirm == NULL)
                        <form method="POST" action="{{ route('update.inv', $client->code) }}" enctype="multipart/form-data" role="form">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>

                                <div class="col-md-6" style="margin-top:2rem;">
                                <label for="inputEmail4" class="form-label">Num de adultos</label>
                                    <select class="form-control" name="num_invitados_confirm" id="num_invitados_confirm" required>
                                        <option value="">Confirma cuántos adultos son</option>
                                        @for ($i = 1; $i <= $maximo_personas; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-6" style="margin-top:2rem;">
                                <label for="inputPassword4" class="form-label">Num de niño</label>
                                    <select class="form-control" name="num_invitados_confirm_n" id="num_invitados_confirm_n" required>
                                        <option value="">¿Cuántos niños irán contigo?</option>
                                        <option value="0">0</option>
                                        @for ($i = 1; $i <= $maximo_niños; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12" >
                                <button type="submit" class="btn btn-primary" style="margin-top:3rem;">Registrar</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <img id="blah" src="{{asset('qr/'.$client->qr) }}" alt="{{$client->nombre}}" style="width: 150px; height: 150px;"/>
                    @endif

			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url('{{ asset('wedding/images/6.jpg')}}');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Detalles del evento</h2>
                    <h4 class="text-white" style="color:#fff">
                        No hay código de vestimenta, sin embargo las mujeres no pueden asistir de Blanco.
                    </h4>
				</div>
			</div>

			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-12 col-md-offset-1">
							<div class="col-12 text-center">
								<div class="event-wrap animate-box">
									<h3>Ceremonia y fiesta</h3>
                                    <ul class="text-white" style="font-size: 20px;list-style:none">
                                        <li style="color:#fff;text-decoration:none">5:00 pm recepción en la playa.</li>
                                        <li style="color:#fff;text-decoration:none">5:30 pm Inicio de la misa.</li>
                                        <li style="color:#fff;text-decoration:none">6:30 pm recepción en el jardín.</li>
                                        <li style="color:#fff;text-decoration:none">7:00 pm a 4:00 am fiesta.</li>
                                    </ul>
								</div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="https://goo.gl/maps/Zs33vhPRxK6tp9KF6" target="_blank" style="color:#fff">
                                            <strong>  Blvrd Barra Vieja, 39930 Acapulco de Juárez, Gro.</strong>
                                          </a>
                                    </div>
                                </div>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
    <script src="{{ asset('wedding/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
    <script src="{{ asset('wedding/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
    <script src="{{ asset('wedding/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
    <script src="{{ asset('wedding/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
    <script src="{{ asset('wedding/js/owl.carousel.min.js')}}"></script>

	<!-- countTo -->
    <script src="{{ asset('wedding/js/jquery.countTo.js')}}"></script>


	<!-- Stellar -->
    <script src="{{ asset('wedding/js/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
    <script src="{{ asset('wedding/js/jquery.magnific-popup.min.js')}}"></script>


	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="{{ asset('wedding/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
    <script src="{{ asset('wedding/js/main.js')}}"></script>


	</body>
</html>

