<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ $setting->website_title }}</title>
	<!--meta-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="@yield('meta-description')">
	<meta name="keywords" content="@yield('meta-keywords')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
	<meta name="format-detection" content="telephone=no" />
	<!--slider revolution-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/rs-plugin/css/settings.css">
	<!--style-->
	<link href='//fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/reset.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/superfish.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/jquery.qtip.css">
	<!-- font-awesome & owl-carousel & -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/fonts/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/owl.theme.default.min.css">


	@if($currentLang->direction == 'rtl')
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/style_ar.css">
	@else
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/style.css">
	@endif

	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/animations.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/style/odometer-theme-default.css">
	<!--fonts-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/fonts/features/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/fonts/template/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front_2/fonts/social/style.css">
	<link rel="shortcut icon" href="{{ asset('/') }}assets/front/img/{{$setting->fav_icon}}">


</head>

<body {{ Session::has('notification') ? 'data-notification' : '' }} @if(Session::has('notification')) data-notification-message='{{ json_encode(Session::get('notification')) }} @endif'>
	<div class="site-container">
		<div class="transparent-header-container height-auto">
			<div class="header-container sticky">
				<div class="header clearfix">

					<!--img--->
					<div class="logo">
						<h1>
							<a href="{{ route('front.index') }}">
								<img src="{{ asset('/') }}assets/front/img/{{$setting->fav_icon}}" width="60px" height="60px" srcset="{{ asset('/') }}assets/front/img/{{$setting->fav_icon}} 2x" class="secondary-logo" alt="logo">
								<img src="{{ asset('/') }}assets/front/img/{{$setting->fav_icon}}" width="60px" height="60px" srcset="{{ asset('/') }}assets/front/img/{{$setting->fav_icon}} 2x" class="primary-logo" alt="logo">
								<span class="logo-text">{{$setting->website_title}}</span>
							</a>
						</h1>
					</div>
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="menu-container first-menu clearfix">
						<div class="mobile-menu-container">
							<nav>
								<ul class="mobile-menu collapsible-mobile-submenus">
									<li><a class="template-arrow-vertical-3" href="#">&nbsp;</a></li>
									<li class="@if(request()->path() == '/') selected  @endif" href="{{ route('front.index') }}">
										<a href="{{ route('front.index') }}">
											{{ __('Home') }}
										</a>
									</li>
									<li class="@if(request()->path() == 'about') selected  @endif" href="{{ route('front.about') }}">
										<a href="{{ route('front.about') }}">
											{{ __('About') }}
										</a>
									</li>
									<li class="@if(request()->path() == 'service') selected  @endif" href="{{ route('front.service') }}">
										<a href="{{ route('front.service') }}">
											{{ __('Service') }}
										</a>
									</li>
									<li class="@if(request()->path() == 'work') selected @elseif(request()->is('work-details/*')) selected @endif">
										<a href="{{ route('front.work') }}">
											@if($currentLang->direction == 'rtl') المشاريع @else Projects @endif
										</a>
									</li>
									<li class="@if(request()->path() == 'blog') selected @elseif(request()->is('blog-details/*')) selected @endif">
										<a href="{{ route('front.blogs') }}">
											{{ __('Blog') }}
										</a>
									</li>
									<li>
										<a href="#contactId">
											@if($currentLang->direction == 'rtl') تواصل معنا @else Contacts @endif
										</a>
									</li>
									<!------------------------------------>
									<li class="left-flyout">
										@if($currentLang->direction == 'rtl')
										<a class="lang" href="{{ route('changeLanguage','en') }}"><span class="text-bold">en</span></a>
										@else
										<a class="lang" href="{{ route('changeLanguage','ar') }}">ع</a>
										@endif
									</li>
								</ul>
							</nav>
						</div>
					</div>


					<!------------------------------------------------->

					<div class="menu-container clearfix second-menu">
						<nav>
							<ul class="sf-menu">
								<li class="@if(request()->path() == '/') selected  @endif" href="{{ route('front.index') }}">
									<a href="{{ route('front.index') }}">
										{{ __('Home') }}
									</a>
								</li>
								<li class="@if(request()->path() == 'about') selected  @endif" href="{{ route('front.about') }}">
									<a href="{{ route('front.about') }}">
										{{ __('About') }}
									</a>
								</li>
								<li class="@if(request()->path() == 'service') selected  @endif" href="{{ route('front.service') }}">
									<a href="{{ route('front.service') }}">
										{{ __('Service') }}
									</a>
								</li>


								<li class="@if(request()->path() == 'work') selected @elseif(request()->is('work-details/*')) selected @endif">
									<a href="{{ route('front.work') }}">
										@if($currentLang->direction == 'rtl') المشاريع @else Projects @endif
									</a>
								</li>
								<li class="@if(request()->path() == 'blog') selected @elseif(request()->is('blog-details/*')) selected @endif">
									<a href="{{ route('front.blogs') }}">
										{{ __('Blog') }}
									</a>
								</li>
								<li class="class=" @if(request()->path() == '/') selected @endif" left-flyout">
									<a href="#contact">
										@if($currentLang->direction == 'rtl') تواصل معنا @else Contacts @endif
									</a>
								</li>
								<li class="left-flyout">
									@if($currentLang->direction == 'rtl')
									<a class="lang" href="{{ route('changeLanguage','en') }}"><span class="text-bold"> en </span></a>
									@else
									<a class="lang" href="{{ route('changeLanguage','ar') }}"> ع </a>
									@endif
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="revolution-slider-container">
			<div class="revolution-slider" data-version="5.4.5">
				<ul>
					@foreach($sliders as $slider)
					<!-- SLIDE 1 -->
					<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
						<!-- MAIN IMAGE -->
						<img src="{{ asset('/') }}assets/front/img/{{$slider->image}}" alt="slidebg1" data-bgfit="cover">
						<!-- LAYERS -->
						<!-- LAYER 02 -->
						<div class="tp-caption" data-frames='[{"delay":900,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="['273', '313', '200', '260']">

							<h2><a href="{{ route('front.service') }}" title="Estimate Total Costs">{{$slider->name}}</a></h2>
						</div>
						<!-- LAYER 03 -->
						<div class="tp-caption" data-frames='[{"delay":1100,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]' data-x="center" data-y="['345', '368', '236', '290']">
							<h2 class="slider-subtitle"><strong>{{$slider->offer}}</strong></h2>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<!------------------test---------------------->
		<!-- Slider Revolution -->
		@yield('content')
		<div class="row dark-gray footer-row full-width padding-top-61 padding-bottom-36" id="contactId">
			<div style="padding: 0px 15px;">
				<h2 style="color:white" class="box-header">{{$sectionInfo->contact_title}}</h2>
				<p class="description align-center">{{$setting->footer_text}}</p>
			</div>
			<div class="row row-4-4">
				<div class="cards-p4">
					<div class="contact-minicards">
						<div class="contact-forms">
							<form method="POST" action="{{route('front.storeContact')}}">
								@csrf
								<div class="middle">
									<label style="text-align:left" id="cdl42" for="username">Name</label>
									<input type="text" name="name" placeholder="Please Enter Your Name" />
								</div>
								<div class="top">
									<div>
										<label style="text-align:left" id="cdl40" for="email">Email</label>
										<input type="text" name="email" placeholder="Please Enter Your Email" />
									</div>
									<div>
										<label style="text-align:left" id="cdl41" for="phone">Phone</label>
										<input type="phone" name="phone" placeholder="Please Enter Your phone" />
									</div>
								</div>

								<div class="bottom">
									<label style="text-align:left" id="cdl43" for="message">Message</label>
									<textarea name="message" cols="30" rows="7"></textarea>
								</div>
								<button id="cdl44" type="submit">Send</button>
							</form>
						</div>
						<div class="location">
							<div class="row">
								<ul class="contact-data margin-top-20">
									<li class="template-location">
										<div class="value">{{ $setting->address }}</div>
									</li>
									@php
										$phoneArray = explode(",",$setting->number)
									@endphp
									@for($i = 0; $i<sizeof($phoneArray) ; $i++)
										<li class="template-mobile">
											<div class="value"><a href="tel:{{$phoneArray[$i]}}">{{$phoneArray[$i]}}</a></div>
										</li>
									@endfor
									<li class="template-email">
										<div class="value"><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
									</li>
								</ul>
								<ul class="social-icons align-center margin-top-20">
									@foreach($social as $so)
										<li>
											<a target="_blank" href="{{$so->url}}" class="{{$so->icon}}" title="twitter"></a>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-center padding-top-30">
				<span class="copyright">{!! $setting->copyright_text !!}</span>
			</div>
		</div>
	</div>
	<a href="#top" class="scroll-top animated-element template-arrow-vertical-3" title="Scroll to top"></a>
	<div class="background-overlay"></div>
	<!--js-->
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery-migrate-1.4.1.min.js"></script>
	<!--slider revolution-->
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.ba-bbq.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery-ui-1.12.1.custom.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.transit.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.timeago.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.hint.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.costCalculator.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.parallax.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/jquery.blockUI.min.js"></script>
	<!-- Owl-carousel & bootstrap 4.6 javascript -->
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/owl.carousel.min.js"></script>

	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/main.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}assets/front_2/js/odometer.min.js"></script>
</body>

</html>