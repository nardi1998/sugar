@extends('template.admin_3')


@section('content')


	<section class="content-header">
	      <h1 style="color: white; text-align: center;">
	        Tambah Data Kriteria
	      </h1>
	</section>

    <section class="content container-fluid">
	<form action="{{url('Kriteria/store')}}" method="post" data-toggle="validator" role="form">
		@csrf
			<div class="box box-info">
				<div class="box body">
						
						<div class="form-group">
							<label class="label-control">Nama Kriteria</label>
							<input class="form-control" type="text" name="nama_kriteria" required data-required-error="Masukkan Nama Kriteria">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Bobot</label>
							<input class="form-control" type="text" name="bobot" required data-required-error="Masukkan Bobot">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Atribut</label>
							<select name="atribut" id="" class="form-control" required data-required-error="Pilih Atribut">
								<option value=""></option>
								<option value="Cost">Cost</option>
								<option value="Benefit">Benefit</option>
							</select>	
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div><br>
						</div>

							<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
							<button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-repeat"></span>Reset</button>		
						
				</div>
			</div>
		</form>
    </section>
@endsection
