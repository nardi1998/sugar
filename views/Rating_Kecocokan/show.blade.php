@extends('template.admin_3')

@section('content')


<section class="content-header">
      
</section>
 
<section class="content container-fluid">
@csrf
	<div class="box box-info">
		<div class="box body">

		<table id="table" data-toggle="table" data-pagination="false">
		    <thead>
		        <tr>
		            
		            <th>Nama Penerima</th>
		            <th>Penghasilan Kepala Keluarga</th>
		            <th>Jumlah Tanggungan</th>
		            <th>Pendidikan Tertinggi</th>
		            <th>Sumber Penerangan</th>
		            <th>Kondisi Bangunan Rumah</th>
		        </tr>
		    </thead>

		 	<tbody>
				<tr>
					
					<td>{{$rating_kecocokan->penduduk->nama_lengkap}}</td>
					<td>{{$rating_kecocokan->kriteria1}}</td>
					<td>{{$rating_kecocokan->kriteria2}}</td>
					<td>{{$rating_kecocokan->kriteria3}}</td>
					<td>{{$rating_kecocokan->kriteria4}}</td>
					<td>{{$rating_kecocokan->kriteria5}}</td>
				</tr>
			</tbody>

		</table>
				
		</div>
	</div>
</section>
@endsection
