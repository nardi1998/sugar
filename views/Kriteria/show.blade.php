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
		            <th>ID Kriteria</th>
		            <th>Nama Kriteria</th>
		            <th>Atribut</th>
		            <th>Bobot</th>
		        </tr>
		    </thead>

		 	<tbody>
				<tr>
					
					<td>{{$kriteria->id_kriteria}}</td>
					<td>{{$kriteria->nama_kriteria}}</td>
					<td>{{$kriteria->bobot}}</td>
					<td>{{$kriteria->atribut}}</td>
					
				</tr>
			</tbody>

		</table>
				
		</div>
	</div>
</section>
@endsection
