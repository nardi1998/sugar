 @extends('template.admin_3')

 @section('content')



<div class="" role="main">
<div class="row">
    <div class="x_panel">
<div class="col-md-12">
    <div class="panel-body">
        <div class="row">        
            <div class="col-xs-2">
               <img src="{{url('public')}}/images/LOGO.jpg" style="height: 100px" class="img-responsive" > 
            </div>
            <div class="col-xs-8">
                <div class="text-center" style="font-size:25px "><b>PEMERINTAH KABUPATEN KETAPANG</b></div>
                <div class="text-center" style="font-size:25px "><b>KECAMATAN BENUA KAYONG</b></div>
                <div class="text-center" style="font-size:25px "><b>DESA BARU</b></div>
                <div class="text-center" style="font-size:15px ">Alamat : Jln. P. Hidayat II RT.006 RW.002 Kode Pos 78821</div>
            </div>
        </div>
        <hr style="height : 5px; background: black">
        
        <br> 
        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Provinsi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: Kalimantan Barat</div> 
        </div>
        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Kabupaten / Kota</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: Ketapang</div> 
        </div>
        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Kecamatan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: Benua Kayong</div> 
        </div>
        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Desa / Kelurahan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: Baru</div> 
        </div>
        <div class="row">
            <div class="col-xs-2">
            </div>
            <div class="col-xs-8">
                <div class="text-center" style="font-size:20px "><b>SURAT KETERANGAN PINDAH</b></div>
                <div class="text-center" style="font-size:15px ">Nomor : 475/ . . . / 07 / Tapem 2017</div>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12"><strong>DATA DAERAH ASAL</strong></div>
        </div>
        <br>
        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Nomor Kartu Keluarga</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="no_kk" required="required" placeholder="Nomor Kartu Keluarga">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Nama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="nama" required="required" placeholder="Nama">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Tempat Lahir</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="tempat_lahir" required="required" placeholder="Tempat Lahir">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Tanggal Lahir</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="tanggal_lahir" required="required" placeholder="Tanggal Lahir">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Jenis Kelamin</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="jenis_kelamin" required="required" placeholder="Jenis Kelamin">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Agama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="agama" required="required" placeholder="Agama">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Pekerjaan </label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="pekerjaan" required="required" placeholder="Pekerjaan">
            </div>
        </div><br>

        <div class="row">
            <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Alamat </label>
            <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="text" name="alamat" required="required" placeholder="Alamat">
            </div>
        </div><br>

        <br>
        <div class="row">
            
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">Keterangan Lain - lain :</div>
        </div><br>
        <div class="row">
            <label for="" class="control-label col-xs-12"> 1. Yang namanya tersebut diatas sampai pada saat ini masih warga Desa Baru dan tinggal sesuai alamat diatas</label>
        </div><div class="row">
            <label for="" class="control-label col-xs-12"> 2. Surat keterangan ini diberikan kepada yang bersangkutan sebagai persyaratan untuk masuk sekolah di . . . . . . . . . . . . . . . . . . . . . . . . melalui jalur lingkungan dan yang bersangkutan ini benar - benar ingin bersekolah di . . . . . . . . . . . . . . . . .</label>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">Demikian Surat Pengantar ini kami berikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya</div>
        </div>
        <br><br>
        
        <div class="">
                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="col-xs-3">DIKELUARKAN DI : </div>
                </div>

                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="col-xs-3">PADA TANGGAL :</div>
                </div><br>
                
                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="col-xs-3 text-center">Mengetahui,</div>
                </div>

                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="col-xs-3 text-center">KEPALA DESA BARU</div>
                </div>

                <br><br><br>
                <div class="row">
                    <div class="col-xs-9"></div>
                     <div class="col-xs-3 text-center"><u><b>A D N I</b></u></div>
                </div>
        </div>
        
       
        
        
        <div class="col-md-1">
                <button class="btn btn-success pull-right hidden-print" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
</div>  
</div>  
</div>
</div>    
 

@endsection