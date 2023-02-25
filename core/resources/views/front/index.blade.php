@extends('front.new_layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
<div class="theme-page">
	<div class="clearfix">
		<div class="row page-margin-top-section">

			<div class="column column-1-8">
				<a>
					<img height="100px" width="500px" src='{{ asset('/') }}assets/front/img/{{$sectionInfo->about_image}}' alt='img'>
				</a>
			</div>
			<div class="column column-1-2">
				<h2 class="box-header">{{$sectionInfo->about_title}}</h2>
				<p class="align-center padding-0 margin-top-27 padding-left-right-35">
					{!! $sectionInfo->about_subtitle!!}
				</p>
				<ul class="list margin-top-20">
					@foreach($abouts as $about)
					<li class="template-tick-1">{{$about->feature}}</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row margin-top-89">
			<div class="row">
				<h2 class="box-header">WHY CHOOSE US</h2>
				<p class="description align-center">Marvin care operates in Ottawa and provides a variety of cleaning services.<br>Choose us because of our reputation for excellence.</p>
				<div class="row page-margin-top">
					<div class="column column-1-4">
						<ul class="features-list align-right margin-top-30">
							@foreach($whyus->take(2) as $why)
							<li>
								<div>
									<img width="75px" src="{{ asset('/') }}assets/front/img/{{$why->icon}}">
								</div>
								<h4>{{$why->name}}</h4>
								<p>{!! $why->disc !!}</p>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="column column-1-2 align-center">
						<div class="image-wrapper">
							<img src="{{ asset('/') }}assets/front/img/top-cleaning-service-2.png" alt="" class="radius border">
						</div>
					</div>
					<div class="column column-1-4">
						<ul class="features-list margin-top-30">
							@foreach($whyus->skip(2)->take(2) as $why)
							<li>
								<div>
									<img width="75px" src="{{ asset('/') }}assets/front/img/{{$why->icon}}">
								</div>
								<h4>{{$why->name}}</h4>
								<p>{!! $why->disc !!}</p>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row full-width gray padding-top-89 padding-bottom-96">
			<div class="row">
				<h2 class="box-header">OUR SERVICES</h2>
				<p class="description align-center">Do you wish you had more free time? We can make it happen!</p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="services-list horizontal-carousel clearfix page-margin-top">
						@foreach($services as $service)
						<li class="column column-1-3">
							<a>
								<div class="overflow-hidden">
									<img width="370px" hight="260px" src="{{ asset('/') }}assets/front/img/{{$service->image}}" alt="">
								</div>
							</a>
							<h4 class="box-header">{{$service->name}}</h4>
							<p>{!! $service->content !!}</p>
						</li>
						<!------------------------->
						@endforeach
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
				<!--------------------------------->

			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header">SELECTED PROJECTS</h2>
				<p class="description align-center">Explore completed projects.</p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="projects-list horizontal-carousel clearfix page-margin-top">
						@foreach($projects as $project)
						<li class="column column-1-3">
							<a href="project_apartment_cleaning.html" title="Apartment Cleaning">
								<img src="{{ asset('/') }}assets/front/img/{{$project->image}}" alt="">
							</a>
							<div class="view align-center">
								<div class="vertical-align-table">
									<div class="vertical-align-cell">
										<p>{{$project->name}}</p>
										{{-- <a class="more simple" href="{{ asset('/') }}assets/front_2/project_apartment_cleaning.html" title="View project">View project</a>--}}
									</div>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header">LATEST NEWS</h2>
				<p class="description align-center">You can browse the latest articles that have been uploaded recently.</p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="projects-list horizontal-carousel clearfix page-margin-top">
						@foreach($blogs as $blog)
						<li class="column column-1-3">
							<a href="project_gutter_cleaning.html" title="Gutter Cleaning">
								<img src="{{ asset('/') }}assets/front/img/{{$blog->main_image}}" alt="">
							</a>
							<div class="view align-center">
								<div class="vertical-align-table">
									<div class="vertical-align-cell">
										<p>{{$blog->title}}</p>
										<a class="more simple" href="{{route('front.blogdetails',$blog->slug)}}" title="View project">View Article</a>
									</div>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header">Our Clients</h2>
				<p class="description align-center">You can browse the latest articles that have been uploaded recently.</p>
				<div class="carousel-container margin-top-65 clearfix">
					<div class="owl-carousel owl-theme">
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/1676842446697983732.png" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/1676842446697983732.png" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="{{ asset('/') }}assets/front/img/1676842446697983732.png" alt=""></div> 

					</div>
				</div>
			</div>
		</div>


	</div>


</div>
</div>






</div>
</div>
@endsection