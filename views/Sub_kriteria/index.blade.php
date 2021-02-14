@extends('template.admin_3')

@section('content')

 	<section class="content-header">
      <h1 style="text-align: center;">
        Master Data Sub Kriteria
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

  	<section class="content container-fluid">
 			<div class="admin-dashore-data-table-area">
		 		<div class="container-fluid">
		 			<div class="row">
		 				<div class="col-lg-12">
		 					<div class="sparkline8-list shadow-reset">
		 						<div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
		 									<a class="btn btn-primary" href="{{url('Sub_kriteria/create')}}" ><i class="fa fa-plus"> Tambah Data</i></a>
		 								</div>
		 							</div>
		 						</div>	
		 							<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveNo" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
		                                <thead>
		                                    <tr>
		                                        
		                                        <th class="text-center">No</th>
		                                        <th class="text-center">Nama Kriteria</th>
		                                        <th class="text-center">Nama Sub Kriteria</th>
		                                        <th class="text-center">Nilai</th>
		                                        <th class="text-center"> Aksi</th>

		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($list_sub_kriteria as $key => $sub_kriteria)
												<tr>
													<td>{{$key+1}}</td>
													<td>{{$sub_kriteria->kriteria->nama_kriteria}}</td>
													<td>{{$sub_kriteria->nama_sub_kriteria}}</td>
													<td>{{$sub_kriteria->nilai}}</td>
													

													<td class="datatable-ct">

														<a href="{{url("Sub_kriteria/$sub_kriteria->id")}}" class="btn btn-default"><i class="glyphicon glyphicon-check"></i> Lihat</a>

														<a href="{{url("Sub_kriteria/edit/$sub_kriteria->id")}}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</a>

														<a href="{{url("Sub_kriteria/delete/$sub_kriteria->id")}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
	</section>
 
@endsection
