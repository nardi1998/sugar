@extends('template.admin_3')

@section('content')

 	<section class="content-header">
      <h1 style="text-align: center;">
         Hasil Perengkingan
      </h1>
  	</section><br>

  
 		<div class="admin-dashore-data-table-area">
 			<div class="container-fluid">
 				<div class="row">
 					<div class="col-lg-12">
 						<div class="sparkline8-list shadow-reset">
 							<div class="sparkline8-graph">
 								<div class="datatable-dashv1-list custom-datatable-overright">
 									<div id="toolbar">
 										<!-- <a class="btn btn-primary" href="{{url('Rating_Kecocokan/hitung_1')}}" ><i class="fa fa-user-plus login-icon"> Hitung</i></a> -->
 									</div>
 								</div>
 							</div>
 							<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveNo" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
 								<thead>
 									<tr>
 										<th class="text-center">No</th>
 										<th class="text-center">NIK</th>
 										<th class="text-center">Nama Penerima</th>
 										<th class="text-center">K1</th>
 										<th class="text-center">K2</th>
 										<th class="text-center">K3</th>
 										<th class="text-center">K4</th>
 										<th class="text-center">K5</th>
 										<th class="text-center">K6</th>
 										<th class="text-center">K7</th>
 										<th class="text-center">K8</th>
 										<th class="text-center">K9</th>
 										<th class="text-center">K10</th>
 										<th class="text-center">K11</th>
 										<th class="text-center">K12</th>
 										<th class="text-center">K13</th>
 										<th class="text-center">Nilai Preferensi</th>
 										<th class="text-center">Ket</th>
 										
 									</tr> 
		                        </thead>
		                        <tbody>
		                        	@foreach($ranking->values() as $key => $rating_kecocokan)
		                        	@if(number_format($rating_kecocokan->preferensi,2) > 0.91)
		                           		<tr>
		                              		<td>{{$key+1}}</td>
		                              		<td>{{$rating_kecocokan->penduduk->NIK}}</td>
											<td>{{$rating_kecocokan->penduduk->nama_lengkap}}</td>
											<td>{{number_format($rating_kecocokan->r1,2)}}</td>
											<td>{{number_format($rating_kecocokan->r2,2)}}</td>
											<td>{{number_format($rating_kecocokan->r3,2)}}</td>
											<td>{{number_format($rating_kecocokan->r4,2)}}</td>
											<td>{{number_format($rating_kecocokan->r5,2)}}</td>
											<td>{{number_format($rating_kecocokan->r6,2)}}</td>
											<td>{{number_format($rating_kecocokan->r7,2)}}</td>
											<td>{{number_format($rating_kecocokan->r8,2)}}</td>
											<td>{{number_format($rating_kecocokan->r9,2)}}</td>
											<td>{{number_format($rating_kecocokan->r10,2)}}</td>
											<td>{{number_format($rating_kecocokan->r11,2)}}</td>
											<td>{{number_format($rating_kecocokan->r12,2)}}</td>
											<td>{{number_format($rating_kecocokan->r13,2)}}</td>
											<td>{{number_format($rating_kecocokan->preferensi,2)}}</td>
											<td>Layak</td>
		                              	</tr>

		                            @endif
		                            @if(number_format($rating_kecocokan->preferensi,2) > 0.00 && number_format($rating_kecocokan->preferensi,2) <= 0.91)
		                          	<tr>
		                              		<td>{{$key+1}}</td>
		                              		<td>{{$rating_kecocokan->penduduk->NIK}}</td>
											<td>{{$rating_kecocokan->penduduk->nama_lengkap}}</td>
											<td>{{number_format($rating_kecocokan->r1,2)}}</td>
											<td>{{number_format($rating_kecocokan->r2,2)}}</td>
											<td>{{number_format($rating_kecocokan->r3,2)}}</td>
											<td>{{number_format($rating_kecocokan->r4,2)}}</td>
											<td>{{number_format($rating_kecocokan->r5,2)}}</td>
											<td>{{number_format($rating_kecocokan->r6,2)}}</td>
											<td>{{number_format($rating_kecocokan->r7,2)}}</td>
											<td>{{number_format($rating_kecocokan->r8,2)}}</td>
											<td>{{number_format($rating_kecocokan->r9,2)}}</td>
											<td>{{number_format($rating_kecocokan->r10,2)}}</td>
											<td>{{number_format($rating_kecocokan->r11,2)}}</td>
											<td>{{number_format($rating_kecocokan->r12,2)}}</td>
											<td>{{number_format($rating_kecocokan->r13,2)}}</td>
											<td>{{number_format($rating_kecocokan->preferensi,2)}}</td>
											<td>Tidak Layak</td>
		                              	</tr>
		                            @endif
		                            @endforeach
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	
@endsection
