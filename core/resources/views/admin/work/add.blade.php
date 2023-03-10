@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Work') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Work') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Add Work Category') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.work'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.work.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group row">
                                       <label class="col-sm-2 control-label">{{ __('Language') }}<span class="text-danger">*</span></label>
       
                                       <div class="col-sm-10">
                                           <select class="form-control lang" name="language_id" id="blog_lan">
                                               @foreach($langs as $lang)
                                                   <option value="{{$lang->id}}" >{{$lang->name}}</option>
                                               @endforeach
                                           </select>
                                           @if ($errors->has('language_id'))
                                               <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                           @endif
                                       </div>
                                   </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="main_image">{{ __('Choose Image') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="main_image" id="main_image">
                                            </div>
                                            @if ($errors->has('main_image'))
                                                <p class="text-danger"> {{ $errors->first('main_image') }} </p>
                                            @endif
                                            <p class="help-block text-info">{{ __('Upload 730X455 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bcategory_id" class="col-sm-2 control-label">{{ __('Category') }}<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="bcategory_id" id="bcategory_id">
                                                @foreach(\App\WorkCategory::get()->all() as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('bcategory_id'))
                                                <p class="text-danger"> {{ $errors->first('bcategory_id') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                            <option value="1">{{ __('Publish') }}</option>
                                            <option value="0" selected>{{ __('Unpublish') }}</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

