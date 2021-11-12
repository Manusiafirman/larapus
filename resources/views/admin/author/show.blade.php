 @extends('layouts.admin')
 @section('header')
     <div class="container-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-12">
                     <h1 class="m-0">Show Data Penulis</h1>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="card">
                 <div class="card-header">Data Penulis</div>
                 <div class="card-body">
                     <label for="">Nama Penulis</label>
                     <input type="text" name="name" value="{{ $author->name }}" class="form-control" readonly>
                 </div>
                 <div class="form-group">
                     <a href="{{ url('/author') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                 </div>
             </div>
         </div>
     </div>
 @endsection
