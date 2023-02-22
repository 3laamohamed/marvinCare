@extends('front.new_layout')

@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
	<section class="header">
		<div class="container text-center">
			<h2>Contact US</h2>
		</div>
	</section>
	<section class="contact">
		<div class="container" data-aos="zoom-in" data-aos-duration="2000">
			<div class="row">
				<div class="col-lg-8 col-sm-12 order-2 order-lg-1">
					<div class="form">
						<h3>Contact</h3>
						<form method="POST" action="{{ route('front.contact.submit') }}">
							@csrf
							<div class="form-row">
								<div class="col-md-6 col-sm-12">
									<label for="name">
										@if($currentLang->direction == 'ltr')
										Name
										@else
											الاسم
										@endif
									</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<div class="col-md-6 col-sm-12">
									<label for="email">
										@if($currentLang->direction == 'ltr')
											Email
										@else
											البريد الالكتروني
										@endif
									</label>
									<input type="email" name="email" class="form-control" id="email" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 col-sm-12">
									<label for="phone">
										@if($currentLang->direction == 'ltr')
											Phone
										@else
											الهاتف
										@endif
									</label>
									<input type="text" name="phone" class="form-control" id="phone" required>
								</div>
								<div class="col-md-6 col-sm-12">
									<label for="address">
										@if($currentLang->direction == 'ltr')
											Country
										@else
											البلد
										@endif
									</label>
									<div id="dropdown"></div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<label for="address">
										@if($currentLang->direction == 'ltr')
											Subject
										@else
											الموضوع
										@endif
									</label>
									<input type="text" name="about" class="form-control" id="address" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="message">
										@if($currentLang->direction == 'ltr')
											Message
										@else
											الرسالة
										@endif
									</label>
									<textarea class="form-control" name="message" rows="8" id="message" required></textarea>
								</div>
							</div>
							<!-- <div class="clip-path"> -->
							<button type="submit" name="save">{{ __('Send Message') }}</button>
							<!-- </div> -->
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 order-1 order-lg-2">
					<div class="contact-info text-center">
						<h3>Contact information</h3>
						<div class="address">
							<img src="{{asset('assets/front_2/imgs/location.png')}}" width="50" height="50" alt="location" class="img-fluid">
							<p>{{ $setting->address }}</p>
						</div>
						<div class="mail">
							<a href="mailto:info@AlaaAzani.com">
								<img src="{{asset('assets/front_2/imgs/email.png')}}" width="30" height="30" alt="email" class="img-fluid">
								@php
									$email = explode( ',', $commonsetting->email );
                                    for ($i=0; $i < count($email); $i++) {
                                        echo '<a href="mailto:'.$email[$i].'">'.$email[$i].'</a>';
                                    }
								@endphp
							</a>
							<a href="https://wa.me/+966555549743">
								<img src="{{asset('assets/front_2/imgs/whatsapp.png')}}" width="30" height="30" alt="whatsapp" class="img-fluid">
								@php
									$number = explode( ',', $commonsetting->number );
                                    for ($i=0; $i < count($number); $i++) {
                                        echo '<a href="tel:'.$number[$i].'">'.$number[$i].'</a>';
                                    }
								@endphp
							</a>
							<a href="https://t.me/AlaaAzani">
								<img src="{{asset('assets/front_2/imgs/telegram.png')}}" width="30" height="30" alt="telegram" class="img-fluid">
								https://t.me/AlaaAzani
							</a>
						</div>
						<div class="social">
							<ul class="list-unstyled">
								@foreach($socials as $key => $social)
									<li>
										<a href="{{ $social->url }}">
											<i class="{{ $social->icon }}"></i>
										</a>
									</li>
									@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
