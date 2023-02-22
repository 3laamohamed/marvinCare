@extends('front.new_layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
	<div class="theme-page padding-bottom-100">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1>LATEST NEWS</h1>
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
								{{ __('Blog') }}
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<ul class="tabs-navigation small isotope-filters clearfix">
					<li><a class="selected" href="#filter-*" title="Show all">Show all</a></li>
					@foreach($bcategories as $cat)
					<li><a href="#filter-{{$cat->id}}" title="Apartment">{{$cat->name}}</a></li>
					@endforeach
				</ul>
				<ul class="projects-list isotope">
					@foreach($latestblogs as $blog)
						<li class="{{$blog->bcategory_id}}">
							<a href="{{route('front.blogdetails',$blog->slug)}}" title="Apartment Cleaning">
								<img src="{{asset('assets/front/img/'.$blog->main_image) }}" alt="">
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
			</div>
		</div>
	</div>
@endsection
