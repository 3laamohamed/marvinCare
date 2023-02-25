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
      <div class="col-lg-4">
        <!--frist card--->
        <div class="card ">
          <div class="modal-header">
            <h5 style="font-size:15px" class="modal-title" id="exampleModalLabel">2022-12-18 08:11:26</h5>
            <button type="button" class="close" style="opacity: 1;" data-dismiss="modal" aria-label="Close">
              <i style="color:white; background-color:red ;padding:10px; border-radius:5px" class="fa-solid fa-trash-can"></i>
            </button>
          </div>
          <div class="card-body">
            <h3 class="card-title">Abdullah Younis</h3>
            <p class="card-text">
            <h5>abdullah.ibrahim@startnet.com.eg</h5>
            <h5>01000497392</h5>
              </p>
              <p>-Abdullah Younis from New StartNet import & export System integrator. Official Desti. for Legrand and Systemax. if you have any projects that need Legrand or Systimax please tell me. contact: +201000497392 Calling WhatsApp.
                <br>
                Email:
                <br>
                abdullah.ibrahim@startnet.com.eg
                <br>
                Thanks Have A Great Day!
              </p>
          </div>
        </div>
      </div>
      <!-- secand card-->
      <div class="col-lg-4">
        <div class="card ">
          <div class="modal-header">
            <h5 style="font-size:15px" class="modal-title" id="exampleModalLabel">2022-12-18 08:11:26</h5>
            <button type="button" class="close" style="opacity: 1;" data-dismiss="modal" aria-label="Close">
              <i style="color:white; background-color:red ;padding:10px; border-radius:5px" class="fa-solid fa-trash-can"></i>
            </button>
          </div>
          <div class="card-body">
          <h3 class="card-title">Abdullah Younis</h3>
            <p class="card-text">
            <h5>abdullah.ibrahim@startnet.com.eg</h5>
            <h5>01000497392</h5>
              </p>
              <p>-Abdullah Younis from New StartNet import & export System integrator. Official Desti. for Legrand and Systemax. if you have any projects that need Legrand or Systimax please tell me. contact: +201000497392 Calling WhatsApp.
                <br>
                Email:
                <br>
                abdullah.ibrahim@startnet.com.eg
                <br>
                Thanks Have A Great Day!
              </p>
          </div>
        </div>
      </div>
      <!--  three card -->
      <div class="col-lg-4">
        <div class="card ">
          <div class="modal-header">
            <h5 style="font-size:15px" class="modal-title" id="exampleModalLabel">2022-12-18 08:11:26</h5>
            <button type="button" class="close" style="opacity: 1;" data-dismiss="modal" aria-label="Close">
              <i style="color:white; background-color:red ;padding:10px; border-radius:5px" class="fa-solid fa-trash-can"></i>
            </button>
          </div>
          <div class="card-body">
          <h3 class="card-title">Abdullah Younis</h3>
            <p class="card-text">
            <h5>abdullah.ibrahim@startnet.com.eg</h5>
            <h5>01000497392</h5>
              </p>
              <p>-Abdullah Younis from New StartNet import & export System integrator. Official Desti. for Legrand and Systemax. if you have any projects that need Legrand or Systimax please tell me. contact: +201000497392 Calling WhatsApp.
                <br>
                Email:
                <br>
                abdullah.ibrahim@startnet.com.eg
                <br>
                Thanks Have A Great Day!
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
@endsection