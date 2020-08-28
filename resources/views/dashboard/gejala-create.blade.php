@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('breadcrump')
<li><a href="{{ url('/') }}">Home</a></li>
<li><a href="{{ url('/dashboard/gejala') }}">Gejala Penyakit</a></li>
<li class="active">Gejala Create</li>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Tambah Data Gejala</strong>
			</div>
			<div class="panel-body">
				@if (session('status'))
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Success!</strong> {{ session('status') }}
					</div>
				@endif
				<form method="post" action="{{route('gejala.store')}}">
					{{ csrf_field() }}
					<div class="col-md-6">
						<div class="form-group">
							<label>Gejala :</label>
							<input type="text" name="nama" class="form-control" required="required" placeholder="Nama gejala..." value="">
						</div>
						<button type="submit" class="btn btn-primary btn-sm">Create</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>