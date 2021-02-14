@extends('template.admin_3')


@section('content')
 
<br><br>

	<section class="content-header">
	      <h1 style="color: black; text-align: center;" >
	        Tambah Data Penduduk Kalinilam
	      </h1>
	</section><br><br>
 
    <section class="content container-fluid">
	<form action="{{url('Master/store')}}" method="post" data-toggle="validator" role="form">
		@csrf

		<div class="box box-info">
					<div class="box body">
						<div class="form-group">
							<label class="label-control">NIK</label>
							<input class="form-control" type="text" name="NIK" id="example-text-input" required data-required-error="Masukkan Nomor Induk Penduduk">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
							
						</div>
						<div class="form-group">
							<label class="label-control">Nama Lengkap</label>
							<input class="form-control" type="text" name="nama_lengkap" required data-required-error="Masukkan Nama">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>							
						</div>
						<div class="form-group">
							<label class="label-control">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="" class="form-control" required data-required-error="Pilih Jenis Kelamin">
								<option value=""></option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>
						<div class="form-group">
							<label class="label-control">Alamat</label>
							<input class="form-control" type="text" name="alamat" required data-required-error="Masukkan Alamat">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Tempat Lahir</label>
							<input class="form-control" type="text" name="tempat_lahir" required data-required-error="Masukkan Tempat Lahir">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Tanggal Lahir</label>
							<input class="form-control" type="date" name="tanggal_lahir" required data-required-error="Tanggal Lahir Harus Di Isi">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="label-control">Agama</label>
							<select name="agama" id="" class="form-control" required data-required-error="Pilih Agama">
								<option value=""></option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Khatolik">Khatolik</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
								<option value="Konghuchu">Kong Hu Chu</option>
							</select>	
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Pendidikan Terakhir</label>
							<select name="pendidikan" id="" class="form-control" required data-required-error="Pilih Pendidikan Terakhir">
								<option value=""></option>
								<option value="Belum Sekolah">Belum Sekolah</option>
								<option value="TK">TK</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA/MA</option>
								<option value="DIII">DIII</option>
								<option value="DIV">DIV</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Jenis Pekerjaan</label>
							<input class="form-control" type="text" name="jenis_pekerjaan" required data-required-error="Masukkan Jenis Pekerjaan">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						<div class="form-group">
							<label class="label-control">Status Perkawinan</label>
							<select name="status_perkawinan" id="" class="form-control" required data-required-error="Pilih Status Perkawinan">
								<option value=""></option>
								<option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>			
						</div>

						<div class="form-group">
							<label class="label-control">Status Hubungan Dalam Keluarga</label>
							<select name="status_hubungan_dalam_keluarga" id="" class="form-control" required data-required-error="Pilih Status Hubungan Dalam Keluarga">
								<option value=""></option>
								<option value="Kepala Keluarga">Kepala Keluarga</option>
								<option value="Istri">Istri</option>
								<option value="Anak">Anak</option>
							</select>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>			
						</div>


						<div class="form-group">
							<label class="label-control">Kewarganegaraan</label>
							<select name="kewarganegaraan" id="" class="form-control" required data-required-error="Pilih Kewarganegaraan">
								<option value=""></option>
								<option value="WNI">Warga Negara Indonesia</option>
								<option value="WNA">Warga Negara Asing</option>
							</select>	
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>	
						</div>

						<div class="form-group">
							<label class="label-control">Nama Ayah</label>
							<input class="form-control" type="text" name="nama_ayah" required data-required-error="Masukkan Nama Ayah">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="label-control">Nama Ibu</label>
							<input class="form-control" type="text" name="nama_ibu" required data-required-error="Masukkan Nama Ibu">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>     						
						</div>
							
						<div class="form-group">
							<button class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save
							</button>
	                    		
	                    	<button class="btn btn-danger" type="reset"></span>Reset
	       	            	</button>
	       	            </div>				
	            	</div>
				</div>
	</form>
    </section>
@endsection
