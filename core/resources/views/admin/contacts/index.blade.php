@extends('admin.layout')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Contacts</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
          <li class="breadcrumb-item">Contacts</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
  
    <!---------------card----------------->
    <div class="row">
      @foreach($contacts as $contact)
      <div class="col-lg-4">
        <!--frist card--->
        <div class="card ">
          <div class="modal-header">
            <h5 style="font-size:15px" class="modal-title" id="exampleModalLabel">{{$contact->created_at}}</h5>
            <button type="button" class="close" style="opacity: 1;" data-dismiss="modal" aria-label="Close">
             <a href="{{route('admin.deleteContact',$contact->id)}})}}">
               <i style="color:white; background-color:red ;padding:10px; border-radius:5px" class="fa-solid fa-trash-can"></i>
             </a>
            </button>
          </div>
          <div class="card-body">
            <h3 class="card-title">{{$contact->name}}</h3>
            <p class="card-text">
            <h5>{{$contact->email}}</h5>
            <h5>{{$contact->phone}}</h5>
              </p>
              <p>
                {{$contact->message}}
              </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- /.row -->
</section>
@endsection