 @extends('template.admin_3')

 @section('content')



<div class="" role="main">
    <div class="row">
        <div class="x_panel">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">        
                        <div class="col-xs-2">
                            <img src="{{url('public')}}/img/logo.jpg" style="height: 100px" class="img-responsive" > 
                        </div>
                        <div class="col-xs-8">
                            <div class="text-center" style="font-size:25px "><b>PEMERINTAH KABUPATEN KETAPANG</b></div>
                            <div class="text-center" style="font-size:25px "><b>KECAMATAN BENUA KAYONG</b></div>
                            <div class="text-center" style="font-size:25px "><b>DESA BARU</b></div>
                            <div class="text-center" style="font-size:15px ">Alamat : Jln. P. Hidayat II RT.006 RW.002 Kode Pos 78821</div>
                        </div>
                    </div>
                    <hr style="height : 5px; background: black">
                    <div class="row">
                    <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                        <div class="text-center" style="font-size:20px "><b>SURAT PENGANTAR</b></div>
                        <div class="text-center" style="font-size:15px ">Nomor : 474.4/ . . . / Pem</div>
                    </div>
                </div>
                <br> 
                <div class="row">
                    <div class="row no-print hidden-print" style="float: right;">
                        <div class="col-xs-12">
                            <button class="btn btn-primary" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                    </div>
                </div>
                <div class="row">
            </div>
            <br>
       <!--Input Data -->
            <div class="row">
                <div class="col-xs-12">Yang Bertanda tangan dibawah ini Kepala Desa Baru, dengan ini menerangkan bahwa :</div>
            </div>
            <br>
            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> NIK</label>
                <div class="col-md-6 col-sm-6 col-xs-12">: 
                <input type="search" name="NIK" list="list_penduduk" onkeyup="cekNIK(this.value)" required="required" placeholder="NIK" class="">
                <datalist id="list_penduduk">
                    @foreach($list_penduduk as $penduduk)
                        <option value="{{$penduduk->NIK}}"></option>
                    @endforeach
                </datalist>
            </div>
        </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Nama</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                    <input type="text" name="nama_lengkap" id="nama_lengkap" required="required" placeholder="Nama">
                </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Tempat Lahir</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="tempat_lahir" id="tempat_lahir" required="required" placeholder="Tempat Lahir">
                    </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Tanggal Lahir</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" required="required" placeholder="Tanggal Lahir">
                    </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Jenis Kelamin</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" required="required" placeholder="Jenis Kelamin">
                    </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Agama</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="agama" id="agama" required="required" placeholder="Agama">
                    </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Pekerjaan </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="jenis_pekerjaan" id="jenis_pekerjaan" required="required" placeholder="Pekerjaan">
                    </div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Alamat </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">: 
                        <input type="text" name="alamat" id="alamat" required="required" placeholder="Alamat" style="width: 500px;">
                    </div>
            </div><br><br>

            <div class="row">
            </div>
            <br>

            <div class="row">
                <div class="col-xs-12">Keterangan Lain - lain :</div>
            </div><br>

            <div class="row">
                <label for="" class="control-label col-xs-12"> 1. Yang namanya tersebut diatas sampai pada saat ini masih warga Desa Baru dan tinggal sesuai alamat diatas</label>
            </div>
            <div class="row">
                <label for="" class="control-label col-xs-12"> 2. Surat keterangan ini diberikan kepada yang bersangkutan sebagai persyaratan untuk masuk sekolah di . . . . . . . . . . . . . . . . . . . . . . . . melalui jalur lingkungan dan yang bersangkutan ini benar - benar ingin bersekolah di . . . . . . . . . . . . . . . . .</label>
            </div><br>

            <div class="row">
                <div class="col-xs-12">Demikian Surat Pengantar ini kami berikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya</div>
            </div><br><br>
        
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
        </div>
    </div>  
</div>  

    
<!-- ajax memanggil data -->
<script>
    function cekNIK(NIK){
        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#nama_lengkap").val(res.nama_lengkap)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#tempat_lahir").val(res.tempat_lahir)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#tanggal_lahir").val(res.tanggal_lahir)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#jenis_kelamin").val(res.jenis_kelamin)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#agama").val(res.agama)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#jenis_pekerjaan").val(res.jenis_pekerjaan)
            }
        })

        $.ajax({
            url : "{{url('cek-NIK')}}/"+NIK,
            success : function(res){
                console.log(res)
                $("#alamat").val(res.alamat)
            }
        })
    }
</script>

<!-- Akhir -->
 

@endsection