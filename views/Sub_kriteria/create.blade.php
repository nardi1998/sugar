@extends('template.admin_3')


@section('content')

	<section class="content-header">
	      <h1 style="color: white; text-align: center;">
	        Tambah Data Sub Kriteria
	      </h1>
	</section>

    <section class="content container-fluid">
	<form action="{{url('Sub_kriteria/store')}}" method="post" data-toggle="validator" role="form">
		@csrf
			<div class="box box-info">
				<div class="box body">
						

						<div class="form-group">
							<label class="label-control">Nama Kriteria</label><br>
							<select name="id_kriteria" id="" class="form-control" required data-required-error="Pilih Nama Kriteria">
								<option value=""></option>
								@foreach($list_kriteria as $kriteria)
								<option value="{{$kriteria->id_kriteria}}">{{$kriteria->nama_kriteria}}</option>
								@endforeach
							</select>	
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Nama Sub Kriteria</label>
							<input class="form-control" type="text" name="nama_sub_kriteria" required data-required-error="Masukkan Nama Sub Kriteria">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Nilai</label>
							<input class="form-control" type="text" name="nilai" required data-required-error="Masukkan Nilai">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

			<div class="form-group">
				<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save
					</button>
					<button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-repeat"></span>Reset
						<div id="InformationproModalftblack" class="modal modal-adminpro-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                <div class="modal-body">
                                    <span class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro"> </span>
                                    <h2>Informasi</h2>
                                    <p>Reset Data</p>
                                </div>
                                        
                            </div>
                        </div>
       	            </button>					
				</div>
						
			</div>
			</div>
		</form>
    </section>
@endsection
