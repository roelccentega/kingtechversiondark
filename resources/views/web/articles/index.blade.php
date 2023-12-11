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
							<span>Blog </span>
							<h1>"Artículos Profesionales</h1>
							<div class="breadcrumb-list">
								<a href="{{url('/')}}">Inicio</a><img src="assets/img/inner-pages/breadcrumb-arrow.svg" alt> Blog 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="blog-masonary-area sec-mar">
		<div class="container">
			<div class="row divider justify-content-lg-between justify-content-center g-lg-4 gy-5">
				<div class="col-lg-5 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="single-blog magnetic-item">
						<div class="blog-img">
								<img class="img-fluid" src="{{asset('assets/articles/articulo1a.jpeg')}}" alt>
							<div class="blog-tag">
								<a href="blog.html">Franquicias</a>
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
			<div class="row">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link"><i class="bi bi-arrow-left"></i></a>
						</li>
						<li class="page-item"><a class="page-link " inhabilited href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
@endsection