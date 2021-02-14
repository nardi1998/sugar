@extends('template.base')

@section('content')

 	<section class="content-header">
      <h1 style="text-align: center; color: black;">
         Data Penerima Bantuan
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
		 							<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveNo" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
		                                <thead style="color: black;">
		                                    <tr>
		                                        <th>No</th>
		                                       	
		                                        <th>Nama Penerima</th>
		                                        <th>Alamat</th>
		                                        <th>Jenis kelamin</th>
											</tr>
		                                </thead>
		                              	<tbody style="color: black;">
		                              		@foreach($ranking->values( ) as $key => $rating_kecocokan)
		                              		<tr>
		                              			<td>{{$key+1}}</td>
		                              			
												<td>{{$rating_kecocokan->penduduk->nama_lengkap}}</td>
												<td>{{$rating_kecocokan->penduduk->alamat}}</td>
												<td>{{$rating_kecocokan->penduduk->jenis_kelamin}}</td>
												
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
