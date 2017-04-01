@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar',['active'=>$active])
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar',['titleTop'=>$titleTop])
@endsection

@section('layanan')

<div class="row">
  <div class="col-xs-12 page-content">

  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary label-lg">
  				<b>Daftar Content</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-danger label-sm"><b>#1</b></span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
							<span class="grey">Kendaraan Masuk</span>
  						</h5>
  						<span class="widget-toolbar no-border">
							<a href="#KM" class="red">
								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
							</a>
  						</span>
  					</div>
  				</div>

  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-warning label-sm">#2</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Daftar Kendaraan</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#DK" style="color: #f89406;">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-info label-sm">#3</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Kendaraan Keluar</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#KK" class="blue">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-success label-sm">#4</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Lapor !!!</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#L" class="green">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary arrowed-in-right label-lg">
  				<b>Introduce</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn btn-danger no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small" style="background-color: #ce968c;">
  						<h5 id="KM" class="widget-title white smaller"><b>Kendaraan Masuk</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon white fa fa-check"></i>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main col-sm-4 col-xs-12">
  							<div style="text-align: justify;">
                  <p>
                    <span class="label-lg alert-danger"><b>1.</b></span>
                    pada menu kendaraan masuk, aplikasi akan menampilkan form pengisian kendaraan masuk dari tiap gedung.
                  </p>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/tampilan_kendaraan_masuk.png')}}" alt="tampilan kendaraan masuk" />
                  <br>
                </div>
              </div>
              <div class="widget-main col-sm-8 col-xs-12">
                <div>
                  <p style="text-align: justify;">
                    <span class="label-lg alert-danger"><b>2.</b></span>
                     Pada tampilan tersebut terlihat pada bagian atas terdapat tab yang bertuliskan tiap gedung yang akan dijadikan tempat parkir. Misalkan anda sebagai petugas di bagian gedung D, maka tekanlah tombol gedung D pada tab yang kemudian anda akan diarahkan kebagian pengisian form untuk parkir di gedung tersebut.
                  </p>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/tab_kendaraan_masuk.png')}}" alt="tab kendaraan masuk" />
                  <p>
                    <h3>
                      <div class="alert alert-danger" style="font-size: 20px;">
                          #petunjuk pengisian
                      </div>
                    </h3>
                    <ol type="1">
                      <li>pilihlah gedung dimana anda ditugaskan</li>
                      <li>masukkan nomor plat kendaraan yang masuk dengan format, contoh: K5944ACC tanpa tanda spasi</li>
                      <li>pilihlah tipe kendaraan yang masuk</li>
                      <li>submit data kendaraan</li>
                    </ol>
                  </p>
                  <p>
                    pada bagian pengisian form juga terdapat sisa kuota/slot sisa parkir yang tersedia
                  </p>
                </div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn btn-warning no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small" style="background-color: #FFB752;">
  						<h5 id="DK" class="widget-title smaller white"><b>Daftar Kendaraan</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon fa fa-check white"></i>
  						</span>
  					</div>
  					<div class="widget-body" >
  						<div class="widget-main col-xs-12 col-sm-6">
  							<p style="text-align: justify;">
                  <span class="label-lg alert-warning"><b>1.</b></span>
                  Pada menu menampilkan informasi semua daftar kendaraan berupa no plat, lokasi kendaraan,
                  jenis kendaraan, waktu masuk dan keluar, dan tombol aksi untuk informasi kendaraan.
                  <br><br>
                </p>
                <div class="alert alert-warning">
                  Pada tampilan gambar dibawah terdapat icon
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/icon.png')}}" />
                </div>
                <div class="alert alert-danger">
                  jika ditekan akan muncul beberapa tombol <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_up.png')}}" alt="icon" />
                </div>
                <div class="alert alert-success">
                  jika icon ditekan dan statusnya sudah keluar <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_ok.png')}}" alt="icon" />
                </div>
              </div>
              <div class="widget-main col-xs-12 col-sm-6">
                <ul class="ace-thumbnails clearfix" >
                  <li style="border: none;">
                    <a target="_blank" class="cboxElement" data-rel="colorbox" href="{{asset('assets/images/daftar_kendaraan_potrait.png')}}">
                      
                      <img class="img-rounded img-responsive" src="{{asset('assets/images/daftar_kendaraan_potrait.png')}}" alt="daftar kendaraan potrait" />
                    </a>
                    <div class="tools tools-bottom">
                      <p class="white"><b>mode potrait pada mobile</b></p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="widget-main col-xs-12 col-sm-12">
                <div class="alert alert-danger">
                  <i class="ace-icon fa fa-quote-left"></i>
                  untuk menampilkan waktu keluar dan waktu masuk, bisa dialihkan rotasi Handphonenya menjadi lanscape
                </div>
                <div class="alert alert-warning">
                  Note: icon tidak akan muncul pada tampilan Desktop. Karena akan langsung ditampilkan semua
                </div>
              </div>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 id="KK" class="widget-title smaller"><b>Kendaraan Keluar</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon fa fa-check blue"></i>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main">
  							<p>
                  Masih pada menu Daftar Kendaraan, pada tampilan daftar kendaraan
                  terdapat icon pencarian.
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/cari.png')}}" alt="cari" />
                  <h3>#petunjuk kendaraan akan keluar</h3><br>
                  <ol type="1">
                    <li>masukkan no plat pada icon pencarian</li>
                    <li>tekan tombol icon berwarna kuning <img class="img-rounded img-responsive" src="{{asset('assets/images/icon.png')}}" alt="icon" /></li>
                    <li>kemudian tekan tanda <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_x.png')}}" alt="icon" /></li>
                    <li>maka otomatis status kendaraan akan sudah keluar dan jam keluarnya</li>
                  </ol>
                  <br><br>
                  <div class="alert alert-info">
                    <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_edit.png')}}" alt="icon" />
                    Icon ini berfungsi untuk mengedit informasi kendaraan misal jika ada kesalahan pada penginputa,
                    tampilannya mirip dengan form kendaraan masuk.
                  </div>
                </p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 id="L" class="widget-title smaller"><b>Lapor !!!</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon fa fa-check blue"></i>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main col-xs-12 col-sm-6">
                
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/lapor.png')}}" alt="icon" />
                <p>
                  Pada menu ini akan menampilkan daftar Lapor dari user pengguna aplikasi
                  <br>
                  <br><br>
                  Pada gambar di atas terlihat bagian informasi judul, nama pelapor, pesan, waktu lapor, dan nomor yang dapat dihubungi.<br>
                  Sebagai petugas parkir anda diwajibkan untuk mengecek menu ini, jika ada laporan kehilangan atau lainnya. <br>
                  Dan jika telah menemukan solusi untuk pelapor atau permintaan dari pelapor, anda bisa menghubungi nomor yang telah dikirimkan.
                </p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
  </div>
</div>
@endsection
