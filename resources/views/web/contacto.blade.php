@extends('layouts.app')

@section('content')


	<section class="breadcrumbs">
		<div class="breadcrumb-sm-images">
			<div class="inner-banner-1 magnetic-item">
				<img src="{{asset('assets/icobr1.jpg')}}" alt >
			</div>
			<div class="inner-banner-2 magnetic-item">
				<img src="{{asset('assets/icobr2.jpg')}}" alt >
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-wrapper">
						<div class="breadcrumb-cnt">
							<span>Contacto</span>
							<h1>Contáctenos</h1>
							<p style="color:#fff">	¿Tienes alguna duda? Nuestro equipo de asesores con gusto le atenderán.</p>
							<div class="breadcrumb-list">
								<a href="{{url('/')}}">Inicio</a><img src="{{asset('assets/img/inner-pages/breadcrumb-arrow.svg')}}" alt> Contacto
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	             <style>
        .alert-project{
              background:#20CA25;
            color:#fff;
            font-weight: 700;
            font-size: 26px
        }

    </style>
  @if (session('notification'))
                    <div class="alert alert-project text-center">
                        <span >{{ session('notification') }}</span>
                    </div>
                @endif

				

	<div class="contact-page-wrap sec-mar">
		<div class="container">
			<div class="row g-lg-4 gy-5">
				<div class="col-lg-6">
					<div class="contact-content">
						<span>PONERSE EN CONTACTO!</span>
						<h2>¿Tiene Alguna Pregunta? No Dude En Ponerse En Contacto Con Nosotros.</h2>
						<!-- <p>I have worls-class, flexible support via live chat, email and hone. I guarantee that you’ll be able to have any issue resolved within 24 hours.</p> -->
						<div class="informations">
							<div class="single-info">
								<div class="icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="info">
									<p>Av. Arenales 2523 San Isidro</p>
								</div>
							</div>
							<div class="single-info">
								<div class="icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="info">
									<a href="tel:51913069000">+51 913 069 000</a>
									
								</div>
							</div>
							<div class="single-info">
								<div class="icon">
									<i class="far fa-envelope"></i>
								</div>
								<div class="info">
									<a href="#"><span class="__cf_email__">contacto@kingtech.pe	</span></a>
				
								</div>
							</div>
						</div>
						<div class="follow-area">
							<h5 class="blog-widget-title">Síguenos</h5>
							<!-- <p class="para">Follow us on Social Network</p> -->
							<div class="blog-widget-body">
								<ul class="follow-list d-flex flex-row align-items-start gap-4">
									<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
									<li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				  
				<div class="col-lg-6">

					<div class="contact-form-wrap">
						<div class="form-tltle">
							<h5>Realiza una Asesoría Gratuita</h5>
						</div>
						<div class="contact-form">
							   <form action="{{url('/contacto')}}" method="post" enctype='multipart/form-data'>
								           {{ csrf_field() }}
                                    <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
								<div class="row">
									<div class="col-md-12 mb-20">
										<div class="form-inner">
											<label>Nombre Completo</label>
											<input type="text" name="name" required>
										</div>
									</div>
								
									
									<div class="col-lg-6 mb-20">
										<div class="form-inner">
											<label>Email</label>
											<input type="email" name="email" required>
										</div>
									</div>
									<div class="col-lg-6 mb-20">
										<div class="form-inner">
											<label>Teléfono</label>
											<input type="text" name="phone" required>
										</div>
									</div>
									<div class="col-lg-12 mb-20">
										<div class="form-inner">
											<label>Asunto</label>
											<input type="text" name="subject" required>
										</div>
									</div>
									<div class="col-lg-12 mb-20">
										<div class="form-inner">
											<label>Mensaje</label>
											<textarea name="content" required></textarea>
										</div>
									</div>
									<!--<div class="col-lg-12 mb-20">
										<div class="form-inner">
											<label>Imagen</label>
											<input type="file" name="archivo" required>
										</div>
									</div>-->
								
								
									</div>
									<div class="col-lg-12">
										<div class="form-inner">
											<button class="primary-btn3" type="submit">Enviar</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-map">
	<!-- 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.564763185785!2d90.36311167608078!3d23.834071185557615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c8682a473%3A0xa6c74743d52adb88!2sEgens%20Lab!5e0!3m2!1sen!2sbd!4v1685535738307!5m2!1sen!2sbd" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1353.0252671450555!2d-77.0356856075395!3d-12.089435687219236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c85e3889d159%3A0x8ac4fa1a74e7c08a!2sAv.%20Gral.%20Antonio%20%C3%81lvarez%20de%20Arenales%202523%2C%20Lince%2015046!5e0!3m2!1ses!2spe!4v1701387853740!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

@endsection