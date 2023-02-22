@extends('front.new_layout')

@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
	<div class="theme-page padding-bottom-100">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1>OUR SERVICES</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<ul class="bread-crumb">
							<li>
								<a title="Home" href="{{ route('front.index') }}">
									{{ __('Home') }}
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								{{ __('Service') }}
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<ul class="services-list gray clearfix">
					@foreach($services as $key => $service)
						<li>
							<a title="House Cleaning">
								<img src="{{ asset('assets/front/img/'.$service->image) }}" alt="">
							</a>
							<h4 class="box-header"><a title="House Cleaning">{{ $service->name }}</a></h4>
							<p>
								{{ (strlen(strip_tags(Helper::convertUtf8($service->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($service->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($service->content)) }}
							</p>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
