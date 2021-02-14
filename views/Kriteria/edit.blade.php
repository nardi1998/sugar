@extends('template.admin_3')

@section('content')


	<section class="content-header">
	       <h1 style="color: white; text-align: center;">
	        Edit Data Kriteria
	      </h1>
	</section>

	<section class="content container-fluid">
		<form action="{{url('Kriteria/update', $kriteria->id_kriteria)}}" method= "post" >
		@csrf
			<div class="box box-info">
			<div class="box body">
				
				<div class="form-group">
				<label class="label-control">Nama Kriteria</label>
				<input class="form-control" type="text" name="nama_kriteria" value="{{$kriteria->nama_kriteria}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Bobot</label>
				<input class="form-control" type="text" name="bobot" value="{{$kriteria->bobot}}"><br>
				</div>
								
				<div class="form-group">
				<label class="label-control">Atribut</label><br>
				<select name="atribut" id="" class="form-control">
					<option value="Cost" 
					@if($kriteria->atribut == "Cost") selected @endif> Cost</option>
					<option value="Benefit" 
					@if($kriteria->atribut == "Benefit") selected @endif> Benefit</option>
				</select>
				</div>
			

				
				<div class="form-group">
				<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				<button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-repeat"></span>Reset</button>						
				</div>
		</div>
		</div>
		</form
	</section>

@endsection
