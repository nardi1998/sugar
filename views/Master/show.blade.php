@extends('template.admin_3')

@section('content')

<section class="content-header">
      
</section>

<section class="content container-fluid">
@csrf
	<div class="box box-info">
		<div class="box body">

		<table class="table table-bordered table-striped">
		    <thead>
		        <tr><td>NIK</td>
		            <td> {{$penduduk->NIK}}</td></tr>
		       <tr><td>Nama Lengkap</td>
		            <td> {{$penduduk->nama_lengkap}}</td></tr>
		        <tr><td>Jenis Kelamin</td>
		            <td>{{$penduduk->jenis_kelamin}}</td></tr>
		        <tr><td>Alamat</td>
		            <td>{{$penduduk->alamat}}</td></tr>
		        <tr><td>Tempat Lahir</td>
		            <td>{{$penduduk->tempat_lahir}}</td></tr>
		        <tr><td>Tanggal Lahir</td>
		            <td>{{$penduduk->tanggal_lahir}}</td></tr>
		        <tr><td>Agama</td>
		            <td>{{$penduduk->agama}}</td></tr>
		         <tr><td>Pendidikan</td>
		            <td>{{$penduduk->pendidikan}}</td></td></tr>
		        <tr><td>Jenis Pekerjaan</td>
		            <td>{{$penduduk->jenis_pekerjaan}}</td></tr>
		        <tr><td>Atatus Perkawinan</td>
		            <td>{{$penduduk->status_perkawinan}}</td></tr>
		        <tr><td>Kewarganegaraan</td>
		            <td>{{$penduduk->kewarganegaraan}}</td></tr>
		        <tr><td>Nama Ayah</td>
		            <td>{{$penduduk->nama_ayah}}</td></tr>
		        <tr><td>Nama Ibu</td>
		            <td>{{$penduduk->nama_ibu}}</td></tr>
		    </thead>
		</table>
				
		</div>
	</div>
</section>
@endsection
