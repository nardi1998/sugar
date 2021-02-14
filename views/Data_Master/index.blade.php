@extends('template.base')

@section('content')

 	<section class="content-header">
      <h1 style="text-align: center; color: black;">
       Data Penduduk kalinilam
      </h1>
  	</section>

  	<section class="content container-fluid">
 			<div class="admin-dashore-data-table-area">
		 		<div class="container-fluid">
		 			<div class="row">
		 				<div class="col-lg-12">
		 					<div class="sparkline8-list shadow-reset">
		 						<div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        
		 							</div>
		 						</div>	
		 							<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveNo" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
		                                <thead>
		                                    <tr>
		                                        <th>Nama Lengkap</th>
		                                        <th class="text-center">Jenis Kelamin</th>
		                                        <th class="text-center">Tempat Lahir</th>
		                                        <th class="text-center">Tanggal Lahir</th>
		                                        <th class="text-center">Agama</th>
		                                        <th class="text-center">Pendidikan <br> Terakhir</th>
		                                        <th class="text-center">Pekerjaan</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($list_penduduk as $key => $penduduk)
												<tr>
													<td>{{$penduduk->nama_lengkap}}</td>
													<td>{{$penduduk->jenis_kelamin}}</td>
													<td>{{$penduduk->tempat_lahir}}</td>
													<td>{{$penduduk->tanggal_lahir}}</td>
													<td>{{$penduduk->agama}}</td>
													<td>{{$penduduk->pendidikan}}</td>
													<td>{{$penduduk->jenis_pekerjaan}}</td>
												</tr>
											@endforeach
										</tbody>
		                            </table>
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
	</section>
 
@endsection
