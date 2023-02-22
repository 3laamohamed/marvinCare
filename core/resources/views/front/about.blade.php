@extends('front.new_layout')

@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
	<div class="theme-page">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1>{{ __('About') }}</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<ul class="bread-crumb">
							<li>
								<a title="Home" href="home.html">
									{{ __('Home') }}
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								{{ __('About') }}
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<div class="column column-1-2">
					<div class="row">
						<a class="prettyPhoto cm-preload" title="House Cleaning">
							<img src="{{ asset('/') }}assets/front/img/{{$sectionInfo->about_image}}" alt='img'>
						</a>
					</div>
				</div>
				<div class="column column-1-2">
					<div class="row padding-left-right-30">
						<h2 class="box-header align-left">{{$sectionInfo->about_title}}</h2>
						<p class="description">
							{!! $sectionInfo->about_subtitle!!}
						</p>
						<ul class="list margin-top-20">
							@foreach($abouts as $about)
								<li class="template-tick-1">{{$about->feature}}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div>
				<div class="row">
					<ul class="services-list services-icons clearfix">
						<li class="column column-1-3">
							<span class="service-icon big features-credit-card tick"></span>
							<h4>EASY PAYMENTS</h4>
							<p>Easy payments via paypal or via credit card payment processing service.</p>
						</li>
						<li class="column column-1-3">
							<span class="service-icon big features-pet tick"></span>
							<h4>PET FRIENDLY</h4>
							<p>We us pet friendly cleaners as your pet is a valued member of your family.</p>
						</li>
						<li class="column column-1-3">
							<span class="service-icon big features-delivery tick"></span>
							<h4>ALWAYS ON TIME</h4>
							<p>Your time is important to us. We provide always on time cleaning service.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
