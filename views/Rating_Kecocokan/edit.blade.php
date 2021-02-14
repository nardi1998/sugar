@extends('template.admin_3')

@section('content')


	<section class="content-header">
	       <h1 style="color: white; text-align: center;">
	       <br>
	        Edit Data rating Kecocokan
	      </h1>
	</section> 
	<br>
	<section class="content container-fluid">
		<form action="{{url('Rating_Kecocokan/update', $rating_kecocokan->id_rating_kecocokan)}}" method= "post" >
		@csrf
			<div class="box box-info">
			<div class="box body"> 

				<div class="form-group">
				<label class="label-control">NIK Penerima</label>
				<input class="form-control" type="text" name="NIK" value="{{$rating_kecocokan->NIK}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Nama Penerima</label>
				<input class="form-control" type="text" name="nama_lengkap" value="{{$rating_kecocokan->nama_lengkap}}"><br>
				</div>

				<div class="form-group">
					<label class="label-control">Jenis Kelamin</label><br>
						<select name="jenis_kelamin" id="" class="form-control">
						<option value="Laki-Laki" 
						@if($rating_kecocokan->jenis_kelamin == "Laki-Laki") selected @endif> Laki-Laki</option>
						<option value="Perempuan" 
						@if($rating_kecocokan->jenis_kelamin == "Perempuan") selected @endif> Perempuan</option>
						</select>
					</div>

				<div class="form-group">
				<label class="label-control">Alamat Penerima</label>
				<input class="form-control" type="text" name="alamat" value="{{$rating_kecocokan->alamat}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Penghasilan Kepala Keluarga</label>
				<input class="form-control" type="text" name="kriteria1" value="{{$rating_kecocokan->kriteria1}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Jumalah Tanggungan</label>
				<input class="form-control" type="text" name="kriteria2" value="{{$rating_kecocokan->kriteria2}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Pendidikan Tertinggi</label>
				<input class="form-control" type="text" name="kriteria3" value="{{$rating_kecocokan->kriteria3}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Sumber Penerangan</label>
				<input class="form-control" type="text" name="kriteria4" value="{{$rating_kecocokan->kriteria4}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Kondisi Bangunan Rumah</label>
				<input class="form-control" type="text" name="kriteria5" value="{{$rating_kecocokan->kriteria5}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Sumber Penerangan Rumah</label>
				<input class="form-control" type="text" name="kriteria6" value="{{$rating_kecocokan->kriteria6}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Sumber Air Minum</label>
				<input class="form-control" type="text" name="kriteria7" value="{{$rating_kecocokan->kriteria7}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Bahan Bakar Utama Untuk Memasak</label>
				<input class="form-control" type="text" name="kriteria8" value="{{$rating_kecocokan->kriteria8}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Fasilitas Tempat BAB</label>
				<input class="form-control" type="text" name="kriteria9" value="{{$rating_kecocokan->kriteria9}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Jumlah Tanggungan Kepala Keluarga</label>
				<input class="form-control" type="text" name="kriteria10" value="{{$rating_kecocokan->kriteria10}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Pengeluaran Perbulan</label>
				<input class="form-control" type="text" name="kriteria11" value="{{$rating_kecocokan->kriteria11}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Luas Rumah</label>
				<input class="form-control" type="text" name="kriteria12" value="{{$rating_kecocokan->kriteria12}}"><br>
				</div>

				<div class="form-group">
				<label class="label-control">Luas Tanah Pekarangan</label>
				<input class="form-control" type="text" name="kriteria13" value="{{$rating_kecocokan->kriteria13}}"><br>
				</div>

				
				<div class="form-group">
				<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				<button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-repeat"></span>Reset</button>						
				</div>
		</div>
		</div>
		</form>
	</section>

@endsection
