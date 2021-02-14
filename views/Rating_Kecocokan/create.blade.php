@extends('template.admin_3')


@section('content')


	<section class="content-header">
	      <h1 style="color: white; text-align: center;">
	        Tambah Data Penerima
	      </h1>
	</section>
	<br>
    <section class="content container-fluid">
	<form action="{{url('Rating_Kecocokan/store')}}" method="post" data-toggle="validator" role="form">
		@csrf
			<div class="box box-info"> 
				<div class="box body">
						<div class="form-group">
							<label class="label-control">NIK Penerima</label>
							<input class="form-control" type="search" name="NIK" list="list_penduduk" onkeyup="cekNIK(this.value)" style="width: 1015px; height: 20px;" required data-required-error="Masukkan Nomor Induk Penerima">
							<datalist id="list_penduduk">
								@foreach($list_penduduk as $penduduk)
									<option value="{{$penduduk->NIK}}"></option>
								@endforeach
							</datalist>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Nama Lengkap</label>
							<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" required data-required-error="Masukkan Nama Penerima">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Jenis Kelamin</label>
							<input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin"required data-required-error="Jenis Kelamin Penerima">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Alamat</label>
							<input class="form-control" type="text" name="alamat" id="alamat" required data-required-error="Masukkan Alamat Penerima">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Penghasilan Kepala Keluarga</label><br>
							<select name="kriteria1" id="" class="form-control" required data-required-error="Masukkan Penghasilan Kepala Keluarga">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',1) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Kepemilikian Rumah</label><br>
							<select name="kriteria2" id="" class="form-control" required data-required-error="Masukkan Kepemilikian Rumah">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',2) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Jenis Atap Rumah</label><br>
							<select name="kriteria3" id="" class="form-control" required data-required-error="Masukkan Jenis Atap Rumah">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',3) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Jenis Dinding Rumah</label><br>
							<select name="kriteria4" id="" class="form-control" required data-required-error="Masukkan Jenis Dinding Rumah">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',4) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Jenis Lantai Rumah</label><br>
							<select name="kriteria5" id="" class="form-control" required data-required-error="Masukkan Jenis Lantai Rumah">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',5) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Sumber Penerangan Utama</label><br>
							<select name="kriteria6" id="" class="form-control" required data-required-error="Masukkan Sumber Penerangan Utama">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',6) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Sumber Air Minum</label><br>
							<select name="kriteria7" id="" class="form-control" required data-required-error="Masukkan Sumber Air Minum">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',7) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Bahan Bakar Utama Untuk Memasak</label><br>
							<select name="kriteria8" id="" class="form-control" required data-required-error="Masukkan Bahan Bakar Utama Untuk Memasak">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',8) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Fasilitas Tempat Buang Air Besar</label><br>
							<select name="kriteria9" id="" class="form-control" required data-required-error="Masukkan Fasilitas Tempat Buang Air Besar">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',9) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Jumlah Tanggungan Kepala Keluarga</label><br>
							<select name="kriteria10" id="" class="form-control" required data-required-error="Masukkan Jumlah Tanggungan Kepala Keluarga">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',10) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Pengeluaran Perbulan</label><br>
							<select name="kriteria11" id="" class="form-control" required data-required-error="Masukkan Pendidikan Tertinggi Penerima">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',11) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Luas Rumah</label><br>
							<select name="kriteria12" id="" class="form-control" required data-required-error="Masukkan Luas Rumah Penerima">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',12) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Luas Tanah Pekarangan</label><br>
							<select name="kriteria13" id="" class="form-control" required data-required-error="Masukkan Luas Tanah Pekarangan Penerima">
								<option value="">  </option>
								@foreach($list_sub_kriteria->where('id_kriteria',13) as $sub_kriteria)
								<option value="{{$sub_kriteria->nilai}}">{{$sub_kriteria->nama_sub_kriteria}}</option>
								@endforeach
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>
						
						<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save
							 
						</button>
						<button class="btn btn-default"><span class="glyphicon glyphicon-repeat"></span>Reset
						</button>			
						
				</div>
			</div>
		</form>
    </section>
    <script>
    function cekNIK(NIK){
        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#nama_lengkap").val(res.nama_lengkap)
            }
        })
		$.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#jenis_kelamin").val(res.jenis_kelamin)
            }
        })
        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#alamat").val(res.alamat)
            }
        })
    }
	</script>
@endsection
