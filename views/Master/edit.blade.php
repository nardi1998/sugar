@extends('template.admin_3')

@section('content')


	<section class="content-header">
	       <h1 style="color: white; text-align: center;">
	        Edit Data Penduduk Kalinilam
	      </h1>
	</section> <br>

	<section class="content container-fluid">
		<form action="{{url('Master/update', $penduduk->NIK)}}" method= "post" >
		@csrf
			<div class="box box-info">
				<div class="box body">
					<div class="form-group">
						<label class="label-control">NIK</label>
							<input class="form-control" type="text" name="NIK" value="{{$penduduk->NIK}}"><br>
					</div>

					<div class="form-group">
						<label class="label-control">Nama Lengkap</label>
							<input class="form-control" type="text" name="nama_lengkap" value="{{$penduduk->nama_lengkap}}"><br>
					</div>
								
					<div class="form-group">
						<label class="label-control">Jenis Kelamin</label><br>
							<select name="jenis_kelamin" id="" class="form-control">
							<option value="Laki-Laki" 
							@if($penduduk->jenis_kelamin == "Laki-Laki") selected @endif> Laki-Laki</option>
							<option value="Perempuan" 
							@if($penduduk->jenis_kelamin == "Perempuan") selected @endif> Perempuan</option>
							</select>
					</div>	

					<div class="form-group">
						<label class="label-control">Alamat</label>
							<input class="form-control" type="text" name="alamat" value="{{$penduduk->alamat}}"><br>
					</div>

					<div class="form-group">
						<label class="label-control">Tempat Lahir</label>
							<input class="form-control" type="text" name="tempat_lahir" value="{{$penduduk->tempat_lahir}}"><br>
					</div>

					<div class="form-group">
						<label class="label-control">Tanggal Lahir</label>
							<input class="form-control" type="date" name="tanggal_lahir" value="{{date("Y-m-d", strtotime($penduduk->tanggal_lahir))}}"><br>
					</div>
				
					<div class="form-group">
						<label class="label-control">Agama</label><br>
						<select name="agama" id="" class="form-control">
						<option value="Islam" 
						@if($penduduk->agama == "Islam") selected @endif> Islam</option>
						<option value="Kristen" 
						@if($penduduk->agama == "Kristen") selected @endif> Kristen</option>
						<option value="Khatolik" 
						@if($penduduk->agama == "Khatolik") selected @endif> Khatolik</option>
						<option value="Hindhu" 
						@if($penduduk->agama == "Hindhu") selected @endif> Hindhu</option>
						<option value="Budha" 
						@if($penduduk->agama == "Budha") selected @endif> Budha</option>
						<option value="Konghuchu" 
						@if($penduduk->agama == "Konghuchu") selected @endif> Konghuchu</option>Konghuchu
						</select>
					</div>
								
					<div class="form-group">
						<label class="label-control">Pendidikan</label><br>
						<select name="pendidikan" id="" class="form-control">
						<option value="Belum Sekolah" 
						@if($penduduk->pendidikann == "Belum Sekolah") selected @endif> Belum Sekolah</option>
						<option value="TK" 
						@if($penduduk->pendidikann == "TK") selected @endif> TK</option>
						<option value="SD" 
						@if($penduduk->pendidikann == "SD") selected @endif> SD</option>
						<option value="SMP" 
						@if($penduduk->pendidikan == "SMP") selected @endif> SMP</option>
						<option value="SMA" 
						@if($penduduk->pendidikan == "SMA") selected @endif> SMA/MA</option>
						<option value="DIII" 
						@if($penduduk->pendidikan == "DIII") selected @endif> DIII</option>
						<option value="DIV" 
						@if($penduduk->pendidikan == "DIV") selected @endif> DIV</option>
						<option value="S1" 
						@if($penduduk->pendidikan == "S1") selected @endif> S1</option>
						<option value="S2" 
						@if($penduduk->pendidikan == "S2") selected @endif> S2</option>
						</select>
					</div>
				
					<div class="form-group">
						<label class="label-control">Jenis Pekerjaan</label>
						<input class="form-control" type="text" name="jenis_pekerjaan" value="{{$penduduk->jenis_pekerjaan}}"><br>
					</div>

					<div class="form-group">
						<label class="label-control">Status Perkawinan</label><br>
						<select name="status_perkawinan" id="" class="form-control">
						<option value="Kawin" 
						@if($penduduk->status_perkawinan == "Kawin") selected @endif> Kawin</option>
						<option value="Belum Kawin" 
						@if($penduduk->status_perkawinan == "Belum Kawin") selected @endif> Belum Kawin</option>
						</select>
					</div>

					<div class="form-group">
						<label class="label-control">Status Hubungan Dalam Keluarga</label><br>
						<select name="status_hubungan_dalam_keluarga" id="" class="form-control">
						<option value="Kepala Keluarga" 
						@if($penduduk->status_hubungan_dalam_keluarga == "Kepala Keluarga") selected @endif> Kepala Keluarga</option>
						<option value="Istri" 
						@if($penduduk->status_hubungan_dalam_keluarga == "Istri") selected @endif> Istri</option>
						<option value="Anak" 
						@if($penduduk->status_hubungan_dalam_keluarga == "Anak") selected @endif> Anak</option>
						</select>
					</div>

					<div class="form-group">
						<label class="label-control">Kewarganegaraan</label><br>
						<select name="kewarganegaraan" id="" class="form-control">
						<option value="WNI" 
						@if($penduduk->kewarganegaraan == "WNI") selected @endif> Warga Negara Indonesia</option>
						<option value="WNA" 
						@if($penduduk->kewarganegaraan == "WNA") selected @endif> Warga Negara Asing</option>
						</select>
					</div>
				
					<div class="form-group">
						<label class="label-control">Nama Ayah</label>
						<input class="form-control" type="text" name="nama_ayah" value="{{$penduduk->nama_ayah}}"><br>
					</div>

					<div class="form-group">
						<label class="label-control">Nama Ibu</label>
						<input class="form-control" type="text" name="nama_ibu" value="{{$penduduk->nama_ibu}}"><br>
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
