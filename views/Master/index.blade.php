 @extends('template.admin_3')

@section('content')

 	
	<section class="content-header">
      <h1 style="text-align: center;">
        Master Data Penduduk Kalinilam
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
		 						
		 						<div class="mail-title inbox-bt-mg">
                                    <div class="view-mail-action view-mail-ov-d-n" style="margin-top: 46px; margin-right: 440px;">
                                        <a class="btn btn-primary" href="{{url('Master/create')}}"  style="height: 33	px;"><i class="fa fa-plus"> Tambah Data</i></a>   
                                    </div>
                                </div>
		 							<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
		                                <thead>
		                                    <tr>
		                                        <th class="text-center">No</th>
		                                        <th>NIK</th>
		                                        <th>Nama Lengkap</th>
		                                        <th>Jenis Kelamin</th>
		                                        <th>Agama</th>
		                                        <th> Aksi</th>

		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($list_penduduk as $key => $penduduk)
												<tr>
													<td>{{$key+1}}</td>
													<td>{{$penduduk->NIK}}</td>
													<td>{{$penduduk->nama_lengkap}}</td>
													<td>{{$penduduk->jenis_kelamin}}</td>
													<td>{{$penduduk->agama}}</td>
													

													<td>

														<a href="{{url("Master/$penduduk->NIK")}}" class="btn btn-default"><i class="glyphicon glyphicon-check"> Lihat</i></a>

														<a href="{{url("Master/edit/$penduduk->NIK")}}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"> Edit</i></a>

														<a href="{{url("Master/delete/$penduduk->NIK")}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Hapus</i></a>
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


