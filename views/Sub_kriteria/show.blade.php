@extends('template.admin_3')

@section('content')


<section class="content-header">
       
</section>
 
<section class="content container-fluid">
@csrf
	<div class="box box-info">
		<div class="box body">

		<table id="table" data-toggle="table" data-pagination="true">
		    <thead>
		        <tr>
		            <th>ID Sub Kriteria</th>
		            <th>Nama Kriteria</th>
		            <th>Nama Sub Kriteria</th>
		            <th>Nilai</th>
		            
		        </tr>
		    </thead>

		 	<tbody>
				<tr>
					<td>{{$sub_kriteria->id}}</td>
					<td>{{$sub_kriteria->kriteria->nama_kriteria}}</td>
					<td>{{$sub_kriteria->nama_sub_kriteria}}</td>
					<td>{{$sub_kriteria->nilai}}</td>
					
				</tr>
			</tbody>

		</table>
				
		</div>
	</div>
</section>
@endsection
