@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}">
@endsection

<!-- @section('breadcrump')
<li><a href="{{ url('/') }}">Home</a></li>
<li><a href="{{ url('/dashboard/penyakit') }}">Penyakit</a></li>
<li class="active">Tambah Penyakit</li>
@endsection -->

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Tambah Data Penyakit</strong>
			</div>
			<div class="panel-body">
				<!-- @if (session('status'))
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Success!</strong> {{ session('status') }}
					</div>
				@endif -->
				<form method="post" action="{{route('penyakit.store')}}">
                   
                    {{ csrf_field() }}
					
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
						<!-- <button type="submit" class="btn btn-primary btn-sm">Create</button> -->
					</div>
					<div class="col-md-6">						
						<div class="form-group">
							<label>Gejala-gejala yang terjadi :</label>
							<div class="col-md-12">
                            @foreach ($gejalas as $gejala)
									<div class="checkbox">
										<label><input class="check" type="checkbox" name="gejala[]" value="{{ $gejala->id }}">{{ $gejala->name }}</label>
									</div>
								@endforeach
								<script>
									@foreach ($penyakit->gejala as $gejala)
										$('.check[value={{ $gejala->id }}]').attr('checked', true);
									@endforeach()
								</script>
						
							</div>

						</div>

					</div>
					<button type="submit" class="btn btn-primary btn-sm" style="margin-left: 90%;">Create</button>
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