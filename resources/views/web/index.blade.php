@extends('layouts.app')

@section('content')

<style type="text/css">
	.banner-img-mobile{
		display: none
	}
	@media(max-width: 768px)
	{
		.banner-img-mobile
		{
			display: block;
		}
		.banner-area6 .banner-wrap .banner-content {
    padding-top: 40px;
    padding-bottom: 100px;
}
	}
</style>
<div class="banner-area6">
		<div class="banner-wrap">
			<div class="social-area">
				<ul>
					<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
					<li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
					<li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
				</ul>
			</div>
			<div class="row">
				
				<div class="col-xxl-6 col-lg-5 d-flex align-items-center">

					<div class="banner-content">
						<div class="banner-img-mobile">
							<img class="img-fluid" src="{{asset('assets/home/banner01.png')}}" alt>
					</div>

												<h1>Empresa líder de <span>Software</span> para Casa de Apuestas Deportivas en Perú</h1>
						<p>¡No esperes más, conviértete en nuestro socio y comienza a ganar con un negocio rentable!</p>
						<div class="banner-btn-group">
							<a class="primary-btn3" href="{{url('/nosotros')}}">Sobre Nosotros</a>
							<a class="primary-btn5" href="https://wa.me/51913069000" target="_blank">
								<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z"></path>
								</svg>
								<div class="content">
									 Ponerse en contacto
									<span>
										<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
										</svg>
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xxl-6 col-lg-7 d-flex jsutify-content-end">
					<div class="banner-img-wrap">
						<div class="swiper banner5-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="banner-img">
										<img class="img-fluid" src="{{asset('assets/home/banner01.png')}}" alt>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="banner-img">
										<img class="img-fluid" src="{{asset('assets/home/banner02.png')}}" alt>
									</div>
								</div>
								<!--
								<div class="swiper-slide">
									<div class="banner-img">
										<img class="img-fluid" src="assets/img/home-6/home6-banner-img2.png" alt>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="banner-img">
										<img class="img-fluid" src="assets/img/home-6/home6-banner-img3.png" alt>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	       <style>
        .alert-project{
            background:#20CA25;
            color:#fff;
            font-weight: 700;
            font-size: 26px
        }
        .logo-web{
        	display: block
        }
        @media(max-width: 768px)
        {
          .logo-web{
        	display: none
        	}	
        	.sec-mar {
    margin: 40px 0;
}
        }
    </style>
  @if (session('notification'))
                    <div class="alert alert-project text-center">
                        <span >{{ session('notification') }}</span>
                    </div>
                @endif
	<div class="review-and-counter-area logo-web">
		<div class="customar-review">
			<h6>¿Serás el próximo?</h6>
			<p style="color: #fff">Solución completa para lanzar su negocio de Apuestas Deportivas de forma rápida y segura.</p>
			
		</div>
		<div class="counter-area ">
			<ul class="">
				<li>
					<div class="single-counter">
						<div class="content">
							<img src="assets/home/tinbet-logo1.png" width="200px">
						</div>
					</div>
				</li>
				<li>
					<div class="single-counter">
						<div class="content">
							<img src="assets/home/logo-blanco-betgana.png" width="200px">
					</div>
				</div></li>
				<li>
					<div class="single-counter">
						<div class="content">
							<img src="assets/home/logo-blanco-betganarace.png" width="200px">
						</div>
					</div>
				</li>
				<li>
					<div class="single-counter">
						<div class="content">
							<div class="number">
								<span>	+</span>
								<h3 class="counter">1500</h3>
								<span>Tiendas</span>
							</div>
							<p>A nivel nacional</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</div>


		<div class="home6-choose-section sec-mar">
			<div class="container">
				<div class="row">
					<div class="choose-top">
						<div class="row">
							<div class="col-lg-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
								<div class="choose-title">
									<span>+ 5 Años De Experiencia</span>
									<h2>¿Quiénes Somos?</h2>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="choose-right-img magnetic-item">
									<img class="img-fluid" src="assets/home/nosotros.png" alt>
								</div>
							</div>
						</div>
					</div>
					<div class="choose-btm">
						<div class="row  g-lg-4 gy-5">
							<div class="col-lg-7">
								<div class="choose-left-content">
									<div class="vectors">
										<img class="choose-vec-top-r" src="assets/img/home-6/choose-vec-top-r.svg" alt>
										<img class="choose-vec-btm-l" src="assets/img/home-6/choose-vec-btm-l.svg" alt>
									</div>
									<div class="icon">
										<img src="{{asset('assets/home/king-blanco.png')}}" width="280px">
									</div>
									<h4>
										<span>Soluciones de iGaming</span></h4>
										<p>Empresas de Software de Apuestas que más ha apoyado e impulsado a cientos de emprendedores a montar su propia casa de apuestas deportivas en todo el Perú. Trabajando siempre con las mejores tecnologías y ofreciendo asesoramiento profesional a todos nuestros clientes.</p>
										<div class="sl">
											<h2>#1</h2>
										</div>
										<div class="about-btn">
											<a href="{{url('/nosotros')}}">
												<svg width="7" height="7" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
												</svg>
												Nosotros
											</a>
										</div>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="choose-feature">
										<ul>
											<li>
												<div class="single-feature">
													<div class="progress">
														<h3><img src="{{asset('assets/home/innovaciones.png')}}" width="60px"></h3>
													</div>
													<div class="content">
														<h4>Innovaciones</h4>
														<p>Proporcionamos soluciones innovadoras para Sportbook que emplean los datos estadísticos y analíticos sobre el comportamiento de los jugadores</p>
													</div>
												</div>
											</li>
											<li>
												<div class="single-feature">
													<div class="progress">
														<h3><img src="{{asset('assets/home/sportbook.png')}}" width="60px"></h3>
													</div>
													<div class="content">
														<h4>Sportsbook</h4>
														<p>Plataforma de apuestas deportivas totalmente equipada con una amplia gama de características para una casa de apuestas deportivas de primer nivel.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="single-feature">
													<div class="progress">
														<h3><img src="{{asset('assets/home/alianza.png')}}" width="60px"></h3>
													</div>
													<div class="content">
														<h4>Alianzas</h4>
														<p>Entablamos relaciones beneficiosas para ambas partes con nuestros socios. El crecimiento de su negocio es nuestro objetivo definitivo.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="home6-solution-section sec-mar">
			<div class="container">
				<div class="row mb-55">
					<div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="section-title-6 text-center">
							<span>Productos</span>
							<h2>Software</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="swiper home6-solution-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="single-solution">
										<div class="background-img">
											<img src="{{asset('assets/home/tinbet-software.png')}}" alt>
										</div>
										<div class="sl">
											<h2>01</h2>
										</div>
										<div class="solution-content">
											<h3><a href="service-details.html">Tinbet</a></h3>
											<p>Nuestra tecnología desarrollada para la terminal combina
                                    una interfaz atractiva y moderna, fácil de usar y grandes probabilidades en tiempo
                                    real hasta el último segundo. Los usuarios pueden seleccionar cualquier apuesta en
                                    segundos y hacer su jugada de forma sencilla.</p>
										</div>
										<div class="solution-btn-icon">
											<div class="learn-btn">
												<a class="primary-btn9" href="service-details.html">
													<span>Ver más</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5" />
													</svg>
												</a>
											</div>
											<div class="icon">
												<svg class="blure" width="46" height="46" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g opacity="0.7" filter="url(#filter0_f_1886_2043)">
														<circle cx="61" cy="61" r="23" fill="url(#paint0_linear_1886_2043)"></circle>
													</g>
													<defs>
														<filter id="filter0_f_1886_2043" x="0" y="0" width="122" height="122" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
															<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
															<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
															<feGaussianBlur stdDeviation="19" result="effect1_foregroundBlur_1886_204"></feGaussianBlur>
														</filter>
														<linearGradient id="paint0_linear_1886_2043" x1="61" y1="38" x2="61" y2="84" gradientUnits="userSpaceOnUse">
															<stop offset="0" stop-color="#06D889 " stop-opacity="0"></stop>
															<stop offset="1" stop-color="#06D889 "></stop>
														</linearGradient>
													</defs>
												</svg>
												<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
													<img src="{{asset('assets/home/tinbet-logo1.png')}}" width="80px">
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="single-solution">
										<div class="background-img">
											<img src="assets/home/betgana-software.png" alt>
										</div>
										<div class="sl">
											<h2>02</h2>
										</div>
										<div class="solution-content">
											<h3><a href="service-details.html">Betgana</a></h3>
											<p>La potente terminal de Betgana integra un sistema
                                    multilenguaje, una amplia gama de eventos deportivos, estadísticas en tiempo real,
                                    además presenta una interfaz atractiva que logrará causar una experiencia de usuario
                                    amigable. </p>
										</div>
										<div class="solution-btn-icon">
											<div class="learn-btn">
												<a class="primary-btn9" href="service-details.html">
													<span>Ver más</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5" />
													</svg>
												</a>
											</div>
											<div class="icon">
												<svg class="blure" width="46" height="46" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g opacity="0.7" filter="url(#filter0_f_1886_2041)">
														<circle cx="61" cy="61" r="23" fill="url(#paint0_linear_1886_2041)"></circle>
													</g>
													<defs>
														<filter id="filter0_f_1886_2041" x="0" y="0" width="122" height="122" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
															<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
															<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
															<feGaussianBlur stdDeviation="19" result="effect1_foregroundBlur_1886_204"></feGaussianBlur>
														</filter>
														<linearGradient id="paint0_linear_1886_2041" x1="61" y1="38" x2="61" y2="84" gradientUnits="userSpaceOnUse">
															<stop offset="0" stop-color="#06D889 " stop-opacity="0"></stop>
															<stop offset="1" stop-color="#06D889 "></stop>
														</linearGradient>
													</defs>
												</svg>
												<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
													<img src="{{asset('assets/home/logo-blanco-betgana.png')}}" width="80px">
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="single-solution">
										<div class="background-img">
											<img src="assets/home/betganarace-software.png" alt>
										</div>
										<div class="sl">
											<h2>03</h2>
										</div>
										<div class="solution-content">
											<h3><a href="service-details.html">Betgana Race</a></h3>
											<p>Nuestra plataforma esta diseñada para que puedas usarlo desde cualquier dispositivo, podrás hacer tus pronósticos, descargar la programación de carreras ,ver las jornadas, ver los resultados de todas las carreras y disfrutar de los videos en vivo haciendo tu apuesta.</p>
										</div>
										<div class="solution-btn-icon">
											<div class="learn-btn">
												<a class="primary-btn9" href="service-details.html">
													<span>Ver más</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5" />
													</svg>
												</a>
											</div>
											<div class="icon">
												<svg class="blure" width="46" height="46" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g opacity="0.7" filter="url(#filter0_f_1886_2042)">
														<circle cx="61" cy="61" r="23" fill="url(#paint0_linear_1886_2042)"></circle>
													</g>
													<defs>
														<filter id="filter0_f_1886_2042" x="0" y="0" width="122" height="122" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
															<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
															<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
															<feGaussianBlur stdDeviation="19" result="effect1_foregroundBlur_1886_204"></feGaussianBlur>
														</filter>
														<linearGradient id="paint0_linear_1886_2042" x1="61" y1="38" x2="61" y2="84" gradientUnits="userSpaceOnUse">
															<stop offset="0" stop-color="#06D889 " stop-opacity="0"></stop>
															<stop offset="1" stop-color="#06D889 "></stop>
														</linearGradient>
													</defs>
												</svg>
												<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
													<img src="{{asset('assets/home/logo-blanco-betganarace.png')}}" width="80px">
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="paginations">
							<div class="swiper-pagination61"></div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="home6-case-study-section sec-mar">
			<div class="container">
				<div class="row mb-55">
					<div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="section-title-6 text-center">
							<span>Franquicias</span>
							<h2>Concepto preliminar de Diseño para Casas de Franquiciados</h2>
						</div>
					</div>
				</div>
				<div class="row g-lg-4 gy-5 border-rights">
					<div class="col-lg-6">
						<div class="case-left">
							<div class="row g-lg-4 gy-5">
								<div class="col-lg-12 col-md-6 border-bottom1">
									<div class="home6-case-study">
										<div class="case-img magnetic-item">
											<img class="img-fluid" src="{{asset('assets/home/render1.jpg')}}" alt>
										</div>
										<!-- <div class="case-content pb-50">
											<span>CLOUD HOSTING</span>
											<h3><a href="case-study-details.html">Unlocking Scalability, Reliability, and Efficiency.</a></h3>
											<p>Integer purus odio, placerat nec rhoncus in, ullamcorper necbomi doloroei. aptent taciti sociosqu.</p>
											<div class="learn-btn">
												<a class="primary-btn9" href="case-study-details.html">
													<span>Learn More</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5"></path>
													</svg>
												</a>
											</div>
										</div> -->
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="home6-case-study">
										<div class="case-img pt-50 magnetic-item">
											<img class="img-fluid" src="{{asset('assets/home/render2.jpg')}}" alt>
										</div>
										<!-- <div class="case-content">
											<span>MOBILE DEVELOPMENT</span>
											<h3><a href="case-study-details.html">Empowering Businesses through Cutting-Edge Mobile.</a></h3>
											<p>Integer purus odio, placerat nec rhoncus in, ullamcorper necbomi doloroei. aptent taciti sociosqu.</p>
											<div class="learn-btn">
												<a class="primary-btn9" href="case-study-details.html">
													<span>Learn More</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5"></path>
													</svg>
												</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="case-right">
							<div class="row g-lg-4 gy-5">
								<div class="col-lg-12 col-md-6 border-bottom2">
									<div class="home6-case-study pb-50">
										<div class="case-img magnetic-item">
											<img class="img-fluid" src="{{asset('assets/home/render3.jpg')}}" alt>
										</div>
										<!-- <div class="case-content">
											<span>IT CONSULTING</span>
											<h3><a href="case-study-details.html">Empowering Business Performan through Expert.</a></h3>
											<p>Integer purus odio, placerat nec rhoncus in, ullamcorper necbomi doloroei. aptent taciti sociosqu.</p>
											<div class="learn-btn">
												<a class="primary-btn9" href="case-study-details.html">
													<span>Learn More</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5"></path>
													</svg>
												</a>
											</div>
										</div> -->
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="home6-case-study">
										<div class="case-img pt-50 magnetic-item">
											<img class="img-fluid" src="{{asset('assets/home/render4.jpg')}}" alt>
										</div>
										<!-- <div class="case-content">
											<span>CLOUD HOSTING</span>
											<h3><a href="case-study-details.html">Unlocking Scalability, Reliability, and Efficiency.</a></h3>
											<p>Integer purus odio, placerat nec rhoncus in, ullamcorper necbomi doloroei. aptent taciti sociosqu.</p>
											<div class="learn-btn">
												<a class="primary-btn9" href="case-study-details.html">
													<span>Learn More</span>
													<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5L15 7.5M15 7.5L8 13.5M15 7.5L1.30274e-07 7.5"></path>
													</svg>
												</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<div class="view-btn">
							<a class="primary-btn3" href="case-study.html" style="color: #fff">Contactar con un agente</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<style type="text/css">
	.web-image{
		display: block
	}
	.mobile-image{
			display: none
		}

	@media(max-width: 768px)
	{
		.web-image{
		display: none
		}
		.mobile-image{
			display: block
		}		
	}
</style>
		<div class="home6-partner-area sce-mar">
			<div class="container">
				
				
				<div class="row">
					<div class="col-lg-12 web-image">
						<img src="{{asset('assets/home/friso.png')}}" width="100%">
					
					</div>
					<div class="col-lg-12 mobile-image">
						<img src="{{asset('assets/home/frisomobile.jpg')}}" width="100%">
					
					</div>
				</div>
			</div>
		</div>




		<div class="home6-what-we-do-section sec-mar">
			<div class="container">
				<div class="row mb-55">
					<div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="section-title-6 text-center">
							<span>Kingtech</span>
							<h2>Cómo Trabajamos...</h2>
						</div>
					</div>
				</div>
				<div class="row g-lg-4 gy-5 justify-content-center mb-120">
					<div class="col-lg-4 col-sm-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="single-process ">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2119_3151)">
										<path d="M3.75 20.625C3.50136 20.625 3.2629 20.7238 3.08709 20.8996C2.91127 21.0754 2.8125 21.3139 2.8125 21.5625V25.3125C2.8125 25.5611 2.91127 25.7996 3.08709 25.9754C3.2629 26.1512 3.50136 26.25 3.75 26.25H5.7941C6.0881 27.5241 6.57563 28.7456 7.23973 29.8719L4.96207 32.1496C4.87501 32.2366 4.80595 32.34 4.75883 32.4537C4.71172 32.5675 4.68747 32.6894 4.68747 32.8125C4.68747 32.9356 4.71172 33.0575 4.75883 33.1713C4.80595 33.285 4.87501 33.3884 4.96207 33.4754L7.77457 36.2879C7.86163 36.375 7.96498 36.4441 8.07872 36.4912C8.19247 36.5383 8.31438 36.5625 8.4375 36.5625C8.56062 36.5625 8.68253 36.5383 8.79628 36.4912C8.91002 36.4441 9.01337 36.375 9.10043 36.2879L11.3781 34.0103C12.5044 34.6744 13.7259 35.1619 15 35.4559V38.4375C15 38.6861 15.0988 38.9246 15.2746 39.1004C15.4504 39.2762 15.6889 39.375 15.9375 39.375H19.2246C19.8251 41.704 20.977 43.8544 22.5833 45.6446C24.1895 47.4348 26.2029 48.8123 28.4534 49.6609C30.7039 50.5094 33.1255 50.804 35.5139 50.5199C37.9022 50.2358 40.1871 49.3813 42.1758 48.0285L51.4487 57.3013C51.7099 57.5625 52.0199 57.7696 52.3612 57.911C52.7024 58.0523 53.0681 58.1251 53.4375 58.1251C53.8069 58.1251 54.1726 58.0523 54.5138 57.911C54.8551 57.7696 55.1651 57.5625 55.4263 57.3013C55.6875 57.0401 55.8946 56.7301 56.036 56.3888C56.1773 56.0476 56.2501 55.6819 56.2501 55.3125C56.2501 54.9431 56.1773 54.5774 56.036 54.2362C55.8946 53.8949 55.6875 53.5849 55.4263 53.3237L46.1534 44.0508C48.2092 41.0314 49.0904 37.3647 48.6311 33.7409C48.1719 30.1171 46.4039 26.7861 43.66 24.375H45C45.2486 24.375 45.4871 24.2762 45.6629 24.1004C45.8387 23.9246 45.9375 23.6861 45.9375 23.4375V19.8586C46.1223 19.3688 48.75 12.3895 48.75 12.1875C48.75 10.1259 48.1686 8.49937 47.0222 7.35281C45.8757 6.20625 44.2491 5.625 42.1875 5.625C40.1259 5.625 38.4994 6.20637 37.3528 7.35281C36.2062 8.49926 35.625 10.1259 35.625 12.1875C35.625 12.2999 38.4375 19.8574 38.4375 19.8574V21.3758C36.925 20.8773 35.3425 20.6239 33.75 20.625H29.8309C29.5369 19.3509 29.0494 18.1294 28.3853 17.0031L30.6629 14.7254C30.75 14.6384 30.8191 14.535 30.8662 14.4213C30.9133 14.3075 30.9375 14.1856 30.9375 14.0625C30.9375 13.9394 30.9133 13.8175 30.8662 13.7037C30.8191 13.59 30.75 13.4866 30.6629 13.3996L27.8504 10.5871C27.7634 10.5 27.66 10.431 27.5463 10.3838C27.4325 10.3367 27.3106 10.3125 27.1875 10.3125C27.0644 10.3125 26.9425 10.3367 26.8287 10.3838C26.715 10.431 26.6116 10.5 26.5246 10.5871L24.2469 12.8647C23.1206 12.2006 21.8991 11.7131 20.625 11.4191V8.4375C20.625 8.18886 20.5262 7.9504 20.3504 7.77459C20.1746 7.59877 19.9361 7.5 19.6875 7.5H15.9375C15.6889 7.5 15.4504 7.59877 15.2746 7.77459C15.0988 7.9504 15 8.18886 15 8.4375V11.4191C13.7259 11.7131 12.5044 12.2006 11.3781 12.8647L9.10043 10.5871C9.01337 10.5 8.91002 10.431 8.79628 10.3838C8.68253 10.3367 8.56062 10.3125 8.4375 10.3125C8.31438 10.3125 8.19247 10.3367 8.07872 10.3838C7.96498 10.431 7.86163 10.5 7.77457 10.5871L4.96207 13.3996C4.87501 13.4866 4.80595 13.59 4.75883 13.7037C4.71172 13.8175 4.68747 13.9394 4.68747 14.0625C4.68747 14.1856 4.71172 14.3075 4.75883 14.4213C4.80595 14.535 4.87501 14.6384 4.96207 14.7254L7.23973 17.0031C6.57563 18.1294 6.0881 19.3509 5.7941 20.625H3.75ZM54.1004 54.6497C54.1896 54.7363 54.2606 54.8397 54.3094 54.954C54.3582 55.0683 54.3838 55.1911 54.3847 55.3154C54.3856 55.4396 54.3618 55.5628 54.3147 55.6778C54.2675 55.7928 54.198 55.8973 54.1101 55.9851C54.0223 56.073 53.9178 56.1425 53.8028 56.1896C53.6878 56.2368 53.5646 56.2606 53.4404 56.2597C53.3161 56.2587 53.1932 56.2331 53.079 56.1843C52.9647 56.1355 52.8613 56.0645 52.7747 55.9753L43.6673 46.8682C44.1362 46.4541 44.579 46.0113 44.9931 45.5425L54.1004 54.6497ZM37.5015 12.0216C37.5571 9.02098 39.133 7.5 42.1875 7.5C45.2461 7.5 46.8218 9.02461 46.8736 12.0325C46.61 12.7563 45.3288 16.1605 44.3518 18.75H40.0246L37.5015 12.0216ZM40.3125 20.625H44.0625V22.5H41.0048C40.7777 22.3739 40.5469 22.2535 40.3125 22.1387V20.625ZM46.875 35.625C46.875 38.2205 46.1055 40.7577 44.6637 42.9159C43.2219 45.0741 41.1726 46.7564 38.7748 47.7501C36.377 48.7437 33.7385 49.0042 31.1928 48.4985C28.647 47.9928 26.3083 46.7436 24.4724 44.909C22.6365 43.0743 21.3857 40.7365 20.8783 38.1911C20.3708 35.6457 20.6295 33.007 21.6215 30.6085C22.6135 28.2101 24.2944 26.1596 26.4516 24.7163C28.6088 23.2731 31.1455 22.5018 33.741 22.5H33.75C37.2298 22.5039 40.5659 23.888 43.0264 26.3486C45.487 28.8091 46.8711 32.1452 46.875 35.625ZM17.8125 28.125C16.8854 28.125 15.9791 27.8501 15.2083 27.335C14.4374 26.8199 13.8366 26.0879 13.4818 25.2313C13.127 24.3748 13.0342 23.4323 13.2151 22.523C13.3959 21.6137 13.8424 20.7785 14.4979 20.1229C15.1535 19.4674 15.9887 19.0209 16.898 18.8401C17.8073 18.6592 18.7498 18.752 19.6063 19.1068C20.4629 19.4616 21.1949 20.0624 21.71 20.8333C22.2251 21.6041 22.5 22.5104 22.5 23.4375C22.4986 24.6803 22.0043 25.8717 21.1255 26.7505C20.2467 27.6293 19.0553 28.1236 17.8125 28.125ZM7.48723 21.7168C7.74484 20.1752 8.33102 18.7071 9.20602 17.412C9.33218 17.2314 9.39076 17.0122 9.37147 16.7928C9.35219 16.5734 9.25627 16.3678 9.10055 16.2121L6.95074 14.0625L8.4375 12.5757L10.5871 14.7254C10.7428 14.8812 10.9484 14.9771 11.1678 14.9964C11.3872 15.0156 11.6064 14.9571 11.787 14.8309C13.0821 13.9559 14.5502 13.3697 16.0918 13.1121C16.3107 13.0756 16.5095 12.9626 16.6529 12.7933C16.7963 12.624 16.875 12.4094 16.875 12.1875V9.375H18.75V12.1875C18.75 12.4094 18.8287 12.6241 18.9721 12.7934C19.1155 12.9627 19.3143 13.0757 19.5332 13.1122C21.0748 13.3698 22.5429 13.956 23.838 14.831C24.0186 14.9572 24.2378 15.0158 24.4572 14.9965C24.6766 14.9772 24.8822 14.8813 25.0379 14.7255L27.1875 12.5757L28.6743 14.0625L26.5246 16.2121C26.3688 16.3678 26.2729 16.5734 26.2536 16.7928C26.2344 17.0122 26.2929 17.2314 26.4191 17.412C27.2937 18.7065 27.8798 20.174 28.1375 21.7148C26.774 22.2676 25.499 23.0178 24.3537 23.9414C24.3664 23.7746 24.375 23.6068 24.375 23.4369C24.3756 22.0428 23.9324 20.6847 23.1096 19.5593C22.2868 18.4339 21.1272 17.5996 19.7986 17.1773C18.47 16.755 17.0415 16.7665 15.7199 17.2103C14.3983 17.654 13.2523 18.5069 12.4478 19.6455C11.6433 20.784 11.2222 22.1491 11.2453 23.543C11.2684 24.9369 11.7346 26.2873 12.5765 27.3985C13.4183 28.5098 14.592 29.3242 15.9275 29.7238C17.2631 30.1235 18.6912 30.0877 20.0051 29.6215C19.1753 31.5141 18.7479 33.5585 18.75 35.625C18.7501 36.2518 18.7892 36.878 18.8672 37.5H16.875V34.6875C16.875 34.4656 16.7963 34.2509 16.6529 34.0816C16.5095 33.9123 16.3107 33.7993 16.0918 33.7628C14.5502 33.5052 13.0821 32.919 11.787 32.044C11.6064 31.9178 11.3872 31.8592 11.1678 31.8785C10.9484 31.8978 10.7428 31.9937 10.5871 32.1495L8.4375 34.2993L6.95074 32.8125L9.10043 30.6629C9.25615 30.5072 9.35207 30.3016 9.37135 30.0822C9.39064 29.8628 9.33206 29.6436 9.2059 29.463C8.33091 28.1679 7.74472 26.6998 7.48711 25.1582C7.45058 24.9393 7.33763 24.7405 7.16833 24.5971C6.99904 24.4537 6.78437 24.375 6.5625 24.375H4.6875V22.5H6.5625C6.78439 22.5 6.99908 22.4213 7.16841 22.2779C7.33773 22.1345 7.4507 21.9357 7.48723 21.7168Z" />
										<path d="M31.974 5.2057C31.8628 5.42808 31.8445 5.68552 31.9231 5.9214C32.0017 6.15728 32.1708 6.35227 32.3932 6.46348L34.2682 7.40098C34.3784 7.45718 34.4987 7.491 34.6221 7.5005C34.7454 7.51 34.8694 7.49499 34.987 7.45633C35.1045 7.41766 35.2132 7.35612 35.3069 7.27524C35.4005 7.19436 35.4772 7.09574 35.5325 6.98508C35.5879 6.87442 35.6208 6.75389 35.6293 6.63046C35.6378 6.50702 35.6219 6.38312 35.5823 6.26589C35.5427 6.14866 35.4803 6.04043 35.3987 5.94743C35.3171 5.85443 35.2179 5.7785 35.1068 5.72402L33.2318 4.78652C33.0094 4.67533 32.752 4.65702 32.5161 4.73563C32.2802 4.81424 32.0852 4.98333 31.974 5.2057ZM41.25 0.9375V2.8125C41.25 3.06114 41.3488 3.2996 41.5246 3.47541C41.7004 3.65123 41.9389 3.75 42.1875 3.75C42.4361 3.75 42.6746 3.65123 42.8504 3.47541C43.0262 3.2996 43.125 3.06114 43.125 2.8125V0.9375C43.125 0.68886 43.0262 0.450403 42.8504 0.274587C42.6746 0.0987721 42.4361 0 42.1875 0C41.9389 0 41.7004 0.0987721 41.5246 0.274587C41.3488 0.450403 41.25 0.68886 41.25 0.9375ZM36.1432 1.03652C35.9208 1.14773 35.7517 1.34272 35.6731 1.5786C35.5945 1.81448 35.6128 2.07192 35.724 2.2943L36.6615 4.1693C36.716 4.28039 36.7919 4.3796 36.8849 4.46121C36.9779 4.54281 37.0862 4.60521 37.2034 4.64478C37.3206 4.68436 37.4445 4.70034 37.568 4.6918C37.6914 4.68327 37.8119 4.65038 37.9226 4.59504C38.0332 4.5397 38.1319 4.463 38.2127 4.36937C38.2936 4.27573 38.3552 4.16702 38.3938 4.04948C38.4325 3.93195 38.4475 3.80792 38.438 3.68456C38.4285 3.5612 38.3947 3.44093 38.3385 3.3307L37.401 1.4557C37.2898 1.23333 37.0948 1.06424 36.8589 0.985631C36.623 0.90702 36.3656 0.925327 36.1432 1.03652ZM46.974 1.4557L46.0365 3.3307C45.9803 3.44093 45.9465 3.5612 45.937 3.68456C45.9275 3.80792 45.9425 3.93195 45.9812 4.04948C46.0198 4.16702 46.0814 4.27573 46.1623 4.36937C46.2431 4.463 46.3418 4.5397 46.4524 4.59504C46.5631 4.65038 46.6836 4.68327 46.807 4.6918C46.9305 4.70034 47.0544 4.68436 47.1716 4.64478C47.2888 4.60521 47.3971 4.54281 47.4901 4.46121C47.5831 4.3796 47.659 4.28039 47.7135 4.1693L48.651 2.2943C48.7072 2.18407 48.741 2.0638 48.7505 1.94044C48.76 1.81708 48.745 1.69305 48.7063 1.57552C48.6677 1.45798 48.6061 1.34927 48.5252 1.25563C48.4444 1.162 48.3457 1.0853 48.2351 1.02996C48.1244 0.97462 48.0039 0.941734 47.8805 0.933196C47.757 0.924659 47.6331 0.94064 47.5159 0.980217C47.3987 1.01979 47.2904 1.08219 47.1974 1.16379C47.1044 1.2454 47.0285 1.34461 46.974 1.4557ZM51.1432 4.78652L49.2682 5.72402C49.1571 5.7785 49.0579 5.85443 48.9763 5.94743C48.8947 6.04043 48.8323 6.14866 48.7927 6.26589C48.7531 6.38312 48.7372 6.50702 48.7457 6.63046C48.7542 6.75389 48.7871 6.87442 48.8425 6.98508C48.8978 7.09574 48.9745 7.19436 49.0681 7.27524C49.1618 7.35612 49.2705 7.41766 49.388 7.45633C49.5056 7.49499 49.6296 7.51 49.7529 7.5005C49.8763 7.491 49.9966 7.45718 50.1068 7.40098L51.9818 6.46348C52.0929 6.409 52.1921 6.33307 52.2737 6.24007C52.3553 6.14707 52.4177 6.03884 52.4573 5.92161C52.4969 5.80438 52.5128 5.68048 52.5043 5.55704C52.4958 5.43361 52.4629 5.31308 52.4075 5.20242C52.3522 5.09176 52.2755 4.99314 52.1819 4.91226C52.0882 4.83138 51.9795 4.76984 51.862 4.73117C51.7444 4.69251 51.6204 4.6775 51.4971 4.687C51.3737 4.6965 51.2534 4.73032 51.1432 4.78652ZM22.5 35.625C22.5 37.85 23.1598 40.0251 24.396 41.8752C25.6321 43.7252 27.3891 45.1672 29.4448 46.0186C31.5005 46.8701 33.7625 47.0929 35.9448 46.6588C38.1271 46.2248 40.1316 45.1533 41.705 43.58C43.2783 42.0066 44.3498 40.0021 44.7838 37.8198C45.2179 35.6375 44.9951 33.3755 44.1436 31.3198C43.2922 29.2641 41.8502 27.5071 40.0002 26.271C38.1501 25.0348 35.975 24.375 33.75 24.375C30.7673 24.3783 27.9078 25.5647 25.7987 27.6737C23.6897 29.7828 22.5033 32.6423 22.5 35.625ZM43.125 35.625C43.125 37.4792 42.5752 39.2918 41.545 40.8335C40.5149 42.3752 39.0507 43.5768 37.3377 44.2864C35.6246 44.9959 33.7396 45.1816 31.921 44.8199C30.1025 44.4581 28.432 43.5652 27.1209 42.2541C25.8098 40.943 24.9169 39.2725 24.5551 37.454C24.1934 35.6354 24.3791 33.7504 25.0886 32.0373C25.7982 30.3243 26.9998 28.8601 28.5415 27.83C30.0832 26.7998 31.8958 26.25 33.75 26.25C36.2355 26.2528 38.6185 27.2414 40.376 28.999C42.1336 30.7565 43.1222 33.1395 43.125 35.625Z" />
										<path d="M28.125 35.625C28.125 35.3764 28.0262 35.1379 27.8504 34.9621C27.6746 34.7863 27.4361 34.6875 27.1875 34.6875C26.9389 34.6875 26.7004 34.7863 26.5246 34.9621C26.3488 35.1379 26.25 35.3764 26.25 35.625C26.2522 37.6134 27.0431 39.5198 28.4492 40.9258C29.8552 42.3319 31.7616 43.1228 33.75 43.125C33.9986 43.125 34.2371 43.0262 34.4129 42.8504C34.5887 42.6746 34.6875 42.4361 34.6875 42.1875C34.6875 41.9389 34.5887 41.7004 34.4129 41.5246C34.2371 41.3488 33.9986 41.25 33.75 41.25C32.2587 41.2484 30.8289 40.6552 29.7743 39.6007C28.7198 38.5461 28.1266 37.1163 28.125 35.625Z" />
									</g>
								</svg>
							</div>
							<div class="content">
								<h3>Nos Reunimos</h3>
								<p>Resuelve tus dudas desde el primer día. Nuestros asesores lo harán posible. ¡El primer contacto es importante!</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="single-process">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
									<path d="M46.1633 25.5094C46.1914 25.2937 46.1914 25.1812 46.2102 24.9844L46.2195 24.8719C46.4539 20.1938 44.9727 16.0875 42.0477 13.2938C39.1227 10.5 34.8945 9.20625 30.1508 9.65625C20.8695 10.5469 14.6445 16.7531 14.6445 25.0969C14.6445 29.3156 16.2195 34.0219 18.8445 37.6688C20.6539 40.1813 21.6102 43.2281 21.6102 46.4906V49.4062C21.6102 49.8937 21.9945 50.2875 22.482 50.3063C22.407 50.55 22.3508 50.7938 22.3508 51.0656C22.3508 51.7031 22.5945 52.275 22.9695 52.725C22.5852 53.175 22.3508 53.7469 22.3508 54.3844C22.3508 55.6594 23.2977 56.7188 24.5164 56.9062C24.9102 58.6688 26.4852 60 28.3695 60H33.0758C34.9602 60 36.5352 58.6781 36.9289 56.9062C37.5309 56.8123 38.0797 56.5068 38.4766 56.0446C38.8736 55.5823 39.0927 54.9937 39.0945 54.3844C39.0945 53.7469 38.8508 53.175 38.4758 52.725C38.8602 52.275 39.0945 51.7031 39.0945 51.0656C39.0945 50.8031 39.0477 50.5594 38.9727 50.3156H39.1695C39.6758 50.3156 40.0789 49.9125 40.0789 49.4062V42.9094C40.0789 42.6281 40.3039 42.4031 40.5852 42.4031H43.3133C44.196 42.4031 45.0425 42.0525 45.6666 41.4283C46.2908 40.8042 46.6414 39.9577 46.6414 39.075V35.0906L48.0477 34.9219C48.3103 34.8913 48.5613 34.7967 48.7788 34.6463C48.9962 34.4959 49.1733 34.2943 49.2945 34.0594C49.5477 33.5813 49.5383 33.0094 49.3133 32.6062L46.1633 25.5094ZM33.0758 58.1813H28.3695C27.5164 58.1813 26.7852 57.675 26.4383 56.9531H35.007C34.8337 57.3191 34.5604 57.6287 34.2187 57.846C33.877 58.0633 33.4807 58.1795 33.0758 58.1813ZM36.5352 55.1344H24.9102C24.4977 55.1344 24.1602 54.7969 24.1602 54.3844C24.1602 53.9719 24.4977 53.6344 24.9102 53.6344H36.5352C36.9477 53.6344 37.2852 53.9719 37.2852 54.3844C37.2758 54.7969 36.9477 55.1344 36.5352 55.1344ZM37.2758 51.075C37.2758 51.4875 36.9383 51.825 36.5258 51.825H24.9008C24.4883 51.825 24.1508 51.4875 24.1508 51.075C24.1508 50.6625 24.4883 50.325 24.9008 50.325H36.5258C36.9477 50.325 37.2758 50.6531 37.2758 51.075ZM45.6289 33.3844C45.1695 33.4406 44.8227 33.825 44.8227 34.2844V39.075C44.8227 39.9094 44.1477 40.5844 43.3133 40.5844H40.5945C39.9779 40.5844 39.3865 40.8293 38.9505 41.2654C38.5145 41.7014 38.2695 42.2927 38.2695 42.9094V48.4969H23.4195V46.5C23.4195 42.8531 22.3414 39.4312 20.3164 36.6094C17.8977 33.2531 16.4539 28.95 16.4539 25.0969C16.4539 17.7375 22.0227 12.2625 30.3195 11.4656C34.5852 11.0625 38.2039 12.1406 40.782 14.6062C43.3133 17.025 44.5977 20.6438 44.3914 24.7781L44.382 24.8906C44.3727 25.0969 44.3633 25.1813 44.3164 25.5C44.2883 25.6688 44.3164 25.8469 44.382 26.0063L47.5602 33.15L45.6289 33.3844ZM30.057 7.19063C30.5633 7.19063 30.9664 6.7875 30.9664 6.28125V0.909375C30.9664 0.403125 30.5633 0 30.057 0C29.5508 0 29.1477 0.403125 29.1477 0.909375V6.28125C29.1477 6.7875 29.5508 7.19063 30.057 7.19063ZM39.432 9.73125C39.5727 9.81563 39.732 9.85313 39.882 9.85313C40.2008 9.85313 40.5008 9.69375 40.6695 9.40312L43.3602 4.74375C43.4204 4.64064 43.4596 4.52653 43.4752 4.40812C43.4909 4.2897 43.4827 4.16935 43.4513 4.05412C43.4199 3.93888 43.3658 3.83107 43.2922 3.737C43.2186 3.64292 43.1269 3.56448 43.0227 3.50625C42.9195 3.44596 42.8054 3.40685 42.687 3.39119C42.5686 3.37554 42.4483 3.38367 42.333 3.4151C42.2178 3.44652 42.11 3.50062 42.0159 3.57423C41.9218 3.64783 41.8434 3.73946 41.7852 3.84375L39.0945 8.49375C39.0345 8.59693 38.9956 8.71102 38.9801 8.82938C38.9646 8.94774 38.9727 9.06801 39.0041 9.18317C39.0356 9.29834 39.0896 9.40611 39.163 9.5002C39.2365 9.5943 39.3279 9.67284 39.432 9.73125ZM47.0633 17.0719C47.2133 17.0719 47.3727 17.0344 47.5133 16.95L52.1633 14.2594C52.5945 14.0063 52.7445 13.4531 52.5008 13.0219C52.3796 12.815 52.1822 12.6638 51.9509 12.6007C51.7196 12.5376 51.4727 12.5677 51.2633 12.6844L46.6133 15.375C46.182 15.6281 46.032 16.1812 46.2758 16.6125C46.4445 16.9125 46.7539 17.0719 47.0633 17.0719ZM55.0414 25.0969H49.6695C49.1633 25.0969 48.7602 25.5 48.7602 26.0063C48.7602 26.5125 49.1633 26.9156 49.6695 26.9156H55.0414C55.2826 26.9156 55.5139 26.8198 55.6844 26.6493C55.855 26.4787 55.9508 26.2474 55.9508 26.0063C55.9508 25.7651 55.855 25.5338 55.6844 25.3632C55.5139 25.1927 55.2826 25.0969 55.0414 25.0969ZM12.4883 34.95L7.82891 37.6406C7.72262 37.6985 7.62902 37.7771 7.55362 37.8718C7.47823 37.9665 7.42258 38.0753 7.38995 38.1918C7.35733 38.3084 7.3484 38.4303 7.36368 38.5503C7.37897 38.6704 7.41816 38.7862 7.47894 38.8908C7.53973 38.9955 7.62088 39.0869 7.71759 39.1596C7.8143 39.2324 7.92461 39.285 8.04201 39.3144C8.15941 39.3438 8.28151 39.3494 8.4011 39.3308C8.52069 39.3123 8.63534 39.2699 8.73828 39.2062L13.3883 36.5156C13.8195 36.2625 13.9695 35.7094 13.7258 35.2781C13.6037 35.0721 13.4056 34.9222 13.1742 34.8609C12.9427 34.7995 12.6964 34.8315 12.4883 34.95ZM11.2414 25.9031C11.2414 25.3969 10.8383 24.9937 10.332 24.9937H4.96016C4.45391 24.9937 4.05078 25.3969 4.05078 25.9031C4.05078 26.4094 4.45391 26.8125 4.96016 26.8125H10.332C10.8289 26.8031 11.2414 26.4 11.2414 25.9031ZM13.4445 15.2812L8.78516 12.5906C8.68204 12.5303 8.56794 12.4912 8.44952 12.4756C8.33111 12.4599 8.21076 12.468 8.09552 12.4995C7.98029 12.5309 7.87248 12.585 7.7784 12.6586C7.68433 12.7322 7.60588 12.8238 7.54766 12.9281C7.48737 13.0312 7.44825 13.1453 7.4326 13.2638C7.41695 13.3822 7.42507 13.5025 7.4565 13.6178C7.48793 13.733 7.54203 13.8408 7.61563 13.9349C7.68924 14.0289 7.78086 14.1074 7.88516 14.1656L12.5352 16.8562C12.6758 16.9406 12.8352 16.9781 12.9852 16.9781C13.3039 16.9781 13.6039 16.8187 13.7727 16.5281C13.8348 16.4252 13.8757 16.3108 13.8928 16.1918C13.9099 16.0728 13.903 15.9515 13.8724 15.8353C13.8418 15.719 13.7882 15.61 13.7147 15.5149C13.6412 15.4197 13.5493 15.3402 13.4445 15.2812ZM19.4258 9.34688C19.5475 9.55329 19.7456 9.70346 19.9772 9.76487C20.2088 9.82628 20.4553 9.79399 20.6633 9.675C21.0945 9.42188 21.2445 8.86875 21.0008 8.4375L18.3102 3.7875C18.1839 3.59276 17.9878 3.45375 17.7623 3.399C17.5367 3.34424 17.2988 3.37789 17.0973 3.49305C16.8957 3.6082 16.7459 3.79612 16.6786 4.01824C16.6113 4.24036 16.6315 4.47983 16.7352 4.6875L19.4258 9.34688Z" />
									<path d="M41.522 22.3593C41.4056 22.2942 41.276 22.2562 41.1429 22.2481C41.0098 22.24 40.8766 22.262 40.7532 22.3124L40.5938 22.3781C40.1063 22.5656 39.5532 22.3218 39.3657 21.8437C39.272 21.5999 39.2813 21.3562 39.3845 21.1218C39.4876 20.8874 39.6657 20.7093 39.9001 20.6249L40.0595 20.5593C40.3126 20.4656 40.5095 20.2593 40.5938 20.0062C40.6782 19.7531 40.6501 19.4718 40.5095 19.2374C39.6652 17.867 38.5366 16.6937 37.2001 15.7968C37.09 15.7224 36.965 15.673 36.8339 15.6519C36.7027 15.6309 36.5685 15.6387 36.4407 15.6749C36.3129 15.7122 36.1948 15.7767 36.0944 15.8642C35.9941 15.9516 35.9139 16.0597 35.8595 16.1812L35.7938 16.3406C35.5876 16.8093 34.997 17.0249 34.547 16.8281C34.0688 16.6218 33.8532 16.0593 34.0595 15.5812L34.1251 15.4218C34.2376 15.1781 34.2282 14.8968 34.1063 14.6531C33.9845 14.4093 33.7688 14.2312 33.5063 14.1749C31.9595 13.7999 30.3095 13.7718 28.7345 14.0812C28.472 14.1374 28.2376 14.2968 28.1157 14.5406C27.9845 14.7749 27.9657 15.0562 28.0688 15.3093L28.1251 15.4687C28.1705 15.5838 28.1927 15.7067 28.1904 15.8303C28.1881 15.954 28.1613 16.076 28.1116 16.1893C28.062 16.3026 27.9904 16.4049 27.901 16.4904C27.8115 16.5759 27.7061 16.6429 27.5907 16.6874C27.1126 16.8749 26.5501 16.6312 26.3626 16.1531L26.297 15.9937C26.2499 15.8678 26.1748 15.7542 26.0773 15.6616C25.9799 15.5691 25.8626 15.4999 25.7345 15.4593C25.6078 15.4171 25.4735 15.4028 25.3408 15.4173C25.2081 15.4319 25.0802 15.475 24.9657 15.5437C23.6063 16.3781 22.4251 17.5218 21.5251 18.8531C21.3751 19.0781 21.3282 19.3593 21.4032 19.6124C21.4782 19.8749 21.6657 20.0812 21.9095 20.1937L22.0688 20.2593C22.3032 20.3624 22.4813 20.5406 22.5657 20.7843C22.6595 21.0187 22.6501 21.2812 22.5563 21.5062C22.3501 21.9656 21.797 22.2093 21.3095 21.9937L21.1501 21.9281C21.0285 21.8747 20.8968 21.8487 20.7641 21.8519C20.6314 21.855 20.501 21.8872 20.3821 21.9462C20.2632 22.0052 20.1587 22.0896 20.076 22.1933C19.9932 22.2971 19.9343 22.4178 19.9032 22.5468C19.5282 24.1031 19.5001 25.7531 19.8095 27.3187C19.8657 27.5812 20.0251 27.8062 20.2688 27.9374C20.5032 28.0687 20.7845 28.0874 21.0376 27.9843L21.197 27.9187C21.6938 27.7218 22.2376 27.9749 22.4251 28.4531C22.6126 28.9406 22.3782 29.4843 21.8907 29.6812L21.7313 29.7468C21.4782 29.8499 21.2907 30.0468 21.2063 30.3093C21.122 30.5624 21.1501 30.8437 21.3001 31.0781C22.1444 32.4485 23.2729 33.6218 24.6095 34.5187C24.8345 34.6687 25.1063 34.7062 25.3688 34.6406C25.6313 34.5656 25.8376 34.3781 25.9501 34.1343L26.0157 33.9749C26.2126 33.5062 26.7751 33.2812 27.2626 33.4874C27.497 33.5906 27.6751 33.7687 27.7595 34.0031C27.8532 34.2374 27.8438 34.4906 27.7407 34.7249L27.6751 34.8843C27.6218 35.0059 27.5958 35.1376 27.5989 35.2703C27.602 35.403 27.6342 35.5334 27.6932 35.6523C27.7522 35.7712 27.8366 35.8757 27.9404 35.9584C28.0441 36.0412 28.1648 36.1001 28.2938 36.1312C29.8586 36.5096 31.4872 36.5416 33.0657 36.2249C33.3282 36.1687 33.5626 36.0093 33.6845 35.7656C33.8157 35.5312 33.8345 35.2499 33.7313 34.9968L33.6657 34.8374C33.572 34.6031 33.5813 34.3499 33.6845 34.1156C33.7876 33.8812 33.9657 33.7031 34.2001 33.6093C34.6782 33.4218 35.2407 33.6749 35.4282 34.1437L35.4938 34.3031C35.597 34.5562 35.7938 34.7437 36.0563 34.8281C36.3095 34.9124 36.5907 34.8843 36.8251 34.7437C38.1955 33.8994 39.3688 32.7709 40.2657 31.4343C40.4157 31.2093 40.4626 30.9281 40.3782 30.6749C40.341 30.5472 40.2764 30.429 40.189 30.3287C40.1016 30.2283 39.9934 30.1481 39.872 30.0937L39.7126 30.0281C39.4876 29.9249 39.3095 29.7468 39.2157 29.5124C39.122 29.2781 39.1313 29.0249 39.2251 28.7906C39.4313 28.3218 40.0032 28.0968 40.472 28.3031L40.6313 28.3687C40.7529 28.422 40.8846 28.448 41.0173 28.4449C41.15 28.4417 41.2804 28.4095 41.3993 28.3505C41.5182 28.2915 41.6227 28.2072 41.7054 28.1034C41.7882 27.9996 41.8472 27.879 41.8782 27.7499C42.2438 26.1937 42.272 24.5437 41.9626 22.9781C41.9416 22.848 41.8909 22.7246 41.8145 22.6173C41.7381 22.51 41.638 22.4217 41.522 22.3593ZM40.2845 26.4187C39.1407 26.3343 38.0345 27.0093 37.5657 28.0687C37.2657 28.7437 37.2563 29.4937 37.5282 30.1781C37.6782 30.5624 37.9126 30.8999 38.2032 31.1812C37.7438 31.7343 37.2188 32.2406 36.647 32.6812C35.9157 31.8374 34.6501 31.4999 33.5532 31.9218C32.8688 32.1937 32.3251 32.7093 32.0251 33.3843C31.8563 33.7687 31.7813 34.1718 31.7907 34.5749C31.0782 34.6406 30.347 34.6312 29.6345 34.5281C29.6626 34.1249 29.597 33.7218 29.447 33.3281C29.1751 32.6437 28.6595 32.0999 27.9751 31.8093C26.9063 31.3499 25.622 31.6312 24.8626 32.4468C24.3095 31.9874 23.8032 31.4624 23.3626 30.8906C24.2157 30.1406 24.5532 28.9124 24.122 27.7968C23.6907 26.7093 22.6688 25.9968 21.4688 26.0437C21.4032 25.3312 21.4126 24.5999 21.5157 23.8874C22.6595 23.9624 23.7657 23.2968 24.2345 22.2374C24.5251 21.5624 24.5438 20.8124 24.272 20.1187C24.122 19.7343 23.8876 19.3968 23.597 19.1156C24.0566 18.5605 24.5788 18.0603 25.1532 17.6249C25.8845 18.4593 27.1595 18.7968 28.247 18.3749C29.3626 17.9343 30.0282 16.8562 30.0001 15.7218C30.722 15.6562 31.4532 15.6656 32.1563 15.7593C32.0813 16.8843 32.7095 17.9999 33.8063 18.4781C34.8751 18.9374 36.1501 18.6562 36.9188 17.8406C37.472 18.2999 37.9782 18.8249 38.4188 19.3968C37.9903 19.7724 37.6883 20.2712 37.5541 20.825C37.4198 21.3787 37.4599 21.9604 37.6688 22.4906C38.1001 23.5781 39.1407 24.2906 40.322 24.2437C40.397 24.9749 40.3876 25.6968 40.2845 26.4187Z" />
									<path d="M30.9094 19.425C27.75 19.425 25.1719 21.9938 25.1719 25.1625C25.1719 28.3219 27.7406 30.9 30.9094 30.9C34.0688 30.9 36.6469 28.3313 36.6469 25.1625C36.6469 21.9938 34.0688 19.425 30.9094 19.425ZM30.9094 29.0719C28.7531 29.0719 26.9906 27.3094 26.9906 25.1532C26.9906 22.9969 28.7438 21.2344 30.9094 21.2344C33.0656 21.2344 34.8281 22.9875 34.8281 25.1532C34.8281 27.3188 33.0656 29.0719 30.9094 29.0719Z" />
								</svg>
							</div>
							<div class="content">
								<h3>Te Impulsamos</h3>
								<p>Te apoyamos en cada fase de nuestra asociación. Desde la planificación hasta las operaciones en curso, no lo dejaremos solo.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="single-process">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_2121_3189)">
										<path d="M30 7C26.8355 7 23.7421 7.93838 21.1109 9.69649C18.4797 11.4546 16.4289 13.9534 15.2179 16.8771C14.0069 19.8007 13.6901 23.0177 14.3074 26.1214C14.9248 29.2251 16.4487 32.0761 18.6863 34.3137C20.9239 36.5513 23.7749 38.0752 26.8786 38.6926C29.9823 39.3099 33.1993 38.9931 36.1229 37.7821C39.0466 36.5711 41.5454 34.5203 43.3035 31.8891C45.0616 29.2579 46 26.1645 46 23C45.995 18.7581 44.3077 14.6913 41.3082 11.6918C38.3087 8.69235 34.2419 7.00503 30 7ZM30 37C27.2311 37 24.5243 36.1789 22.222 34.6406C19.9197 33.1022 18.1253 30.9157 17.0657 28.3576C16.0061 25.7994 15.7288 22.9845 16.269 20.2687C16.8092 17.553 18.1426 15.0584 20.1005 13.1005C22.0584 11.1426 24.553 9.8092 27.2687 9.26901C29.9845 8.72881 32.7994 9.00606 35.3576 10.0657C37.9157 11.1253 40.1022 12.9197 41.6406 15.222C43.1789 17.5243 44 20.2311 44 23C43.996 26.7118 42.5198 30.2705 39.8951 32.8951C37.2705 35.5198 33.7118 36.996 30 37Z" />
										<path d="M33.8793 16.879L26.0003 24.761C25.4213 24.2668 24.6794 24.0053 23.9185 24.0271C23.1577 24.0489 22.432 24.3525 21.8823 24.879C21.3199 25.4416 21.0039 26.2045 21.0039 27C21.0039 27.7955 21.3199 28.5584 21.8823 29.121L23.8823 31.121C24.4486 31.6767 25.2103 31.988 26.0038 31.988C26.7972 31.988 27.559 31.6767 28.1253 31.121L38.1253 21.121C38.6717 20.5552 38.9741 19.7974 38.9673 19.0108C38.9605 18.2242 38.6449 17.4718 38.0887 16.9155C37.5325 16.3593 36.7801 16.0438 35.9935 16.037C35.2069 16.0301 34.4491 16.3325 33.8833 16.879H33.8793ZM36.7073 19.707L26.7073 29.707C26.5171 29.8895 26.2638 29.9914 26.0003 29.9914C25.7367 29.9914 25.4834 29.8895 25.2933 29.707L23.2933 27.707C23.1111 27.5184 23.0103 27.2658 23.0126 27.0036C23.0149 26.7414 23.12 26.4906 23.3054 26.3052C23.4909 26.1198 23.7417 26.0146 24.0039 26.0123C24.2661 26.01 24.5187 26.1108 24.7073 26.293L25.2933 26.879C25.4808 27.0665 25.7351 27.1718 26.0003 27.1718C26.2654 27.1718 26.5197 27.0665 26.7073 26.879L35.2933 18.293C35.4819 18.1108 35.7345 18.01 35.9967 18.0123C36.2589 18.0146 36.5097 18.1198 36.6951 18.3052C36.8805 18.4906 36.9857 18.7414 36.9879 19.0036C36.9902 19.2658 36.8894 19.5184 36.7073 19.707Z" />
										<path d="M51.4795 19.128L49.4045 18.3C48.9203 16.2905 48.1236 14.3694 47.0435 12.607L47.9215 10.551C48.093 10.1682 48.1538 9.74502 48.0969 9.32944C48.0399 8.91386 47.8676 8.52257 47.5995 8.20001C47.2345 7.76101 46.8155 7.30001 46.2585 6.72801C45.7956 6.27152 45.3146 5.83383 44.8165 5.41601C44.4938 5.14447 44.1013 4.96893 43.6838 4.90935C43.2662 4.84978 42.8403 4.90856 42.4545 5.07901L40.3975 5.95801C38.6333 4.87852 36.7106 4.08283 34.6995 3.60001L33.8695 1.52201C33.7157 1.13426 33.4589 0.795876 33.1269 0.543343C32.7949 0.29081 32.4002 0.133716 31.9855 0.0890067C30.6678 -0.0290178 29.3422 -0.0290178 28.0245 0.0890067C27.6073 0.131813 27.2098 0.287851 26.875 0.540246C26.5401 0.79264 26.2806 1.13179 26.1245 1.52101L25.2995 3.60001C23.29 4.08443 21.369 4.88112 19.6065 5.96101L17.5495 5.07801C17.1669 4.90645 16.7438 4.84568 16.3284 4.90261C15.913 4.95953 15.5219 5.13186 15.1995 5.40001C14.7585 5.76501 14.2995 6.18501 13.7275 6.74001C13.2708 7.20236 12.8334 7.68344 12.4165 8.18201C12.1438 8.50431 11.9674 8.89689 11.9074 9.31479C11.8475 9.7327 11.9064 10.159 12.0775 10.545L12.9565 12.602C11.8761 14.3663 11.0788 16.2889 10.5935 18.3L8.5155 19.131C8.12856 19.2855 7.79114 19.5427 7.53966 19.8749C7.28818 20.2071 7.13219 20.6017 7.0885 21.016C6.9705 22.333 6.9705 23.658 7.0885 24.975C7.13066 25.3924 7.28645 25.7902 7.53893 26.1252C7.79141 26.4602 8.13091 26.7195 8.5205 26.875L10.5945 27.704C11.08 29.7133 11.877 31.6342 12.9565 33.397L12.0785 35.453C11.9077 35.8352 11.8472 36.2576 11.9039 36.6723C11.9606 37.0871 12.1323 37.4777 12.3995 37.8C12.7645 38.241 13.1845 38.7 13.7405 39.272C14.2915 39.81 14.7535 40.23 15.1815 40.584C15.2165 40.614 15.2595 40.629 15.2965 40.657L10.2485 52.269C10.051 52.7376 9.97252 53.2478 10.0201 53.7541C10.0676 54.2604 10.2397 54.7471 10.521 55.1708C10.8022 55.5944 11.184 55.9419 11.6321 56.1822C12.0803 56.4225 12.581 56.5482 13.0895 56.548H17.3795C17.4339 56.5474 17.488 56.5576 17.5384 56.578C17.5889 56.5984 17.6348 56.6287 17.6735 56.667L20.1125 59.1C20.4673 59.4546 20.9032 59.7173 21.3824 59.8657C21.8615 60.014 22.3696 60.0434 22.8627 59.9513C23.3558 59.8593 23.8191 59.6485 24.2124 59.3373C24.6058 59.0261 24.9175 58.6237 25.1205 58.165L29.9995 47.417L34.8735 58.147C35.0737 58.6083 35.3838 59.0135 35.7767 59.3273C36.1696 59.6411 36.6334 59.8538 37.1275 59.947C37.3161 59.9828 37.5076 60.0005 37.6995 60C38.5173 60.0009 39.3021 59.6772 39.8815 59.1L42.3245 56.667C42.4028 56.5914 42.5077 56.5497 42.6165 56.551H46.9065C47.416 56.5512 47.9175 56.4251 48.3663 56.184C48.8151 55.9429 49.1972 55.5942 49.4782 55.1693C49.7593 54.7444 49.9306 54.2564 49.9769 53.7491C50.0232 53.2417 49.943 52.7308 49.7435 52.262L44.6925 40.664C44.7265 40.638 44.7685 40.624 44.8015 40.596C45.2405 40.231 45.7015 39.812 46.2735 39.255C46.73 38.7921 47.1677 38.3111 47.5855 37.813C47.8577 37.4906 48.0336 37.0981 48.0932 36.6804C48.1528 36.2627 48.0937 35.8367 47.9225 35.451L47.0435 33.394C48.1237 31.6313 48.9204 29.7099 49.4045 27.7L51.4825 26.87C51.8695 26.7154 52.2069 26.4581 52.4585 26.126C52.7101 25.7939 52.8664 25.3994 52.9105 24.985C52.9741 24.3253 53.0038 23.6628 52.9995 23C53.0038 22.3389 52.9741 21.678 52.9105 21.02C52.8664 20.6044 52.7099 20.2086 52.4578 19.8753C52.2056 19.5419 51.8674 19.2836 51.4795 19.128ZM23.2925 57.347C23.2215 57.5095 23.1118 57.6522 22.9731 57.7627C22.8343 57.8731 22.6706 57.948 22.4963 57.9807C22.322 58.0134 22.1424 58.003 21.973 57.9505C21.8036 57.8979 21.6496 57.8047 21.5245 57.679L19.0875 55.252C18.6327 54.8026 18.0189 54.5511 17.3795 54.552H13.0895C12.9109 54.5529 12.7349 54.5089 12.5777 54.4242C12.4205 54.3395 12.287 54.2167 12.1895 54.067C12.09 53.9213 12.0288 53.7529 12.0113 53.5773C11.9938 53.4017 12.0207 53.2245 12.0895 53.062L17.3415 40.98C17.4105 40.958 17.4805 40.952 17.5485 40.923L19.6055 40.044C21.3683 41.124 23.2897 41.9207 25.2995 42.405L26.1295 44.484C26.2845 44.8706 26.5418 45.2078 26.8739 45.4592C27.206 45.7106 27.6003 45.8668 28.0145 45.911C28.1615 45.926 28.3205 45.933 28.4735 45.944L23.2925 57.347ZM47.9085 53.047C47.9777 53.2116 48.0051 53.3908 47.9881 53.5685C47.9712 53.7463 47.9105 53.9171 47.8115 54.0656C47.7124 54.2142 47.5781 54.3359 47.4205 54.4199C47.263 54.5039 47.0871 54.5476 46.9085 54.547H42.6195C41.9829 54.5478 41.3721 54.7993 40.9195 55.247L38.4775 57.679C38.3512 57.8049 38.1959 57.8978 38.0252 57.9497C37.8546 58.0016 37.6738 58.0108 37.4988 57.9766C37.3238 57.9423 37.1598 57.8656 37.0214 57.7533C36.8829 57.6409 36.7741 57.4962 36.7045 57.332L31.5315 45.942C31.6805 45.931 31.8315 45.925 31.9795 45.91C32.3967 45.8672 32.7942 45.7112 33.1291 45.4588C33.4639 45.2064 33.7234 44.8672 33.8795 44.478L34.7085 42.403C36.718 41.9188 38.6391 41.1221 40.4015 40.042L42.4575 40.92C42.5215 40.948 42.5895 40.953 42.6575 40.975L47.9085 53.047ZM50.9195 24.8C50.9105 24.8489 50.889 24.8947 50.8571 24.9329C50.8252 24.9711 50.784 25.0004 50.7375 25.018L48.1755 26.042C48.023 26.1034 47.8878 26.2012 47.7818 26.3268C47.6758 26.4525 47.6022 26.6023 47.5675 26.763C47.1128 28.8986 46.2695 30.9323 45.0795 32.763C44.9904 32.9007 44.9364 33.0581 44.9225 33.2215C44.9085 33.3849 44.935 33.5492 44.9995 33.7L46.0845 36.241C46.1069 36.2871 46.116 36.3386 46.1109 36.3896C46.1058 36.4406 46.0866 36.4892 46.0555 36.53C45.7275 36.93 45.3415 37.352 44.8555 37.845C44.3435 38.345 43.9195 38.731 43.5105 39.068C43.4698 39.0955 43.4226 39.1118 43.3736 39.1151C43.3246 39.1185 43.2755 39.1088 43.2315 39.087L40.6995 38C40.5488 37.9358 40.3846 37.9096 40.2214 37.9237C40.0582 37.9379 39.901 37.9919 39.7635 38.081C37.9328 39.271 35.8991 40.1143 33.7635 40.569C33.6028 40.6037 33.453 40.6773 33.3273 40.7833C33.2016 40.8893 33.1038 41.0245 33.0425 41.177L32.0195 43.736C32.0011 43.7848 31.97 43.8278 31.9294 43.8605C31.8888 43.8932 31.8401 43.9145 31.7885 43.922C31.1959 43.978 30.6008 44.0041 30.0055 44H29.9935C29.3955 44.0035 28.7978 43.9768 28.2025 43.92C28.1536 43.9109 28.1079 43.8894 28.0697 43.8575C28.0315 43.8256 28.0022 43.7845 27.9845 43.738L26.9605 41.176C26.8997 41.0233 26.8022 40.8879 26.6766 40.7819C26.551 40.6758 26.4012 40.6024 26.2405 40.568C24.1048 40.1138 22.0709 39.2704 20.2405 38.08C20.0785 37.975 19.8896 37.919 19.6965 37.919C19.56 37.9185 19.4249 37.946 19.2995 38L16.7585 39.085C16.7127 39.1081 16.6613 39.1177 16.6103 39.1125C16.5592 39.1074 16.5107 39.0878 16.4705 39.056C16.0705 38.727 15.6485 38.341 15.1555 37.856C14.6555 37.345 14.2715 36.922 13.9315 36.511C13.904 36.4705 13.8879 36.4233 13.8847 36.3745C13.8815 36.3256 13.8915 36.2768 13.9135 36.233L14.9995 33.7C15.0637 33.5493 15.0899 33.3851 15.0758 33.2219C15.0616 33.0587 15.0076 32.9015 14.9185 32.764C13.7282 30.9334 12.8846 28.8996 12.4295 26.764C12.3954 26.6032 12.3221 26.4533 12.2163 26.3275C12.1104 26.2018 11.9751 26.104 11.8225 26.043L9.2645 25.017C9.21614 24.9979 9.17357 24.9666 9.14096 24.9261C9.10835 24.8856 9.08683 24.8373 9.0785 24.786C9.0255 24.255 8.9995 23.671 8.9995 23C8.9995 22.329 9.0255 21.745 9.0795 21.2C9.08885 21.1513 9.11047 21.1059 9.14232 21.0679C9.17417 21.0299 9.2152 21.0007 9.2615 20.983L11.8235 19.959C11.9761 19.898 12.1114 19.8003 12.2173 19.6745C12.3231 19.5487 12.3964 19.3988 12.4305 19.238C12.8856 17.1024 13.7292 15.0686 14.9195 13.238C15.0088 13.1002 15.0628 12.9426 15.0768 12.779C15.0907 12.6154 15.0642 12.4509 14.9995 12.3L13.9165 9.76301C13.8939 9.71675 13.8847 9.66511 13.8898 9.61389C13.8949 9.56266 13.9142 9.51388 13.9455 9.47301C14.2745 9.07301 14.6595 8.65201 15.1455 8.15801C15.6565 7.65801 16.0805 7.27401 16.4915 6.93501C16.5317 6.90711 16.5787 6.89069 16.6275 6.88752C16.6763 6.88435 16.7251 6.89454 16.7685 6.91701L19.2995 8.00001C19.4504 8.06438 19.6147 8.09066 19.7781 8.07654C19.9415 8.06241 20.0989 8.00831 20.2365 7.91901C22.0669 6.72857 24.1008 5.88519 26.2365 5.43101C26.3972 5.39664 26.547 5.32319 26.6726 5.21714C26.7982 5.11109 26.8957 4.97572 26.9565 4.82301L27.9785 2.26501C27.997 2.21599 28.0283 2.17281 28.0691 2.13994C28.1098 2.10706 28.1587 2.08568 28.2105 2.07801C29.4022 1.97201 30.6009 1.97201 31.7925 2.07801C31.8414 2.08701 31.8872 2.1085 31.9254 2.14038C31.9636 2.17227 31.9929 2.21347 32.0105 2.26001L33.0345 4.82201C33.0958 4.97455 33.1936 5.10974 33.3193 5.21573C33.445 5.32173 33.5948 5.3953 33.7555 5.43001C35.8911 5.88472 37.9248 6.72806 39.7555 7.91801C39.8938 8.00866 40.0524 8.0636 40.2172 8.07792C40.3819 8.09223 40.5476 8.06546 40.6995 8.00001L43.2405 6.91501C43.2866 6.89262 43.3381 6.88347 43.3891 6.88859C43.4401 6.89371 43.4887 6.9129 43.5295 6.94401C43.9295 7.27201 44.3515 7.65801 44.8445 8.14401C45.3445 8.65601 45.7305 9.08001 46.0675 9.48901C46.0955 9.52948 46.1121 9.57678 46.1154 9.62589C46.1188 9.675 46.1088 9.72411 46.0865 9.76801L44.9995 12.3C44.9353 12.4507 44.9091 12.6149 44.9232 12.7781C44.9374 12.9413 44.9914 13.0986 45.0805 13.236C46.2705 15.0667 47.1138 17.1005 47.5685 19.236C47.6032 19.3967 47.6768 19.5465 47.7828 19.6722C47.8888 19.7979 48.024 19.8957 48.1765 19.957L50.7355 20.98C50.7827 20.9974 50.8245 21.0267 50.857 21.065C50.8894 21.1034 50.9113 21.1496 50.9205 21.199V21.211C50.9774 21.8056 51.0038 22.4027 50.9995 23C51.0036 23.601 50.9769 24.2018 50.9195 24.8Z" />
									</g>
								</svg>
							</div>
							<div class="content">
								<h3>Crecemos</h3>
								<p>Nos importa tu crecimiento. Juntos lograremos alcanzar todas tus metas comerciales y garantizar tus ingresos.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row g-lg-4 gy-5 align-items-center">
					<div class="col-lg-5">
						<div class="what-we-do-img magnetic-item">
							<img class="img-fluid" src="{{asset('assets/home/socios.png')}}" alt>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="what-we-do-content">
							<h2>Conviértete En Nuestro Socio Y Emprende En Un Negocio Rentable</h2>
							<p>Los sistemas de apuestas son cada vez más populares y la tendencia sigue aumentando. Los eventos deportivos y máquinas de videolotería cada vez atraen más público.</p>
							<br>	

<p>	Contamos con un sistema de administración con el cual tendrá acceso a toda la información sobre sus clientes y ganancias en tiempo real. Podrá ver su riesgo y el comportamiento de su negocio. Si desea un manejo personal en sus líneas de apuestas o limitar eventos para sus jugadores, lo podrá realizar por medio de nuestro sistema.</p><br>	

<p>Si estás buscando un proveedor de software de Igaming y este considerando invertir en los negocios de apuestas no dudes en contactarnos, será un gusto poder ayudarte.software, and brands.</p>
							<ul class="about-featue">
								<li>
									<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z"></path>
									</svg>
									Información por medio de Atención al Cliente
								</li>
								<li>
									<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z"></path>
									</svg>
									Atención por uno de nuestros agentes
								</li>
								<li>
									<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z"></path>
									</svg>
								Proceso de Implementación
								</li>
								<li>
									<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z"></path>
									</svg>
									Solicitud de Instalación
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="home6-contact-section sec-mar">
			<div class="container">
				<div class="row g-lg-4 gy-5 justify-content-center">
					<div class="col-lg-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" ">
						<div class="section-title-6 text-center mb-55">
							<span>Consulta</span>
							<h2>Contacto</h2>
						</div>
						<div class="contact-content">
							<p>¿Tienes Alguna Pregunta? ¡Ponte En Contacto!</p>
							<div class="contact-number">
								<p>Llámanos Ahora: <a href="tel:51913069000">+51 913 069 000</a></p>
							</div>
							<div class="contact-step">
								<div class="accordion" id="accordionExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Misión
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Construir y ofrecer soluciones de plataforma de alta calidad para iGaming.
Gamingtec tiene como objetivo inspirar al equipo con una gran misión, involucrar a todos los miembros en todo el proceso y tener siempre el objetivo en mente. ¡Así es como hacemos negocios!
											</div>
										</div>
									</div>
									<!-- <div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												E-mail
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body">
													info@kingtech.pe
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												WhatsApp
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												<a href="https://wa.me/51913069000">Escribir a WhatsApp</a>
											</div>
										</div>
									</div> -->
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
								<form action="" method="post">
									 {{ csrf_field() }}
                                    <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
									<div class="row">
										<div class="col-md- mb-20">
											<div class="form-inner">
												<label>Nombre</label>
												<input type="text" name="name" required>
											</div>
										</div>
									
										<div class="col-lg-6 mb-20">
											<div class="form-inner">
												<label>Teléfono</label>
												<input type="text" name="phone" required>
											</div>
										</div>
										<div class="col-lg-6 mb-20">
											<div class="form-inner">
												<label>E-mail</label>
												<input type="email" name="email" required>
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


		<div class="home3-blog-area sec-mar">
			<div class="container">
				<div class="row mb-55  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="col-lg-12 d-flex justify-content-center">
						<div class="section-title-3 text-center">
							<h2>Artículos Profesionales</h2>
							<p>Tienes un local y estás listo para emprender?
¡Te guiamos con nuestros arículos profesionales para que tengas tu propia Franquicias Kingtech</p>
						</div>
					</div>
				</div>
				<div class="row g-lg-4 gy-5">
					<div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="single-blog magnetic-item">
						<div class="blog-img">
							<img class="img-fluid" src="{{asset('assets/articles/articulo1a.jpeg')}}" alt>
							<div class="blog-tag">
								<a href="{{url('/blog/franquicias-de-casa-de-apuestas-deportivas-y-casino-online')}}">Franquicias</a>
							</div>
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><a href="{{url('/blog')}}">Diciembre 06, 2023</a></li>
								<!-- <li><a href="blog.html">Comment (3)</a></li> -->
							</ul>
							<h4><a href="{{url('/blog/franquicias-de-casa-de-apuestas-deportivas-y-casino-online')}}">Gana en grande: Descubre por qué las Franquicias de Casa de Apuestas Deportivas y Casino Online son la Inversión Innovadora del Momento </a></h4>
							<div class="blog-footer">
								<div class="read-btn">
									<a href="{{url('/blog/franquicias-de-casa-de-apuestas-deportivas-y-casino-online')}}">Ver más
										<svg width="12" height="12" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
										</svg>
									</a>
								</div>
								<div class="social-area">
									<ul>
										<li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
										<li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
										<li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
										<li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
									</ul>
									<span><img src="assets/img/home-3/plain-icon.svg" alt></span>
								</div>
							</div>
						</div>
					</div>
					</div>
				
				</div>
			</div>
		</div>

@endsection