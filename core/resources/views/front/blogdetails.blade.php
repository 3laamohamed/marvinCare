@extends('front.new_layout')

@section('meta-keywords', "$blog->meta_keywords")
@section('meta-description', "$blog->meta_description")
@section('content')
	<div class="theme-page padding-bottom-100">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1>{{$blog->title}}</h1>
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
								<a title="Home" href="{{ route('front.blogs') }}">
									{{ __('Blog') }}
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								{{$blog->title}}
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<div>
					<div class="blog clearfix">
						<div class="post single">
							<a href="post.html" title="How to: deep clean your kitchen" class="post-image">
								<div class="post-date">
									<div class="month">{{date('M',strtotime($blog->created_at))}}</div>
									<h4>{{date('d',strtotime($blog->created_at))}}</h4>
								</div>
								<img src="{{asset('assets/front/img/'.$blog->main_image) }}" alt="">
							</a>
							<h2><a>{{$blog->title}}</a></h2>
							<div class="post-content-details-container clearfix">
								<ul class="post-content-details left">
									<li>{{date ( 'd M, Y', strtotime($blog->created_at) )}}</li>
								</ul>
							</div>
							<p class="margin-top-10">{!! $blog->content !!}</p>
						</div>
					</div>
				</div>
{{--				<div class="column column-1-4 cm-smart-column">--}}
{{--					<div class="cm-smart-column-wrapper">--}}
{{--						<ul class="categories clearfix">--}}
{{--							<li><a href="category.html" title="House Cleaning">House Cleaning<span>5</span></a></li>--}}
{{--							<li><a href="category.html" title="Post Renovation">Post Renovation<span>2</span></a></li>--}}
{{--							<li><a href="category.html" title="Green Spaces Maintenance">Green Spaces Maintenance<span>2</span></a></li>--}}
{{--							<li><a href="category.html" title="Move In Out Service">Move In Out Service<span>4</span></a></li>--}}
{{--							<li><a href="category.html" title="Commercial Cleaning">Commercial Cleaning<span>1</span></a></li>--}}
{{--							<li><a href="category.html" title="Window Cleaning">Window Cleaning<span>12</span></a></li>--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
			</div>
		</div>
	</div>
@endsection
