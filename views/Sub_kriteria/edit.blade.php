@extends('template.admin_3')

@section('content')


	<section class="content-header">
	       <h1 style="color: white; text-align: center;">
	        Edit Data Sub Kriteria
	      </h1>
	</section>
	<br>

	<section class="content container-fluid">
		<form action="{{url('Sub_kriteria/update', $sub_kriteria->id)}}" method= "post" >
		@csrf
			<div class="box box-info">
			<div class="box body">


				<div class="form-group">
					<label class="label-control">Nama Kriteria</label>
						<select name="id_kriteria" class="form-control">
							@foreach($list_kriteria as $kriteria)
								<option @if($kriteria->id_kriteria == $sub_kriteria->id_kriteria) selected @endif value="{{$kriteria->id_kriteria}}">{{$kriteria->nama_kriteria}}</option>
							@endforeach
						</select>	
				</div>
				
				
				<div class="form-group">
				<label class="label-control">Nama Sub Kriteria</label>
				<input class="form-control" type="text" name="nama_sub_kriteria" value="{{$sub_kriteria->nama_sub_kriteria}}">
				</div>

				<div class="form-group">
				<label class="label-control">Nilai</label>
				<input class="form-control" type="text" name="nilai" value="{{$sub_kriteria->nilai}}">
				</div>
				
				<div class="form-group">
				<button class="btn btn-success">Save</button>
				<button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-repeat"></span>Reset</button>					
				</div>
		</div>
		</div>
		</form>
	</section>

@endsection
