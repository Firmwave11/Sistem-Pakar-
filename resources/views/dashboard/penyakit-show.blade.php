<!-- @extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}">
@endsection -->

<!-- @section('breadcrump')
<li><a href="{{ url('/') }}">Home</a></li>
<li><a href="{{ url('/dashboard/penyakit') }}">Penyakit</a></li>
<li class="active">Penyakit Edit</li>
@endsection -->

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Ubah Data Penyakit</strong>
			</div>
			<div class="panel-body">
				<!-- @if (session('status'))
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Success!</strong> {{ session('status') }}
					</div>
				@endif -->
				<form method="post" action="">
					<!-- {{ csrf_field() }}
					{{ method_field('PATCH') }} -->
					<div class="col-md-6">
						<div class="form-group">
							<label>Nama Penyakit :</label>
							<input type="text" name="nama" class="form-control" required="required" placeholder="Nama dari penyakit..." >
						</div>
						<div class="form-group">
							<label>Penyebab :</label>
							<input type="text" name="penyebab" class="form-control" required="required" placeholder="Penyakit disebabkan oleh..." >
						</div>
						<div class="form-group">
							<label>Definisi Penyakit :</label>
							<textarea name="definisi" class="form-control" rows="5" placeholder="Jelaskan mengenai penyakit ini..."></textarea>
						</div>
						<button type="submit" class="btn btn-primary btn-sm">Save The Change</button>
					</div>
					<div class="col-md-6">						
						<div class="form-group">
							<label>Gejala-gejala yang terjadi :</label>
							
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
<!-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script> -->