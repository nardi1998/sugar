@extends('template.admin_3')

@section('content')

 	<section class="content-header">
      <h1 style="text-align: center;">
       Data Rating Kecocokan
      </h1>
  	</section><br>
  	<section class="content-header">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-left: 280px;">
		    @if(\Session::has('danger'))
		   <div class="alert alert-danger alert-mg-b alert-success-style4">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
            </button>
                <span class="adminpro-icon adminpro-danger-error admin-check-sucess"></span>
			<b style="text-align: center; margin-left: 140px; font-size: 20px; color: black;">{!!\Session::get('danger')!!}</b>
		   	</div>
		    @endif

		    @if(\Session::has('success'))
			<div class="alert alert-success alert-success-style1">
			<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
				<span class="icon-sc-cl" aria-hidden="true">&times;</span>
			</button>
			    <span class="adminpro-icon adminpro-checked-pro admin-check-sucess"></span>
				<b style="text-align: center; margin-left: 140px; font-size: 20px; color: black;">{!!\Session::get('success')!!}</b>
			</div>
			@endif

			@if(\Session::has('warning'))
			<div class="alert alert-warning alert-success-style3">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
            </button>
                <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
				<b style="text-align: center; margin-left: 140px; font-size: 20px; color: black;">{!!\Session::get('warning')!!}</b>
			</div>
			@endif
		</div>
	</section>

  	
 			<div class="admin-dashore-data-table-area">
		 		<div class="container-fluid">
		 			<div class="row">
		 				<div class="col-lg-12">
		 					<div class="sparkline8-list shadow-reset">
		 						<div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
		 									<a class="btn btn-primary" href="{{url('Rating_Kecocokan/create')}}" ><i class="fa fa-plus"> Tambah Data</i></a>
		 									<a class="btn btn-primary" href="{{url('Rating_Kecocokan/hitung')}}" ><i class="fa fa-calculator"> Hitung</i></a>
		 								</div>
		 							</div>
		 						</div>	
		 							<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveNo" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
		                                <thead>
		                                    <tr>
		                                        <th>No</th>
		                                        <th>NIK</th>
		                                       	<th>Nama Penerima</th>
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
		                                        <th class="text-center">Aksi</th>
											</tr>
		                                </thead>
		                              	<tbody>
		                              		@foreach($list_rating_kecocokan as $key => $rating_kecocokan)
		                              		<tr>
		                              			<td>{{$key+1}}</td>
		                              			<td>{{$rating_kecocokan->penduduk->NIK}}</td>
		                              			<td>{{$rating_kecocokan->penduduk->nama_lengkap}}</td>
												<td>{{$rating_kecocokan->kriteria1}}</td>
												<td>{{$rating_kecocokan->kriteria2}}</td>
												<td>{{$rating_kecocokan->kriteria3}}</td>
												<td>{{$rating_kecocokan->kriteria4}}</td>
												<td>{{$rating_kecocokan->kriteria5}}</td>
												<td>{{$rating_kecocokan->kriteria6}}</td>
												<td>{{$rating_kecocokan->kriteria7}}</td>
												<td>{{$rating_kecocokan->kriteria8}}</td>
												<td>{{$rating_kecocokan->kriteria8}}</td>
												<td>{{$rating_kecocokan->kriteria10}}</td>
												<td>{{$rating_kecocokan->kriteria11}}</td>
												<td>{{$rating_kecocokan->kriteria12}}</td>
												<td>{{$rating_kecocokan->kriteria13}}</td>

												<td>
													<a href="{{url("Rating_Kecocokan/$rating_kecocokan->id_rating_kecocokan")}}" class="btn btn-default"> <i class="glyphicon glyphicon-check"></i> Lihat</a>
													<a href="{{url("Rating_Kecocokan/edit/$rating_kecocokan->id_rating_kecocokan")}}" class="btn btn-warning"><i class=" glyphicon glyphicon-pencil"></i> Edit</a>
													<a href="{{url("Rating_Kecocokan/delete/$rating_kecocokan->id_rating_kecocokan")}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
																
												</td>
		                              		</tr>
		                              		@endforeach
		                              	</tbody>
		                            </table>
		 					</div>
		 					
		 				</div>
		 			</div>
		 		</div>
		 	</div>
	
 
@endsection
