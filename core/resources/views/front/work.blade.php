@extends('front.new_layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
    <div class="theme-page padding-bottom-100">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row">
                <div class="page-header-left">
                    <h1>
                        @if($currentLang->direction == 'rtl') المشاريع  @else Projects @endif
                    </h1>
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
                                @if($currentLang->direction == 'rtl') المشاريع  @else Projects @endif
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
                    @foreach($category as $cat)
                        <li><a href="#filter-{{$cat->id}}" title="Apartment">{{$cat->name}}</a></li>
                    @endforeach
                </ul>
                <ul class="projects-list isotope">
                    @foreach($work as $w)
                        <li class="{{$w->bcategory_id}}">
                            <a title="Apartment Cleaning">
                                <img src="{{asset('assets/front/img/'.$w->image) }}" alt="">
                            </a>
                            <div class="view align-center">
                                <div class="vertical-align-table">
                                    <div class="vertical-align-cell">
                                        <p>{{$w->title}}</p>
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
